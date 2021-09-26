<?php
global $sid;
$sid=$_GET['sid'];

session_start();
//$Fid=$_SESSION['Fid'];
?>
<!doctype html>
<html lang="en">
  <head>
  	<title>HeadHomePage</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
		
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="css/style.css">
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
  <body bgcolo="Blue">
		
		<div class="wrapper d-flex align-items-stretch bg-info">
			<nav id="sidebar">
				<div class="p-4 pt-5">
		  		<a href="#" class="img logo rounded-circle mb-5" style="background-image: url(images/logo.jpg);"></a>
	        <ul class="list-unstyled components mb-5">
	          
	          </li>
            <li>
              <a href="./headhomepage.html">Dashbord</a>
	          </li>
            <li>
              <a href="selectedstudent.php">Selected Student</a>
	          </li>
            <li>
              <a href="#">Contact Admin</a>
	          </li>
            <li>
              <a href="./PlacementHeadLogin.html">Logout</a>
	          </li>
    	</nav>

        <!-- Page Content  -->
      <div id="content" class="p-4 p-md-5">

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <div class="container-fluid">

            <button type="button" id="sidebarCollapse" class="btn btn-primary">
              <i class="fa fa-bars"></i>
              <span class="sr-only">Toggle Menu</span>
            </button>
            <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars"></i>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="nav navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#"><h3>Home</h3></a>
                </li>
                <li class="nav-item active">
                  <a class="nav-link" href="query.php"><h3>Message</h3></a>
              </li>
                <li class="nav-item">
                    <a class="nav-link" href="./PlacementHeadLogin.html"><h3>Logout</h3></a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
        <h2 class="mb-4">Sent Reply To Students</h2>
        <form id="form1" method="post" action="reply.php">
                      <h4>Student Id :</h4>
                      <input type=text name=sid1 value='<?php echo $sid;?>'/><h6 style=color:red>(do not change ID)</h6>
                          <br><h4>Reply Message:</h4>
                          <br><br>
                          <span id="sprytextarea1">
                            
                            <textarea name="replymsg" id="txtFeedback" cols="66" rows="10" aligen=left required></textarea>
                                                                           
                         <br>
                         <h4>Date</h4><input type=text value=<?php echo date("Y/m/d");?> name=date disabled>
                            <input type="submit" class=button name="button" id="button" value="Submit" />
</form>                    
 <?php

include("../../conection.php");
if(isset($_POST['button']))
{
 $sid1=$_POST['sid1'];
  $reply=$_POST['replymsg'] ;  
  //$date=$_POST['date'];
  $date=Date("Y/m/d");
  echo $sid1 .$reply .$date;  
  
  $sql="insert into Reply(sid,Reply_message,Reply_date)values ('$sid1','$reply','$date')";
  $result=mysqli_query($con,$sql);
  echo mysqli_error($con);
  if($result)
  {
    echo"<script>alert('Reply Send Successful');</script>";
  }
  
  
}
?>                          </tbody>
</table>

</div>
		</div>

    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>