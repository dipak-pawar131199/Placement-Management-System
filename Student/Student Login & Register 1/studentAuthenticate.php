
<?php 


      session_start();
      include '../../conection.php';
if(isset($_POST['login_user']))
{

   $user1=$_POST['username1'];
   $pass1=$_POST['password1'];
  $result=mysqli_query($con,"select * from Student_Reg where UserName='$user1' and Pass='$pass1'");
  
  echo  mysqli_error($con);  
  $num_rows=mysqli_num_rows($result);
  $row=mysqli_fetch_array($result);
  $num_rows;
  $_SESSION['sid']=$row[0];
  $_SESSION['sn']=$row[1];
 // echo( $_SESSION['sn']);
  //echo($_SESSION['sid']);
if ($num_rows==1)
 {
      ?>
    <script>
      alert('Successfully Log In');
     
    </script>
    <?php
header("location:./studenthomepage.php");


  }
  else
  {
    ?><script> alert("Invalid Username And Password!!");</script><?php
    include("./StudentLogin.php");
    
  }
}
     ?>
      
<?php 
/*include "../../conection.php";
session_start();
//mysqli_select_db($con,'placement');

$username12=$_POST['username1'];
$password12=$_POST['password1'];

$q="select * from Student_Reg where UserName='$username12'&& Pass='$password12'";


$result=mysqli_query($con,$q);

$num=mysqli_num_rows($result);

if($num==1)
{
	$_SESSION["sss"] = $username12;
	header("location:HomePage/studenthomepage.php");

}
else
	{

		echo"Invalid username & Password";
	}	*/

?>