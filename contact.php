<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the form fields
    $username = $_POST['username'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Validation (optional but recommended)
    if (empty($username) || empty($email) || empty($message)) {
        $error = "All fields are required.";
    } else {
        // Email content
        $to = "info@bamtfinishing.com";  // Your email address
        $subject = "New Contact Us Message";
        $messageBody = "
            <html>
            <head>
                <title>Contact Us Message</title>
            </head>
            <body>
                <p><strong>Name:</strong> $username</p>
                <p><strong>Email:</strong> $email</p>
                <p><strong>Message:</strong> $message</p>
            </body>
            </html>
        ";

        // Headers for the email
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-Type: text/html; charset=UTF-8" . "\r\n";
        $headers .= "From: $email" . "\r\n"; // Sender's email address
        $headers .= "Reply-To: $email" . "\r\n"; // Reply-to email

        // Send the email
        if (mail($to, $subject, $messageBody, $headers)) {
            $success = "Thank you for contacting us! Your message has been sent.";
        } else {
            $error = "There was an error sending your message. Please try again.";
        }
    }
}
?>

<?php include 'header.php'; ?>

<!-- CONTENT START -->
<div class="page-content">

    <!-- INNER PAGE BANNER -->
    <div class="wt-bnr-inr overlay-wraper" style="background-image:url(images/team2.jpeg);">
        <div class="overlay-main bg-black opacity-07"></div>
        <div class="container">
            <div class="wt-bnr-inr-entry">
                <!-- <h1 class="text-white">About 1</h1> -->
            </div>
        </div>
    </div>
    <!-- INNER PAGE BANNER END -->

    <!-- BREADCRUMB ROW -->                            
    <div class="bg-gray-light p-tb20">
        <div class="container">
            <ul class="wt-breadcrumb breadcrumb-style-2">
                <li><a href="index"><i class="fa fa-home"></i> Home</a></li>
                <li>Contact Us</li>
            </ul>
        </div>
    </div>
    <!-- BREADCRUMB ROW END -->

    <!-- SECTION CONTENT START -->
    <div class="section-full p-t80 p-b50">
        <div class="container">

            <!-- GOOGLE MAP & CONTACT FORM -->
            <div class="section-content m-b50">
                <div class="row">

                    <!-- LOCATION BLOCK-->
                    <div class="wt-box col-md-6">
                        <h4 class="text-uppercase">Location</h4>
                        <div class="wt-separator-outer m-b30">
                            <div class="wt-separator style-square">
                                <span class="separator-left site-bg-primary"></span>
                                <span class="separator-right site-bg-primary"></span>
                            </div>
                        </div>      
                        <div class="gmap-outline m-b30">
                            <div id="gmap_canvas" class="google-map">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126844.06688664311!2d3.3718269678549713!3d6.537202595662423!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x103bf98947c4885f%3A0xcdaf803812692e89!2sGreenland%20Estate%20Road%209!5e0!3m2!1sen!2sng!4v1739033874260!5m2!1sen!2sng" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        </div>  
                    </div>

                    <!-- CONTACT FORM-->
                    <div class="wt-box col-md-6">
                        <h4 class="text-uppercase">Contact Form</h4>
                        <div class="wt-separator-outer m-b30">
                            <div class="wt-separator style-square">
                                <span class="separator-left site-bg-primary"></span>
                                <span class="separator-right site-bg-primary"></span>
                            </div>
                        </div>

                        <div class="p-a30 bg-gray">
                            <form class="cons-contact-form" method="post" action="contact.php">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                                <input name="username" type="text" required class="form-control" placeholder="Name">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                                <input name="email" type="text" class="form-control" required placeholder="Email">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <div class="input-group">
                                                <span class="input-group-addon v-align-t"><i class="fa fa-pencil"></i></span>
                                                <textarea name="message" rows="1" class="form-control" required placeholder="Message"></textarea>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <button name="submit" type="submit" value="Submit" class="site-button m-r15">Submit  <i class="fa fa-angle-double-right"></i></button>
                                        <button name="reset" type="reset" value="Reset" class="site-button">Reset  <i class="fa fa-angle-double-right"></i></button>
                                    </div>

                                    <?php 
                                    // Display success or error message
                                    if (isset($success)) {
                                        echo '<div class="alert alert-success">'.$success.'</div>';
                                    }
                                    if (isset($error)) {
                                        echo '<div class="alert alert-danger">'.$error.'</div>';
                                    }
                                    ?>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>

            <!-- CONTACT DETAIL BLOCK -->
            <div class="section-content m-b30">
                <div class="row">
                    <div class="col-md-4 col-sm-12 m-b30">
                        <div class="wt-icon-box-wraper center p-a30 bg-secondry">
                            <div class="icon-sm text-white m-b10"><i class="iconmoon-smartphone-1"></i></div>
                            <div class="icon-content">
                                <h5 class="text-white">Phone number</h5>
                                <p class="text-gray-dark">+2348032503606</p>
                                <p class="text-gray-dark">+2348125927278</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12 m-b30">
                        <div class="wt-icon-box-wraper center p-a30 bg-secondry">
                            <div class="icon-sm text-white m-b10"><i class="iconmoon-email"></i></div>
                            <div class="icon-content">
                                <h5 class="text-white">Email address</h5>
                                <p>.</p>
                                <p class="text-gray-dark">info@bamtfinishing.com</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12 m-b30">
                        <div class="wt-icon-box-wraper center p-a30 bg-secondry">
                            <div class="icon-sm text-white m-b10"><i class="iconmoon-travel"></i></div>
                            <div class="icon-content">
                                <h5 class="text-white">Address info</h5>
                                <p class="text-gray-dark">KM 45, Lekki-Epe Expressway, Ayo Bus stop, Greenland Estate, Olokonla Ajah, Lagos State. Nigeria.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
    <!-- SECTION CONTENT END -->

</div>
<!-- CONTENT END -->

<?php include 'footer.php'; ?>
