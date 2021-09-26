
<?php
  include("../../conection.php");
  $cno=$_GET['del'];
  $sql="delete from addcompany where cno='$cno'";
  $r=mysqli_query($con,$sql);
  if($r && isset($_GET['cno']))
     include("editcompany.php");
  else
     include("editcompany.php");

      
?>