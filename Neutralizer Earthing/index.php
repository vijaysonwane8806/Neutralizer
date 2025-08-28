<?php
    if(isset($_POST['send']))
    {
        $name = $_POST['name']; // Get Name value from HTML Form
        $mobile_no = $_POST['phone']; // Get Mobile No
        $msg = $_POST['message']; // Get Message Value
         
        $to = "propvalue.realtors@gmail.com"; // You can change here your Email
        $subject = "'$name' sent a mail from PropValue"; // This is your subject
         
        // HTML Message Starts here
        $message ="
        <html>
            <body>
                <table style='width:600px;'>
                    <tbody>
                        <tr>
                            <td style='width:150px'><strong>Name: </strong></td>
                            <td style='width:400px'>$name</td>
                        </tr>
                        <tr>
                            <td style='width:150px'><strong>Mobile No: </strong></td>
                            <td style='width:400px'>$mobile_no</td>
                        </tr>
                        <tr>
                            <td style='width:150px'><strong>Message: </strong></td>
                           <td style='width:400px'>$msg</td>
                        </tr>
                    </tbody>
                </table>
            </body>
        </html>
        ";
        // HTML Message Ends here
         
        // Always set content-type when sending HTML email
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
 
        // More headers
        $headers .= 'From: Admin <propvalue.realtors@gmail.com>' . "\r\n"; // Give an email id on which you want get a reply. User will get a mail from this email id
        // $headers .= 'Cc: vijaysonwane1432@gmail.com' . "\r\n"; // If you want add cc
        // $headers .= 'Bcc: vijaysonwane1432@gmail.com' . "\r\n"; // If you want add Bcc
         
        if(mail($to,$subject,$message,$headers)){
            // Message if mail has been sent
            echo "<script>
                    alert('Mail has been sent Successfully.');
                </script>";
        }
 
        else{
            // Message if mail has been not sent
            echo "<script>
                    alert('EMAIL FAILED');
                </script>";
        }
    }
?>

<!doctype html>
<html lang="en">
	
<head>
    <title>Home | Neutralizer Earthing </title>
    <!-- meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
	
	
	<!-- Main CSS -->
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/main.css">
	
	<!-- Slider CSS -->
	<link rel="stylesheet" href="css/animate.css">
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	
	<!--favicon -->
	
    <link rel="icon" type="image/png" sizes="192x192" href="images/favicon/favicon.ico">
	
	<!-- Font -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
	<script src="custom.js"></script>

	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700&amp;display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&amp;display=swap" rel="stylesheet">
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
	<!-- Add Animate.css for animations -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

	<script>
	$(document).ready(function(){
		$("#myModal").modal('show');
	});
</script>	
	
		<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-193160359-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-193160359-1');
  
  document.addEventListener("DOMContentLoaded", function () {
    let counters = document.querySelectorAll(".counter");
    let speed = 100; // Adjust speed here

    counters.forEach(counter => {
        let updateCount = () => {
            let target = +counter.getAttribute("data-count");
            let count = +counter.innerText;
            let increment = target / speed;

            if (count < target) {
                counter.innerText = Math.ceil(count + increment);
                setTimeout(updateCount, 30);
            } else {
                counter.innerText = target;
            }
        };
        updateCount();
    });
});
</script>

	
<style>
/* Carousel Styling */
.carousel-item {
    text-align: center;
}

/* Make all logos the same size */
.carousel-item img {
    width: 150px; /* Set a fixed width */
    height: 120px; /* Set a fixed height */
    object-fit: contain; /* Ensures images maintain aspect ratio */
    margin: auto;
    display: block;
	margin-top:20px;
	padding-bottom:-20px;
}

