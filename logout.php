<?php
	//Start session
	session_start();

	//Unset the variables stored in session
	unset($_SESSION['SESS_MEMBER_ID']);
	unset($_SESSION['SESS_FIRST_NAME']);
	unset($_SESSION['SESS_LAST_NAME']);
?>

<?php include("header.php"); ?>

<div id="content">

<div class="box2">
  <div class="boxhead">
Logged Out
</div>

<p><b>You have been logged out.</b></p>

<p>Click here to <a href="login.php">Login</a> or click <a href="index.php">here</a> for the home page.</p>

<p>&nbsp;</p>

<p>&nbsp;</p>

<p>&nbsp;</p>

</div>
</div>

<?php include("side_bar.php"); ?>


  <!--end of div-->
  </div>
  <!--end-->

<?php include("footer.php"); ?>
