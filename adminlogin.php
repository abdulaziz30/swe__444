<?php
  require_once("functions.php");
  $con=db_connect();
  $sql="SELECT * FROM admin WHERE username='".$_POST['username']."' and password='".$_POST['passwd']."'";
  //echo $sql;
  $res=mysqli_query($con,$sql);
  $num=mysqli_num_rows($res);
  if($num==0)
  {
	  echo "<div align=center>invalid username and password</div>";
	  echo"<div align=center><a href=admin.php>Try Again</a></div>";
  }
  else
  {
	  ?>
	  <script>
	  window.location="adminhome.php";
	  </script>
	  <?
  }

?>
