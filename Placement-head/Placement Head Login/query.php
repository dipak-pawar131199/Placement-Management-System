<?php
  session_start();
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

        <h2 class="mb-4">Query From Students(FeedbacK)</h2>
        
        
     
<table class="styled-table" >
    <thead>
        <tr>
        
            <th><h5>Sr.no</h5></th>
            <th><h5>Sid</h5></th>
            <th><h5>Student name</h5></th>
            <th><h5>Questions/Feedback</h5></th>
            <th><h5>Date </h5></th>
            <th><h5>Reply</h5></th>
            
        </tr>
     </thead>  

            

     <tbody>
     <?php
  
 
    include("../../conection.php");
    static $c=1; 
    $sql="select * from Feedback order by Fid desc";
    $result=mysqli_query($con,$sql);
    $total=mysqli_num_rows($result);
    if($total!=0)
    {
       while($row=mysqli_fetch_assoc($result))
       {
        $sid=$row['sid'];
        
        
        echo "<tr><td>".$c."</td><td>".$sid."</td><td>";
         $sql1="SELECT * FROM Student_Reg where sid='$sid' ";
         $r1=mysqli_query($con,$sql1);
         while($row1=mysqli_fetch_assoc($r1))
                   echo $row1['StudentName']."</td><td>";
         echo $row['Feeback']."</td><td>".$row['Feedbackdate']."</td><td>";?> <a href="reply.php?sid=<?php echo "$sid";?>">Reply</a></td></tr><?php
         $c++;
       }

    }
         
        
      
     
    
   
    
 
?>
     <!-- and so on... -->
    </tbody>
</table>

</div>
		</div>

    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>