const { con } = require('../db/db');

const express = require('express');
const router = express.Router();


router.get('/',(req,res)=>{

    res.send('Hello');

    //res.sendFile(path.join(__dirname + '/login.html'));
})


module.exports = {  router:router   }