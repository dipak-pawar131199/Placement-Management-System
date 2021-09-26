
<!doctype html>
<html lang="en">
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
                  <a href="../Admin Login/admihomepage.html">Dashboard</a>
                </li>
                <li>
                <a href="addCompany.php">Add Company</a>
            </li>
                <li>
                    <a href="applicationlist.php">Search Student By Company Name</a>
                </li>
                
             
            </li>
            
              <li>
                <a href="viewstudent.php">All Students</a>
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
<style>
  .form-group{
    margin:20px;
    font-size:1em;
    forground-color:rgb(0,0,0); 
  }
  .label{
     font-size:25px;
  }
</style>

      <form method="POST" action="" name=myform >
            <h1>ADD NEW Company</h1>
          <div class="form-group" >
            <label for="CompanyName".text-secondary><h4>Company Name</h4></label>
            <input type="text" class="form-control"  name="CompanyName" placeholder="Company Name" required>
          </div>
          <div class="form-group">
            <label for="Criteria"><h4>Criteria</h4></label>
            <input type="text" class="form-control" name="Criteria" placeholder="Criteria" required>
          </div>
          <div class="form-group">
            <label for="LastDate"><h4>Last Date to apply</h4></label>
            <input type="text" class="form-control" name="LastDate" placeholder="Last Date" required>
          </div>
          <div class="form-group">
            <label for="comment"><<h4>Discription</h4></label>
            <textarea class="form-control" id="comment" name="comment" rows="3" placeholder="Discription" require></textarea>
          </div>
          <button type="submit" class="btn btn-primary bt" name="addcompany1" onsumbit=" show_msg()">Add Company</button>
        </form>
  

    <script src="./js/jquery.min.js"></script>
    <script src="./js/popper.js"></script>
    <script src="./js/bootstrap.min.js"></script>
    <script src="./js/main.js"></script>
  </body>
</html>


<?php
  include("../../conection.php"); 
  
if(isset($_POST['addcompany1']))
{
$CompanyName=$_POST['CompanyName'];
$Criteria=$_POST['Criteria'];
$LastDate=$_POST['LastDate'];
$comment=$_POST['comment'];



$query="insert into addcompany(Company_Name,Criteria,Last_date,Discription) values('$CompanyName','$Criteria','$LastDate','$comment')";

$data=mysqli_query($con,$query);
if($data)
{
    ?>
       <script type="text/javascript">
        function show_msg()
          {
            
                alert("Company added sucessfully!!");
                return true;
          }
        </script>

    <?php
}

}
//INSERT INTO addcompany(Company_Name,Criteri,Last_date,Discription)VALUES('tcs','60%','2021-4-24','good for fresheres');
?>