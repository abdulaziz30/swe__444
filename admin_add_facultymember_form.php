<?php
require_once("functions.php");
admin_display_header();
?>

<br/><br/><br/><br/>
<div align=center><h2>Add Faculty Member</h2></div>
<table align=center>
   <form action=admin_do_add_FM.php method=post>
   <tr><td>Name</td><td><input type=text name="name" /></td></tr>
   <tr><td>Username</td><td><input type=text name="username" /></td></tr>
   <tr><td>Password</td><td><input type=password name="pwd" "/></td></tr>
   <tr><td colspan=2><input type=submit value= 'Add Faculty Member'/></td></tr>
   </form>
</table>
<div align=center><a href=adminhome.php>Back</a></div>
<?
admin_display_footer();
?>
