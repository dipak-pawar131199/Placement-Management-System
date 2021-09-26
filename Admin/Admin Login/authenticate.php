<!--import connection file-->
<?php
    include ("../../conection.php");
?>
<?php
  $uname=$_POST["username"];
  $pass=$_POST["password"];

  $sql="select * from Admin where auname='$uname' and apass='$pass'";
 
  $result=mysqli_query($con,$sql)or die(mysqli_error($con));
  $count=mysqli_num_rows($result);
  if($count==1)
  {
    include("./admihomepage.html");
  }
  else 
   {  echo "<script>alert('Invalid User Name and Password!!');</script>";
     include("./AdminLogin.html");
   }
 
 
?>