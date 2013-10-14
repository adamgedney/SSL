<?php

myMonths = ['jan', 'feb', 'march'];
"10-10-13 12:00:00gmt"
myMonths[10];



Pagination
//set up limit numbers as arguments in CRUD function to handle pagination.
SELECT * FROM people LIMIT 0,1;



//loop in angular.js & coldfusion
<div id="angloop">
	{{name}}
</div>



change getViews to getC0ntrollers
only thing in index.php is this instance and command to include controller

mySQLi    look up the difference betweeen this and PDO

//run right after a fetchAll() to count rows
$st->rowCount();


$myArray = explode($type, ',');
foreach($myArray){
	
}
explode is a php string function = to spit


//10/12/13

SAlting hashing sessions
//md5 hashing algorithm
//sha1 & sha2 are other hashing algorithms

$str = 'apple';
$salt = 'mysecretpassword';

//without salting
if(md5($str) === '13048135024tgrwsgsz813501835018375'){
	echo "valid user";
}

//with salting
if(md5($salt.$str) === 'sdlkghsdlghsdgsdgsgsdgsdgwrt4524655'){
	echo "valid user";
}

//before using a session you have to start a session
//only one per page
session_start();
echo "welcome page 1";
//session variable. Use as many as youd like. You can store page info and values for a session
$_SESSION['favcolor'] = 'green'; //color is good for saving user preferences
$_SESSION['animal'] = "cat";
$_SESSION['time'] = time();//tracks how long a user is on site

//Cookies & sessions are different
//cookies are killed once browser is closed

//check coldfusion sessions with Application.cfc






































?>