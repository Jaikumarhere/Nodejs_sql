const express = require('express');
const app = express();

const session = require("express-session");
app.use(session({
    secret:'secret',
    resave:true,
    saveUninitialized:true
}));

const bodyParser = require("body-parser");
app.use(bodyParser.urlencoded({extended:true}));
app.use(bodyParser.json());

//const logdata = require('./routes/routes');
//app.use(logdata.router)

app.get('/',(req,res)=>{

    res.send('123');

    //res.sendFile(path.join(__dirname + '/login.html'));
})

app.listen(123, function () {  
    console.log('Server is running..123');  
    });