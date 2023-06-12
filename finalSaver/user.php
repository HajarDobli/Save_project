<?php
    session_start(); 
    if(!isset($_SESSION['monlogin'])) header('location: login-register-main/logout.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>save-association-by-KNH</title>

    <!-- FAVICON -->
    <link rel="icon" type="image/png" href="images/favicon.png">

    <!-- Bootstrap 5 CDN Links -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- Custom File's Link -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive-style.css">
   
</head>

<body data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="100">
 <div class="popup-container" id="blur">
  <div class="content">
     <!-- Navbar section --> 
     <header class="header_wrapper">
        <nav class="navbar navbar-expand-lg">
            <div class="container">
              <a class="navbar-brand" href="#">
                  <img decoding="async" src="images/logoo1.png" class="img-fluid" >
              </a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <!-- <span class="navbar-toggler-icon"></span> -->
                <i class="fas fa-stream navbar-toggler-icon"></i>
              </button>
              <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav  menu-navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#about">About</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#categories">Categories</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#team">Team</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#gallery">Gallery</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#testimonial">Testimonial</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#blog">Blog</a>
                  </li>
                  <li class="nav-item mt-3 mt-lg-0">
                    <a class="nav-link" href="#contact">Contact</a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
     </header>



     <!-- Navbar section exit -->

     <!-- Banner section --> 
  
     <section id="home" class="home">
        <div class="banner_wrapper wrapper" >
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6 order-md-1 order-2">
                        <h3>Every donation</h3>
                        <h1>counts</h1>
                        <p>Join us in improving the lives of children under 18 years old - because every child deserves a chance to thrive.</p>
                        <a href="#donate" class="main-btn mt-4 fill-btn" onclick="toggle()">Donate now</a>
                        <a href="#info" class="main-btn mt-4 ms-3">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
        <div id ="info" class="wrapper pb-0">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-6 mb-4">
                        <div class="card text-center">
                            <div class="icon-box">
                                <img decoding="async" src="./images/top-banner-img/Our mission.png">
                            </div>
                            <div>
                                <h4 id="mission">Our Mission</h4>
                                <p>
                                  Our organization is dedicated to improving the lives of children under 18 years old. We believe that every child deserves a chance to thrive, regardless of their circumstances. Our mission is to provide children with access to the resources they need to lead healthy, happy, and fulfilling lives.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 mb-4">
                        <div class="card text-center">
                            <div class="icon-box">
                                <img decoding="async" src="./images/top-banner-img/choice (1).png">
                            </div>
                            <div>
                                <h4>Why Choose Us</h4>
                                <p>There are many charities out there, but we believe that our organization stands out for several reasons. First and foremost, we have a track record of success. Over the years, we have helped thousands of children overcome obstacles and achieve their full potential. We are also committed to transparency and accountability. We take great care to ensure that donations are used effectively and efficiently. Finally, we have a passionate and dedicated team of staff and volunteers who are committed to our mission.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 mb-4">
                        <div class="card text-center">
                            <div class="icon-box">
                                <img decoding="async" src="./images/top-banner-img/help.png">
                            </div>
                            <div>
                                <h4>Who We Help</h4>
                                <p>Our organization is focused exclusively on helping children under 18 years old. We understand that childhood can be a difficult time, and we want to provide support and guidance to those who need it most. We work with children from all backgrounds, including those who are living in poverty, those who are facing health challenges, and those who are struggling with social or emotional issues. Our goal is to ensure that every child has the opportunity to reach their full potential.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
     </section>
  
     <!-- Banner section exit -->
     <!-- About section --> 
     <section id="about" class="about_wrapper wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mb-mb-0 mb-5">
                    <div class="position-relative">
                        <img decoding="async" src="./images/about/bganimationn.png" class="img-fluid">
                        <img decoding="async" src="./images/about/animationn.png" class="about-animate">
                    </div>
                </div>
                <div class="col-md-6 text-center text-md-start">
                    <h2>Welcome dear Saver!</h2>
                    <p> SAVE is a charity association dedicated especially for children. We strive to provide them with the care and support they need to grow and thrive, ensuring that they have access to education, healthcare, and a safe environment. Our mission is to make a positive impact in the lives of these children and help them achieve their full potential. Join us in this journey to create a better future for the children we serve.</p>
                    <div class="mt-5 card">
                        <div class="about-save">
                            <h4>1000+</h4>
                            <p>Beneficiaries</p>
                        </div>
                        <div class="about-save">
                            <h4>50+</h4>
                            <p>Volunteers</p>
                        </div>
                        <div class="about-save">
                            <h4>10+</h4>
                            <p>Years of Service</p>
                        </div>
                        <div class="about-save">
                            <h4>20+</h4>
                            <p>Recognition Awards</p>
                        </div>
                        <span class="line-1"></span>
                        <span class="line-2"></span>
                    </div>
                </div>
            </div>
        </div>
     </section>

     <!-- About section exit -->

     <!-- Categories section --> 
     <section id="categories" class="categories_wrapper wrapper">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center mb-5">
                    <h3>Supporting the Future: Our Charitable Categories for Children </h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-sm-12 mb-4">
                    <div class="card">
                        <div class="icon-box">
                            <img decoding="async" src="./images/categories/education (2).png ">
                        </div>
                        <div>
                            <h4>Education</h4>
                            <p>This category focuses on providing access to education for children who might otherwise not have the opportunity. This includes providing school supplies, funding scholarships, building schools, and supporting educational programs.</p>
                            <a href="education.html" class="main-btn mt-4">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 mb-4">
                    <div class="card">
                        <div class="icon-box">
                            <img decoding="async" src="./images/categories/healthcare (1).png">
                        </div>
                        <div >
                            <h4>Health</h4>
                            <p>This category is focused on providing medical care and support to children who are sick or in need of medical attention. This can include providing healthcare facilities, funding medical research, supporting hospitals and clinics, and providing medical supplies and equipment.</p>
                            <a href="health.html" class="main-btn mt-4">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 mb-4">
                    <div class="card">
                        <div class="icon-box">
                            <img decoding="async" src="./images/categories/shelterr.png">
                        </div>
                        <div >
                            <h4>Shelter</h4>
                            <p>This category focuses on providing safe and secure housing for children who are homeless or at risk of becoming homeless. This can include building or renovating homes, providing temporary shelter, and supporting foster care programs.</p>
                            <a href="shelter.html" class="main-btn mt-4">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 mb-4">
                    <div class="card">
                        <div class="icon-box">
                            <img decoding="async" src="./images/categories/nutrition.png">
                        </div>
                        <div>
                            <h4>Nutrition</h4>
                            <p>his category focuses on providing access to healthy food and nutrition education for children who may be food insecure. This can include funding school lunch programs, providing food banks and pantries, and supporting community gardens.</p>
                            <a href="nutrition.html" class="main-btn mt-4">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 mb-4">
                    <div class="card">
                        <div class="icon-box">
                            <img decoding="async" src="./images/categories/safety.png">
                        </div>
                        <div>
                            <h4>Safety</h4>
                            <p>This category is focused on protecting children from harm and abuse. This can include supporting child protection services, funding child abuse prevention programs, and providing safe spaces for children to play and learn.</p>
                            <a href="safety.html" class="main-btn mt-4">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 mb-4">
                    <div class="card">
                        <div class="icon-box">
                            <img decoding="async" src="./images/categories/activities.png">
                        </div>
                        <div>
                            <h4>Activities</h4>
                            <p> This category focuses on providing opportunities for children to participate in sports, arts, and other extracurricular activities. This can include funding after-school programs, supporting sports teams, and providing access to cultural events and activities.</p>
                            <a href="activities.html" class="main-btn mt-4">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
     </section>

     <!-- Categories section Exit -->

    
      <!-- Gallery section --> 
     <section id="gallery" class="gallery_wrapper wrapper">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center mb-5">
                    <h3>Our Gallery</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-6 mb-4">
                    <img decoding="async" src="./images/gallery/gal1.jpg" class="w-100 h-100">
                </div>
                <div class="col-md-4 col-sm-6 mb-4">
                    <img decoding="async" src="./images/gallery/gal2.png" class="w-100 h-100">
                </div>
                <div class="col-md-4 col-sm-6 mb-4">
                    <img decoding="async" src="./images/gallery/gal3.png" class="w-100 h-100">
                </div>
                <div class="col-md-4 col-sm-6 mb-4">
                    <img decoding="async" src="./images/gallery/gal4.png" class="w-100 h-100">
                </div>
                <div class="col-md-4 col-sm-6 mb-4">
                    <img decoding="async" src="./images/gallery/gal5.jpg" class="w-100 h-100">
                </div>
                <div class="col-md-4 col-sm-6 mb-4">
                    <img decoding="async" src="./images/gallery/gal6.jpg" class="w-100 h-100">
                </div>
            </div>
        </div>
     </section>
    

     <!-- Gallery Section Exit -->


     <!-- Success Stories Section -->
     <section id="success-stories" class="success-wrapper">
      <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center mb-5">
                <h3 class="text-black">Success Stories</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 col-sm-6 mb-4">
                <div class="card rounded-3">
                    <div class="story-img">
                        <img decoding="async" src="./images/stories/story1.png" class="img-fluid">
                    </div>
                    <h5 style="text-align:center;  padding-top:20px;">Ahmed's Story</h5>
                    <div class="story-info pt-4 text-center">
                        
                        <p>Ahmed is a 10-year-old boy who has been suffering from a rare disease that caused him to lose his vision.</p>
                        <p>With the help of our charity association, Ahmed was able to receive the medical treatment he needed and was able to regain his sight.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 mb-4">
                <div class="card rounded-3">
                    <div class="story-img">
                        <img decoding="async" src="./images/stories/story2.png" class="img-fluid">
                    </div>
                    <h5 style="text-align:center;  padding-top:20px;">Sara's Story</h5>
                    <div class="story-info pt-4 text-center">
                        
                        <p>Sara is a 7-year-old girl who was born with a congenital heart defect.</p>
                        <p>Thanks to our charity association, Sara was able to receive the necessary surgeries and medical care to improve her health and quality of life.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 mb-4">
                <div class="card rounded-3">
                    <div class="story-img">
                        <img decoding="async" src="./images/stories/story3.png" class="img-fluid">
                    </div>
                    <h5 style="text-align:center;  padding-top:20px;">Mohamed's Story</h5>
                    <div class="story-info pt-4 text-center">
                        
                        <p>Mohamed is a 5-year-old boy who lost his parents in a tragic accident.</p>
                        <p>Our charity association provided Mohamed with a safe and supportive home environment, and he has since thrived under our care.</p>
                    </div>
                </div>
            </div>
        </div>
      </div>
     </section>
        <!-- Success Stories Section End -->


     <!-- Testimonial section --> 
     <section id="testimonial" class="testimonial_wrapper wrapper">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center mb-4">
                    <h3 class="text-black">Testimonials</h3>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-xl-3 col-md-4 col-sm-6">
                    <div class="card text-center">
                        <img decoding="async" src="./images/testimonial/Doctor.png" class="img-fluid">
                        <h4 class="pt-4 mb-0">Sarah Menti</h4>
                        <p>Doctor</p> 
                    </div>
                </div>
                <div class="col-xl-9 col-md-8 col-sm-6 ps-md-4 pt-sm-0 pt-4">
                    <h4>Life-changing support: Testimonials from those we've helped</h4>
                    <p>“ When I was a little girl, I was diagnosed with a rare medical condition that required extensive treatment and care. My family was struggling to afford the medical bills and we felt lost and helpless. That's when we were connected with [your organization]. They provided us with the resources and support we needed to get through that difficult time. Thanks to their help, I was able to get the medical care I needed and make a full recovery. Today, I am proud to say that I have become a doctor myself, and I owe it all to the help and kindness that [your organization] showed me and my family.”</p>
                </div>
            </div>
        </div>
     </section> 
     <!-- Testimonial Section Exit -->

     <!--new members --> 
     <section class="members_wrapper wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-8 col-10">
                    <h3>
"Give a little, change a lot - your donation can make a world of difference."</h3>
                    <a class="mt-5 main-btn fill-btn"  onclick="toggle()" href="#donate">Donate now</a>
                </div>
            </div>
        </div>
     </section>

     <!-- new members section Exit -->

     <!-- Emergency Relief"section --> 
      <section id="Emergency" class="Emergency_wrapper wrapper">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center mb-5">
                    <h3>Happening Now in Morocco!</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-6 mb-4">
                    <div class="card p-0 border-0 rounded-0">
                        <img decoding="async" src="./images/blog/sickchild.png">
                        <div class="Emergency-content">
                            <h5 class="text-blue mb-4">children with cancer in Morocco</h5>
                            <h6 class="text-white"> - November 18, 2022</h6>
                            <p class="mt-2 text-white">Children with cancer in Morocco lack proper treatment due to limited resources and funding, leading to poor outcomes. Urgent support is needed for their care.
                            </p>
                            <a href="#" class="main-btn mt-3">Read More</a>

                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 mb-4">
                    <div class="card p-0 border-0 rounded-0">
                        <img decoding="async" src="./images/blog/lackeduc.png">
                        <div class="Emergency-content">
                            <h5 class="text-blue mb-4">Lack of access to education </h5>
                            <h6 class="text-white"> - February 04, 2023</h6>
                            <p class="mt-2 text-white">Urban slum children in Casablanca lack access to education and supplies due to extreme poverty. Urgent action is needed to improve their situation.</p>
                            <a href="#" class="main-btn mt-10">Read More</a>

                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 mb-4">
                    <div class="card p-0 border-0 rounded-0">
                        <img decoding="async" src="./images/blog/poverty.png">
                        <div class="Emergency-content">
                            <h5 class="text-blue mb-4"> Urgent Need for Food and Clothing</h5>
                            <h6 class="text-white"> - April 23, 2023</h6>
                            <p class="mt-2 text-white">Malnutrition and inadequate clothing threaten children's health in rural Morocco, requiring urgent action to provide sufficient food and protection from harsh weather.</p>
                            <a href="#" class="main-btn mt-2">Read More</a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
     </section>

     <!-- Emergency Section Exit  -->

     <!-- Footer section --> 
  
       <section id="contact" class="footer_wrapper wrapper">
        <div class="container pb-3">
            <div class="row">
                <div class="col-lg-3 col-md-6 mb-4">
                    <h5>Association Location</h5>
                    <p class="ps-0">123 Rue Mohammed V
                        Quartier Gauthier
                        20000 Casablanca
                        Morocco</p>
                    <div class="contact-info">
                        <ul class="list-unstyled p-0">
                            <li><i class="fa fa-phone me-3"></i>+212 6822 3933 897</li>
                            <li><i class="fa fa-envelope me-3"></i>save@gmail.com</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <h5>info</h5>
                    <ul class="link-widget p-0">
                        <li><a href="#about">About Us</a></li>
                        <li><a href="#mission">Our Mission</a></li>
                        <li><a href="#">Our Programs</a></li>
                        <li><a href="#">How to donate</a></li>
                        <li><a href="#contact">Contact Us</a></li>
                        <li><a href="#gallery">gallery</a></li>
                        <li><a href="#">Terms and conditions</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <h5>More info</h5>
                    <ul class="link-widget p-0">
                        <li><a href="#about">About Us</a></li>
                        <li><a href="#mission">Our Mission</a></li>
                        <li><a href="#">Our Programs</a></li>
                        <li><a href="#">How to donate</a></li>
                        <li><a href="#contact">Contact Us</a></li>
                        <li><a href="#gallery">gallery</a></li>
                        <li><a href="#">Terms and conditions</a></li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-6 mb-4">
                    <h5>Newsletter</h5>
                    <div class="form-group mb-4">
                        <input type="email" class="form-control bg-transparent" placeholder="Enter Your Email Here">
                        <button type="submit" class="main-btn rounded-2 mt-3 border-white text-white"><a href="login-register-main/logout.php">LOG OUT</a></button>

                    </div>
                    <h5>Stay Connected</h5>
                    <ul class="social-network d-flex align-items-center p-0 ">
                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                        <li><a href="#"><i class="fab fa-vimeo-v"></i></a></li>
                    </ul>
                </div>

            </div>
        </div>
        <div class="container-fluid copyright-section">
            <p class="p-0">Copyright <a href="#">©SAVEKNH.</a> All Rights Reserved</p>
        </div>
      </section>
 
      <!-- Footer section exit -->
    </div>
  </div>
  
   <!-- Donation Form -->
<div id="dpopup">
    <div class="container">

        <form method="post">
            <div class="row">
                <div class="col-md-6 mt-2">
                    <h3 class="title">User info</h3>
                    <div class="form-group mb-3">
                        <label for="fullName">Full Name:</label>
                        <input type="text" class="form-control" id="fullName" name="fullName" placeholder="Aemd Al" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="email">Email:</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="example@example.com" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="inputCategory" class="form-label">Category</label>
                        <select id="inputCategory" class="form-select" name="category" required>
                            <option selected disabled>Choose category...</option>
                            <option>Education</option>
                            <option>Health</option>
                            <option>Safety</option>
                            <option>Shelter</option>
                            <option>Activities</option>
                            <option>Nutrition</option>
                        </select>
                    </div>
                    <div class="form-group mb-3">
                        <label for="amount">Amount:</label>
                        <input type="text" class="form-control" id="amount" name="amount" required>
                    </div>
                </div>

                <div class="col-md-6 mt-2">
                    <h3 class="title">Payment</h3>
                    <div class="form-group mb-3">
                        <label for="cardsAccepted" class="mt-1">Cards Accepted:</label>
                        <img src="images/card_img.png" alt="" class="img-fluid">
                    </div>
                    <div class="form-group mb-3">
                        <label for="nameOnCard">Name on Card:</label>
                        <input type="text" class="form-control" id="nameOnCard" name="nameOnCard" placeholder="Mr. Ahemd Al" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="creditCardNumber">Credit Card Number:</label>
                        <input type="text" class="form-control" id="creditCardNumber" name="creditCardNumber" placeholder="1111-2222-3333-4444" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="expMonth">Exp Month:</label>
                        <input type="text" class="form-control" id="expMonth" name="expMonth" placeholder="January" required>
                    </div>
                    <div class="form-group mb-3">
                        <div class="row">
                            <div class="col-md-6">
                                <label for="expYear">Exp Year:</label>
                                <input type="text" class="form-control" id="expYear" name="expYear" placeholder="2022" required>
                            </div>
                            <div class="col-md-6">
                                <label for="cvv">CVV:</label>
                                <input type="text" class="form-control" id="cvv" name="cvv" placeholder="1234" required>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center">
                <input type="submit" value="Submit Donation" class="btn btn-primary mt-3">
            </div>
        </form>
    </div>
    <a href="#" class="main-btn mt-4 fill-btn" onclick="toggle()">Close</a>
   </div>
   <?php
// Check if the form has been submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Récupérer les données du formulaire
    $fullName = isset($_POST['fullName']) ? $_POST['fullName'] : '';
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $category = isset($_POST['category']) ? $_POST['category'] : '';
    //$city = isset($_POST['city']) ? $_POST['city'] : '';
    $nameOnCard = isset($_POST['nameOnCard']) ? $_POST['nameOnCard'] : '';
    $creditCardNumber = isset($_POST['creditCardNumber']) ? $_POST['creditCardNumber'] : '';
    $expMonth = isset($_POST['expMonth']) ? $_POST['expMonth'] : '';
    $expYear = isset($_POST['expYear']) ? $_POST['expYear'] : '';
    $cvv = isset($_POST['cvv']) ? $_POST['cvv'] : '';
    $amount = isset($_POST['amount']) ? $_POST['amount'] : '';
    // Configuration de la connexion à la base de données
    include('connexion.php');

    // Vérifier la connexion
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
     
    // Insérer les données dans la base de données
    $sql = "INSERT INTO donations (fullName, email, category, amount, nameOnCard, creditCardNumber, expMonth, expYear, cvv)
            VALUES ('$fullName', '$email', '$category', '$amount', '$nameOnCard', '$creditCardNumber', '$expMonth', '$expYear', '$cvv')";

    if (mysqli_query($conn, $sql)) {
        echo "<script>alert('Donation submitted successfully');</script>";
    } else {
        echo "<script>alert('Donation error!!!!!');</script>";
    }

    mysqli_close($conn);
}
?>



   
  
    <!--Donation Form Exit-->
    <!-- Bootstrap 5 JS CDN Links -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/js/bootstrap.min.js"></script>

    <!-- Custom Js Link -->
    <script src="./js/main.js"></script>

  

</body>

</html>

        