<!--
	Register new student
-->
<?php include "../../conection.php";
?>
<!DOCTYPE html>
<html>
<head>
<style>
			.navbar-dark{
			background:black;	
			}
			
	</style> 
<link rel="stylesheet" type="text/css" href="style1.css">
<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
		
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="style1.css">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  <link rel="stylesheet" type="text/css" href="style1.css">

	</head>
<body style=background:grey>
<nav class="navbar navbar-expand-lg navbar-dark  ">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><span class="mb-0 h1">Placement Manegment system</span></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse " id="navbarNav">
      <ul class="navbar-nav ms-auto">
	      <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="../../index.php"><span class="mb-0 h3">Home</span></a>
        </li> 
	      <li class="nav-item">
          <a class="nav-link " aria-current="page" href="../../Admin/Admin Login/AdminLogin.html"><span class="mb-0 h3">Admin</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./StudentLogin.php"><span class="mb-0 h3">Student<span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../../Placement-head/Placement Head Login/PlacementHeadLogin.html"><span class="mb-0 h3">Placement Head</span></a>
        </li>
   </div>
</div> 
</nav>
  <div class="header">
  	<h2>Student Registration</h2>
  </div>
  <form method="post" action="StudentRegistration.php" >
  <div style="height:600px;width:500x;overflow:auto;border:8px solid black;padding:2%;"> 

  <ul class="smooth-scroll list-unstyled">	
  <div class="input-group">
  	  <label> PRN Number</label>
  	  <input type="text" name="PRNno" value=" ">
  	</div> 
  <div class="input-group">
  	  <label> Student Name</label>
  	  <input type="text" name="sname" value=" ">
  	</div>
	  <div class="input-group">
  	  <label>Address</label>
  	  <input type="text" name="address" value=" ">
  	</div>
	  <div class="input-group">
  	  <label>city</label>
    </div>
	<div>		
  	  <input type="text" name="city" value=" ">
  	</div>
	  <div class="input-group">
  	  <label>Mobile Number</label>
  	  <input type="text" name="mno" value=" ">
  	</div>	  
	  <div class="input-group">
  	  <label>Qulification</label>
  	  <input type="text" name="qulification" value=" ">
  	</div>
	  <label>Gender</label>  
	  <div class="input-group">
         <input type="text" name="gender" > 
      </div>
     <div class="input-group">
  	  <label>BirthDate (yyy/mm/dd)</label>
  	  <input type="text" name="dob"    value=" " placeholder="yyyy-mm-dd">
  	 </div>
	  
  	

     <div class="input-group">
  	  <label>Username</label>
  	  <input type="text" name="username" value=" ">
  	</div>
  	<div class="input-group">
  	  <label>Email</label>
  	  <input type="email" name="email" value=" ">
  	</div>
  	<div class="input-group">
  	  <label>Password</label>
  	  <input type="password" name="password">
  	</div> 
	  
	  
	<div class="input-group">
  	  <input type="submit" class="btn" name="reg_user" value=Register>
  	</div>
  	<p>
  		Already a member? <a href="StudentLogin.php">Sign in</a>
  	</p>
	  <?php echo mysqli_error($con);?>
</ul>  
  </form>
  </div>
</body>
</html>
<?php 
if(isset($_POST['reg_user']))
{
	
	$name=$_POST['sname'];
	$address =$_POST['address'];
	$city=$_POST['city'];
	$mno=$_POST['mno'];
	$quli=$_POST['qulification'];
	$dob=$_POST['dob'];
	$gender=$_POST['gender'];
	$username=$_POST['username'];
	$password1=$_POST['password'];
	$semail=$_POST['email'];
	$PRN=$_POST['PRNno'];
	$status="Not Selected";
;

$query="insert into Student_Reg(StudentName,Address,City,Email,Mobile,Qualification,Gender, BirthDate,UserName,PRN_NO,Pass,Status) values
('$name','$address','$city','$semail','$mno','$quli','$gender','$dob','$username','$PRN','$password1','Not Selected')";

$data=mysqli_query($con,$query);
echo mysqli_error($con).$data;
if($data)
{
	?><script>alert("Registration sucessful");</script><?php
}
else
 echo 'fail';

}


?>