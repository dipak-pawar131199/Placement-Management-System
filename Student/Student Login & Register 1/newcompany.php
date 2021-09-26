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
.button{
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
	              <a href="studenthomepage.php">Dashboard</a>
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
                    <a class="nav-link" href="../Student Login & Register 1/studenthomepage.html"><h3>Home</h3></a>
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

        <h1>New Company</h1>
        


        
        
        
        

        
        
        <table class="styled-table" >
    <thead>
        <tr>
            <th><h3>Sr.no</h3></th>
            
            <th><h3>Company Name</h3></th>
            <th><h3>Criteria</h3></th>
            <th><h3>Last Date To Apply</h3></th>
            <th><h3>Discription</h3></th>
            <th><h3>Operation</h3></th>

        </tr>
    </thead>
    <tbody>
  <?php
    include("../../conection.php");
    static $c=1;
    $sql="select * from addcompany order by cno DESC";
    $result=mysqli_query($con,$sql);
    $total=mysqli_num_rows($result);
    if($total!=0)
   {
     while($res=mysqli_fetch_assoc($result))
     {
         //Company_Name,Criteri,Last_date,Discription
       // $_SESSION['cno'] =$res[0]; 
       echo"
    <tr>
     <td>".$c."</td>  

    <td>".$res['Company_Name']."</td>
    <td>".$res['Criteria']."</td>
    <td>".$res['Last_date']."</td>
    <td>".$res['Discription']."</td>"?>
    <td> <a href=applycompany.php?cno=<?php echo $res['cno'];?> class=button>Apply</a> </td>
    </tr>

   <?php ;

    $c++;
  }
}
  ?>
        <!-- and so on... -->
    </tbody>
</table>




  

        <p></p>
    
    </div>
		</div>

    <script src="../../Admin/Admin Login/js/jquery.min.js"></script>
    <script src="../../Admin/Admin Login/js/popper.js"></script>
    <script src="../../Admin/Admin Login/js/bootstrap.min.js"></script>
    <script src="../../Admin/Admin Login/js/main.js"></script>
    </body>
    </html>