#!/usr/local/bin/node
/* the above line (must be the first line) enables apache to execute this program */

var querystring = require('querystring');
var param = querystring.parse(process.env.QUERY_STRING);
var name=require('./name.json');
/* return header to browser */
console.log('Content-type: text/html; charset=utf-8\n');

if(name[param.id]==undefined){
    console.log('<h1>who are you<h1>');
}

/* return normal HTML content */
console.log('<h1>Hello,'+' your must be '+name[param.id]+'</h1>'); 
