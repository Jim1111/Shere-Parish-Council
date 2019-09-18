<?php include("header.php"); ?>

<div id="content">

       <?php

  	 $ip = $_POST['ip'];
  	 $httpref = $_POST['httpref'];
  	 $httpagent = $_POST['httpagent'];
  	 $visitor = $_POST['visitor'];
  	 $visitormail = $_POST['visitormail'];
  	 $notes = $_POST['notes'];
  	 $D1 = $_POST['D1'];

  	 if (eregi('http:', $notes)) {
  	 die ("Do NOT try that! ! ");
  	 }
  	 if(!$visitormail == "" && (!strstr($visitormail,"@") || !strstr($visitormail,".")))
  	 {
  	 echo "<p>Use Back - Enter valid e-mail</p>\n";
  	 $badinput = "<p>Feedback was NOT submitted</p>\n";
  	 echo $badinput;
  	 die ("Go back! ! ");
  	 }

  	 if(empty($visitor) || empty($visitormail) || empty($notes )) {
  	 echo "<p>Use Back - fill in all fields</p>\n";
  	 die ("Use back! ! ");
  	 }

  	 $todayis = date("l, F j, Y, g:i a") ;

  	 $notes = stripcslashes($notes);

           // Start //

  	 $message = "$todayis\n

  	 Message: $notes\n

  	 How did they find us?: $D1\n

  	 Additional Info: IP = $ip\n

  	 Browser Info: $httpagent\n
  	 ";

           // Fin  //

  	 $from = "From: $visitormail\r\n";


  	 mail("clerk2009@shereparishcouncil.gov.uk", "A Question from the Shere Parish Council Website", $message, $from);

  	 ?>

  	 <p align="center"><p>Thank You, <?php echo $visitor ?>, we will get back in touch shortly.</b></p>

</div>

<?php include("side_bar.php"); ?>



  <!--end of div-->
  </div>
  <!--end-->

<?php include("footer.php"); ?>