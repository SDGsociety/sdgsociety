<?php
include("includes/session.php");
?>

<?php
include("includes/confi.php");
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>New Category</title>
<style type="text/css">
</style>
<link href="admin_style.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div id="hold">
<div id="top">
<h2 align="center">CONTENT MANAGEMENT SYSTEM ADMINISTRATION PANEL</h2>
</div>
<div id="log"></div>
<div id="work_area">
<h2>Blog Position
</h2>
<p>_______________________________________________________

____________________________________________</p>

<?php
$qry=mysql_query("SELECT category FROM category group by category", $con);
if(!$qry)
{
die("Query Failed: ". mysql_error());
}
?>

<form id="form1" name="form1" method="post" action="category_created.php">
	Enter Category in number(1/2/3) : 
	<label for="cat"></label>
	<input type="text" name="cat" id="cat" /><br><br>
	<input type="submit" name="submit" id="submit" value="Submit" />
</form>
</div>
</div>
</body>
</html>