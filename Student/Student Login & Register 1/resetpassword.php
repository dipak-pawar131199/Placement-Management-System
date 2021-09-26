<?php session_start();?>
<!doctype html>
<html lang="en">
  <head>
  	<title>Reset Password</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
		
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="./css/style.css">
  </head>
  <body>
		
		<div class="wrapper d-flex align-items-stretch bg-light">
			<nav id="sidebar">
				<div class="p-4 pt-5">
		  		<a href="#" class="img logo rounded-circle mb-5" style="background-image: url(images/logo.jpg);"></a>
	        <ul class="list-unstyled components mb-5">
	          <li class="active">
	            <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Profile</a>
	            <ul class="collapse list-unstyled" id="homeSubmenu">
                <li>
                    <a href="./studentprofile.php">Student=
                     Profile</a>
                </li>
                
                <li>
                    <a href="./editprofile.php">Edit Profile</a>
                </li>
                
	            </ul>
	          </li>
	          <li>
	              <a href="./studenthomepage.php">Dashboard</a>
	          </li>
	          <li>
              <a href="newcompany.php">New Company</a>
	          </li>
            <li>
              <a href="./Feedback/feedback.php">Send Query</a>
	          </li>
	          <li>
              <a href="resetpassword.php">Reset Password</a>
	          </li>
            <li>
              <a href="StudentLogin.php">Logout</a>
	          </li>
	        </ul>
    	</nav>

        <!-- Page Content  -->
      <div id="content" class="p-4 p-md-5">

        <nav class="navbar navbar-expand-lg navbar-light bg-info">
          <div class="container-fluid">

            <button type="button" id="sidebarCollapse" class="btn btn-secondary">
              <i class="fa fa-bars"></i>
              <span class="sr-only">Toggle Menu</span>
            </button>
            <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars"></i>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="nav navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="../Student Login & Register 1/studenthomepage.html"><h3>Home</h3></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="Message.php"><h3>Messages</h3></a>
              </li>
                <li class="nav-item">
                    <a class="nav-link" href="../Student Login & Register 1/StudentLogin.php"><h3>Logout<h3></a>
                </li>
              </ul>
            </div>
          </div>
        </nav>

        
        <form method="POST" action="" name=myform >
          <h1>Reset Password</h1>
          <div class="form-group" >
            <label for="semail".text-secondary><h4>Enter Email ID </h4></label>
            <input type="text" class="form-control"  name="email" placeholder=" Email Id" required>
          </div>
          <div class="form-group" >
            <label for="oldpass".text-secondary><h4>Old Password</h4></label>
            <input type="password" class="form-control"  name="opass" placeholder="Old Password" required>
          </div>
          <div class="form-group" >
            <label for="CompanyName".text-secondary><h4>New Password</h4></label>
            <input type="password" class="form-control"  name="npass" placeholder="New Password" required>
          </div>
          <div class="form-group">
            <label for="Criteria"><h4>Confirm Password</h4></label>
            <input type="password" class="form-control" name="confpass" placeholder="Re_Entered Password" required>
          </div>
          
          <button type="submit" class="btn btn-primary bt" name="reset" >Submit</button>
        </form>
        <p style="color:red"></p>

        <p></p>
      </div>
		</div>

    <script src="../../Admin/Admin Login/js/jquery.min.js"></script>
    <script src="../../Admin/Admin Login/js/popper.js"></script>
    <script src="../../Admin/Admin Login/js/bootstrap.min.js"></script>
    <script src="../../Admin/Admin Login/js/main.js"></script>
  

<?php

 $_SESSION['msg1']="password not change";
 if(isset($_POST['reset']))
  {
    include( "../../conection.php");
  
   $email=$_POST['email'];
   
   $opass=$_POST['opass'];
   
   $pass= $_POST['npass'];
   
   $confpass=$_POST['confpass'];
   
   $query=mysqli_query($con,"select Student_Email,Pass from student_register where Student_Email='$email' and Pass='$opass'");
   
   echo mysqli_error($con);
   $num=mysqli_fetch_array($query);
   print_r($num);
   if($num>0)
   {
       
     $c=mysqli_query($con,"update student_register set Pass='$pass' where Student_Email='$email'");
     $_SESSION['msg1']="password change successfully";
     
     ?>
     <!--<script>alert("Password change sucessfully");</script>--><?php
      
     //echo mysqli_error($c);
    
       
     }
   
   else
   {
      $_SESSION['msg1']="password not change";
     

   }
  }
  else
  {
    //$_SESSION['msg1']="password not change";
    echo"<p style='color:red' align:right>Not change Password!</p>";
  }
   
 
?>
</body>
</html>