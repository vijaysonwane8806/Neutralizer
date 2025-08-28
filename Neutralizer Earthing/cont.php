<?php
$to = "your-email@example.com";
$subject = "Test Email";
$message = "This is a test email.";
$headers = "From: noreply@example.com";

if (mail($to, $subject, $message, $headers)) {
    echo "Email sent successfully!";
} else {
    echo "Failed to send email.";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Animated Contact Form</title>
    
    <!-- Bootstrap & Animate.css -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    
    <!-- Custom Styles -->
    <style>
        /* Full Page Background */
        body, html {
            height: 100%;
            margin: 0;
            background-color: #f8f9fa;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        /* Contact Form Box */
        .contact-box {
            background: white;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 600px;
            animation: fadeIn 1s ease-in-out;
        }

        /* Smooth Fade-in Animation */
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        /* Form Title */
        .contact-box h2 {
            font-weight: bold;
            text-align: center;
            margin-bottom: 20px;
            animation: bounceIn 1.2s ease-in-out;
        }

        /* Input Fields */
        .form-control {
            border-radius: 5px;
            height: 45px;
            transition: all 0.3s ease-in-out;
        }

        /* Textarea */
        textarea.form-control {
            height: 100px;
            resize: none;
        }

        /* Input Field Hover Effect */
        .form-control:focus {
            border-color: #ff7f00;
            box-shadow: 0 0 10px rgba(255, 127, 0, 0.3);
            transform: scale(1.02);
        }

        /* Submit Button */
        .btn-contact {
            width: 100%;
            padding: 10px;
            background-color: #ff7f00;
            border: none;
            color: white;
            font-size: 16px;
            font-weight: bold;
            border-radius: 5px;
            transition: all 0.3s ease-in-out;
            animation: fadeInUp 1s ease-in-out;
        }

        /* Button Hover Animation */
        .btn-contact:hover {
            background-color: #e66d00;
            transform: scale(1.05);
            box-shadow: 0 4px 10px rgba(230, 109, 0, 0.5);
        }

        /* Placeholder Animation */
        .contact__input::placeholder {
            opacity: 1;
            transition: opacity 0.3s ease-in-out;
        }

        .contact__input:focus::placeholder {
            opacity: 0;
        }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container">
    <a class="navbar-brand" href="index.php">Neutralizer Earthing</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link" href="index.php">Home</a>
        </li>

        <!-- Services Dropdown -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="servicesDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Services
          </a>
          <ul class="dropdown-menu" aria-labelledby="servicesDropdown">
            <li><a class="dropdown-item" href="earthing-installation.html">Earthing Installation</a></li>
            <li><a class="dropdown-item" href="lightning-protection.html">Lightning Protection</a></li>
            <li><a class="dropdown-item" href="grounding-solutions.html">Grounding Solutions</a></li>
          </ul>
        </li>

        <!-- Products Dropdown -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="productsDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Products
          </a>
          <ul class="dropdown-menu" aria-labelledby="productsDropdown">
            <li><a class="dropdown-item" href="gi-earthing-electrode.html">GI Earthing Electrode</a></li>
            <li><a class="dropdown-item" href="copper-earthing-electrode.html">Copper Earthing Electrode</a></li>
            <li><a class="dropdown-item" href="earthing-strips.html">Earthing Strips</a></li>
            <li><a class="dropdown-item" href="earthing-plate.html">Earthing Plates</a></li>
            <li><a class="dropdown-item" href="chemical-earthing.html">Chemical Earthing</a></li>
          </ul>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="contact.html">Contact Us</a>
        </li>
      </ul>
    </div>
  </div>
</nav>


<div class="contact-box animate__animated animate__fadeIn">
    <h2 class="animate__animated animate__bounceIn">Get In Touch</h2>
    <form name="contact" action="contactus.php" method="post">
        <div class="mb-3">
            <input required type="text" class="form-control contact__input" id="name" placeholder="Your Name*" name="name">
        </div>

        <div class="mb-3">
            <input required type="text" class="form-control contact__input" id="phone" placeholder="Phone Number*" name="phone">
        </div>

        <div class="mb-3">
            <input type="email" class="form-control contact__input" id="email" placeholder="Email*" name="email">
        </div>

        <div class="mb-3">
            <textarea name="message" class="form-control contact__input" id="message" placeholder="Your Message.."></textarea>
        </div>

        <button type="submit" name="submit" class="btn btn-contact animate__animated animate__fadeInUp">Submit</button>
    </form>
</div>

<!-- Bootstrap & jQuery -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
