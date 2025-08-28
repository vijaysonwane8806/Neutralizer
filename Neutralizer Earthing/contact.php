<?php 
  if(isset( $_POST['submit'])){
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $flat = $_POST['flat'];
    $budget = $_POST['budget'];
    
    $to='propvalue.realtors@gmail.com';
    $subject='Form Submission';
    $message="Name: ".$name."\n"."Phone: ".$phone." \n"."Size Of flat: ".$flat."\n"."Budget: ".$budget;
    $header="From: ".$name;
    
    
    if (mail($to,$subject,$message,$header)){
           echo '<script>alert("SUCCESS! Thank you, We Will Contact You Shortly!")</script>';
    }else{
      echo "Invalid";
    }
    
    
  }
  ?>  
<!DOCTYPE html>
<html lang="en">

<head>
<title>Contact Form</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="icon" type="image/png" href="images/icons/favicon.ico" />

<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">

<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">

<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">

<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">

<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">

<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">

<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">

<link rel="stylesheet" type="text/css" href="css/util.css">
<link rel="stylesheet" type="text/css" href="css/main.css">
	<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-193160359-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-193160359-1');
</script>

</head>
<body>
<div class="container-contact100" style="background-image:url('images/cover.jpg');background-size: cover;">
		<div class="col-md-6 pb-5"  style="padding-top:-20%;">
			<h2 class="text-white"  style="font-size:30px;">Best-Buy Properties in Lowest rates 7 Proper Value</h2><br>
			<h1 class=" "  style="font-size:40px;color:#ffffff;">PROPVALUE GUARANTEE*</h1>	<br>
			<h4 class="text-white bg-success text-justify" style="font-size:19px;">JUST FILL THE ENQUIRY FORM BELOW AND OUR RELATIONSHIP MANAGER WILL CALL YOU SHORTLY</h4>
		</div>
	<div class="wrap-contact100 ">	
		<form  action="contact.php" class="contact100-form validate-form" method="POST" >
			<span class="contact100-form-title text">
			Say Hello!
			</span>
			<div class="wrap-input100 validate-input" data-validate="Name is required" >
			<span class="label-input100">Your Name</span>
			<input class="input100" type="text" name="name" placeholder="Enter your name" required>
			<span class="focus-input100"></span>
			</div>
			<div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz" >
			<span class="label-input100">Mobile No.</span>
			<input class="input100" type="number" name="phone" placeholder="Enter your phone number" required>
			<span class="focus-input100"></span>
			</div>
			<div class="wrap-input100  input100-select">
			<span class="label-input100">Size Of Flat</span>
			<div>
			<select class="selection-2 " name="flat" required>
			<option value="1 BHK">1 BHK</option>
			<option value="2 BHK">2 BHK</option>
			<option value="3 BHK">3 BHK</option>
			</select>
			</div>
			<span class="focus-input100"></span>
			</div>
			
			<div class="wrap-input100 validate-input" >
			<span class="label-input100">Approximate Budget</span>
			<input class="input100" type="text" name="budget" placeholder="Enter your Total Budget" required>
			<span class="focus-input100"></span>
			</div>
			<div class="container-contact100-form-btn">
			<div class="wrap-contact100-form-btn">
			<div class="contact100-form-bgbtn"></div>
			<button type="submit" name="submit" class="contact100-form-btn">
			<span>
			Submit
			<i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
			</span>
			</button>
			</div>
			</div>
		</form>
	</div>
</div>


<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	<a href="https://api.whatsapp.com/send?phone=+91 9833130000&text=Hello! PropValue Realtors." class="float" target="_blank">
	<i class="fa fa-whatsapp my-float"></i>
	</a>
<div id="dropDownSelect1"></div>

<script src="vendor/jquery/jquery-3.2.1.min.js"></script>

<script src="vendor/animsition/js/animsition.min.js"></script>

<script src="vendor/bootstrap/js/popper.js"></script>
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>

<script src="vendor/select2/select2.min.js"></script>
<script>
		$(".selection-2").select2({
			minimumResultsForSearch: 20,
			dropdownParent: $('#dropDownSelect1')
		});
	</script>

<script src="vendor/daterangepicker/moment.min.js"></script>
<script src="vendor/daterangepicker/daterangepicker.js"></script>

<script src="vendor/countdowntime/countdowntime.js"></script>

<script src="js/main.js"></script>

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>
</body>

</html>
