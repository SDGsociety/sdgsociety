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

function connect()
{
  $host = 'localhost';  
  $user = 'root';  
  $pass = 'sample';  
  $dbname = 'sdg';  
  

  $conn = mysqli_connect($host, $user, $pass, $dbname); 

  if($conn==0)
    die("fatal error".mysql_error());

  return $conn;
}


function display($sql)
{
  $conn=connect();
  $data=0;
  $result= $conn->query($sql);
  return $result;
}

function displayresult($result){
	if($result->num_rows > 0)
    {
        while($row = $result->fetch_assoc())
        {?>
            <p style="color: BLACK">Title:
            <?php echo $row["title"] ?></p><br>
            <p style="color: BLACK">Name:
            <?php echo $row["name"] ?></p><br>
            <p style="color: BLACK">Author Name:
            <?php echo $row["author_name"] ?></p><br>
            <img src="<?php echo $row['author_folder']; ?><?php echo $row['author_image']; ?>" alt="<?php echo $row["author_name"]; ?>" height="200" width="360"><br>
            <?php echo $row["author_image"] ?><br>
            <img src="<?php echo $row['image_folder']; ?><?php echo $row['image_name']; ?>" alt="<?php echo $row["image_name"]; ?>" height="300" width="480"><br>
            <p style="color: BLACK">Story:<br>
            <?php echo $row["story"] ?></p><br>
  <?php }
    }
}

?>
