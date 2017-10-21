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
<title>Admin Panel</title>

	<style type="text/css">
	#hold #log {
	color: #156390;
	}
	</style>

<link href="admin_style.css" rel="stylesheet" type="text/css" />
</head>

<body>
		<div id="hold">
			<div id="top">
				<h2 align="center">CONTENT MANAGEMENT SYSTEM ADMINISTRATION PANEL</h2>
			</div>

		<div id="log">
			<?php
				echo "Welcome ";
				echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
				echo "<a href=logout.php>Logout</a>";
			?>
		</div>

		<div id="left">
			<a href=new_category.php >Create Category</a><br/>
			<!-- <a href=remove_category.php >Remove a Category</a><br/>-->
			<a href=create_blog.php >Create New Blog</a><br/>
			<a href=admin_panel.php?id=viewall target="_blank">View all Products</a><br/><br/>
		</div>

<!-- View All Products -->
		<div id="right">

    <?php
		if(isset($_GET['id'])=="viewall")
			{
				$qry=mysql_query("SELECT * FROM blog order by id DESC ", $con);
				if(!$qry)
					{
						die("Query Failed: ". mysql_error());
					}
						echo "<b>All Products</b>";
						echo "<table>";
						/* Fetching data from the field "title" */
					while($row=mysql_fetch_array($qry))
						{
							echo "<tr>";
							echo "<td>".$row['id']."</a></td>";
							echo "<td>".$row['title']."</a></td>";
							echo "<td><a href=edit_blog.php?id=".$row['id'].">edit</a></td>";
							echo "<td><a href=deleting_blog.php?id=".$row['id'].">delete</a></td>";
							echo "</tr>";
						}
							echo "</table>";
			}
	?>
 
</div>



</div>
</body>
</html>