</style>	
	</head>
	<body>
	
		
	<!--Navigation-->
		<nav class="navbar navbar-expand-lg static-top fixed-top">
		  <div class="container">
			<a class="navbar-brand" href="index.php">
				  <img src="images/logo.png"  class="logo-img" width="100px" height="auto">
				</a>
			<button class="navbar-toggler pl-5 ml-5" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
				  <span class="navbar-toggler-icon"><img src="images/menu.png"></span>
				</button>
			<div class="collapse navbar-collapse" id="navbarResponsive">
			  <ul class="navbar-nav ml-auto ">
				<li class="nav-item">
				  <a class="nav-link active" href="index.php">Home
						<span class="sr-only">(current)</span>
					  </a>
				</li>
				<li class="nav-item ">
				  <a class="nav-link" href="about.html">About us</a>
				</li>
				<li class="nav-item">
				  <a class="nav-link" href="Products.html">Products</a>
				</li>
				<li class="nav-item">
				  <a class="nav-link" href="gallery.html">Gallery</a>
				</li>
				<li class="nav-item">
				  <a class="nav-link" href="career.html">Career</a>
				</li>
				<li class="nav-item">
				  <a class="nav-link" href="client.html">Clients</a>
				</li>
			  </ul>
			  <span class="navbar-text pl-3">						      											
				<a class="nav-link button-top" href="contactus.php" >Contact Us</a>
				</span>
			</div>
		  </div>
		</nav>

	<!--Navigation-->
	
	<section class="" id="headers">
            <div class="container" id="home">
			  <div class="row">
				
				<div class="col-lg-8 col-md-6 col-sm-6 xs-12 pt-5">
					<!-- Fade-in text with delay -->
					<p class="text-white animate__animated animate__fadeIn" style="animation-delay: 0.3s;">
						Neutralizer Earthing – Powering Safety with Precision Grounding
					</p>

					<!-- Slide-in heading from left -->
					<div class="title text-white">
						<h1 class="text-white pt-4 animate__animated animate__slideInLeft" style="animation-delay: 0.5s;">
							<b>WELCOME TO NEUTRALIZER EARTHING</b>
						</h1>
					</div>
				</div>

				<br>
				<div class="col-lg-4">
					<div class="bg-white" style="padding:25px;box-shadow:1px;">
						<h6 class="text-center pt-4" style="font-size:20px;">Enquire For Best Products</h6>
						<form action="index.php" method="post" class="col-12">
							<input type="text" name="name" placeholder="* Your Name" class="form-control">                                       
							<input type="number" name="phone" placeholder="* Your phone" class="form-control">                                  
							<textarea name="message" class="input-form form-control" placeholder="Messages.."></textarea>
							<button class="btn btn-success form-control text-white" name="send" type="submit">Send Message</button>                                        
                       </form>
                    </div>
				</div>
			  </div>
			 </div>
        </section>
		<!-- Header -->
		
		
	
	
	<!-- INFO -->
		<div class="ptb-100 pb-3 pt-5" id="service" data-scroll-index="4">
			<div class="container animated fadeIn">
				<div class="row pr-3 pl-3">
					<div class="col-md-12 order-md-0 order-1">
					
						<h3 class="text-center pb-5" >Best Earthing Solutions | GI Earthing Pipes, Copper Plates & Strips - Neutralizer Earthing</h3>
						<div class="row">
						
							<div class="">
								<p class="text text-justify">
									Established in 2010, Neutralizer Earthing is a leading manufacturer of GI Earthing Pipes, 
									Copper Earthing Plates, Earthing Strips, and more. We collaborate with trusted vendors who
									utilize state-of-the-art machinery to ensure precise production and seamless processes.
									Our team works closely to understand customer needs while maintaining strong business 
									relationships, enabling us to deliver high-quality products on time and at the most competitive prices.
									
								</p><br>
								<p class="text text-justify">
									Our products are manufactured using modern machinery and high-quality materials, 
									ensuring superior performance and durability. We work closely with our customers, 
									understanding their needs and delivering solutions at competitive prices.
									
								</p><br>
								
							</div>
						</div>
						
						
						
					</div>

					
				</div>
			</div>
					
		</div>
	<!-- info -->
	
	

		
		<!-- Listings -->
			<div class="text-center ptb-50 pt-5" id="listing" data-scroll-index="2">
				<div class="container  ">
					<div class="row d-flex align-items-center">
						<div class="col-md-12">
							<h2 class="text-center" >Our Products</h2>
						</div>
					
					</div>
					
					<div class="row text-white pt-4" >
						<div class="col-md-12">
							<div class="container contain">
							 <a href="#"><img src="images/photos/1.jpeg"></a>
							 <a href="#"><img src="images/photos/10.jpeg"></a>
							 <a href="#"><img src="images/photos/4.jpeg"></a>
							 <a href="#"><img src="images/photos/5.jpeg"></a>
							 <a href="#"><img src="images/photos/6.jpeg"></a>
							 <a href="#"><img src="images/photos/12.jpeg"></a>
							 <a href="#"><img src="images/photos/16.jpeg"></a>
							 <a href="#"><img src="images/photos/18.jpeg"></a>
							 <a href="#"><img src="images/photos/21.jpeg"></a>
							  
							</div>
						</div>
						 <div class="col-md-12 pt-4 ">
							<a href="products.html"><button class="btn btn-contact w-100 text-center bg-orange">More Products</button></a>
						</div>
					</div>
				</div>
			</div>
		<!-- Listings-->
	
	<!-- Events -->
		<div class="text-center ptb-50 pt-5" id="listing" data-scroll-index="2" style="background-color:#eaf2f8;">
			<div class="container ">
				<div class="row d-flex align-items-center">
					<div class="col-md-12">
						<h2 class="text-center" >Our Happy Clients</h2>
					</div>
				
				</div>

				<div class="row text-white pt-4" >
					<div class="col-md-12">
						<div class="container contain">
						  <img src="images/photos/1.jpeg">
						  <img src="images/photos/2.jpeg">
						  <img src="images/photos/5.jpeg">
						  <img src="images/photos/6.jpeg">
						  <img src="images/photos/12.jpeg">
						  <img src="images/photos/3.jpeg">	
						</div>
  
					</div>
					 <div class="col-md-12 pt-4 ">
							<a href="gallery.html"><button class="btn btn-contact text-center bg-orange">Read More</button></a>
						</div>
				</div>
			</div>
		</div>
	<!-- Events-->
	
	<!-- Videos-->
	<div class="text-center ptb-50 pt-5" id="listing" data-scroll-index="2">
			<div class="container ">
				<div class="row d-flex align-items-center">
					<div class="col-md-12">
						<h2 class="text-center pb-3" >Neutralizer Earthing Video</h2>
					</div>
				
				</div>

				<div class="video-container pt-6">
					<video controls>
						<source src="video.mp4" type="video/mp4">
						Your browser does not support the video tag.
					</video>
				</div>
			</div>
		</div>

			<!-- Google Map -->
            <div class="col-md-12 pt-5">
                <iframe src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d3778.807355904251!2d74.183888!3d18.717441!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zMTjCsDQzJzAyLjgiTiA3NMKwMTEnMDIuMCJF!5e0!3m2!1sen!2sin!4v1742703608866!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>

