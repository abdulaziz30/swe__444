<?php
  require_once("functions.php");
  $con=db_connect();
  $sql="INSERT INTO facultymember(name,username,pwd) VALUES('".$_POST['name']."','".$_POST['username']."','".$_POST['pwd']."')";
  //echo $sql;
  $res=mysqli_query($con,$sql);
  if(mysqli_affected_rows($con)>0)
  {
	  echo "new faculty member is added.";
	  echo "<br/>";
	  echo "<a href=adminhome.php>Back</a>";
  }
  else
  {
	  echo "failed to add a new faculty member.";
	  echo "<br/>";
	  echo "<a href=adminhome.php>Back</a>"; 
  }
?>
