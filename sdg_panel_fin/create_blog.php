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
<title>Create Blog</title>

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
					<h2>Create New Blog</h2>
					<p>_________________________________________________________

					__________________________________________</p>

			<?php
					$qry=mysql_query("SELECT * FROM category", $con);
				if(!$qry)
					{
						die("Query Failed: ". mysql_error());
					}
			?>

		<form action="blog_created.php" method="post" enctype="multipart/form-data" name="form1" id="form1">
				<p>Blog position :&nbsp;&nbsp;&nbsp;
					<select name="category" id="category">
					<?php
						while($row=mysql_fetch_array($qry))
							{
								echo "<option value='".$row['category']."'>".$row['category']."</option>";
							}
					?>
					</select>
				</p>

				<p>Title :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<label for="title"></label>
					<input type="text" name="title" id="title" />
				</p>

				<p>Name :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<label for="name"></label>
					<input type="text" name="name" id="name" />
				</p>

				<p>Author Name :&nbsp;&nbsp;
					<label for="author_name"></label>
					<input type="text" name="author_name" id="author_name" />
				</p>

				<p>Author Image :&nbsp; 
					<label for="author_image"></label>
					<input type="file" name="author_image" id="author_image" />
				</p>

				<p>Image :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  
					<label for="image"></label>
					<input type="file" name="image" id="image" />
				</p>

				<p>Story :&nbsp; 
					<label for="story"></label>
					<textarea name="story" cols="100" rows="12" id="story"></textarea>
				</p>

				<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;


					<input type="submit" name="button" id="button" value="Submit" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
					<input type="reset" name="button3" id="button3" value="Reset" />
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