<?php session_start(); //echo
include "../../conection.php";
$sid1= $_SESSION['sid'];
$qr=mysqli_query($con,"select * from Student_Reg where sid='$sid1'");
$row=mysqli_fetch_array($qr);
?>
<html>
<head>
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="./css/style.css">

</head>

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
  body {
    background: rgb(99, 39, 120)
}

.form-control:focus {
    box-shadow: none;
    border-color: #BA68C8
}

.profile-button {
    background: rgb(99, 39, 120);
    box-shadow: none;
    border: none
}

.profile-button:hover {
    background: #682773
}

.profile-button:focus {
    background: #682773;
    box-shadow: none
}

.profile-button:active {
    background: #682773;
    box-shadow: none
}

.back:hover {
    color: #682773;
    cursor: pointer
}

.labels {
    font-size: 11px
}

.add-experience:hover {
    background: #BA68C8;
    color: #fff;
    cursor: pointer;
    border: solid 1px #BA68C8
}
    </style>
    

<body>
		
<div class="wrapper d-flex align-items-stretch bg-primary">
			<nav id="sidebar">
				<div class="p-4 pt-5">
		  		<a href="#" class="img logo rounded-circle mb-5" style="background-image: url(images/logo.jpg);"></a>
	        <ul class="list-unstyled components mb-5">
	          <li class="active">
	            <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Profile</a>
	            <ul class="collapse list-unstyled" id="homeSubmenu">
                <li>
                    <a href="studentprofile.php"> Profile</a>
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

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
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
                    <a class="nav-link" href="./studenthomepage.php"><h3>Home</h3></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="Message.php"><h3>Messages</h3></a>
              </li>
                <li class="nav-item">
                    <a class="nav-link" href="../Student Login & Register 1/StudentLogin.php"><h3>Logout</h3></a>
                </li>
              </ul>
    
              </div>
              <form action="editprofile.php" method=post accept-charset="utf-8" enctype="multipart/form-data">
              <div class="row">
          
        <div class="col-md-5 border-right">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="text-right">Profile Settings</h4>
                </div>
                <div class="row mt-2">
                    <div class="col-md-6"><label class="labels">Name</label><input type="text" class="form-control"  name=name placeholder="Enter name" value="<?php echo $row[1];?>"></div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-12"><label class="labels">MobileNumber</label><input type="text" class="form-control" name=mno placeholder="enter mobile number" value="<?php echo $row[5];?>"></div>
                    <div class="col-md-12"><label class="labels">Address</label><input type="text" class="form-control" name=address placeholder="enter address" value="<?php echo $row[2];?>"></div>
                    <div class="col-md-12"><label class="labels">Email </label><input type="text" class="form-control" name=email placeholder="enter email id" value="<?php echo $row[4];?>"></div>
                    <div class="col-md-12"><label class="labels">Qulification</label><input type="text" class="form-control" name=quli placeholder="education" value="<?php echo $row[6];?>"></div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-6"><label class="labels">City</label><input type="text" class="form-control" name=city placeholder="city" value="<?php echo $row[3];?>"></div>
                  </div>
               
              </div>
        </div>
        <div class="col-md-4">
        <div class=col-md-6 ><label class=labels>Gender</label><input type=text name=gender placeholder=Gender value="<?php echo $row[7];?>"></div>
        <div class=col-md-6 ><label class=labels>BirthDate(yyyy-mm-dd)</label><input type=text name=dob placeholder="Birth Date" value="<?php echo $row[8];?>"></div>
        <br><div class=col-md-6 ><label class=labels>Status(if not selected then insert <b><u>"Not Selected"</u></b> else insert <b><u>"Selected"</u></b>): </label>&nbsp &nbsp<br> <input type="text" name="Status" placeholder="Enter your status" value="<?php echo $row[12];?>"> </div>

        <div class="mt-5 text-center"><input type=submit value=" Save Profile" class=button name=save></div>
           
        </div>
    </div>
</form>

</div>

</div>
            </div>
            
            <div class="container rounded bg-white mt-5 mb-5">
        </div>
        </nav>
    <script src="../../Admin/Admin Login/js/jquery.min.js"></script>
    <script src="../../Admin/Admin Login/js/popper.js"></script>
    <script src="../../Admin/Admin Login/js/bootstrap.min.js"></script>
    <script src="../../Admin/Admin Login/js/main.js"></script>
</body>
<?php

if(isset($_POST['save']))
{
    
 $name=$_POST['name'];
 $mno=$_POST['mno'];
 $add=$_POST['address'];
 $email=$_POST['email'];
 $quli=$_POST['quli'];
 $city=$_POST['city'];
 $gender=$_POST['gender'];
 $dob=$_POST['dob'];
 $sid=$_SESSION['sid'];
 $Status=$_POST['Status'];
 //
 
 /*
 $resume=$_FILES["uploadfile"]["name"];
 $tname=$_FILES["uploadfile"]["tmp_name"];
$uploads_dir="./images".$resume;
*/

  if($Status=="Not Selected")
  {
    $sql="UPDATE Student_Reg SET StudentName='$name',Address='$add',City='$city',Email='$email',Mobile='$mno',Qualification='$quli',Gender='$gender',BirthDate='$dob',Status='Not Selected' WHERE sid='$sid'";
    $result=mysqli_query($con,$sql);
   // UPDATE `Student_Reg` SET `sid`='[value-1]',`StudentName`='[value-2]',`Address`='[value-3]',`City`='[value-4]',`Email`='[value-5]',`Mobile`='[value-6]',`Qualification`='[value-7]',`Gender`='[value-8]',`BirthDate`='[value-9]',`UserName`='[value-10]',`PRN_NO`='[value-11]',`Pass`='[value-12]',`Satus`='[value-13]' WHERE 1

   
    if($result)
    {
        echo "<script>alert('Profile update sucessfully!!');</script>" ;
    }
    else
    {
        echo mysqli_error($con);
    }
  }
  else
  {
    $sql="UPDATE Student_Reg SET StudentName='$name',Address='$add',City='$city',Email='$email',Mobile='$mno',Qualification='$quli',Gender='$gender',BirthDate='$dob',Status='Selected' WHERE sid='$sid'";
    $result=mysqli_query($con,$sql);


   
    if($result)
    {
        echo "<script>alert('Profile update sucessfully!!');</script>" ;
    }
    else
    {
        echo mysqli_error($con);
    }  
  }    
}
?>