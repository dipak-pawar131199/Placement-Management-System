<?php
 session_start();
 $sid=$_SESSION['sid'] ;
?>
<!DOCTYPE html>
<html>
<head>
<title>FeedbacK form</title>
<!-- custom-theme -->

<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
<style>.button{
   /* -webkit-appearance:button;
    -moz-appearance:button;
    appearance:button;
    text-decoration:none;
    */border:2px solid black;
    cursor:pointer;
    margin:10px 30px;
    display:inline-block;
    text-align:center;
    margin:4px 2px;
    background-color:#4CAF50;
    text-color:black;
    border-radius:3px;
    color:black;
  }</style>


<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
		
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="../css/style.css">
  </head>
  <body>
		
		<div class="wrapper d-flex align-items-stretch bg-light">
			<nav id="sidebar">
				<div class="p-4 pt-5">
		  		<a href="#" class="img logo rounded-circle mb-5" style="background-image: url(../images/logo.jpg);"></a>
	        <ul class="list-unstyled components mb-5">
	          <li class="active">
	            <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Profile</a>
	            <ul class="collapse list-unstyled" id="homeSubmenu">
              <li>
                    <a href="../studentprofile.php">Student Profile</a>
              </li>
              <li>
                    <a href="../editprofile.php">Edit Profile</a>
              </li>
              
                  
                
	            </ul>
	          </li>
	          <li>
	              <a href="../studenthomepage.php">Dashboard</a>
	          </li>
	          <li>
              <a href="../newcompany.php">New Company</a>
	          </li>
            <li>
              <a href="./Feedback/feedback.php">Send Query</a>
	          </li>
	          <li>
              <a href="../resetpassword.php">Reset Password</a>
	          </li>
            <li>
              <a href="../StudentLogin.php">Logout</a>
	          </li>
	        </ul>
    	</nav>

        <!-- Page Content  -->
      <div id="content" class="p-4 p-md-5">

        <nav class="navbar navbar-expand-lg navbar-light bg-primary">
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
                    <a class="nav-link" href="./../../Student Login & Register 1/studenthomepage.php"><h3>Home</h3></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="./../../Student Login & Register 1/Message.php"><h3>Messages</h3></a>
              </li>
                <li class="nav-item">
                    <a class="nav-link" href="./../../Student Login & Register 1/StudentLogin.php"><h3>Logout</h3></a>
                </li>

              </ul>
            </div>
          </div>
        </nav>
        <div>
          <h2><u>Qurey</u></h2>
          <form id="form1" method="post" action="feedback.php">
                      
                          <h4>Query Message:</h4>
                          <br><br>
                          <span id="sprytextarea1">
                            
                            <textarea name="txtFeedback" id="txtFeedback" cols="66" rows="15" aligen=left></textarea>
                                                    <span class="textareaRequiredMsg" required>A value is required.</span></span>
                       
                         <br>
                         <h4>Date</h4><input type=text value=<?php echo date("Y/m/d");?> Disabled>
                            <input type="submit" class=button name="button" id="button" value="Submit" />
                          
        </div>  
        <script src="../../../Admin/Admin Login/js/jquery.min.js"></script>
    <script src="../../../Admin/Admin Login/js/popper.js"></script>
    <script src="../../../Admin/Admin Login/js/bootstrap.min.js"></script>
    <script src="../../../Admin/Admin Login/js/main.js"></script>
 
</body>
</html>

<?php

include("../../../conection.php");
if(isset($_POST['button']))
{
  $feedback=$_POST['txtFeedback'];
  
  $date=date("Y/m/d");
  //echo $date;
  if($_POST['txtFeedback'])
  {
      $sql="Insert into Feedback (sid,Feeback,Feedbackdate) values('$sid','$feedback','$date')";
      $result=mysqli_query($con,$sql);

      echo $result .mysqli_error($con);
      if($result  )
      {
        ?><script>alert("Feedback Send Successfuly");</script><?php
      }
  }
  ?><script>alert("Feedback message empty");</script><?php    
}
?>