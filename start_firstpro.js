var express = require('express');
var app = express();
var ejs = require('ejs');

var users = ['geddy', 'neil', 'alex'];

app.use(express.static('public'));

app.set('view engine', 'ejs');

app.get('/indextest', function(req, res) {
    res.render('index');
});

/*
app.get('/', function (req, res) {
  res.send('Hello World!');
});
*/


app.listen(1337, function () {
  console.log('Example app listening on port 1337!');
});


