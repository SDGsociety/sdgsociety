<?php
/*
connecting to mysql database
hostname : localhost
username : root
password : root
*/
$con = mysql_connect("localhost","root","sample");
if(!$con)
{
die("connection to database failed".mysql_error());
}

/* selecting the database "sdg" */
$dataselect = mysql_select_db("sdg",$con);
if(!$dataselect)
{
die("Database name list not selected".mysql_error());
}
?>