<div class="container text-center pb-3">
    <div class="row blog">
        <div class="col-md-12">
            <div id="blogCarousel" class="carousel slide" data-ride="carousel">
                <!-- Carousel items -->
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row">
                            <div class="col-md-3 col-6">
                                <a href="#"><img src="images/logo/tata.png" alt="Tata"></a>
                            </div>
                            <div class="col-md-3 col-6">
                                <a href="#"><img src="images/logo/acc.png" alt="ACC"></a>
                            </div>
                            <div class="col-md-3 col-6">
                                <a href="#"><img src="images/logo/adani.png" alt="Adani"></a>
                            </div>
                            <div class="col-md-3 col-6">
                                <a href="#"><img src="images/logo/apollo.png" alt="Apollo"></a>
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <div class="row">
                            <div class="col-md-3 col-6">
                                <a href="#"><img src="images/logo/bajaj.png" alt="Bajaj"></a>
                            </div>
                            <div class="col-md-3 col-6">
                                <a href="#"><img src="images/logo/metro.png" alt="Metro"></a>
                            </div>
                            <div class="col-md-3 col-6">
                                <a href="#"><img src="images/logo/mahindra.png" alt="Mahindra"></a>
                            </div>
                            <div class="col-md-3 col-6">
                                <a href="#"><img src="images/logo/jcb.png" alt="JCB"></a>
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <div class="row">
                            <div class="col-md-3 col-6">
                                <a href="#"><img src="images/logo/cidco.png" alt="CIDCO"></a>
                            </div>
                            <div class="col-md-3 col-6">
                                <a href="#"><img src="images/logo/genco.png" alt="Genco"></a>
                            </div>
                            <div class="col-md-3 col-6">
                                <a href="#"><img src="images/logo/ultratech.png" alt="Ultratech"></a>
                            </div>
                            <div class="col-md-3 col-6">
                                <a href="#"><img src="images/logo/pmc2.png" alt="PMC"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--.carousel-inner-->
            </div>
            <!--.Carousel-->
        </div>
    </div>
