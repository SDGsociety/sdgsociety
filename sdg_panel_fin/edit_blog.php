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
<title>Edit blog</title>
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
if(isset($_GET['id']))
{
$id=$_GET['id'];
$qry=mysql_query("SELECT * FROM blog WHERE id=$id", $con);
if(!$qry)
{
die("Query Failed: ". mysql_error());
}

                /* Fetching data from the field "title" */
$row=mysql_fetch_array($qry);

//echo $row['id'];
//echo $row['category'];
//echo $row['title'];
//echo $row['image'];
//echo $row['contents'];

}


?>

<p>PLEASE UPLOAD AUTHOR IMAGE AND ARTICLE IMAGE AGAIN</p>
<form action="blog_edited.php" method="post" enctype="multipart/form-data" name="form1" id="form1">
<p>Product Id &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:
<input type="text" name="id" id="idd" value="<?php echo $row['id']; ?>" />
Don't Touch This!!</p> 
<p>Category &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: 
<label for="cat"></label>
<input type="text" name="category" id="category" value="<?php echo $row['category']; ?>" />
Change only between 0/1/2/3</p> 

<p>Title &nbsp;&nbsp;: 
<label for="title"></label>
<input type="text" name="title" id="title" value="<?php echo $row['title']; ?>" />
</p>

<p>Name &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: 
<label for="name"></label>
<input type="text" name="name" id="name" value="<?php echo $row['name']; ?>" />
</p>

<p>Author Name &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: 
<label for="author_name"></label>
<input type="text" name="author_name" id="author_name" value="<?php echo $row['author_name']; ?>" />
</p>

<p>Author Image&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : 
<label for="author_image"></label>
<input type="file" name="author_image" id="author_image" />
(Upload New Image only is there is a change in the existing image)
</p>

<p>Image&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : 
<label for="image"></label>
<input type="file" name="image" id="image" />
(Upload New Image only is there is a change in the existing image)
</p>

<p>Story &nbsp;&nbsp;&nbsp;: 
<label for="story"></label>
<textarea name="story" id="story" cols="50" rows="10" ><?php echo $row['story']; ?></textarea>
</p>

<p align="center">
<input type="submit" name="Submit" id="Submit" value="Submit" />
</p>

</form>
</div>
</div>


<script type="text/javascript">
	
$("#contents").on('keydown', function(e) {
    var code = e.keyCode || e.which;
      if(code == 13) { //Enter keycode
       event.preventDefault();
       var s = $(this).val();
       $(this).val(s+"<br>");
      }     
 });
	
</script>




</body>
</html>