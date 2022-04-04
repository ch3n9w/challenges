#!/usr/bin/env node
const express = require('express')
const session = require('express-session')
const crypto = require('crypto')
const puppeteer = require('puppeteer')

const app = express()
const users = new Map()
const notes = new Map()
const rand = _ => crypto.randomBytes(Math.ceil(0x20/2)).toString('hex').slice(0,0x20);
const flag = process.env.FLAG || 'flag{fake-flag}'
const reportIpsList = new Map()
const now = ()=>Math.floor(+new Date()/1000)

app.use(session({
  secret: crypto.randomBytes(32).toString("base64"),
  resave: false,
  saveUninitialized: true,
  cookie: { sameSite: 'strict'}
}))
app.use(express.urlencoded({ extended: true }));
app.set("view engine", "ejs");
app.use(express.static('public'));
app.use((req,res,next)=>{
	res.setHeader('X-Content-Type-Options','nosniff')
	next()
})

app.get('/',(req,res)=>{
	if(!req.session.username)
		return res.redirect('/login')

	let q  = (req.query.search || '').toString()
	let userNotes = users.get(req.session.username).notes
	let foundNote = userNotes.find(e=>notes.get(e.id).includes(q))
	if(!foundNote)
		foundNote = {}
	else
		foundNote = {"title": foundNote.title, "id": foundNote.id}
	let result = `{"search":{"result": ${JSON.stringify(foundNote)}, "term": "${q}"}, "all": ${JSON.stringify(userNotes)}}`
	result = result.replace(/</g, "&lt;")
	result = result.replace(/>/g, "&gt;")
	res.render('index',{ data: result })
})

app.post('/note',(req,res)=>{
	if(!req.session.username)
		return res.redirect('/login')

	let rTitle = req.body.title
	let rContent = req.body.content

	if(!rTitle || !rContent)
		return res.redirect('/')

	rTitle = rTitle.toString().slice(-0x30)
    console.log(rTitle)
	rContent = rContent.toString().slice(-0x200)
    console.log(rContent)

	let noteId = rand()
	let u = users.get(req.session.username) 

	if(u.notes.length >= 10)
		return res.redirect('/')

	notes.set(noteId,rContent)
	u.notes.push({
		title: rTitle,
		id: noteId
	})

	return res.redirect('/')
})

app.get('/note/:noteid',(req,res)=>{
	if(!req.session.username)
		return res.redirect('/login')

	let u = users.get(req.session.username) 
	let note = notes.get(req.params.noteid)

	if(!note)
		return res.status(404).send("Not found")

	res.type('text/plain')
	res.send(note)
})

app.get('/report',(req,res)=>{
	res.render('report',{ url: `http://${req.headers['host']}`})
})

app.post('/report',async (req,res)=>{
	res.setHeader("Content-Type","text/plain")
	if(typeof req.body.url != "string" || !/^https?:\/\//.test(req.body.url)) return res.send("Bad url!")

	if(reportIpsList.has(req.ip) && reportIpsList.get(req.ip)+50 > now()){
		return res.send(`Please comeback ${reportIpsList.get(req.ip)+50-now()}s later!`)
	}
	reportIpsList.set(req.ip,now())

	const browser = await puppeteer.launch({ 
		executablePath: '/usr/bin/google-chrome',
		args: [
			'--no-sandbox',
			'--disable-dev-shm-usage'
		],
	})

	var page = await browser.newPage()

	await page.goto('http://localhost:8000/login')
	await page.waitForSelector("#usernameField");
	await page.type("#usernameField", rand());
	await page.type("#passwordField", rand());
	await page.click("#submitbtn")

	var cookie = {
        name: "flag",
        value: flag,
        domain: "localhost:8000",
        path: "/",
        expires: Date.now() + 3600 * 1000
    };
    await page.setCookie(cookie);
	await page.close()

	page = await browser.newPage()
	res.send("Admin is visiting your url...")

	try{
		await page.goto(req.body.url,{
			timeout: 2000
		})
		await new Promise(resolve => setTimeout(resolve, 30e3));
	} catch(e){}
	await page.close()
	await browser.close()
})

app.get('/login',(req,res)=>{
	if(req.session.username)
		return res.redirect('/')
	res.render('login',{ error: null })
})

app.post('/login',(req,res)=>{
	let rUsername = req.body.username
	let rPassword = req.body.password

	if(req.session.username)
		return res.redirect('/')

	if(!rUsername || !rPassword)
		return res.render('login',{ error: "Bad params"})

	rUsername = rUsername.toString().trim().slice(-0x30)
	rPassword = rPassword.toString().trim().slice(-0x30)

	if(rUsername.length < 5 || rPassword.length < 5)
		return res.render('login',{ error: "Username and password should be longer than 5 characters"})

	let u = users.get(rUsername)
	if(u){
		if(u.password != rPassword)
			return res.render('login',{ error: "Wrong password"})
		req.session.username = rUsername
		return res.redirect('/')
	} else {
		users.set(rUsername,{
			password: rPassword,
			notes: []
		})
		req.session.username = rUsername
		return res.redirect('/')
	}
})

app.listen(8000,()=>console.log("Listening..."))
