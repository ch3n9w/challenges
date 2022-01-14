const express = require('express');
const bodyParser = require('body-parser');
const proc = require('child_process');
const request = require('request');
const ip = require("ip");
const manage = require("./manage.js");
const path = require('path');

const app = express();
app.use(bodyParser.urlencoded({ extended: true }));
app.use(bodyParser.json());

app.use(express.static(path.join(__dirname, 'public')));

//stop hackers
const disallowedKeys = [
	'__proto__',
	'prototype',
    'constructor',
];

const disallowedValue = [
    'require','child_proccess','exec'
]

function isValidPath(segment){
    let check = false;

    if(typeof segment === "object"){
        let userInput = JSON.stringify(segment)

        disallowedValue.forEach((ivalue)=>{
            if(userInput.includes(ivalue)){
                check = true;
            }
        })

    }else if(typeof segment === "string"){
        let userInput = segment.split('.');
        userInput.forEach((ipath) => {
            if(disallowedKeys.includes(ipath)){
                check = true;
            }
        })
    }

    if(check){
        return false
    }else {
        return true;
    }
}

app.post('/add', (req, res) => {
    let ip = req.ip;
    if (ip.substr(0, 7) == "::ffff:") {
        ip = ip.substr(7)
    }
    console.log(`method:${req.method},serverip:${server_ip},ip:${ip}`);

    if (ip != '127.0.0.1' && ip != server_ip) {
        res.status(403).send('Not Edit from Local!');
    }else{
        if(req.body.userName && req.body.nameVal){
            let username = req.body.userName;
            let nameVal = req.body.nameVal;

            if (!isValidPath(username) || !isValidPath(nameVal)) {
                username = 'username';
                nameVal = 'guest';
            }

            manage.set(object, username, nameVal);

            res.send(`
            <h1>Edit Success</h1>
            <a href="/admin">View Admin Page</a>`)
        }else{
            res.send('param error');
        }
    }
});

app.get('/admin',(req,res)=>{

    if(manage.get(object,'username','guest') === 'admin'){
        console.log('Welcome,Current User:'+object.username)
        try{
            const child = proc.fork(`${__dirname}/public/user.js`,['admin']);
            child.on('message', (body) => {
                res.status(200).send(body);
            });
            child.on('close', (code, signal) => {
                console.log(`subproccess ended with ${signal}`);
            });

        }finally{
            manage.set(object,'username','guest')
        }
    }else{
        res.status(403).send('Only Admin Can View this');
    }
})

app.get('/getContent',(req,res)=>{
    res.sendfile(`${__dirname}/public/guest.html`);
})

app.get('/', (req,res) => {
    let uri = req.query.url? req.query.url: 'http://127.0.0.1:3000/getContent';

    try{
        request.get(uri,(err,response,data)=>{
            if (!err && response.statusCode == 200) {
                res.send(data);
            }else{
                console.log(err);
            }
        })
    }catch(e){
        console.log(e);
    }finally{
        console.log('Make Server Continue Running');
    }

});

var object = {username:'guest'};
var server_ip = ip.address();


app.listen(3000);
console.log(`${server_ip} is starting at port 3000`)
