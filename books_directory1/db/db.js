const mysql = require('mysql');

var connection = mysql.createConnection({
    host     : 'localhost',
    user     : 'root',
    password : '',
    database : 'node_book_dir'
  });
   
 var con =  connection.connect();

  module.exports = {  con  }