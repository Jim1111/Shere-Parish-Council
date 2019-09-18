<?php
	require_once('auth.php');
?>

<?php include("header.php"); ?>

<script language="JavaScript" type="text/javascript" src="wysiwyg.js"></script>



<div id="content1">

  <?php

  $Id=$_GET["id"];

  if(!is_numeric($Id))
  die("Invalid Id specified");

  include("inc/dbconnect.php");

  $dbQuery = "SELECT DATE_FORMAT(Date,'%D %M %Y') AS d1, title, minutesId, Date FROM meetings WHERE minutesId=$Id";

 //echo "$dbQuery <br> $Id<br>";

  $result = mysql_query($dbQuery) or die("Couldn't get file list");
  $row = mysql_fetch_array($result)

   ?>

   <script type="text/javascript" src="calendarDateInput.js">

   	  /***********************************************
   	  * Jason's Date Input Calendar- By Jason Moon http://calendar.moonscript.com/dateinput.cfm
   	  * Script featured on and available at http://www.dynamicdrive.com
   	  * Keep this notice intact for use.
   	  ***********************************************/

   	  </script>

   <div class="box2">
     <div class="boxhead">Edit Meeting</div>

     <form enctype="multipart/form-data" action="edit_meetings2.php?Id=<?php echo $row["minutesId"] ?>" method="POST">

       <table border="0" cellpadding="1" cellspacing="0" bordercolor="#829485" width="500">

         <tr>
           <td><p><b>Title:</b> </td>
    <td>
     <select size="1" name="title">
       <option selected="selected" value="<?php echo $row["title"] ?>"><?php echo $row["title"] ?></option>

           <option value="Agenda">Agenda</option>
	       <option value="Minutes">Minutes</option>
	       <option value="Draft Minutes">Draft Minutes</option>

	       <option value="Planning Agenda">Planning Agenda</option>
	       <option value="Planning Minutes">Planning Minutes</option>
	       <option value="Draft Planning Minutes">Draft Planning Minutes</option>

	        <option value="Peaslake Farm Working Group Agenda">Peaslake Farm Working Group Agenda</option>
		   			   	<option value="Peaslake Farm Working Group Minutes">Peaslake Farm Working Group Minutes</option>
		       <option value="Draft Peaslake Farm Working Group Minutes">Draft Peaslake Farm Working Group Minutes</option>

	       	<option value="Housing Working Group Agenda">Housing Working Group Agenda</option>
		   	<option value="Housing Working Draft Minutes">Housing Working Group Draft Minutes</option>
		    <option value="Housing Working Group Minutes">Housing Working Group Minutes</option>

	       <option value="General Purposes Committee Agenda">General Purposes Committee Agenda</option>
		   <option value="General Purposes Committee Draft Minutes">General Purposes Committee Draft Minutes</option>
		   <option value="General Purposes Committee Minutes">General Purposes Committee Minutes</option>


	      <option value="Tanyard Hall Agenda">Tanyard Hall Agenda</option>
		  <option value="Draft Tanyard Hall Minutes">Draft Tanyard Hall Minutes</option>
		   		           <option value="Tanyard Hall Minutes">Tanyard Hall Minutes</option>

		   		           <option value="Health and Safety Agenda">Health and Safety Agenda</option>
		   		           <option value="Draft Health and Safety Minutes">Draft Health and Safety Minutes</option>
		   		           <option value="Health and Safety Minutes">Health and Safety Minutes</option>

				<option value="Management and Strategy Working Group Agenda">Management and Strategy Working Group Agenda</option>
		        <option value="Draft Management and Strategy Working Group Minutes">Draft Management and Strategy Working Group Minutes</option>
		        <option value="Management and Strategy Working Group Minutes">Management and Strategy Working Group Minutes</option>


	       <option value="Finance Agenda">Finance Agenda</option>
	       <option value="Finance Minutes">Finance Minutes</option>
	       <option value="Draft Finance Minutes">Draft Finance Minutes</option>

	       <option value="Parish Maintenance Agenda">Parish Maintenance Agenda</option>
	       <option value="Parish Maintenance Minutes">Parish Maintenance Minutes</option>

            <option value="Playground Committee Agenda">Playground Committee Agenda</option>
	        <option value="Draft Playground Committee Minutes">Draft Playground Committee Minutes</option>
	        <option value="Playground Committee Minutes">Playground Committee Minutes</option>

	       <option value="Annual Parish Meeting Agenda">Annual Parish Meeting Agenda</option>
	       <option value="Draft Annual Parish Meeting Minutes">Draft Annual Parish Meeting Minutes</option>
	       <option value="Annual Parish Meeting Minutes">Annual Parish Meeting Minutes</option>

	       <option value="Annual Council Meeting Agenda">Annual Council Meeting Agenda</option>
	       <option value="Draft Annual Council Meeting Minutes">Draft Annual Council Meeting Minutes</option>
	       <option value="Annual Council Meeting Minutes">Annual Council Meeting Minutes</option>

     </select>
    </td>
         </tr>

         <tr>
           <td><p><b>Date:</b </td>
           <td><input type="text" name="Date" value="<?php echo $row['Date']; ?>" size="20"></td>
         </tr>

         <!-- <tr>
           <td><p><b>Meeting:</b> </td>
           <input type="hidden" name="MAX_FILE_SIZE" value="1000000">
           <td><input type="file" name="meeting"></p></td>
         </tr>  -->
             <tr>
   	        <td colspan="2"><p align="center"><input type="submit" value="Edit"></p></td>
       </tr>
       </table>

   </form>


   </div>
</div>


<div id="content1">

<div class="box2">
  <div class="boxhead">Delete</div>
  <div class="main">

	  		  <form method="POST" action="delete_meetings.php?Id=<?php echo $row["minutesId"]; ?>">
	  		                              <p align="center"><?php echo $row["title"]; ?> - <?php echo $row["d1"]; ?></p>
	  		                              <p align="center">
	  		                                <input type="submit" value="Delete?">
	  		                              </p>
	  		                              </form>

</div>
</div>





 <?php mysql_close($con); ?>


</div>

  <!--end of div-->
  </div>
  <!--end-->

<?php include("footer.php"); ?>









