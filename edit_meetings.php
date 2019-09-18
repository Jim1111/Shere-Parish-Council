<?php
	require_once('auth.php');
?>

<?php include("header.php"); ?>

<div id="content1">

<div class="box2">
  <div class="boxhead">Edit/Delete</div>
  <div class="main">

	            <?php

   	  include("inc/dbconnect.php");

   	  if (!isset($_REQUEST["year"])) $_REQUEST["year"] = date("Y");

$cYear = $_REQUEST["year"];

$prev_year = $cYear;
$next_year = $cYear;


$prev_year = $cYear - 1;
$next_year = $cYear + 1;

  ?>


<div align="center">
  <center>


  <table border="0" cellpadding="2" cellspacing="0" width="500">
    <tr>
      <td width="125" valign="top" align="left"><p><a href="edit_meetings.php?year=<?php echo $prev_year; ?>">Previous Year</a></p></td>
      <td width="250" valign="top" align="left">
        <p align="center"><b><font size="6"><?php echo $monthNames[$cMonth-1].' '.$cYear; ?></font></b></p></td>
      <td width="125" valign="top" align="right"><p><a href="edit_meetings.php?year=<?php echo $next_year; ?>">Next Year</a></p></td>
    </tr>
  </table>

</div>

<div class="main1">

  <table border="0" cellspacing="2" width="500" bordercolor="#829485" cellpadding="2">
    <tr>
      <td bgcolor="#288FAC" valign="top" align="left" width="120"><p><b>January</b></p></td>
      <td bgcolor="#4DB2CB" valign="top" align="left" width="380">

          <?php


//for ($i=1; $i<=12; $i++) {


$sql = "SELECT YEAR(Date) AS d11, MONTH(Date) AS d10, DAYOFMONTH(Date) AS d9, minutesId, title, meeting FROM meetings WHERE YEAR(Date) = '$cYear' and MONTH(Date) = '1' ORDER BY Date ASC";

//echo $sql;

   	  $result = mysql_query($sql) or die("Couldn't get file list");



   	  ?>
   	              <?php


   	        while($row = mysql_fetch_array($result))
   	        {
   	          echo "<p><a href='edit_meetings1.php?id=";
			  echo $row["minutesId"];
   	          echo "'>";
   	  	      echo $row["title"];
              echo " - ";
              echo $row["d9"];
              echo "/";
              echo $row["d10"];
              echo "/";
              echo $row["d11"];
   	          echo "</a></p>\n";
   	        }


 //mysql_query($sql,$con);mysql_close($con);


   	    ?>


<br>
</td>
    </tr>

<td bgcolor="#288FAC" valign="top" align="left" width="120"><p><b>February</b></p></td>

<td bgcolor="#4DB2CB" valign="top" align="left" width="380">

     <?php

 $sql = "SELECT YEAR(Date) AS d11, MONTH(Date) AS d10, DAYOFMONTH(Date) AS d9, minutesId, title, meeting FROM meetings WHERE YEAR(Date) = '$cYear' and MONTH(Date) = '2' ORDER BY Date ASC";

//echo $sql;

   	  $result = mysql_query($sql) or die("Couldn't get file list");



   	  ?>
   	              <?php


   	        while($row = mysql_fetch_array($result))
   	        {
   	          echo "<p><a href='edit_meetings1.php?id=";
			  echo $row["minutesId"];
   	          echo "'>";
   	  	      echo $row["title"];
              echo " - ";
              echo $row["d9"];
              echo "/";
              echo $row["d10"];
              echo "/";
              echo $row["d11"];
   	          echo "</a></p>\n";
   	        }


 //mysql_query($sql,$con);mysql_close($con);


   	    
   	    ?>

<br>

</td>
    </tr>


    <tr>
      <td bgcolor="#288FAC" valign="top" align="left" width="120"><p><b>March</b></p></td>
      <td bgcolor="#4DB2CB" valign="top" align="left" width="380">

     <?php

         $sql = "SELECT YEAR(Date) AS d11, MONTH(Date) AS d10, DAYOFMONTH(Date) AS d9, minutesId, title, meeting FROM meetings WHERE YEAR(Date) = '$cYear' and MONTH(Date) = '3' ORDER BY Date ASC";

//echo $sql;

   	  $result = mysql_query($sql) or die("Couldn't get file list");



   	  ?>
   	              <?php


   	        while($row = mysql_fetch_array($result))
   	        {
   	          echo "<p><a href='edit_meetings1.php?id=";
			  echo $row["minutesId"];
   	          echo "'>";
   	  	      echo $row["title"];
              echo " - ";
              echo $row["d9"];
              echo "/";
              echo $row["d10"];
              echo "/";
              echo $row["d11"];
   	          echo "</a></p>\n";
   	        }


 //mysql_query($sql,$con);mysql_close($con);


   	    ?>
<br>
</td>
    </tr>

    <tr>
      <td bgcolor="#288FAC" valign="top" align="left" width="120"><p><b>April</b></p></td>
      <td bgcolor="#4DB2CB" valign="top" align="left" width="380">

     <?php

        $sql = "SELECT YEAR(Date) AS d11, MONTH(Date) AS d10, DAYOFMONTH(Date) AS d9, minutesId, title, meeting FROM meetings WHERE YEAR(Date) = '$cYear' and MONTH(Date) = '4' ORDER BY Date ASC";

