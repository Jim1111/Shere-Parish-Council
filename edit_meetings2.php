<?php
	require_once('auth.php');
?>

<?php include("header.php"); ?>

<div id="content">

<div class="box2">
  <div class="boxhead">Thank you</div>
  <div class="main">

<?php

include("inc/dbconnect.php");


//$target = "meetings/"; $target = $target . basename( $_FILES['meeting']['name']);

$title=$_POST['title'];

$id=$_GET['Id'];

$date=$_POST['Date'];

//$meeting=($_FILES['meeting']['name']);

$sql2 = "UPDATE `meetings` SET title='$title', Date='$date' WHERE minutesId='$id'" ;

//echo $sql2;

//if(move_uploaded_file($_FILES['meeting']['tmp_name'], $target)) { echo "<p>The file ". basename( $_FILES['uploadedfile']['name']). " has been uploaded, and your information has been added to the Meetings page.</p>"; } else { echo "<p>Sorry, there was a problem uploading your file.</p>"; } 

mysql_query($sql2) or die("Couldn't add file to database");

mysql_close($con);

?>

 <p align='center'><a href="admin.php">Admin</a></p>

<hr>

 <p align='center'><a href="logout.php">Log Out</a></p>

</div>
</div>
</div>

  <!--end of div-->
  </div>
  <!--end-->

<?php include("footer.php"); ?>