</div>

	 
	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	<a href="https://api.whatsapp.com/send?phone=+91 8888081731&text=Hello! Neutralizer Earthing." class="float" target="_blank">
	<i class="fab fa-whatsapp my-float"></i>
	</a>
	<!-- Footer -->
	<div class="text-center ptb-50 pt-3" id="footer">
		
		<div class="container">	
			<div class="row">
				<div class="col-md-4 text-left quicklinks pt-1 pt-md-3">
					<p class="subtitle pb-2">Our Bussinesses</p>
					<a href="#">Neutralizer Earthing </a>
					<a href="#">A K Engineering</a>
					<a href="#">VPS Electrotech</a>
					<a href="#">A G Borewells</a>
					<a href="#">Tech Udyam</a>
				</div>
				
				<div class="col-md-4 text-left quicklinks pt-1 pt-md-3">
					<p class="subtitle pb-2">Bank Details</p>
					<li class="text-white py-2">HDFC BANK</li>
					<li class="text-white py-2">IFSC: HDFC0004888</li>
					<li class="text-white py-2">A/C Name: NEUTRALIZER EARTHING</li>
					<li class="text-white py-2">A/C No: 50200050185758</li>
					<li class="text-white py-2">GST Number: 27CJAPG4985M1ZP</li>
					
				</div>
				
				<div class="col-md-4 text-left quicklinks text-white pt-1 pt-md-3">
					<p class="subtitle pb-2">Connect With Us</p>
					<li class="text-white py-2"><i class="fa fa-envelope" style="font-size:20px;"></i><span class="pl-3">neutralizerearthings@gmail.com</span></li>
   					<li class="text-white py-2"><i class="fa fa-phone" style="font-size:25px;"></i><span class="pl-3">+91 8888081731</span></li>
					

					<!-- Follow Us Section -->
					<p class="subtitle pt-2">Follow Us</p>
					<div class="social-icons text-center">
						<a href="https://facebook.com/" target="_blank" class=" text-dark"><i class="fab fa-facebook-f"></i></a>
						<a href="https://linkedin.com/" target="_blank" class="text-dark"><i class="fab fa-linkedin-in"></i></a>
						<a href="https://twitter.com/" target="_blank" class="text-dark"><i class="fab fa-twitter"></i></a>
						<a href="https://instagram.com/" target="_blank" class="text-dark"><i class="fab fa-instagram"></i></a>
						<a href="https://youtube.com/" target="_blank" class="text-dark"><i class="fab fa-youtube"></i></a>
					</div>
				</div>

			</div>

			<div class="row">
				<div class="col-md-12">
					<p class="copyright mt-3 pt-3 mb-1 pb-1">copyright &copy; 2025 <i class="fa fa-heart" style="color:red;"></i> Neutralizer Earthing</p>
				</div>
			</div>
		</div>
	</div>

	 

    <!-- JavaScript -->
	<script src="js/jquery-3.4.1.min.js"></script>
	<script src="js/scrollIt.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/wow.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/js/all.min.js"></script>

	
	<!-- custom scripts -->
    <script src="js/script.js"></script>
    <script>
		$(document).ready(function(){
	$('.form-input').on('keyup, paste, cut, focusout', function(){
		var $parent = $(this).parents('.form-line');
		var input_value = $.trim($(this).val());
		var required = $(this).is(':required');

		if (input_value.length > 0) {
			$parent.find('label').addClass('top');

			$parent
				.removeClass('error')
				.addClass('success');
		}	else {
			$parent.find('label').removeClass('top');
			$parent.removeClass('success')

			if (required) {
				$parent.addClass('error');
			}
		}
	});
});
	</script>
	<script>
		$('.brand-carousel').owlCarousel({
		  loop:true,
		  margin:10,
		  autoplay:true,
		  responsive:{
			0:{
			  items:1
			},
			600:{
			  items:3
			},
			1000:{
			  items:5
			}
		  }
		}) 

	</script>
	<script>
		// optional
		$('#blogCarousel').carousel({
				interval: 5000
		});

	</script>
	<script>
		$(document).ready(function(){
  $('.toggle').click(function(){
    $('.sidebar-contact').toggleClass('active')
    $('.toggle').toggleClass('active')
  })
})

	</script>
	
    
   
	</body>

</html>