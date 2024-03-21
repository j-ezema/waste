<!-- /*
* Bootstrap 5
* Template Name: Furni
* Template Author: Untree.co
* Template URI: https://untree.co/
* License: https://creativecommons.org/licenses/by/3.0/
*/ -->
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="author" content="Untree.co">
  <link rel="shortcut icon" href="favicon.png">

  <meta name="description" content="" />
  <meta name="keywords" content="bootstrap, bootstrap4" />

		<!-- Bootstrap CSS -->
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
		<link href="css/tiny-slider.css" rel="stylesheet">
		<link href="css/style.css" rel="stylesheet">
		<title>Waste4Meal - Solo Farmer Form </title>
				<link href=”https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css” rel=”stylesheet” integrity=”sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC” crossorigin=”anonymous”>
<script src=”https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js” integrity=”sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM” crossorigin=”anonymous”></script>
	
		<style>
		.dropdown:hover .dropdown-menu {
      display: block;
}

		</style>
	</head>

	<body>

		<!-- Start Header/Navigation -->
	<nav class="custom-navbar navbar navbar navbar-expand-md navbar-dark bg-dark" arial-label="Furni navigation bar">

			<div class="container">
				<a class="navbar-brand" href="index"><img src="logo.png" height="80"></a>

				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsFurni" aria-controls="navbarsFurni" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse" id="navbarsFurni">
					<ul class="custom-navbar-nav navbar-nav ms-auto mb-2 mb-md-0">
						<li class="nav-item ">
							<a class="nav-link" href="index">Home</a>
						</li>
						<li><a class="nav-link" href="problem">The Problem</a></li>
						<li class="active"><a class="nav-link" href="about">About us</a></li>
							<li> <div class="dropdown"> <a class="nav-link dropdown" href="#" id="dropdownMenuLink" data-bs-toggle="dropdown"  aria-expanded="false">Join Us</a>
						    <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink"   style="background-color:#000;"> 
            <li><a class="dropdown-item" href="wiclup" style="color:black;">WICLUP Training </a> </li> 
            <li><a class="dropdown-item" href="solo-farmer"> BSF Farming Acquaintance Training (Online)</a>  </li> 
            <li><a class="dropdown-item" href="#"> BSF Farming Practical Training (Offline)</a> </li>   
			<li><a class="dropdown-item" href="waste-aggregator-training" style="color:black;">Waste Aggregator Training </a> </li> 
            <li><a class="dropdown-item" href="network-partner-trainer"> Network Partners Trainer</a>  </li> 
            <li><a class="dropdown-item" href="consultant"> Join as Consultant </a> </li> 
			<li><a class="dropdown-item" href="trainer" style="color:black;">Join as a Trainer </a> </li> 
            <li><a class="dropdown-item" href="support-service-provider">Join us as a Service Provider </a>  </li> 
            <li><a class="dropdown-item" href="project-host">Become a Project Host </a> </li> 
        </ul>  </div> 
						</li>
			
						<li><a class="nav-link" href="faq">FAQ</a></li>
						<li><a class="nav-link" href="contact">Contact us</a></li>
					</ul>

				</div>
			</div>
				
		</nav>
		<!-- End Header/Navigation -->

		<!-- Start Hero Section -->
			<div class="hero">
				
							<div class="intro-excerpt">
								<h1>Solo Farmer Form</h1>
							</div>
						</div>
						<div class="col-lg-7">
							
						</div>
			
		<!-- End Hero Section -->

		<div class="untree_co-section">
		    <div class="container">
	
		      <div class="row">
		        <div class="col-md-12 mb-5 mb-md-0">
		          <div class="p-3 p-lg-5 border bg-white">
		     	       		     <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $sur_name = $_POST["sur_name"];
    $f_name = $_POST["f_name"];
    $o_name = $_POST["o_name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];

    // Define the path to your Excel file
    $excelFile = 'solo_farmer_data.csv';

    // Check if the file exists, if not, create it and add headers
    if (!file_exists($excelFile)) {
        $excelHeader = ["Surname", "Firstname", "Other names", "Email", "Phone"];
        $excelData[] = $excelHeader;
    } else {
        // If the file exists, load existing data
        $excelData = array_map('str_getcsv', file($excelFile));
    }

    // Add new form data
    $excelData[] = [$sur_name, $f_name, $o_name, $email, $phone];

    // Write data to Excel file
    $file = fopen($excelFile, 'w');
    foreach ($excelData as $excelRow) {
        fputcsv($file, $excelRow);
    }
    fclose($file);

 ?>
<div class="alert alert-success" id="form-message-success"><?php
    echo "Form submitted successfully!";?></div>
                            <?php
}
?>
    <form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
		            <div class="form-group row">
		              <div class="col-md-4">
		                <label for="c_fname" class="text-black">Surname <span class="text-danger">*</span></label>
		                <input type="text" class="form-control" id="sur_name" name="sur_name" required>
		              </div>
		              <div class="col-md-4">
		                <label for="c_lname" class="text-black">First Name <span class="text-danger">*</span></label>
		                <input type="text" class="form-control" id="f_name" name="f_name" required>
		              </div> 
					  <div class="col-md-4">
		                <label for="c_lname" class="text-black">Other Names <span class="text-danger">*</span></label>
		                <input type="text" class="form-control" id="o_name" name="o_name" required>
		              </div>
		            </div>
				
					<div class="form-group row mb-5">
		              <div class="col-md-6">
		                <label for="c_email_address" class="text-black">Email Address <span class="text-danger">*</span></label>
		                <input type="email" class="form-control" id="c_email_address" name="email" required>
		              </div>
		              <div class="col-md-6">
		                <label for="c_phone" class="text-black">Phone <span class="text-danger">*</span></label>
		                <input type="text" class="form-control" id="phone" name="phone" placeholder="Phone Number" required>
		              </div>
		            </div>
		   
				

