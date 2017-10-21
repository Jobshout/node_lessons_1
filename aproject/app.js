var express = require('express')
  , stylus = require('stylus')
  , nib = require('nib')
  , pug = require('pug')
  

var app = express()
function compile(str, path) {
  return stylus(str)
    .set('filename', path)
    .use(nib())
}
app.set('views', __dirname + '/views')
app.set('view engine', 'jade')
app.use(express.logger('dev'))
app.use(stylus.middleware(
  { src: __dirname + '/public'
  , compile: compile
  }
))
app.use(express.static(__dirname + '/public'))

/*
app.get('/', function (req, res) {
  res.end('Hi Ketan, Welcome to NODE')
})
*/

//	database connection start

var mysql      = require('mysql');
var connection = mysql.createConnection({
  host     : 'localhost',
  user     : 'root',
  password : '',
  database : 'mydb'
});
 
connection.connect();
 
 
connection.end();			

// database connection end 


app.get('/', function (req, res) {
  res.render('index',
  { title : 'Home' }
  )
})

app.listen(3000)
