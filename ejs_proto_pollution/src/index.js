const express = require("express");
const ejs = require('ejs')

const app = express();

app.use((req, res, next) => {
  res.setHeader("connection", "close");
  next();
});
app.use(express.urlencoded({ extended: true }));

app.set('json escape',true)
app.set('views', './views');
app.set('view engine', 'ejs')

const UNSAFE_KEYS = ["__proto__", "constructor", "prototype"];
const merge = (obj1, obj2) => {
  for (let key of Object.keys(obj2)) {
    if (UNSAFE_KEYS.includes(key)) {
      console.log("CAUTION:: someone trys dangerous words.")
      continue;
    }
    const val = obj2[key];
    key = key.trim();
    if (typeof obj1[key] !== "undefined" && typeof val === "object") {
      obj1[key] = merge(obj1[key], val);
    } else {
      obj1[key] = val;
    }
  }
  return obj1;
};

app.post("/", async (req, res) => {
  const reqFilter = req.body;
    console.log(req.body);
  const filter = {};
  merge(filter, reqFilter);
    console.log(filter.__proto__);
  res.render('index');
});

app.get("/", async (req, res) => {
  res.render('index');
});

app.listen(8005, () => {
  console.log(`Listening on http://localhost:8005`);
});
