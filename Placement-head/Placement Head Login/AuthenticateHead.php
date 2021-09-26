<!--import connection file-->
<?php
    include ("../../conection.php");
?>
<?php
  $uname=$_POST["username"];
  $pass=$_POST["password"];

  $sql="select * from Placement_head where Uname='$uname' and pass='$pass'";
 
  $result=mysqli_query($con,$sql)or die(mysqli_error($con));
  $count=mysqli_num_rows($result);
  if($count==1)
  {
    include("./headhomepage.html");
  }
  else 
    { echo "<script>alert('Invalid user name and password');</script>";
       include ("PlacementHeadLogin.html");
    }
 
 
?>