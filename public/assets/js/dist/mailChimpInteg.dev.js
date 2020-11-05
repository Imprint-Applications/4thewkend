"use strict";

//MailChimp API Integration
var unique = require('uniq');

var express = require('express');

var request = require('request');

var bodyParser = require('body-parser');

var path = require('path');

var app = express(); //Middleware

app.use(express.json());
app.use(bodyParser.urlencoded({
  extended: false
}));
app.use(express["static"](path.join(__dirname, 'public')));
app.post('/subscribe', function (req, res) {
  // console.log('hey!');
  var _req$body = req.body,
      email = _req$body.email,
      js = _req$body.js;
  console.log(req.body);
});
var PORT = process.env.PORT || 5000;
app.listen(PORT, console.log('Server Started!'));