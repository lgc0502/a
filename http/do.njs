#!/usr/local/bin/node
/* the above line (must be the first line) enables apache to execute this program */

var querystring = require('id');
var param = querystring.parse(process.env.QUERY_STRING);

/* return header to browser */
console.log('Content-type: text/html; charset=utf-8\n');

/* return normal HTML content */
console.log('<h1>Hello,'+' your must be '+param.name+'</h1>'); 
