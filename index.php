<?php
    require_once("functions.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Cybersecurity Education Games</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link rel="shortcut icon" type="image/x-icon" href="./assets/img/logo1.png">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>
    <div class="main-container">
        <!-- ======= Hero Section ======= -->
        <section id="hero">
            <!-- ======= Header ======= -->
            <header id="header">
                <div class="container d-flex align-items-center justify-content-between">
                    <div class="logo">
                        <div class="row">
                            <div class="col-xs-2 col-sm-2 col-md-2">
                                <a href="index.php">
                                    <img src="assets/img/logo1.png" alt="" class="img-fluid">
                                </a>
                            </div>
                            <div class="col-xs-8 col-sm-8 col-md-8 text-center text-lg-start">
                                <h3><a>Cybersecurity Education <span>Games</span></a></h3>
                            </div>
                        </div>
                    </div>

                    <nav id="navbar" class="navbar">
                        <ul>
                            <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
                            <li><a class="nav-link scrollto" href="#about">About Us</a></li>
                            <li><a class="nav-link scrollto" href="#">Our Research</a></li>
                            <li><a class="nav-link scrollto" href="#game">Games</a></li>
                            <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
                        </ul>
                        <i class="bi bi-list mobile-nav-toggle"></i>
                    </nav><!-- .navbar -->
                </div>
            </header><!-- End Header -->

            <div class="container">
                <div class="center">
                    <div class="row d-flex align-items-center">
                        <div class="col-lg-7 py-5 py-lg-0 order-2 order-lg-1 text-center text-lg-start text-light"
                            data-aos="fade-right">
                            <h1>Cybersecurity Education Games Classify & Gap Analysis </h1>
                            <br>
                            <p class="fs-6">Welcome to the Cybersecurity Education Game resource hub. Our repository includes games that cover a variety of cybersecurity topics and are intended for various audiences. Click on "Get Started" to explore our list of games or "Survey" to provide us with feedback. You can also check the "About Us" section to learn more about our research and our team or "Contact" if you have any questions.</p>
                            <br>
                            <a href="#game" class="btn-get-started scrollto">Get Started</a>
                        </div>
                        <div class="col-lg-5 order-1 order-lg-2 hero-img" data-aos="fade-left">
                            <img src="assets/img/hero.png" class="img-fluid" alt="">
                        </div>
                    </div>
                </div>
            </div>

        </section><!-- End Hero -->

        <main id="main">
            <!-- ======= Game Section ======= -->
            <section id="game" class="game section-bg">
                <div class="container">
                    <div class="section-title">
                        <h2 data-aos="fade-in">Games</h2>
                        <!--
                        <p data-aos="fade-in">Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex
                            aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et
                            nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic
                            quas.</p>
                        -->
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <ul id="game-flters">
                                <li data-filter="*" class="filter-active">All</li>
                                <li data-filter=".filter-students">High-school Students</li>
                                <li data-filter=".filter-teachers">K-12 Teachers</li>
                                <li data-filter=".filter-college">College</li>
                                <li data-filter=".filter-industry">Industry</li>
                            </ul>
                        </div>
                    </div>

                    <div class="row game-container" data-aos="fade-up">
                        <?php for($i = 0; $i < count($games); $i++) {?>
                        <?php createGameCard($games[$i], $i); }?>
                </div>
            </section><!-- End Portfolio Section -->

            <!-- ======= Testimonials ======= 
            <section id="testimonials" class="testimonials section-bg">
                <div class="container">

                    <div class="section-title">
                        <h2>Reviews</h2>
                        <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem.
                            Sit
                            sint
                            consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea.
                            Quia fugiat sit
                            in iste officiis commodi quidem hic quas.</p>
                    </div>
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="testimonial-item" data-aos="fade-up">
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eaque, nisi, commodi sequi
                                    aliquid adipisci hic mollitia voluptas, earum ratione sed neque labore facilis ullam
                                    amet voluptate! Eum iste numquam id!
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                                <img src="assets/img/testimonials/1.jpeg" class="testimonial-img" alt="">
                                <h3>Ankur Chattopadhyay</h3>
                                <h4>Assistant Professor &amp; Program Director</h4>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="testimonial-item" data-aos="fade-up">
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eaque, nisi, commodi sequi
                                    aliquid adipisci hic mollitia voluptas, earum ratione sed neque labore facilis ullam
                                    amet voluptate! Eum iste numquam id!
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                                <img src="assets/img/testimonials/1.jpeg" class="testimonial-img" alt="">
                                <h3>Ankur Chattopadhyay</h3>
                                <h4>Assistant Professor &amp; Program Director</h4>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="testimonial-item" data-aos="fade-up">
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eaque, nisi, commodi sequi
                                    aliquid adipisci hic mollitia voluptas, earum ratione sed neque labore facilis ullam
                                    amet voluptate! Eum iste numquam id!
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                                <img src="assets/img/testimonials/1.jpeg" class="testimonial-img" alt="">
                                <h3>Ankur Chattopadhyay</h3>
                                <h4>Assistant Professor &amp; Program Director</h4>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="testimonial-item" data-aos="fade-up">
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eaque, nisi, commodi sequi
                                    aliquid adipisci hic mollitia voluptas, earum ratione sed neque labore facilis ullam
                                    amet voluptate! Eum iste numquam id!
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                                <img src="assets/img/testimonials/1.jpeg" class="testimonial-img" alt="">
                                <h3>Ankur Chattopadhyay</h3>
                                <h4>Assistant Professor &amp; Program Director</h4>
                            </div>
                        </div>
                    </div>

                </div>
            </section>
            -->

            <!-- ======= Contact Section ======= -->
            <section id="contact" class="contact section-bg">
                <div class="container" data-aos="fade-up">

                    <div class="section-title">
                        <h2>Contact</h2>
                        <!--
                        <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem.
                            Sit
                            sint
                            consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea.
                            Quia fugiat
                            sit
                            in iste officiis commodi quidem hic quas.</p>
                        -->
                    </div>

                    <div class="row">

                        <div class="col-lg-6">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="info-box" data-aos="fade-up">
                                        <i class="bx bx-map"></i>
                                        <h3>Our Address</h3>
                                        <p>Griffin Hall 430, Department of Computer Science,
                                            College of Informatics,<br>Northern Kentucky University,
                                            Highland Heights, KY 41076.

                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="info-box mt-4" data-aos="fade-up" data-aos-delay="100">
                                        <i class="bx bx-envelope"></i>
                                        <h3>Email Us</h3>
                                        <p>chattopada1@nku.edu</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="info-box mt-4" data-aos="fade-up" data-aos-delay="100">
                                        <i class="bx bx-phone-call"></i>
                                        <h3>Call Us</h3>
                                        <p>(859)-572-5169</p>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="col-lg-6 mt-4 mt-lg-0">
                            <form action="forms/contact.php" method="post" role="form" class="php-email-form w-100"
                                data-aos="fade-up">
                                <div class="row">
                                    <div class="col-md-6 form-group">
                                        <input type="text" name="name" class="form-control" id="name"
                                            placeholder="Your Name" required>
                                    </div>
                                    <div class="col-md-6 form-group mt-3 mt-md-0">
                                        <input type="email" class="form-control" name="email" id="email"
                                            placeholder="Your Email" required>
                                    </div>
                                </div>
                                <div class="form-group mt-3">
                                    <input type="text" class="form-control" name="subject" id="subject"
                                        placeholder="Subject" required>
                                </div>
                                <div class="form-group mt-3">
                                    <textarea class="form-control" name="message" rows="5" placeholder="Message"
                                        required></textarea>
                                </div>
                                <div class="my-3">
                                    <div class="loading">Loading</div>
                                    <div class="error-message"></div>
                                    <div class="sent-message">Your message has been sent. Thank you!</div>
                                </div>
                                <div class="text-center"><button type="submit">Send Message</button></div>
                            </form>
                        </div>

                    </div>

                </div>
            </section><!-- End Contact Section -->

        </main><!-- End #main -->

        <!-- ======= Footer ======= -->
        <footer id="footer">
            <div class="container footer-bottom clearfix">
                <div class="copyright">
                    &copy; Copyright <strong><span>Cybersecurity Education Game</span></strong>. All Rights Reserved
                </div>
            </div>
        </footer><!-- End Footer -->

        <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
                class="bi bi-arrow-up-short"></i></a>

    </div>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/owl.carousel/owl.carousel.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

</body>

</html>