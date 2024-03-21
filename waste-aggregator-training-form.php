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
		<title>Waste4Meal - Waste Aggregator Training Form </title>
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
								<h1>Waste Aggregator Training Form</h1>
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
    $gender = $_POST["gender"];
    $dob = $_POST["dob"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $address = $_POST["address"];
    $state_residence = $_POST["state_residence"];
    $lga_residence = $_POST["lga_residence"];
    $country_residence = $_POST["country_residence"];

    // Define the path to your Excel file
    $excelFile = 'waste_aggregator_training_data.csv';

    // Check if the file exists, if not, create it and add headers
    if (!file_exists($excelFile)) {
        $excelHeader = ["Surname", "Firstname", "Other names", "Gender", "Date of Birth", "Email","Phone Number","Address", "State of residence", "Local goverment of residence","Country of residence"];
        $excelData[] = $excelHeader;
    } else {
        // If the file exists, load existing data
        $excelData = array_map('str_getcsv', file($excelFile));
    }

    // Add new form data
    $excelData[] = [$sur_name, $f_name, $o_name,$gender,$dob, $email, $phone,$address, $state_residence,$lga_residence,$country_residence];

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
		                <label for="gender" class="text-black">Gender <span class="text-danger">*</span></label><br>
		             <label> Male:  <input type="radio"  value="male" id="gender" name="gender"> </label> &nbsp; &nbsp;
		          <label>  Female:    <input type="radio"  value="female" id="gender" name="gender"></label>
		              </div>
		              <div class="col-md-6">
		                <label for="date" class="text-black">Date of Birth <span class="text-danger">*</span></label>
		                <input type="date" class="form-control" id="dob" name="dob" required>
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
		   
		   		   <div class="form-group">
		       <label for="address" class="text-black">Address <span class="text-danger">*</span></label>
		                <input type="text" class="form-control" id="address" name="address" placeholder="Home Address" required>
		            </div>

					<br>
					        <div class="form-group row">
		              <div class="col-md-6">
		                <label for="state_residence" class="text-black">State / Province of Residence <span class="text-danger">*</span></label>
		                <input type="text" class="form-control" id="state_residence" name="state_residence" required>
		              </div>
		              <div class="col-md-6">
		                <label for="lga_residence" class="text-black">Local Government of Residence<span class="text-danger">*</span></label>
		                <input type="text" class="form-control" id="lga_residence" name="lga_residence" required>
		              </div>
		            </div> <br>
       <div class="form-group">
		              <label for="country_residence" class="text-black">Country of Residence <span class="text-danger">*</span></label>
		              <select id="country_residence" name="country_residence" class="form-control" required>
		           		             
<option value="">Select Country...</option>
<option value="Afganistan">Afghanistan</option>
<option value="Albania">Albania</option>
<option value="Algeria">Algeria</option>
<option value="American Samoa">American Samoa</option>
<option value="Andorra">Andorra</option>
<option value="Angola">Angola</option>
<option value="Anguilla">Anguilla</option>
<option value="Antigua &amp; Barbuda">Antigua &amp; Barbuda</option>
<option value="Argentina">Argentina</option>
<option value="Armenia">Armenia</option>
<option value="Aruba">Aruba</option>
<option value="Australia">Australia</option>
<option value="Austria">Austria</option>
<option value="Azerbaijan">Azerbaijan</option>
<option value="Bahamas">Bahamas</option>
<option value="Bahrain">Bahrain</option>
<option value="Bangladesh">Bangladesh</option>
<option value="Barbados">Barbados</option>
<option value="Belarus">Belarus</option>
<option value="Belgium">Belgium</option>
<option value="Belize">Belize</option>
<option value="Benin">Benin</option>
<option value="Bermuda">Bermuda</option>
<option value="Bhutan">Bhutan</option>
<option value="Bolivia">Bolivia</option>
<option value="Bonaire">Bonaire</option>
<option value="Bosnia &amp; Herzegovina">Bosnia &amp; Herzegovina</option>
<option value="Botswana">Botswana</option>
<option value="Brazil">Brazil</option>
<option value="British Indian Ocean Ter">British Indian Ocean Ter</option>
<option value="Brunei">Brunei</option>
<option value="Bulgaria">Bulgaria</option>
<option value="Burkina Faso">Burkina Faso</option>
<option value="Burundi">Burundi</option>
<option value="Cambodia">Cambodia</option>
<option value="Cameroon">Cameroon</option>
<option value="Canada">Canada</option>
<option value="Canary Islands">Canary Islands</option>
<option value="Cape Verde">Cape Verde</option>
<option value="Cayman Islands">Cayman Islands</option>
<option value="Central African Republic">Central African Republic</option>
<option value="Chad">Chad</option>
<option value="Channel Islands">Channel Islands</option>
<option value="Chile">Chile</option>
<option value="China">China</option>
<option value="Christmas Island">Christmas Island</option>
<option value="Cocos Island">Cocos Island</option>
<option value="Colombia">Colombia</option>
<option value="Comoros">Comoros</option>
<option value="Congo">Congo</option>
<option value="Cook Islands">Cook Islands</option>
<option value="Costa Rica">Costa Rica</option>
<option value="Cote DIvoire">Cote D'Ivoire</option>
<option value="Croatia">Croatia</option>
<option value="Cuba">Cuba</option>
<option value="Curaco">Curacao</option>
<option value="Cyprus">Cyprus</option>
<option value="Czech Republic">Czech Republic</option>
<option value="Denmark">Denmark</option>
<option value="Djibouti">Djibouti</option>
<option value="Dominica">Dominica</option>
<option value="Dominican Republic">Dominican Republic</option>
<option value="East Timor">East Timor</option>
<option value="Ecuador">Ecuador</option>
<option value="Egypt">Egypt</option>
<option value="El Salvador">El Salvador</option>
<option value="Equatorial Guinea">Equatorial Guinea</option>
<option value="Eritrea">Eritrea</option>
<option value="Estonia">Estonia</option>
<option value="Ethiopia">Ethiopia</option>
<option value="Falkland Islands">Falkland Islands</option>
<option value="Faroe Islands">Faroe Islands</option>
<option value="Fiji">Fiji</option>
<option value="Finland">Finland</option>
<option value="France">France</option>
<option value="French Guiana">French Guiana</option>
<option value="French Polynesia">French Polynesia</option>
<option value="French Southern Ter">French Southern Ter</option>
<option value="Gabon">Gabon</option>
<option value="Gambia">Gambia</option>
<option value="Georgia">Georgia</option>
<option value="Germany">Germany</option>
<option value="Ghana">Ghana</option>
<option value="Gibraltar">Gibraltar</option>
<option value="Great Britain">Great Britain</option>
<option value="Greece">Greece</option>
<option value="Greenland">Greenland</option>
<option value="Grenada">Grenada</option>
<option value="Guadeloupe">Guadeloupe</option>
<option value="Guam">Guam</option>
<option value="Guatemala">Guatemala</option>
<option value="Guinea">Guinea</option>
<option value="Guyana">Guyana</option>
<option value="Haiti">Haiti</option>
<option value="Hawaii">Hawaii</option>
<option value="Honduras">Honduras</option>
<option value="Hong Kong">Hong Kong</option>
<option value="Hungary">Hungary</option>
<option value="Iceland">Iceland</option>
<option value="India">India</option>
<option value="Indonesia">Indonesia</option>
<option value="Iran">Iran</option>
<option value="Iraq">Iraq</option>
<option value="Ireland">Ireland</option>
<option value="Isle of Man">Isle of Man</option>
<option value="Israel">Israel</option>
<option value="Italy">Italy</option>
<option value="Jamaica">Jamaica</option>
<option value="Japan">Japan</option>
<option value="Jordan">Jordan</option>
<option value="Kazakhstan">Kazakhstan</option>
<option value="Kenya">Kenya</option>
<option value="Kiribati">Kiribati</option>
<option value="Korea North">Korea North</option>
<option value="Korea Sout">Korea South</option>
<option value="Kuwait">Kuwait</option>
<option value="Kyrgyzstan">Kyrgyzstan</option>
<option value="Laos">Laos</option>
<option value="Latvia">Latvia</option>
<option value="Lebanon">Lebanon</option>
<option value="Lesotho">Lesotho</option>
<option value="Liberia">Liberia</option>
<option value="Libya">Libya</option>
<option value="Liechtenstein">Liechtenstein</option>
<option value="Lithuania">Lithuania</option>
<option value="Luxembourg">Luxembourg</option>
<option value="Macau">Macau</option>
<option value="Macedonia">Macedonia</option>
<option value="Madagascar">Madagascar</option>
<option value="Malaysia">Malaysia</option>
<option value="Malawi">Malawi</option>
<option value="Maldives">Maldives</option>
<option value="Mali">Mali</option>
<option value="Malta">Malta</option>
<option value="Marshall Islands">Marshall Islands</option>
<option value="Martinique">Martinique</option>
<option value="Mauritania">Mauritania</option>
<option value="Mauritius">Mauritius</option>
<option value="Mayotte">Mayotte</option>
<option value="Mexico">Mexico</option>
<option value="Midway Islands">Midway Islands</option>
<option value="Moldova">Moldova</option>
<option value="Monaco">Monaco</option>
<option value="Mongolia">Mongolia</option>
<option value="Montserrat">Montserrat</option>
<option value="Morocco">Morocco</option>
<option value="Mozambique">Mozambique</option>
<option value="Myanmar">Myanmar</option>
<option value="Nambia">Nambia</option>
<option value="Nauru">Nauru</option>
<option value="Nepal">Nepal</option>
<option value="Netherland Antilles">Netherland Antilles</option>
<option value="Netherlands">Netherlands (Holland, Europe)</option>
<option value="Nevis">Nevis</option>
<option value="New Caledonia">New Caledonia</option>
<option value="New Zealand">New Zealand</option>
<option value="Nicaragua">Nicaragua</option>
<option value="Niger">Niger</option>
<option value="Nigeria">Nigeria</option>
<option value="Niue">Niue</option>
<option value="Norfolk Island">Norfolk Island</option>
<option value="Norway">Norway</option>
<option value="Oman">Oman</option>
<option value="Pakistan">Pakistan</option>
<option value="Palau Island">Palau Island</option>
<option value="Palestine">Palestine</option>
<option value="Panama">Panama</option>
<option value="Papua New Guinea">Papua New Guinea</option>
<option value="Paraguay">Paraguay</option>
<option value="Peru">Peru</option>
<option value="Phillipines">Philippines</option>
<option value="Pitcairn Island">Pitcairn Island</option>
<option value="Poland">Poland</option>
<option value="Portugal">Portugal</option>
<option value="Puerto Rico">Puerto Rico</option>
<option value="Qatar">Qatar</option>
<option value="Republic of Montenegro">Republic of Montenegro</option>
<option value="Republic of Serbia">Republic of Serbia</option>
<option value="Reunion">Reunion</option>
<option value="Romania">Romania</option>
<option value="Russia">Russia</option>
<option value="Rwanda">Rwanda</option>
<option value="St Barthelemy">St Barthelemy</option>
<option value="St Eustatius">St Eustatius</option>
<option value="St Helena">St Helena</option>
<option value="St Kitts-Nevis">St Kitts-Nevis</option>
<option value="St Lucia">St Lucia</option>
<option value="St Maarten">St Maarten</option>
<option value="St Pierre &amp; Miquelon">St Pierre &amp; Miquelon</option>
<option value="St Vincent &amp; Grenadines">St Vincent &amp; Grenadines</option>
<option value="Saipan">Saipan</option>
<option value="Samoa">Samoa</option>
<option value="Samoa American">Samoa American</option>
<option value="San Marino">San Marino</option>
<option value="Sao Tome &amp; Principe">Sao Tome &amp; Principe</option>
<option value="Saudi Arabia">Saudi Arabia</option>
<option value="Senegal">Senegal</option>
<option value="Serbia">Serbia</option>
<option value="Seychelles">Seychelles</option>
<option value="Sierra Leone">Sierra Leone</option>
<option value="Singapore">Singapore</option>
<option value="Slovakia">Slovakia</option>
<option value="Slovenia">Slovenia</option>
<option value="Solomon Islands">Solomon Islands</option>
<option value="Somalia">Somalia</option>
<option value="South Africa">South Africa</option>
<option value="Spain">Spain</option>
<option value="Sri Lanka">Sri Lanka</option>
<option value="Sudan">Sudan</option>
<option value="Suriname">Suriname</option>
<option value="Swaziland">Swaziland</option>
<option value="Sweden">Sweden</option>
<option value="Switzerland">Switzerland</option>
<option value="Syria">Syria</option>
<option value="Tahiti">Tahiti</option>
<option value="Taiwan">Taiwan</option>
<option value="Tajikistan">Tajikistan</option>
<option value="Tanzania">Tanzania</option>
<option value="Thailand">Thailand</option>
<option value="Togo">Togo</option>
<option value="Tokelau">Tokelau</option>
<option value="Tonga">Tonga</option>
<option value="Trinidad &amp; Tobago">Trinidad &amp; Tobago</option>
<option value="Tunisia">Tunisia</option>
<option value="Turkey">Turkey</option>
<option value="Turkmenistan">Turkmenistan</option>
<option value="Turks &amp; Caicos Is">Turks &amp; Caicos Is</option>
<option value="Tuvalu">Tuvalu</option>
<option value="Uganda">Uganda</option>
<option value="Ukraine">Ukraine</option>
<option value="United Arab Erimates">United Arab Emirates</option>
<option value="United Kingdom">United Kingdom</option>
<option value="United States of America">United States of America</option>
<option value="Uraguay">Uruguay</option>
<option value="Uzbekistan">Uzbekistan</option>
<option value="Vanuatu">Vanuatu</option>
<option value="Vatican City State">Vatican City State</option>
<option value="Venezuela">Venezuela</option>
<option value="Vietnam">Vietnam</option>
<option value="Virgin Islands (Brit)">Virgin Islands (Brit)</option>
<option value="Virgin Islands (USA)">Virgin Islands (USA)</option>
<option value="Wake Island">Wake Island</option>
<option value="Wallis &amp; Futana Is">Wallis &amp; Futana Is</option>
<option value="Yemen">Yemen</option>
<option value="Zaire">Zaire</option>
<option value="Zambia">Zambia</option>
<option value="Zimbabwe">Zimbabwe</option>    
		              </select>
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