//echo $sql;

   	  $result = mysql_query($sql) or die("Couldn't get file list");



   	  ?>
   	              <?php


   	        while($row = mysql_fetch_array($result))
   	        {
   	          echo "<p><a href='edit_meetings1.php?id=";
			  echo $row["minutesId"];
   	          echo "'>";
   	  	      echo $row["title"];
              echo " - ";
              echo $row["d9"];
              echo "/";
              echo $row["d10"];
              echo "/";
              echo $row["d11"];
   	          echo "</a></p>\n";
   	        }


 //mysql_query($sql,$con);mysql_close($con);


   	    ?>
<br>
</td>
    </tr>

    <tr>
      <td bgcolor="#288FAC" valign="top" align="left"><p><b>May</b></p></td>
      <td bgcolor="#4DB2CB" valign="top" align="left" width="380">

     <?php

          $sql = "SELECT YEAR(Date) AS d11, MONTH(Date) AS d10, DAYOFMONTH(Date) AS d9, minutesId, title, meeting FROM meetings WHERE YEAR(Date) = '$cYear' and MONTH(Date) = '5' ORDER BY Date ASC";

//echo $sql;

   	  $result = mysql_query($sql) or die("Couldn't get file list");



   	  ?>
   	              <?php


   	        while($row = mysql_fetch_array($result))
   	        {
   	          echo "<p><a href='edit_meetings1.php?id=";
			  echo $row["minutesId"];
   	          echo "'>";
   	  	      echo $row["title"];
              echo " - ";
              echo $row["d9"];
              echo "/";
              echo $row["d10"];
              echo "/";
              echo $row["d11"];
   	          echo "</a></p>\n";
   	        }


 //mysql_query($sql,$con);mysql_close($con);


   	    ?>
<br>
</td>
    </tr>

    <tr>
      <td bgcolor="#288FAC" valign="top" align="left"><p><b>June</b></p></td>
      <td bgcolor="#4DB2CB" valign="top" align="left" width="380">

     <?php

            $sql = "SELECT YEAR(Date) AS d11, MONTH(Date) AS d10, DAYOFMONTH(Date) AS d9, minutesId, title, meeting FROM meetings WHERE YEAR(Date) = '$cYear' and MONTH(Date) = '6' ORDER BY Date ASC";

//echo $sql;

   	  $result = mysql_query($sql) or die("Couldn't get file list");



   	  ?>
   	              <?php


   	        while($row = mysql_fetch_array($result))
   	        {
   	          echo "<p><a href='edit_meetings1.php?id=";
			  echo $row["minutesId"];
   	          echo "'>";
   	  	      echo $row["title"];
              echo " - ";
              echo $row["d9"];
              echo "/";
              echo $row["d10"];
              echo "/";
              echo $row["d11"];
   	          echo "</a></p>\n";
   	        }


 //mysql_query($sql,$con);mysql_close($con);


   	    ?>
<br>
</td>
    </tr>

    <tr>
      <td bgcolor="#288FAC" valign="top" align="left"><p><b>July</b></p></td>
      <td bgcolor="#4DB2CB" valign="top" align="left" width="380">

         <?php

            $sql = "SELECT YEAR(Date) AS d11, MONTH(Date) AS d10, DAYOFMONTH(Date) AS d9, minutesId, title, meeting FROM meetings WHERE YEAR(Date) = '$cYear' and MONTH(Date) = '7' ORDER BY Date ASC";

//echo $sql;

   	  $result = mysql_query($sql) or die("Couldn't get file list");



   	  ?>
   	              <?php


   	        while($row = mysql_fetch_array($result))
   	        {
   	          echo "<p><a href='edit_meetings1.php?id=";
			  echo $row["minutesId"];
   	          echo "'>";
   	  	      echo $row["title"];
              echo " - ";
              echo $row["d9"];
              echo "/";
              echo $row["d10"];
              echo "/";
              echo $row["d11"];
   	          echo "</a></p>\n";
   	        }


 //mysql_query($sql,$con);mysql_close($con);


   	    ?>
<br>
</td>
    </tr>

    <tr>
      <td bgcolor="#288FAC" valign="top" align="left"><p><b>August</b></p></td>
      <td bgcolor="#4DB2CB" valign="top" align="left" width="380">

         <?php

            $sql = "SELECT YEAR(Date) AS d11, MONTH(Date) AS d10, DAYOFMONTH(Date) AS d9, minutesId, title, meeting FROM meetings WHERE YEAR(Date) = '$cYear' and MONTH(Date) = '8' ORDER BY Date ASC";

//echo $sql;

   	  $result = mysql_query($sql) or die("Couldn't get file list");



   	  ?>
   	              <?php


   	        while($row = mysql_fetch_array($result))
   	        {
   	          echo "<p><a href='edit_meetings1.php?id=";
			  echo $row["minutesId"];
   	          echo "'>";
   	  	      echo $row["title"];
              echo " - ";
              echo $row["d9"];
              echo "/";
              echo $row["d10"];
              echo "/";
              echo $row["d11"];
   	          echo "</a></p>\n";
   	        }


 //mysql_query($sql,$con);mysql_close($con);


   	    ?>
