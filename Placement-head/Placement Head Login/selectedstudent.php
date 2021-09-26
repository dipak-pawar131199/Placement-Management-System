
<!doctype html>
<html lang="en">
  <head>
    <title>Selected Student</title>
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
	          
	          </li>
            <li>
              <a href="./headhomepage.html">Dashbord</a>
	          </li>
            <li>
              <a href="selectedstudent.php">Selected Student</a>
	          </li>
            <li>
      
	          </li>
            <li>
              <a href="./PlacementHeadLogin.html">Logout</a>
	          </li>
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
<h1>Selected Student Details</h1> 
<table class="styled-table" >
    <thead>
        <tr>
            <th><h3>Sr.no</h3></th>
            <th><h3>Student ID</h3></th>
            <th><h3>Student Name</h3></th>
            <th><h3>Email</h3></th>
            <th><h3>Mobile No.</h3></th>
            

        </tr>
    </thead>
    <tbody>
  <?php
    include("../../conection.php");
    //require_once __DIR__ . '../..//vendor/autoload.php';
    static $c=1;
    $sql="select * from Student_Reg Where Status='Selected'";
    $result=mysqli_query($con,$sql);
    $total=mysqli_num_rows($result);
    $html;
    if($total!=0)
   {
     while($res=mysqli_fetch_assoc($result))
     {
         //Company_Name,Criteri,Last_date,Discription
      echo"
    <tr>
     <td>".$c."</td>  
     <td>".$res['sid']."</td>
    <td>".$res['StudentName']."</td>
    <td>".$res['Email']."</td>
    <td>".$res['Mobile']."</td>
   
    </tr>

    ";

    $c++;
  }
 // $mpdf=new \Mpdf\Mpdf();
  //$mpdf->WriteHTML($html);
  //$file=time().'pdf';
  //$mpdf->output($file,'D');
}

  ?>
        <!-- and so on... -->
    </tbody>
</table>
<script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
