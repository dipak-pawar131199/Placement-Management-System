<?php

  session_start();
  include "../../conection.php";
  $cno=$_GET['cno'];
?>
<!doctype html>
<html lang="en">
  <head>
  	<title>Apply to company</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
		
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="./css/style.css">
    <style>
.vl {
  border-left: 6px solid green;
  height: 500px;
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
                    <a href="studentprofile.php">
                      Student Profile</a>
                </li>
                <li>
                    <a href="editprofile.php">Edit Profile</a>
                </li>
                
	            </ul>
	          </li>
	          <li>
	              <a href="viewcompanyandapply.php">Dashboard</a>
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
                    <a class="nav-link" href="../Student Login & Register 1/studenthomepage.html">
                    <h2>Home</h2></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="Message.php"><h2>Messages</h2></a>
              </li>
                <li class="nav-item">
                    <a class="nav-link" href="../Student Login & Register 1/StudentLogin.php"><h2>Logout</h2></a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
        
        <h2 class="mb-4">Application Form</h2>
          <div style="height:600px;width:1400px;overflow:auto;border:8px solid cyan;padding:2%;"> 
          <form action="" method=post style="font-size:23px " enctype="multipart/form-data" >
           
           

          
            
           
               
           
           <hr style="width:100%;text-align:left;margin-left:0 color:black">
           <hr style="width:100%;text-align:left;margin-left:0 color:black">
          
           <div class=form-group>
             <label>Exprience:</label>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp<input type=text name=exp >  
           </div>
           <hr style="width:100%;text-align:left;margin-left:0 color:black">
           <hr style="width:100%;text-align:left;margin-left:0 color:black">

           <div class=form-group>
             <label>S.S.C. Percesntage: </label>&nbsp &nbsp &nbsp <input type=text name=sscper >  
            
             <br><label>H.S.C. Percentage: </label>&nbsp&nbsp &nbsp&nbsp<input type=text name=hscper >  
           
            <br> <label>F.Y.B.Sc Percentage:</label> &nbsp  &nbsp&nbsp<input type=text name=fyper >  
              
            <br> <label>S.Y.B.Sc Percentage:</label>&nbsp &nbsp<input type=text name=syper >  
             
            <br> <label>T.Y.B.Sc Percentage:</label> &nbsp&nbsp &nbsp<input type=text name=typer >  
           </div>
           
         
           <div class=form-group>
             <label>CGPA M.Sc:</label>&nbsp&nbsp<input type=text name=cgpa >  
           </div>
           <hr style="width:100%;text-align:left;margin-left:0 color:black">
           <hr style="width:100%;text-align:left;margin-left:0 color:black">

           
          Any Gap:
          <div class="radio">
              <label><input type="radio" name="gap" value=No>   NO  </label>
         &nbsp&nbsp&nbsp
         
            <label><input type="radio" name="gap" value=Yes>    yes  </label>
           
          </div>
           <div class=form-group>    
               <label>Gap Reason:</label> <textarea name=rgap ></textarea>
           </div> 
           <hr style="width:100%;text-align:left;margin-left:0 color:black">
           <hr style="width:100%;text-align:left;margin-left:0 color:black">

           <div class=form-group>    
               <label>Project Details:</label> <textarea name=pdetails ></textarea>
           </div>
           <hr style="width:100%;text-align:left;margin-left:0 color:black">
           <hr style="width:100%;text-align:left;margin-left:0 color:black">
           <div class=form-group>    
               <label>Location :</label> <textarea name=ldetails
               ></textarea>
           </div>
           <div class="input-group">
  	         <label>Resume</label>
  	         <input type="file" name="uploadfile" >
		       </div>
           <div class="form-group">
  		     <input type="submit" class="button" name="submit1" value=submit Style=background:cyan></button>
  	       </div>
          
          
          </form>     
</div>
          
      </div>
		</div>
    </ul>

    <script src="../../Admin/Admin Login/js/jquery.min.js"></script>
    <script src="../../Admin/Admin Login/js/popper.js"></script>
    <script src="../../Admin/Admin Login/js/bootstrap.min.js"></script>
    <script src="../../Admin/Admin Login/js/main.js"></script>
  </body>
</html>  

<?php

if(isset($_POST['submit1']))
 {
   //define($apply_count);
  //$pno=$_POST['pno'];
  $exp=$_POST['exp'];
  $sscper=$_POST['sscper'];
  $hscper=$_POST['hscper'];
  $fyper=$_POST['fyper'];
  $syper=$_POST['syper'];
  $typer=$_POST['typer'];
  $cgpa=$_POST['cgpa'];
  $gap=$_POST['gap'];
  if($gap=="No")
  {
    global $gapreason;
    $gapreason="No Gap";
  }
  else
    {
      global $gapreason;
      $gapreason=$_POST['rgap'];
    }
  $pdetails=$_POST['pdetails'];
  $loc=$_POST['ldetails'];
  $sid=$_SESSION['sid'] ;
  $fname=$_FILES["uploadfile"]["name"];
  $status="";
  //validation for apply to company
  $r2=mysqli_query($con,"select * from application where sid='$sid'and cno='$cno'");
   echo mysqli_num_rows($r2);
  if(mysqli_num_rows($r2)==0)
  {
  $r1=mysqli_query($con,"select * from Student_Reg where sid='$sid'");
  while($row=mysqli_fetch_array($r1))
   {
     $status=$row['status'];
   }
  //echo $sid;
 
  if($status==="Not Selected" )
  {
        $result=mysqli_query($con,"INSERT INTO application(sid, cno, location, exprience, SSCPer, HSCPer, FYBSCPer_grade, SYBSCPer_grade, TYBSCPer_grade, MSC_grade, AnyGap, Gap_resaon, ProjectDetails,Resume) VALUES ('$sid','$cno','$loc','$exp','$sscper','$hscper','$fyper','$syper','$typer','$cgpa','$gap','$gapreason','$pdetails','$fname')");
        echo mysqli_error($con);
        if($result)
        { 
          $apply_count=1;
          echo "<script>alert('Application send sucessful');</script>";
        }
        else{
          echo mysqli_error($con);
            }
  }
  else{
    echo "<script>alert('you are already selected!!');</script>";
    
  }
  
 }
 else 
 {
   ?><script>alert("You already apply for this company");</script><?php
 }
}


?>