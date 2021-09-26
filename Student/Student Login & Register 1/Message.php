<?php

  session_start();
 
?>
<!doctype html>
<html lang="en">
  <head>
  	<title>StudentHomePage</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
		
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="./css/style.css">
        <style>

.styled-table {
    border-collapse: collapse;
    margin: 25px 0;
    font-size: 0.9em;
    font-family: sans-serif;
    min-width: 400px;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
}
.styled-table thead tr {
    background-color: #009879;
    color: #ffffff;
    text-align: left;
}
.styled-table th,
.styled-table td {
    color:rgb(0,0,0);
    font-size:24px;
    padding: 12px 15px;
}
.styled-table tbody tr {
    border-bottom: 1px solid #dddddd;
}

.styled-table tbody tr:nth-of-type(even) {
    background-color: #f3f3f3;
}

.styled-table tbody tr:last-of-type {
    border-bottom: 2px solid #009879;
}
.styled-table tbody tr.active-row {
    font-weight: bold;
    color: #009879;
}
    </style>
    

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
                    <a href="studentprofile.php">Student Profile</a>
              </li>
              <li>
                    <a href="editprofile.php">Edit Profile</a>
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
                    <a class="nav-link" href="../Student Login & Register 1/studenthomepage.php"><h3>Home</h3></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="Message.php"><h3>Messages</h3></a>
              </li>
                <li class="nav-item">
                    <a class="nav-link" href="../Student Login & Register 1/StudentLogin.php"><h3>Logout</h3></a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
        <h2 class="mb-4">Message</h2>
        <table class="styled-table" >
    <thead>
        <tr>
        
            <th><h5>Sr.no</h5></th>
            
            <th><h5>PlacementHead</h5></th>
            
            <th><h5>Message</h5></th>
            <th><h5>Date </h5></th>
            <th><h5>Reply</h5></th> 
        </tr>
     </thead>  

            

     <tbody>
     <?php
  
 
    include("../../conection.php");
    $s1=$_SESSION['sid'];
    static $c=1; 
    $sql="select * from Reply where sid='$s1' order by sid desc";
    $result=mysqli_query($con,$sql);
    while($row=mysqli_fetch_array($result))
    {
        echo"<tr><td>".$c."</td><td>Placement Head</td><td>".$row['Reply_message']."</td><td>".$row['Reply_date']."</td>";?><td><a href='./Feedback/feedback.php?sid=<?php echo $row['sid'];?>'>Reply</a></td><?php
        $c++;
    } 
    
         
        
      
     
    
   
    
 
?>


      </div>


		</div>

    <script src="../../Admin/Admin Login/js/jquery.min.js"></script>
    <script src="../../Admin/Admin Login/js/popper.js"></script>
    <script src="../../Admin/Admin Login/js/bootstrap.min.js"></script>
    <script src="../../Admin/Admin Login/js/main.js"></script>
  </body>
</html>