<?php
    require_once("functions.php");
    $game = $games[$_GET["index"]];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Studying Alignment of Cybersecurity Education Games</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link rel="shortcut icon" type="image/x-icon" href="./assets/img/logo1.png">

    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

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
        <!-- ======= Header ======= -->
        <header id="header" class="header">
                <div class="container d-flex align-items-center justify-content-between">
                    <div class="logo">
                        <div class="row">
                            <div class="col-xs-2 col-sm-2 col-md-2">
                                <a href="index.php">
                                    <img src="assets/img/logo1.png" alt="" class="img-fluid">
                                </a>
                            </div>
                            <div class="col-xs-8 col-sm-8 col-md-8 text-center text-lg-start">
                                <h3><a>Studying Alignment of<br><span>Cybersecurity Education Games</span></a></h3>
                            </div>
                        </div>
                    </div>

                    <nav id="navbar" class="navbar">
                        <ul>
                            <li><a class="nav-link scrollto active" href="index.php#hero">Home</a></li>
                            <!--
                            <li><a class="nav-link scrollto" href="#about">About Us</a></li>
                            <li><a class="nav-link scrollto" href="#">Our Research</a></li>
                            -->
                            <li><a class="nav-link scrollto" href="index.php#game">Games</a></li>
                            <li><a class="nav-link scrollto" href="index.php#contact">Contact</a></li>
                        </ul>
                        <i class="bi bi-list mobile-nav-toggle"></i>
                    </nav><!-- .navbar -->
                </div>
            </header><!-- End Header -->

        <main id="main">

            <!-- ======= Breadcrumbs Section ======= -->
            <section class="breadcrumbs">
                <div class="container">

                    <div class="d-flex justify-content-between align-items-center">
                        <h2>Game Details</h2>
                        <ol>
                            <li><a href="index.php">Home</a></li>
                            <li><a href="index.php#game">Games</a></li>
                            <li>Game Details</li>
                        </ol>
                    </div>

                </div>
            </section><!-- Breadcrumbs Section -->

            <!-- ======= Game Details Section ======= -->
            <section id="game-details" class="game-details">
                <div class="container">
                    <div class="row gy-4">
                        <div class="col-lg-7" data-aos="fade-right">
                            <div class="game-details-slider swiper-container">
                                <div class="swiper-wrapper align-items-center">
                                    <?= createSwiperSlide($game["screenshots"]) ?>
                                </div>
                                <div class="swiper-pagination"></div>
                            </div>
                        </div>

                        <div class="col-lg-5" data-aos="fade-left">
                            <div class="game-info">
                                <h3><?= $game["name"] ?></h3>
                                <ul>
                                    <li><strong>Category</strong>: Cybersecurity Game</li>
                                    <li><strong>Audiences</strong>: </li>
                                    <li>
                                        <div class="row game-mapping">
                                            <div class="col-md-6">
                                                <p><?= audiencesCheck($game["audiences"][0]) ?>High-school Students</p>
                                                <p><?= audiencesCheck($game["audiences"][1]) ?>K-12 Teachers</p>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?= audiencesCheck($game["audiences"][2]) ?>College</p>
                                                <p><?= audiencesCheck($game["audiences"][3]) ?>Industry</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li><strong>Mapping(s)</strong>: </li>
                                    <li>
                                        <div class="row game-mapping">
                                            <?= gameMappings($game["mappings"]) ?>
                                        </div>
                                    </li>
                                    <li><strong>Game URL</strong>: <a
                                            href="<?= $game["url"] ?>" target="_blank"><?= $game["url"] ?></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="game-description">
                                <h2>Description:</h2>
                                <p>
                                    <?= $game["description"] ?>
                                </p>
                            </div>
                        </div>

                    </div>

                </div>
            </section><!-- End Game Details Section -->

            <!-- You may interest !UNFINISHED-->
            <section class="game-details-bg p-5">
                <div class="container">
                    <div class="game">
                        <h4 class="pb-2">You may also be interested:</h4>
                        <div class="row game-container">
                            <?php
                            $count = 0; 
                            for($i = 0; $i < count($games); $i++) {
                                if ($i != $_GET['index']) {
                                    createGameCardS($games[$i], $i);
                                    $count++;
                                }
                                if ($count == 4) {
                                    break;
                                }
                            }?>
                        </div>
                    </div>
                </div>
            </section>

        </main><!-- End #main -->

        <!-- ======= Footer ======= -->
        <footer id="footer">
            <div class="container footer-bottom clearfix">
                <div class="copyright">
                    &copy; Copyright <strong><span>Cybersecurity Education Game R&D Team:</span></strong> Ankur Chattopadhyay, Trung Cao, Laura Nestor, Carlee Franklin.
                    All Rights Reserved
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