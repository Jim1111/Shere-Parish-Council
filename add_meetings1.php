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


$target = "meetings/"; $target = $target . basename( $_FILES['meeting']['name']);

$title=$_POST['title'];

$date=$_POST['date'];

$meeting=($_FILES['meeting']['name']);

mysql_query("INSERT INTO `meetings` VALUES (0, '$title', '$meeting', '$date')") ;

if(move_uploaded_file($_FILES['meeting']['tmp_name'], $target)) { echo "<p>The file ". basename( $_FILES['uploadedfile']['name']). " has been uploaded, and your information has been added to the Meetings page.</p>"; } else { echo "<p>Sorry, there was a problem uploading your file.</p>"; } ?>

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










