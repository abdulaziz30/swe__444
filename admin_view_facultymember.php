<?php
  require_once("functions.php");
  $con=db_connect();
  $sql="SELECT * FROM facultymember";
  //echo $sql;
  $res=mysqli_query($con,$sql);
  $num=mysqli_num_rows($res);
  if($num==0)
  {
	  echo "there are no registered faculty members.";
  }
  else
  {
	  echo "<table align=center width=50% border=1>";
	  echo "<tr align = center><td>User</td><td>Edit</td><td>Delete</td></tr>";
	  for($i=0;$i<$num;$i++)
	  {
		  //echo "GG";
		  $row=mysqli_fetch_array($res,MYSQLI_BOTH);
		  echo "<tr align = center><td>".$row['name']."</td><td>Edit</td><td>Delete</td></tr>";
	  }

	  echo "</table>";
	  echo "<div align=center><a href=adminhome.php>Back</a></div>"; 
  }
?>
