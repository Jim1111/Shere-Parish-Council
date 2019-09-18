<?php include("header.php"); ?>

<div id="content">

<div class="box2">
  <div class="boxhead">Thank you</div>
  <div class="main">

<?php

include("inc/dbconnect.php");

$mId=$_GET["Id"];

$dbQuery = "DELETE FROM meetings WHERE minutesId=$mId";

//echo "$dbQuery <br><br>";

mysql_query($dbQuery) or die("Couldn't add file to database");

mysql_close($con);


echo "<p align='center'>The Meeting was deleted.</p>";

?>

 <p align='center'><a href="admin.php">Admin</a></p>

 <p align='center'><a href="logout.php">Log Out</a></p>

 </div>
  </div>
   </div>

<?php include("side_bar.php"); ?>


  <!--end of div-->
  </div>
  <!--end-->

<?php include("footer.php"); ?>



