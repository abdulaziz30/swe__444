<?php
require_once("functions.php");
session_start();
$_SESSION['LogType']='admin';
admin_display_header();
?>
<br/><br/>
<a href=admin_add_facultymember_form.php>Add Faculty Member</a>
<a href=admin_view_facultymember.php>View Faculty Member</a>
<a href=logout.php>Log out</a>
<?
admin_display_footer();
?>
