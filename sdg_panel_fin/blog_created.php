<?php
include("includes/session.php");
?>
			<?php
					//$image_folder="../images";
					//$name=$_FILES['image']['name'];
					/*$tmp=$_FILES['image']['tmp_name'];
					$err=$_FILES['image']['error'];
					if($err==0)
					{
					move_uploaded_file($tmp,  $image_folder."/".$name);
					}*/

					$upload_image=$_FILES["image"]["name"];  //image name

					$folder="images/";  // folder name where image will be store

					move_uploaded_file($_FILES["image"]["tmp_name"], "$folder".$_FILES["image"]["name"]);

					$author_folder="authors/";

					$tit=$_POST['title'];
					$name=$_POST['name'];
					$author_name=$_POST['author_name'];
					$img=$_FILES["image"]["name"];
					/*AUTHOR IMAGE*/
					$author_image=$_FILES["author_image"]["name"];
					move_uploaded_file($_FILES["author_image"]["tmp_name"], "$author_folder".$_FILES["author_image"]["name"]);

					$story=$_POST['story'];
					$category=$_POST['category'];
			?>

<?php
include("includes/confi.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Blog Created</title>
<style type="text/css">
</style>
<link href="admin_style.css" rel="stylesheet" type="text/css" />
<script src="js/jquery.min.js"></script>
</head>

<body>
<div id="hold">
<div id="top">
<h2 align="center">CONTENT MANAGEMENT SYSTEM ADMINISTRATION PANEL</h2>
</div>
<div id="log"></div>
<div id="work_area">
<?php
$img="images/".$img;
$qry=mysql_query("INSERT INTO 
	blog(category,title,name,author_name,author_image,author_folder,image_name,image_folder,story) 
	VALUES('$category','$tit','$name','$author_name','$author_image','$author_folder','$upload_image','$folder','$story')", $con);

if(!$qry)
{
die("Query Failed: ". mysql_error());
}
else
{
echo "<br/>";
echo "Blog Added Successfully";
echo "<br/>";
}
?>
<a href=admin_panel.php>Go back to Admin Panel</a>
</div>
</div>





</body>
</html>