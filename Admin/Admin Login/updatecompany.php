<?php
   include("../../conection.php"); 
  //error_reporting(0);
$cno=$_GET['edit'];
//$query="UPDATE addcompany SET  Company_Name='$CompanyName',Criteri='$Criteria',Last_date='$LastDate',Discription='$comment' WHERE cno='$cno' ";
//$cna=$_GET['cn'];
$sql1="select * from addcompany where cno='$cno'";
$result=mysqli_query($con,$sql1);
$t=mysqli_num_rows($result);
if($t!=0)
  {  while($result1=mysqli_fetch_array($result))
      {
        $cna=$result1['Company_Name'];
        //$cna=$_GET[''];
        $cri=$result1['Criteria'];
        $ld=$result1['Last_date'];
        $disc=$result1['Discription'];
      }
  }
?>
<html>
<body>
<head>
    <title>Add Company</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="./css/style.css">

    


  </head>
  <body>
    
    <div class="wrapper d-flex align-items-stretch  ">
      <nav id="sidebar">
        <div class="p-4 pt-5">
          <a href="#" class="img logo rounded-circle mb-5" style="background-image: url(https://www.seekpng.com/png/detail/138-1387819_admin-login-icon-png-number-four.png);"></a>
          <ul class="list-unstyled components mb-5">
            <li class="active">
              <li>
                    <a href="./admihomepage.html">Dashboard</a>
                </li>
                <li>
                <a href="addCompany.php">Add Company</a>
            </li>
                <li>
                    <a href="applicationlist.php">Search Student By Comapny Name</a>
                </li>
             
            </li>
            <li>
                <a href="AllStudent.php">ALL Students</a>
            </li>
            
			<li>
                <a href="viewcompany.php">View All Company</a>
            </li>
            <li>
              <a href="../Admin Login/editcompany.php">Edit Company</a>
            </li>
            
            <li>
            
            </li>
            <li>
              <a href="../Admin Login/AdminLogin.html">LogOut</a>
	          </li>
          </ul>
      </nav>

        <!-- Page Content  -->
      <div id="content" class="p-4 p-md-5">

        <nav class="navbar navbar-expand-lg navbar-light bg-info">
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
                    <a class="nav-link" href="../Admin Login/admihomepage.html"><h2>Home</h2></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="AdminLogin.html"><h2>Logout</h2></a>
                </li>
              </ul>
            </div>
          </div>
        </nav>

<form method="GET" action="updatecompany.php">
            <h1>Update Company</h1>
          <div class="form-group">
     
            <label for="CompanyName">ID</label>
            <input type="text" class="form-control"  name="cno1" value="<?php echo"$cno";?>" placeholder="" required>
          </div>
                   <div class="form-group">
            <label for="CompanyName">Company Name</label>
            <input type="text" class="form-control"  name="CompanyName" value="<?php echo"$cna";?>" placeholder="Company Name" required>
          </div>
          <div class="form-group">
            <label for="Criteria">Criteria</label>
            <input type="text" class="form-control" name="Criteria" value="<?php echo"$cri";?>" placeholder="Criteria" required>
          </div>
          <div class="form-group">
            <label for="LastDate">Last Date to apply</label>
            <input type="calender" class="form-control" name="LastDate" value="<?php echo"$ld";?>" placeholder="Last Date" required>
          </div>
          <div class="form-group">
            <label for="comment">Discription</label>
            <textarea class="form-control" id="comment" name="comment"  rows="3" placeholder="Discription"><?php echo"$disc";?></textarea>
          </div>
          <button type="submit" class="btn btn-primary bt" name="addcompany2">Update Company</button>
        </form>
<?php




if(isset($_GET['addcompany2']))
{
  //$cno=$_r['edit'];
  $CompanyName=$_GET['CompanyName'];
  $Criteria=$_GET['Criteria'];
  $LastDate=$_GET['LastDate'];
  $comment=$_GET['comment'];
$cno1=$_GET['cno1'];
$sql="UPDATE addcompany SET Company_Name='$CompanyName',Criteria='$Criteria',Last_date='$LastDate',Discription='$comment' WHERE cno='$cno1'"; 
     // "UPDATE addcompany SET Company_Name='$CompanyName',Criteri='$Criteria',Last_date='$LastDate',Discription='$comment' WHERE 1 
$data=mysqli_query($con,$sql);
echo mysqli_error($con);
//echo $t1=mysqli_num_rows($data);
if($data)
{
  
  echo"Update";

}
else
{
  echo mysqli_error($con);
	echo"Failed to update record";
 
}
}

?>
<script src="./js/jquery.min.js"></script>
    <script src="./js/popper.js"></script>
    <script src="./js/bootstrap.min.js"></script>
    <script src="./js/main.js"></script>
  </body>
</html>
</html>