<?php include("header.php"); ?>

<div id="content">

<div class="box2">
  <div class="boxhead">
Log-in
</div>

<form id="loginForm" name="loginForm" method="post" action="login-exec.php">
  <table width="300" border="0" align="center" cellpadding="2" cellspacing="0">
    <tr>
      <td width="112"><b>Login</b></td>
      <td width="188"><input name="login" type="text" class="textfield" id="login" /></td>
    </tr>
    <tr>
      <td><b>Password</b></td>
      <td><input name="password" type="password" class="textfield" id="password" /></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input type="submit" name="Submit" value="Login" /></td>
    </tr>
  </table>
</form>

<p>&nbsp;</p>

<p><a href="http://www.cushycms.com/en/sessions/new">http://www.cushycms.com/en/sessions/new</a></p>

<p>&nbsp;</p>

<p>&nbsp;</p>

</div>
</div>

<?php include("side_bar.php"); ?>


  <!--end of div-->
  </div>
  <!--end-->

<?php include("footer.php"); ?>