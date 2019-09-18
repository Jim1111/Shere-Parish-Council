<?php include("header.php"); ?>

<div id="content">

<p align="justify"><b>You can contact the Clerk using the form, by telephone, or writing.</b></p>
<p align="justify">* = Required.</p>

    	  <form method="post" action="contact_us2.php">

		  <!-- DO NOT change ANY of the php sections -->
		  <?php
		  $ipi = getenv("REMOTE_ADDR");
		  $httprefi = getenv ("HTTP_REFERER");
		  $httpagenti = getenv ("HTTP_USER_AGENT");
		  ?>

		  <input type="hidden" name="ip" value="<?php echo $ipi ?>" />
		  <input type="hidden" name="httpref" value="<?php echo $httprefi ?>" />
		  <input type="hidden" name="httpagent" value="<?php echo $httpagenti ?>" />


		  <p align="justify">
		  * Your Name: <br />
		  <input type="text" name="visitor" size="35" />
		  </p>

		  <p align="justify">
		  * Your Email:<br />
		  <input type="text" name="visitormail" size="35" />
		  </p>

	      <p align="justify">
		  * Mail Message:<br />
		  <textarea name="notes" rows="20" cols="35"></textarea>
		  </p>
              <p align="justify">How did you find us?<br>
                      <select size="1" name="D1">
		      <option>Please Select</option>
		      <option value="Search Engine">Search Engine</option>
		      <option value="Newsletter">Newsletter</option>
	              <option value="Word of Mouth">Word of Mouth</option>
	              <option value="Return Visitor">Return Visitor</option>
	              <option value="Other">Other</option>
	         </select>
	      </p>

	<br>
		  <p align="center">
		  <input type="submit" value="Send Mail" />
		  </p>

	  </form>
<hr>

<p>By Telephone: 01483 203431</p>

<p>Or writing to:</p>

<p>Clerk to Shere Parish Council<br>
Tanyard Hall<br>
30 Station Road<br>
Gomshall<br>
GUILDFORD<br>
GU5 9LF</p>

<br>

</div>

<?php include("side_bar.php"); ?>



  <!--end of div-->
  </div>
  <!--end-->

<?php include("footer.php"); ?>