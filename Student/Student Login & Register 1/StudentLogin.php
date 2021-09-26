<!--
	Student login 
-->
<!DOCTYPE html>
<html>
<head>
<style>
			.navbar-dark{
			background:black;	
			}
			
	</style> 
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  <link rel="stylesheet" type="text/css" href="style1.css">
</head>
<body style=background:grey>
<nav class="navbar navbar-expand-lg navbar-dark  ">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><span class="mb-0 h1">Placement Manegment system</span></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse " id="navbarNav">
      <ul class="navbar-nav ms-auto">
	      <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="../../index.php"><span class="mb-0 h3">Home</span></a>
        </li> 
	      <li class="nav-item">
          <a class="nav-link " aria-current="page" href="../../Admin/Admin Login/AdminLogin.html"><span class="mb-0 h3">Admin</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./StudentLogin.php"><span class="mb-0 h3">Student<span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../../Placement-head/Placement Head Login/PlacementHeadLogin.html"><span class="mb-0 h3">Placement Head</span></a>
        </li>
   </div>
</div> 
</nav> 
<div class="header">
  	<h2>Student Login</h2>
  </div>
	 
  <form method="post" action="studentAuthenticate.php">
  
     <div class="input-group">
  		<label>Username</label>
  		<input type="text" name="username1" required >
  	</div>
  	<div class="input-group">
  		<label>Password</label>
  		<input type="password" name="password1" required>
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="login_user">Login</button>
  	</div> 
	   
  	<p>
  		Not yet a member? <a href="StudentRegistration.php">Sign up</a>
  	</p>
  </form>
  <footer class="bg-dark footer-dark text-center text-white">
  <!-- Grid container -->
  <div class="container p-4">


    <!-- Section: Links -->
    <section class="">
      <!--Grid row-->
      <div class="row">
        <!--Grid column-->
        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
          <h5 class="text-uppercase">Navigation</h5>

          <ul class="list-unstyled mb-0">
            <li>
              <a href="../../index.php" class="text-white">Home</a>
            </li>
            <li>
              <a href="./StudentLogin.php " class="text-white">Student Login</a>
            </li>
            <li>
              <a href="./../../Admin/Admin Login/AdminLogin.html" class="text-white">Admin Login</a>
            </li>
			
			 <li>
              <a href="./../../Placement-head/Placement Head Login/PlacementHeadLogin.html" class="text-white">Head Login</a>
            </li>
          </ul>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
          <h5 class="text-uppercase">Members</h5>

          <ul class="list-unstyled mb-0">
            <li>
              <a href="#!" class="text-white">Placement Support</a>
            </li> <li>
              <a href="#!" class="text-white">Student Support</a>
            </li>
            <li>
              <a href="#!" class="text-white">Faculty Support</a>
            </li>
          </ul>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
          <h5 class="text-uppercase">Contact Us</h5>
			<p>Fergusson College, F.C. Road, Pune 411004</p>

			<p>	Phone Number</p>
				<p>020-67656000</p><br>
				<p>E-mail Id</p>
				<p>principal@fergusson.edu</p>

          
        </div>
        <!--Grid column-->
		<div class="col-lg-3 col-md-6 mb-4 mb-md-0">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3783.256097716251!2d73.83942901484266!3d18.517325687410917!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc2c07f4daa097f%3A0xce339b60765d5009!2sFergusson%20College%20Rd%2C%20Pune%2C%20Maharashtra!5e0!3m2!1sen!2sin!4v1629371513749!5m2!1sen!2sin" width="350" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
			
			</div>
			

      </div>
      <!--Grid row-->
    </section>
    <!-- Section: Links -->
  </div>
  <!-- Grid container -->
  
  
	        

</footer>

</body>
</html>