<br>

     <div class="input-group-append">
		                    <button class="btn btn-black btn-sm" type="submit" id="button-addon2">Apply</button>
		                  </div>
						</form>  
		                </div>

		              </div>
		            </div>

		          </div>
		        </div>
	
		      </div>
		      <!-- </form> -->
		    </div>
		  </div>

		<!-- Start Footer Section -->
			<footer class="footer-section">
			<div class="container relative">

			

				<div class="row g-5 mb-5">
					<div class="col-lg-4">
						<div class="mb-4 footer-logo-wrap"><a href="index" class="footer-logo"><img src="logo.png" height="60"></a></div>
						<p class="mb-4">Waste4Meal Impact Cluster (WICLUP) is a transformative initiative led by LarvaProt and Gonastocks Limited, dedicated to empowering 50,000 Africans through comprehensive training and support.</p>

					<!--	<ul class="list-unstyled custom-social">
							<li><a href="#"><span class="fa fa-brands fa-facebook-f"></span></a></li>
							<li><a href="#"><span class="fa fa-brands fa-twitter"></span></a></li>
							<li><a href="#"><span class="fa fa-brands fa-instagram"></span></a></li>
							<li><a href="#"><span class="fa fa-brands fa-linkedin"></span></a></li>
						</ul> -->
					</div>

					<div class="col-lg-8">
						<div class="row links-wrap">
							<div class="col-6 col-sm-6 col-md-4">
								<ul class="list-unstyled">
									<li><a href="about">About us</a></li>
									<li><a href="problem">The Problem</a></li>
									<li><a href="faq">FAQs</a></li>
									<li><a href="contact">Contact us</a></li>
								</ul>
							</div>

							<div class="col-6 col-sm-6 col-md-4">
								<ul class="list-unstyled">
									<li><a href="wiclup">WICLUP Training</a></li>
									<li><a href="waste-aggregator-training">Waste Aggregator Training</a></li>
									<li><a href="support-service-provider">Join us as a Service Provider</a></li>
									<li><a href="solo-farmer">Solo Farmer</a></li>
								</ul>
							</div>

							<div class="col-6 col-sm-6 col-md-4">
								<ul class="list-unstyled">
									<li><a href="network-partner-trainer">Network Partners Trainer</a></li>
									<li><a href="consultant">Join as Consultant</a></li>
									<li><a href="trainer">Join as a Trainer</a></li>
									<li><a href="project-host">Become a Project Host</a></li>
								</ul>
							</div>

				
						</div>
					</div>

				</div>

				<div class="border-top copyright">
					<div class="row pt-4">
						<div class="col-lg-6">
							<p class="mb-2 text-center text-lg-start">Copyright &copy;<script>document.write(new Date().getFullYear());</script> Waste4Meal. All Rights Reserved.
            </p>
						</div>

						<div class="col-lg-6 text-center text-lg-end">
							<ul class="list-unstyled d-inline-flex ms-auto">
								<li class="me-4"><a href="#">Terms &amp; Conditions</a></li>
								<li><a href="#">Privacy Policy</a></li>
							</ul>
						</div>

					</div>
				</div>

			</div>
		</footer>
		<!-- End Footer Section -->	

<script>
$(document).ready(function() {
      $('.dropdown').hover(function() {
        $(this).addClass('show');
        $(this).find('.dropdown-menu').addClass('show');
      }, function() {
        $(this).removeClass('show');
        $(this).find('.dropdown-menu').removeClass('show');
      });
});
</script>
		<script src="js/bootstrap.bundle.min.js"></script>
		<script src="js/tiny-slider.js"></script>
		<script src="js/custom.js"></script>
	</body>

</html>
