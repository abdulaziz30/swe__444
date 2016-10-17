<?php
require_once("functions.php");
admin_display_header();
?>

<br/><br/><br/><br/>
<div align=center><h2>Admin Log in</h2></div>
<table align=center>
   <form action=adminlogin.php method=post>
   <tr><td>Username</td><td><input type=text name="username" /></td></tr>
   <tr><td>Password</td><td><input type=password name="passwd" "/></td></tr>
   <tr><td colspan=2><input type=submit value= 'Log in'/></td></tr>
   </form>
</table>
<?
admin_display_footer();
?>
