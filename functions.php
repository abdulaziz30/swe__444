<?php

function admin_display_header()
{
	?>
	<html>
	<head><title></title></head>
	<?
}

function admin_display_footer()
{
	?>
	</body>
	</html>
	<?
}
function display_header()
{
	?>
	<html>
	<head><title></title></head>
	<?
}

function display_footer()
{
	?>
	</body>
	</html>
	<?
}
function db_connect()
{
	$con=mysqli_connect("localhost", "root", "rootroot","committeedb");
	if (mysqli_connect_errno())
     {
        die("Fail to connect to DB server: " . mysqli_connect_error());
     }
	 return $con;
}
?>
