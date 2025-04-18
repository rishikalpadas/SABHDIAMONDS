<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">
    <!-- Author -->
    <meta name="author" content="">
    <!-- description -->
    <meta name="description" content="">
    <!-- keywords -->
    <meta name="keywords" content="">
    <!-- Page Title -->
    <title>sabhDiamonds</title>
    <!-- Favicon -->
    <!-- <link href="assets/favicon.ico" rel="icon"> -->
    <!-- Bundle -->
    <link href="assets/css/bundle.min.css" rel="stylesheet">
    <!-- Plugin Css -->
    <link href="assets/css/owl.carousel.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="assets/css/swiper.min.css">
    <link href="https://cdn.lineicons.com/5.0/lineicons.css" rel="stylesheet" />
    <!-- Style Sheet -->
    <link href="assets/css/line-awesome.min.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/custom.css" rel="stylesheet">
</head>

<body data-spy="scroll" data-target=".navbar" data-offset="90">



    <!-- Start Header -->
    <header id="home" class="cursor-light">
        <div class="inner-header nav-icon">
            <div class="main-navigation">
                <div class="container">
                    <div class="row">
                        <div class="col-4 col-lg-2">
                            <a class="navbar-brand link scroll" href="index.php">
                                <!-- <img src="assets/images/logo.png" alt="logo"> -->
                                <h3>sabhDiamonds</h3>
                            </a>
                        </div>
                        <div class="col-8 col-lg-10 simple-navbar d-flex align-items-center justify-content-end">
                            <nav class="navbar navbar-expand-lg">
                                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                    <div class="navbar-nav ml-auto d-flex align-items-center">
                                        <a class="nav-link home active link scroll" href="index.php#home">Home</a>
                                        <a class="nav-link link scroll" href="index.php#about">About</a>
                                        <a class="nav-link link scroll" href="index.php#explore">Explore</a>
                                        <a class="nav-link link scroll" href="index.php#blogs">Blogs</a>
                                        <a class="nav-link link scroll" href="index.php#contact">Contact Us</a>
                                        <!-- <a href="" class="btn button btn-medium btn-rounded btn-transparent ml-0 ml-lg-5" data-animation-duration="500" data-fancybox data-src="#animatedModal">Order Now</a> -->
                                        <!-- <span class="menu-line link"><i aria-hidden="true" class="fa fa-angle-down"></i></span> -->
                                    </div>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!--toggle btn-->
            <a href="javascript:void(0)" class="sidemenu_btn link" id="sidemenu_toggle">
                <span></span>
                <span></span>
                <span></span>
            </a>
        </div>
        <!--Side Nav-->
        <div class="side-menu hidden side-menu-opacity">
            <div class="bg-overlay"></div>
            <div class="inner-wrapper">
                <span class="btn-close" id="btn_sideNavClose"><i></i><i></i></span>
                <div class="container">
                    <div class="row w-100 side-menu-inner-content">
                        <div class="col-12 d-flex justify-content-center align-items-center text-center">
                            <a href="index.php" class="navbar-brand"><img src="assets/images/logo.png" alt="logo"></a>
                        </div>
                        <div class="col-12 col-lg-8 text-center text-lg-left">
                            <nav class="side-nav w-100">
                                <ul class="navbar-nav">
                                    <li class="nav-item">
                                        <a class="nav-link scroll" href="index.php#home">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link scroll" href="index.php#about">About</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link scroll" href="index.php#explore">Explore</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link scroll" href="index.php#blogs">Blogs</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link scroll" href="index.php#contact">Contact Us</a>
                                    </li>
                                    <!-- <li class="get-started-btn">
                                    <a href="" class="btn button btn-medium btn-rounded btn-transparent" data-animation-duration="500" data-fancybox data-src="#animatedModal">Order Now</a>
                                </li> -->
                                </ul>
                            </nav>
                        </div>
                        <div class="col-12 col-lg-4 d-flex align-items-center text-center text-lg-left">
                            <div class="side-footer text-white w-100">
                                <div class="menu-company-details">
                                    <span>+1 631 123 4567</span>
                                    <span>email@website.com</span>
                                </div>
                                <ul class="social-icons-simple">
                                    <li><a class="facebook-text-hvr" href="javascript:void(0)"><i class="fab fa-facebook-f"></i> </a> </li>
                                    <li><a class="twitter-text-hvr" href="javascript:void(0)"><i class="fab fa-x-twitter"></i> </a> </li>
                                    <li><a class="youtube-text-hvr" href="javascript:void(0)"><i class="fab fa-youtube"></i> </a> </li>
                                    <li><a class="instagram-text-hvr" href="javascript:void(0)"><i class="fab fa-instagram"></i> </a> </li>
                                </ul>
                                <p class="text-white">&copy; 2024 MegaOne. Made With Love by Themesindustry</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a id="close_side_menu" href="javascript:void(0);"></a>

        <!--Get Started Model Popup-->
        <div class="quote-content hidden animated-modal" id="animatedModal">
            <!--Heading-->
            <div class="pb-5 text-center">
                <span class="text-pink font-weight-200 font-20">We are MegaOne Company</span>
                <h2 class="main-font font-weight-600 text-sec mt-2">Place your Order Here</h2>
            </div>
            <!--Contact Form-->
            <form class="contact-form" id="modal-contact-form-data">
                <div class="row">
                    <!--Result-->
                    <div class="col-12" id="quote_result"></div>

                    <!--Left Column-->
                    <div class="col-md-6">
                        <div class="form-group">
                            <input class="form-control" id="quote_name" name="quoteName" placeholder="Name" required="" type="text">
                        </div>
                        <div class="form-group">
                            <input class="form-control" id="quote_contact" name="userPhone" placeholder="Contact #" required="" type="text">
                        </div>
                    </div>

                    <!--Right Column-->
                    <div class="col-md-6">
                        <div class="form-group">
                            <input class="form-control" id="quote_email" name="userEmail" placeholder="Email" required="" type="email">
                        </div>
                        <div class="form-group">
                            <input class="form-control" id="quote_address" name="userAddress" placeholder="City / Block no" required="" type="text">
                        </div>
                    </div>

                    <!--Full Column-->
                    <div class="col-md-12">
                        <div class="form-group">
                            <textarea class="form-control" id="userMessage" name="userMessage" placeholder="Please explain your order in detail."></textarea>
                        </div>
                    </div>

                    <!--Button-->
                    <div class="col-md-12">
                        <div class="form-check">
                            <label class="checkbox-lable font-weight-200 font-16">Contact by phone is preferred
                                <input type="checkbox">
                                <span class="checkmark"></span>
                            </label>
                        </div>
                        <a href="javascript:void(0)" class="btn button btn-medium btn-rounded btn-grey modal_contact_btn" id="quote_submit_btn">Submit Now</a>
                    </div>
                </div>
            </form>
        </div>
    </header>
    <!-- End Header -->