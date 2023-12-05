<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>About Us</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">   
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="#">
    <title>Home</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animsition.min.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

</head>

<body>

    <!-- Your page content (header, main content) -->
    <header id="header" class="header-scroll top-header headrom">
            <nav class="navbar navbar-dark">
                <div class="container">
                    <button class="navbar-toggler hidden-lg-up" type="button" data-toggle="collapse" data-target="#mainNavbarCollapse">&#9776;</button>
                    <a class="navbar-brand" href="index.php"> <img class="img-rounded" src="images/logo.png" alt=""> </a>
                        <style>
                            .navbar-brand img {
                                width: 250px; 
                                height: auto; 
                            }
                        </style>

                    <div class="collapse navbar-toggleable-md  float-lg-right" id="mainNavbarCollapse">
                        <ul class="nav navbar-nav">
                            <li class="nav-item"> <a class="nav-link active" href="index.php">Home <span class="sr-only">(current)</span></a> </li>
                            <li class="nav-item"> <a class="nav-link active" href="restaurants.php">Restaurants <span class="sr-only"></span></a> </li>
                            <li class="nav-item"> <a class="nav-link active" href="about.php">About <span class="sr-only"></span></a> </li>
                            
                           
							<?php
						if(empty($_SESSION["user_id"])) // if user is not login
							{
								echo '<li class="nav-item"><a href="login.php" class="nav-link active">Login</a> </li>
							  <li class="nav-item"><a href="registration.php" class="nav-link active">Register</a> </li>';
							}
						else
							{

									
									echo  '<li class="nav-item"><a href="your_orders.php" class="nav-link active">My Orders</a> </li>';
									echo  '<li class="nav-item"><a href="logout.php" class="nav-link active">Logout</a> </li>';
							}

						?>
							 
                        </ul>
						 
                    </div>
                </div>
            </nav>
    </header>

    <main>
        <!-- Main content (about us information) -->
        <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="profile-card">
                    <div class="profile-image">
                        <img src="your_profile_image.jpg" alt="Profile Image">
                    </div>
                    <h3 class="text-center">Vincent Padua</h3>
                    <p class="text-center">Owner</p>
                    <p>Vincent Padua, as the owner of JVM Kainan, embodies a visionary and passionate entrepreneur dedicated to 
                        delivering exceptional dining experiences. With an unwavering commitment to culinary excellence, 
                        Vincent curates an inviting ambiance where patrons can savor not just delicious meals but also the warmth 
                        of a welcoming environment.</p>
                    <p>Vincent Padua's dedication to his craft and his establishment cements JVM Kainan's reputation as a culinary 
                        destination that embraces tradition while embracing innovation.</p>

                        <div class="text-center">
                    <a href="https://www.facebook.com/Padua05" target="_blank" class="social-icon">
                        <i class="fab fa-facebook-square fa-2x"></i>
                    </a>
                    <a href="https://www.instagram.com/vncnt_5/" target="_blank" class="social-icon">
                        <i class="fab fa-instagram-square fa-2x"></i>
                    </a>
                    <a href="mailto:youremail@example.com" target="_blank" class="social-icon">
                        <i class="far fa-envelope fa-2x"></i>
                    </a>
                </div>
                </div>
            </div>
        </div>
    </div>

        <div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="profile-card">
                <div class="profile-image">
                    <img src="images/davidnoneck.jpg" alt="Profile Image">
                </div>
                <h3 class="text-center">Danniel David Raz</h3>
                <p class="text-center">Developer</p>
                <p>Daniel David Raz is a diligent and driven third-year student enrolled at Batangas State University pursuing a 
                    Bachelor of Science in Information Technology with a specialization in Business Analytics.
                He exhibits a keen interest in the intricate intersections of technology and business strategies, 
                showcasing a passion for analyzing data to derive meaningful insights that drive informed decision-making.
                </p>
                <div class="text-center">
                    <a href="https://www.facebook.com/Raz.David07" target="_blank" class="social-icon">
                        <i class="fab fa-facebook-square fa-2x"></i>
                    </a>
                    <a href="https://www.instagram.com/anyel_raz/" target="_blank" class="social-icon">
                        <i class="fab fa-instagram-square fa-2x"></i>
                    </a>
                    <a href="mailto:dannieldavid070@gmail.com" target="_blank" class="social-icon">
                        <i class="far fa-envelope fa-2x"></i>
                    </a>
                </div>

            </div>
        </div>
        <div class="col-md-6">
            <div class="profile-card">
                <div class="profile-image">
                    <img src="images/james.jpg" alt="Profile Image">
                </div>
                <h3 class="text-center">James Remuel Poblete</h3>
                <p class="text-center">Developer</p>
                <p>James Remuel Poblete is a diligent and driven third-year student enrolled at Batangas State University pursuing a 
                    Bachelor of Science in Information Technology with a specialization in Business Analytics.
                He exhibits a keen interest in the intricate intersections of technology and business strategies, 
                showcasing a passion for analyzing data to derive meaningful insights that drive informed decision-making.
                </p>
                <div class="text-center">
                    <a href="https://www.facebook.com/jremuel" target="_blank" class="social-icon">
                        <i class="fab fa-facebook-square fa-2x"></i>
                    </a>
                    <a href="https://www.instagram.com/i.mwel/" target="_blank" class="social-icon">
                        <i class="fab fa-instagram-square fa-2x"></i>
                    </a>
                    <a href="mailto:pobletejames27@gmail.com" target="_blank" class="social-icon">
                        <i class="far fa-envelope fa-2x"></i>
                    </a>
                </div>
                
            </div>
        </div>
    </div>
</div>

    

    <style>
        .profile-card {
            border: 1px solid #ccc;
            border-radius: 8px;
            padding: 20px;
            margin-bottom: 20px;
            margin-top: 100px;
        }

        .profile-image {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            overflow: hidden;
            margin: 0 auto 15px;
        }

        .profile-image img {
            width: 100%;
            height: auto;
        }
    </style>

    </main>
    <footer class="footer">
        <div class="container">
            <div class="bottom-footer">
                <div class="row">
                    <div class="col-xs-12 col-sm-6">
                        <iframe
                            width="100%"
                            height="350"
                            frameborder="0"
                            style="border:0"
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3872.4586362657856!2d121.11344479999998!3d13.9312755!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33bd12cd54b296cd%3A0xd5ec2cc63863deb2!2sJvm%20Eatery!5e0!3m2!1sen!2sph!4v1701777864960!5m2!1sen!2sph"
                            width="600"
                            height="450"
                            style="border:0;"
                            allowfullscreen=""
                            loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                    </div>
                    <div class="col-xs-12 col-sm-6">
                        <div class="address color-gray">
                            <h5>Address</h5>
                            <p>Purok 2 Banay-Banay San Vicente Ferrer Lipa City</p>
                            <h5>Phone: </h5>
                            <p>09123456789</p>
                        </div>
                        <div class="additional-info color-gray">
                            <h5>Additional Information</h5>
                            <p>Come and Eat with us here in JVM Kainan. Let's enjoy the hot and delicious Lomi. You may contact us via Phone Number or Email.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <<script src="js/jquery.min.js"></script>
    <script src="js/tether.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/animsition.min.js"></script>
    <script src="js/bootstrap-slider.min.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/headroom.js"></script>
    <script src="js/foodpicky.min.js"></script>

</body>

</html>
