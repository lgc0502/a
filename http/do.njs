#!/usr/local/bin/node
/* the above line (must be the first line) enables apache to execute this program */
console.log('Content-type: text/html; charset=utf-8\n');

var querystring = require('querystring');
var param = querystring.parse(process.env.QUERY_STRING);
param = { json: 'name2.json', id: 'F74046404' };
var name=require('./'+param.json);

if(name[param.id]==undefined){
    console.log('<h1>who are you?<h1>');
}

console.log('<h1>Hello,'+' your must be <font color=blue>'+name[param.id]+'</font></h1>');
