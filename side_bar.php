<div id="sidebar">



  <div class="box2">
  <div class="boxhead">
<b>Parish Meetings</b>
</div>

<div class="main">

<p class="main" style="text-align: center"><b><a href="annual report 2012-2013.pdf" target="_blank">Annual Report 2012/13</a></b></p>



 <!-- PHP CODE TO PRINT MINUTES ITEMS -->

<?php

   	  include("inc/dbconnect.php");

      $sql = "SELECT DATE_FORMAT(Date,'%D %M %Y') AS d1, minutesId, title, meeting FROM meetings ORDER BY meetings.Date DESC LIMIT 4";


   	  $result = mysql_query($sql) or die("Couldn't get file list");

   	        while($row = mysql_fetch_array($result))
   	        {
   	          echo "<p align='center'><b><a href='meetings/";
   	          echo $row["meeting"];
   	          echo "' target='_blank'>Council ";
   	  	      echo $row["title"];
              echo "</a></b><br>";
              echo $row["d1"];
   	          echo "</p>\n";
   	        }

      mysql_query($sql,$con);mysql_close($con);

   	    ?>


             <!-- END PHP CODE -->

<p style='text-align: center'>For more Parish Meetings please <a href='meetings.php'>click here</a>.</p>

<p style='text-align: center'>
<i>Get Acrobat Reader if you don't have it installed.</i><br>
<a href="http://www.adobe.com/products/acrobat/readstep2.html" target="_blank"><img border="0" src="images/get_adobe_reader.gif" alt="Adobe Reader" width="112" height="33"></a></p>

</div>
</div>

<!--<div class="box2">
<div class="boxhead">
<b>Public Meetings</b>
</div>

<p></p>


</div>-->
</div>

  </div>