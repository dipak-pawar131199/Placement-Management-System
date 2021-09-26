
<!doctype html>
<html lang="en">
  <head>
    <title>Add Company</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="./css/style.css">

    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="./css/style.css">
    <script>
      function show_confirm()
      {
        var r=confirm("I you want to delete company");
        if(r==true)
        {
          alert("Company deleted sucessfully!");
        }
        
      }
    </script>  
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
  */  </style>



  </head>
  <body>
    
    <div class="wrapper d-flex align-items-stretch  ">
      <nav id="sidebar">
        <div class="p-4 pt-5">
          <a href="#" class="img logo rounded-circle mb-5" style="background-image: url(https://www.seekpng.com/png/detail/138-1387819_admin-login-icon-png-number-four.png);"></a>
          <ul class="list-unstyled components mb-5">
            <li class="active">
            <li>
                    <a href="admihomepage.html">Dashboard</a>
                </li>
                <li>
                <a href="addCompany.php">Add Company</a>
            </li>
                <li>
                    <a href="applicationlist.php">Search Student By Comapny Name</a>
                </li>
               
            </li>
              <li>
                <a href="viewstudent.php">ALL Students</a>
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
            <h1>Edit Company Details</h1>
            <table class="styled-table" >
    <thead>
        <tr>
            <th><h3>Sr.no</h3></th>
            <th><h3>Company number</h3></th>
            <th><h3>Company Name</h3></th>
            <th><h3>Criteria</h3></th>
            <th><h3>Last Date To Apply</h3></th>
            <th><h3>Discription</h3></th>
            <th><h3>Operation </h3></th>

        </tr>
    </thead>
    <tbody>
  <?php
    //session_start();
    
    include("../../conection.php");
     static $c=1;
    $sql="select * from addcompany";
    $result=mysqli_query($con,$sql);
    $total=mysqli_num_rows($result);
    if($total!=0)
   {
     while($res=mysqli_fetch_assoc($result))
     {
        
         //Company_Name,Criteri,Last_date,Discription
      echo"
    <tr>
     <td>".$c."</td> 
     <td> ".$res['cno']."</td>
    <td>".$res['Company_Name']."</td>
    <td>".$res['Criteria']."</td>
    <td>".$res['Last_date']."</td>
    <td>".$res['Discription']."</td>"?>
    <td> <a href=updatecompany.php?edit=<?php echo $res['cno'];?> class=button>Update</a>  &nbsp &nbsp &nbsp &nbsp<a href='deletecompany.php?del=<?php echo $res['cno'];?> '  class=button style=background-color:red name=delete onclick=show_confirm()>Delete</a></td>
    </tr><?php ;

    $c++;
  }
}
  ?>
        <!-- and so on... -->
    </tbody>
</table>
</div>
             
    <script src="./js/jquery.min.js"></script>
    <script src="./js/popper.js"></script>
    <script src="./js/bootstrap.min.js"></script>
    <script src="./js/main.js"></script>
  </body>
</html>
<?php
 
?>