<br>
</td>
    </tr>

    <tr>
      <td bgcolor="#288FAC" valign="top" align="left"><p><b>September</b></p></td>
      <td bgcolor="#4DB2CB" valign="top" align="left" width="380">

            <?php

 $sql = "SELECT YEAR(Date) AS d11, MONTH(Date) AS d10, DAYOFMONTH(Date) AS d9, minutesId, title, meeting FROM meetings WHERE YEAR(Date) = '$cYear' and MONTH(Date) = '9' ORDER BY Date ASC";

//echo $sql;

   	  $result = mysql_query($sql) or die("Couldn't get file list");



   	  ?>
   	              <?php


   	        while($row = mysql_fetch_array($result))
   	        {
   	          echo "<p><a href='edit_meetings1.php?id=";
			  echo $row["minutesId"];
   	          echo "'>";
   	  	      echo $row["title"];
              echo " - ";
              echo $row["d9"];
              echo "/";
              echo $row["d10"];
              echo "/";
              echo $row["d11"];
   	          echo "</a></p>\n";
   	        }


 //mysql_query($sql,$con);mysql_close($con);


   	    
   	    ?>
<br>
</td>
    </tr>

    <tr>
      <td bgcolor="#288FAC" valign="top" align="left"><p><b>October</b></p></td>
      <td bgcolor="#4DB2CB" valign="top" align="left" width="380">

             <?php

 $sql = "SELECT YEAR(Date) AS d11, MONTH(Date) AS d10, DAYOFMONTH(Date) AS d9, minutesId, title, meeting FROM meetings WHERE YEAR(Date) = '$cYear' and MONTH(Date) = '10' ORDER BY Date ASC";

//echo $sql;

   	  $result = mysql_query($sql) or die("Couldn't get file list");



   	  ?>
   	              <?php


   	        while($row = mysql_fetch_array($result))
   	        {
   	          echo "<p><a href='edit_meetings1.php?id=";
			  echo $row["minutesId"];
   	          echo "'>";
   	  	      echo $row["title"];
              echo " - ";
              echo $row["d9"];
              echo "/";
              echo $row["d10"];
              echo "/";
              echo $row["d11"];
   	          echo "</a></p>\n";
   	        }


 //mysql_query($sql,$con);mysql_close($con);


   	    
   	    ?>
<br>
</td>
    </tr>

    <tr>
      <td bgcolor="#288FAC" valign="top" align="left"><p><b>November</b></p></td>
      <td bgcolor="#4DB2CB" valign="top" align="left" width="380">

             <?php

 $sql = "SELECT YEAR(Date) AS d11, MONTH(Date) AS d10, DAYOFMONTH(Date) AS d9, minutesId, title, meeting FROM meetings WHERE YEAR(Date) = '$cYear' and MONTH(Date) = '11' ORDER BY Date ASC";

//echo $sql;

   	  $result = mysql_query($sql) or die("Couldn't get file list");



   	  ?>
   	              <?php


   	        while($row = mysql_fetch_array($result))
   	        {
   	          echo "<p><a href='edit_meetings1.php?id=";
			  echo $row["minutesId"];
   	          echo "'>";
   	  	      echo $row["title"];
              echo " - ";
              echo $row["d9"];
              echo "/";
              echo $row["d10"];
              echo "/";
              echo $row["d11"];
   	          echo "</a></p>\n";
   	        }


 //mysql_query($sql,$con);mysql_close($con);


   	    
   	    ?>
<br>
</td>
    </tr>

    <tr>
      <td bgcolor="#288FAC" valign="top" align="left"><p><b>December</b></p></td>
      <td bgcolor="#4DB2CB" valign="top" align="left" width="380">

             <?php

 $sql = "SELECT YEAR(Date) AS d11, MONTH(Date) AS d10, DAYOFMONTH(Date) AS d9, minutesId, title, meeting FROM meetings WHERE YEAR(Date) = '$cYear' and MONTH(Date) = '12' ORDER BY Date ASC";

//echo $sql;

   	  $result = mysql_query($sql) or die("Couldn't get file list");



   	  ?>
   	              <?php


   	        while($row = mysql_fetch_array($result))
   	        {
   	          echo "<p><a href='edit_meetings1.php?id=";
			  echo $row["minutesId"];
   	          echo "'>";
   	  	      echo $row["title"];
              echo " - ";
              echo $row["d9"];
              echo "/";
              echo $row["d10"];
              echo "/";
              echo $row["d11"];
   	          echo "</a></p>\n";
   	        }


 //mysql_query($sql,$con);mysql_close($con);


   	    
   	    ?>
<br>
</td>
    </tr>


  </table>
  </center>
<br>
<br>
</div>


</div>
</div>
</div>

  <!--end of div-->
  </div>
  <!--end-->

<?php include("footer.php"); ?>










