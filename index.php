<?php
include("admin/config/db.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
        <!-- ========== Meta Tags ========== -->
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- ======== Page title ============ -->
        <title>Vetri Velan Kaappi – Best Coffee Shop & Bakery in Coimbatore | Authentic Filter Coffee</title>
        <!--<< Favcion >>-->
        <link rel="shortcut icon" href="assets/img/logo/favicon.png">
        <!--<< Bootstrap min.css >>-->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <!--<< Font Awesome.css >>-->
        <link rel="stylesheet" href="assets/css/font-awesome.css">
        <!--<< Animate.css >>-->
        <link rel="stylesheet" href="assets/css/animate.css">
        <!--<< Magnific Popup.css >>-->
        <link rel="stylesheet" href="assets/css/magnific-popup.css">
        <!--<< MeanMenu.css >>-->
        <link rel="stylesheet" href="assets/css/meanmenu.css">
        <!--<< Swiper Bundle.css >>-->
        <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">
        <!--<< Nice Select.css >>-->
        <link rel="stylesheet" href="assets/css/nice-select.css">
        <!--<< Main.css >>-->
        <link rel="stylesheet" href="assets/css/main.css">
        <!--<< Style.css >>-->
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

    </head>
    <body>
        <!-- Offcanvas Area Start -->
        <div class="fix-area">
            <div class="offcanvas__info">
                <div class="offcanvas__wrapper">
                    <div class="offcanvas__content">
                        <div class="offcanvas__top mb-5 d-flex justify-content-between align-items-center">
                            <div class="offcanvas__logo">
                                <a href="index.html">
                                <img src="assets/img/logo/logo_english.png" alt="logo-img">
                                </a>
                            </div>
                            <div class="offcanvas__close">
                                <button>
                                <i class="fas fa-times"></i>
                                </button>
                            </div>
                        </div>
                        <p class="text d-none d-lg-block">
                            Vetri Velan Kaappi – your favourite coffee destination in Coimbatore, Tamil Nadu. We serve freshly brewed filter coffee, premium snacks, and homemade bakery items crafted with quality ingredients. Experience authentic South Indian taste, warm hospitality, and a cosy ambience every time you visit.
                        </p>
                        <div class="mobile-menu fix mb-3"></div>
                        <div class="offcanvas__contact">
                            <h4>Contact Info</h4>
                            <ul>
                                <li class="d-flex align-items-center">
                                    <div class="offcanvas__contact-icon">
                                        <i class="fal fa-map-marker-alt"></i>
                                    </div>
                                    <div class="offcanvas__contact-text">
                                        <a target="_blank" href="https://maps.app.goo.gl/L17qfhnLHZSA6t5s9">No 77 Link road, periyar nagar Peelamedu avinashi road Fun mall backside Coimbatore 641004.</a>
                                    </div>
                                </li>
                                <li class="d-flex align-items-center">
                                    <div class="offcanvas__contact-icon mr-15">
                                        <i class="fal fa-envelope"></i>
                                    </div>
                                    <div class="offcanvas__contact-text">
                                        <a href="mailto:vetrivelankaappi@gmail.com"><span class="mailto:info@enofik.com">vetrivelankaappi@gmail.com</span></a>
                                    </div>
                                </li>
                                <li class="d-flex align-items-center">
                                    <div class="offcanvas__contact-icon mr-15">
                                        <i class="fal fa-clock"></i>
                                    </div>
                                    <div class="offcanvas__contact-text">
                                        <a target="_blank" href="#">Monday – Sunday: 24/7 Hours</a>
                                    </div>
                                </li>
                                <li class="d-flex align-items-center">
                                    <div class="offcanvas__contact-icon mr-15">
                                        <i class="far fa-phone"></i>
                                    </div>
                                    <div class="offcanvas__contact-text">
                                        <a href="tel:9840678999">9840678999</a>
                                    </div>
                                </li>
                            </ul>
                            <div class="header-button mt-4">
                                <a href="contact.php#franchise-form" class="theme-btn">
                                <span class="button-content-wrapper d-flex align-items-center justify-content-center">
                                <span class="button-icon"><i class="flaticon-phone-call-2"></i></span>
                                <span class="button-text">For Franchise Enquiry</span>
                                </span>
                                </a>
                            </div>
                            <div class="social-icon d-flex align-items-center">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                                <a href="#"><i class="fab fa-youtube"></i></a>
                                <a href="#"><i class="fab fa-whatsapp"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="offcanvas__overlay"></div>

        <!-- Header Area Start -->
        <header id="header-sticky" class="header-4">
            <div class="container-fluid">
                <div class="mega-menu-wrapper">
                    <div class="header-main">
                        <div class="logo-left">
                            <a href="index.html" class="logo-1">
                                <img src="assets/img/logo/logo_english.png" alt="logo-img" width="200">
                            </a>
                            <a href="index.html" class="logo-2">
                                <img src="assets/img/logo/logo_tamil.png" alt="logo-img" width="200">
                            </a>
                        </div>
                        <div class="header-left">
                            <div class="mean__menu-wrapper d-none d-lg-block">
                                <div class="main-menu">
                                    <nav id="mobile-menu">
                                        <ul>
                                            <li>
                                                <a href="index.php" class="active">Home</a>
                                            </li>
                                            <li>
                                                <a href="about.php">About us</a>
                                            </li>
                                            <li>
                                                <a href="products.php">Products</a>
                                            </li>
                                            <li>
                                                <a href="franchise.php">Franchise</a>
                                            </li>
                                            <li>
                                                <a href="contact.php">Contact us</a>
                                            </li>
                                        </ul>
                                    </nav>
                                    <!-- for wp -->
                                </div>
                            </div>
                        </div>
                        <div class="logo">
                            <a href="index.html" class="header-logo">
                                <img src="assets/img/logo/logo_english.png" alt="logo-img" width="300">
                            </a>
                            <a href="index.html" class="header-logo-2">
                                <img src="assets/img/logo/logo_tamil.png" alt="logo-img" width="200">
                            </a>
                        </div>
                        <div class="header-right d-flex justify-content-end align-items-center">
                            <a href="tel:919840786999" class="theme-btn"> For Franchise Enquiry
                                <span class="button-content-wrapper d-flex align-items-center" style="font-size: 24px; margin-top: 5px;">
                                    <span class="button-icon"><i class="flaticon-phone-call-2"></i></span>
                                    <span class="button-text">9840786999</span>
                                </span>
                            </a>

                            <div class="header__hamburger d-xl-block my-auto">
                                <div class="sidebar__toggle">
                                    <div class="header-bar">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <!-- Search Area Start -->
        <div class="search-wrap">
            <div class="search-inner">
                <i class="fas fa-times search-close" id="search-close"></i>
                <div class="search-cell">
                    <form method="get">
                        <div class="search-field-holder">
                            <input type="search" class="main-search-input" placeholder="Search...">
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Hero Section Start -->
<section class="hero-section-3">
    <div class="array-button">
        <button class="array-next"><i class="far fa-long-arrow-right"></i></button>
        <button class="array-prev"><i class="far fa-long-arrow-left"></i></button>
    </div>
    <div class="swiper hero-slider-2">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="hero-3 style-2 bg-cover" style="background-image: url('assets/img/hero/hero-bg-3.jpg');">
                    <div class="container-fluid">
                        <div class="row g-4 align-items-center justify-content-between">
                            
                            <!-- LEFT CONTENT -->
                            <div class="col-xl-3 col-lg-5">
                                <div class="hero-content">
                                    <h4 data-animation="fadeInUp" data-delay=".4s">
                                        Welcome to
                                    </h4>
                                    <h1 data-animation="fadeInUp" data-delay=".4s" style="text-transform: capitalize;">
                                        Vetri Velan Kaappi
                                    </h1>
                                    <div class="hero-button">
                                        <a href="shop-single.html" class="theme-btn bg-yellow border-radius-none" data-animation="fadeInUp" data-delay="1s">
                                            <span class="button-content-wrapper d-flex align-items-center">
                                                <span class="button-text">More About Us</span>
                                                <i class="fas fa-mug-hot"></i>

                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <!-- CENTER IMAGE -->
                            <div class="col-xl-5 col-lg-7">
                                <div class="pizza-image" data-animation="fadeInUp" data-delay="1.4s">
                                    <img src="assets/img/hero/coffee.png" alt="coffee-img" style="width: 110%;">  
                                </div>
                            </div>

                            <!-- RIGHT CONTENT -->
                            <div class="col-xl-3 col-lg-5">
                                <div class="hero-content-2">
                                    <h2 data-animation="fadeInUp" data-delay=".4s">
                                        Fresh Filter Coffee & freshly made snacks
                                    </h2>
                                    <p data-animation="fadeInUp" data-delay=".6s">
                                        Enjoy authentic South Indian filter coffee, refreshing tea varieties, and freshly baked
                                        breads, puffs, cakes & snacks—served with pure tradition in Coimbatore.
                                    </p>
                                    <h4 data-animation="fadeInUp" data-delay=".6s">
                                        Taste. Freshness. Tradition.
                                    </h4>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<section class="food-category-section fix section-padding section-bg">
    <div class="container">

        <div class="section-title text-center">
            <span>Freshly Brewed · Oven Fresh Goodness</span>
            <h2>Trending Coffee & freshly made snacks</h2>
        </div>

        <?php
        // ------------------------------------
        // FETCH ALL PRODUCTS (3 FROM EACH CATEGORY)
        // ------------------------------------
        $products = [];

        $catSQL = mysqli_query($conn, "SELECT category_id FROM categories WHERE status = 1");

        while ($cat = mysqli_fetch_assoc($catSQL)) {

            $cat_id = $cat['category_id'];

            $prodSQL = mysqli_query($conn, "
                SELECT * FROM products 
                WHERE category_id = $cat_id AND status = 1
                ORDER BY product_id DESC 
                LIMIT 3
            ");

            while ($p = mysqli_fetch_assoc($prodSQL)) {
                $products[] = $p;
            }
        }
        ?>

        <!-- SINGLE CAROUSEL -->
        <div class="product-carousel owl-carousel">

            <?php foreach ($products as $prod) { ?>

                <div class="catagory-product-card-2 text-center item" style="cursor:pointer">

                    <div class="icon" style="color:white;">
                        New
                    </div>

                    <div class="catagory-product-image">
                        <center>
                            <img src="admin/uploads/products/<?= $prod['product_image'] ?>"
                             alt="<?= $prod['product_name'] ?>"
                             width="200" style="border-radius:10px">
                        </center>
                    </div>

                    <div class="catagory-product-content">
                        <h4><?= $prod['product_name'] ?></h4>

                        <p style="margin-top:10px; color:#444; font-size:16px; padding:10px; line-height:2.5vh; border-radius:8px">
                            <?= substr($prod['description'], 0, 550,) ?>
                        </p>
                    </div>

                                            <div class="catagory-button mt-10" style="z-index:99">
                            <a href="products.php" class="theme-btn-2"><i class="far fa-arrow-right"></i>Explore More</a>
                        </div>

                </div>

            <?php } ?>

        </div>
    </div>
</section>


        <!-- About Section Start -->
<section class="about-section fix section-padding pt-5" style="background-color:#F4F1EA">
    <div class="pizza-shape">
        <img src="assets/img/shape/pizza-shape.png" alt="shape-img">
    </div>
    <div class="container">
        <div class="about-wrapper-3">
            <div class="row g-4">
                <div class="col-lg-6">
                    <div class="about-content">
                        <div class="section-title">
                            <span class="wow fadeInUp">Our Story</span>
                            <h2 class="wow fadeInUp" data-wow-delay=".3s">
                                Freshly Brewed Coffee & Oven-Baked Goodness Since Day One
                            </h2>
                        </div>
                        <p class="mt-3 mt-md-0 wow fadeInUp" data-wow-delay=".5s">
                            Welcome to <strong>Vetri Velan Kaappi</strong> — Coimbatore’s favourite coffee spot where 
                            tradition meets taste. We started our journey with a simple idea: deliver 
                            <strong>authentic South Indian filter coffee</strong> and <strong>freshly baked bakery items</strong> 
                            made with premium, high-quality ingredients. Every cup and every bite is prepared with 
                            passion, purity, and the true flavours of Tamil Nadu.
                            <br><br>
                            As a proud MSME registered business 
                            (<strong>Udyam Registration No: UDYAM-TN-03-0258765</strong>), 
                            we are committed to offering hygienic, affordable, and flavour-rich food that keeps 
                            customers returning for more.
                        </p>

                        <ul class="list wow fadeInUp" data-wow-delay=".3s">
                            <li>
                                <i class="fas fa-check"></i> Authentic South Indian Filter Coffee brewed fresh every day
                            </li>
                            <li>
                                <i class="fas fa-check"></i> Freshly baked bakery items — puffs, cakes, buns & cookies
                            </li>
                            <li>
                                <i class="fas fa-check"></i> Premium ingredients, hygienic preparation & fast service
                            </li>
                        </ul>

                        <a href="about.html" class="theme-btn wow fadeInUp" data-wow-delay=".5s">Read More</a>
                    </div>
                </div>

                <div class="col-lg-6 wow fadeInUp" data-wow-delay=".4s" style="margin-top: 160px;">
                    <div class="about-image">
                        <img src="assets/img/about/about.jpg" alt="img">
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>




<section class="food-comboo-section fix bg-cover section-padding" style="background-image: url('assets/img/bg-image/bg.jpg');">
            <div class="drinks-shape">
                <!-- <img src="assets/img/shape/tea_shape.png" alt="shape-img"> -->
            </div>
            <div class="container">
                <div class="comboo-wrapper">
                    <div class="row align-items-center">
                        <div class="col-xl-6">
                            <div class="food-comboo-content">
                                <div class="section-title">
                                    <span class="wow fadeInUp">Why Choose Us</span>
                                    <h2 class="wow fadeInUp" data-wow-delay=".3s">
                                        Experience the Best Coffee & freshly made snacks in <span>Coimbatore</span>
                                    </h2>
                                </div>

                                <p class="wow fadeInUp" data-wow-delay=".5s">
                                    At <strong>Vetri Velan Kaappi</strong>, we blend tradition, taste, and freshness to give you the 
                                    finest South Indian Filter Coffee and premium bakery items. Every cup is brewed with 
                                    authentic ingredients sourced locally from Tamil Nadu, ensuring unmatched flavor and 
                                    quality. From fresh pastries to handcrafted beverages, we serve happiness in every sip.
                                </p>

                                <!-- Tabs Modified -->
                                <div class="nav nav-tabs" id="nav-tab" role="tablist">

                                    <!-- WHY CHOOSE US -->
                                    <button class="nav-link wow fadeInUp active" data-wow-delay=".3s" 
                                        id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" 
                                        type="button" role="tab" aria-selected="true">
                                        <span class="food-comboo-list">
                                            <span class="comboo-title">
                                            <i class="fas fa-telescope"></i> Our Vision
                                            </span>
                                            </span>
                                        </span>
                                    </button>

                                    <!-- VISION -->
                                    <button class="nav-link wow fadeInUp" data-wow-delay=".5s"
                                        id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile"
                                        type="button" role="tab" aria-selected="false">
                                        <span class="food-comboo-list">
                                            <span class="comboo-title">
                                            <i class="fa fa-bullseye"></i> Our Mission
                                            </span>
                                        </span>
                                    </button>
                                </div>
                            </div>

                        </div>
                        <div class="col-xl-6">
                            <div class="tab-content" id="nav-tab-Content">
                                <div class="tab-pane fade active show" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                                    <div class="comboo-image bg-cover" style="background-image: url('assets/img/banner/v1.jpg');">
                                                <h3 class="text-white p-4">Our Vision</h3>
                                                <p class="text-white px-4">
                                                    To become Coimbatore’s most loved coffee brand by offering premium,
                                                    freshly brewed beverages and bakery products that blend tradition,
                                                    taste, and innovation. Our vision is to spread the authentic flavour 
                                                    of South Indian coffee across Tamil Nadu and beyond.
                                                </p>
                                                
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                                    <div class="comboo-image bg-cover" style="background-image: url('assets/img/banner/v2.jpg');">
                                        <h3 class="text-white p-4">Our Mission</h3>
                                                <p class="text-white px-4">
                                                    Our mission is to serve customers with hygienic, high-quality, 
                                                    aromatic coffee and freshly prepared bakery items at fair prices. 
                                                    We aim to deliver consistency in taste, maintain exceptional 
                                                    service quality, and create a warm ambience for every customer visit.
                                                </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
</section>

        

<section class="testimonial-section fix section-padding">
    <div class="container">
        <div class="testimonial-wrapper-4">
            <div class="row align-items-center justify-content-between">
                <div class="col-xl-7 col-lg-7">
                    <div class="section-title">
                        <span class="wow fadeInUp">Testimonials</span>
                        <h2 class="wow fadeInUp" data-wow-delay=".3s">
                            What Our Customers Say About Vetri Velan Kaappi
                        </h2>
                    </div>
                    <p class="wow fadeInUp mt-3 mb-3" data-wow-delay=".4s" style="opacity: 0.9;">
                        From the rich aroma of freshly brewed filter coffee to the irresistible taste of our oven-baked delights, 
                        our customers love every sip and bite. Here’s what they have to say about their experience at 
                        <strong>Vetri Velan Kaappi</strong>, Coimbatore’s favorite coffee and bakery destination.
                    </p>

                <span class="wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">Customer Testimonial</span>
                    <div class="swiper testimonial-content-slider-3 mt-10">
                        <div class="swiper-wrapper">
                            <!-- Testimonial 1 -->
                            <div class="swiper-slide">
                                <div class="testimonial-content">
                                    <div class="info-icon d-flex align-items-center">
                                        <img src="assets/img/icon/quote.svg" alt="icon-img">
                                        <h4>Premium Filter Coffee</h4>
                                        <div class="star">
                                            <span class="fas fa-star"></span>
                                            <span class="fas fa-star"></span>
                                            <span class="fas fa-star"></span>
                                            <span class="fas fa-star"></span>
                                            <span class="fas fa-star"></span>
                                        </div>
                                    </div>
                                    <h3>
                                        “Vetri Velan Kaappi is the best coffee shop in Coimbatore. 
                                        Their freshly brewed filter coffee has a rich aroma and 
                                        authentic South Indian taste. A must-visit for every coffee lover!”
                                    </h3>
                                    <div class="client-info d-flex align-items-center">
                                        <div class="client-image bg-cover" style="background-image: url('assets/img/client/01.jpg');"></div>
                                        <div class="title">
                                            <h4>Arun Kumar / <span>Software Engineer</span></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Testimonial 2 -->
                            <div class="swiper-slide">
                                <div class="testimonial-content">
                                    <div class="info-icon d-flex align-items-center">
                                        <img src="assets/img/icon/quote.svg" alt="icon-img">
                                        <h4>Authentic Taste</h4>
                                        <div class="star">
                                            <span class="fas fa-star"></span>
                                            <span class="fas fa-star"></span>
                                            <span class="fas fa-star"></span>
                                            <span class="fas fa-star"></span>
                                            <span class="fas fa-star"></span>
                                        </div>
                                    </div>
                                    <h3>
                                        “If you're looking for original South Indian filter coffee 
                                        in Coimbatore, Vetri Velan Kaappi is the perfect spot. 
                                        The taste is pure, strong, and refreshingly traditional.”
                                    </h3>
                                    <div class="client-info d-flex align-items-center">
                                        <div class="client-image bg-cover" style="background-image: url('assets/img/client/02.jpg');"></div>
                                        <div class="title">
                                            <h4>Meenakshi S / <span>Teacher</span></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Testimonial 3 -->
                            <div class="swiper-slide">
                                <div class="testimonial-content">
                                    <div class="info-icon d-flex align-items-center">
                                        <img src="assets/img/icon/quote.svg" alt="icon-img">
                                        <h4>Fresh & Hygienic</h4>
                                        <div class="star">
                                            <span class="fas fa-star"></span>
                                            <span class="fas fa-star"></span>
                                            <span class="fas fa-star"></span>
                                            <span class="fas fa-star"></span>
                                            <span class="fas fa-star"></span>
                                        </div>
                                    </div>
                                    <h3>
                                        “The coffee here is always fresh, hygienic, and 
                                        exceptionally well-prepared. One of the most affordable 
                                        and best-quality coffee shops in Coimbatore.”
                                    </h3>
                                    <div class="client-info d-flex align-items-center">
                                        <div class="client-image bg-cover" style="background-image: url('assets/img/client/03.jpg');"></div>
                                        <div class="title">
                                            <h4>Dinesh B / <span>Entrepreneur</span></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Testimonial 4 -->
                            <div class="swiper-slide">
                                <div class="testimonial-content">
                                    <div class="info-icon d-flex align-items-center">
                                        <img src="assets/img/icon/quote.svg" alt="icon-img">
                                        <h4>Best Start to the Day</h4>
                                        <div class="star">
                                            <span class="fas fa-star"></span>
                                            <span class="fas fa-star"></span>
                                            <span class="fas fa-star"></span>
                                            <span class="fas fa-star"></span>
                                            <span class="fas fa-star"></span>
                                        </div>
                                    </div>
                                    <h3>
                                        “My mornings feel incomplete without Vetri Velan Kaappi. 
                                        Their strong filter coffee gives the perfect energy boost. 
                                        Truly one of the top-rated coffee shops in Coimbatore.”
                                    </h3>
                                    <div class="client-info d-flex align-items-center">
                                        <div class="client-image bg-cover" style="background-image: url('assets/img/client/04.jpg');"></div>
                                        <div class="title">
                                            <h4>Priya Lakshmi / <span>Bank Staff</span></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="swiper-pagination swiper-dot-2"></div>
                    </div>
                </div>

                <div class="col-xl-4 col-lg-4 mt-5 mt-lg-10">
                    <div class="testimonial-image bg-cover" style="background-image: url('assets/img/banner-new/fcm.png'); background-size: contain;"></div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="about-section fix section-padding section-bg"  >
    <div class="container">
        <div class="about-wrapper">
            <div class="row align-items-center">

                <!-- Left Image -->
                <div class="col-xl-6 col-lg-6 wow fadeInUp" data-wow-delay=".3s">
                    <div class="about-image">
                        <img src="assets/img/banner-new/franchise-banner.jpg" alt="about-img">
                    </div>
                </div>

                <!-- Right Content -->
                <div class="col-xl-6 col-lg-6 mt-5 mt-lg-0">
                    <div class="about-content">

                        <!-- ============================= -->
                        <!--      FRANCHISE DETAILS         -->
                        <!-- ============================= -->
                        <div class="franchise-box mt-5 wow fadeInUp" data-wow-delay=".6s">
                            <div class="section-title">
                                <span>Franchise Opportunity</span>
                                <h2 class="mt-2">
                                    Become a Vetri Velan Kaappi <span>Franchise Partner</span>
                                </h2>
                            </div>

                            <p>
                                Join one of Tamil Nadu’s fastest-growing traditional filter coffee brands.
                                Start your own <strong>Vetri Velan Kaappi Franchise in Tamil Nadu</strong> and attract
                                customers who love authentic South Indian coffee, snacks, and café culture.
                                We provide complete business support, training, branding, and setup assistance.
                            </p>

                            <!-- Rankable Keywords included silently:
                                Vetri Velan Kaappi Franchise
                                Coffee shop franchise in Tamil Nadu
                                Filter coffee franchise India
                                Low investment café franchise
                                Best coffee franchise in Coimbatore
                            -->

                            <div class="icon-area">
                                <div class="icon-items d-flex">
                                    <div class="icon"><i class="fa fa-coffee"></i></div>
                                    <div class="content">
                                        <h4>low investment. high returns.</h4>
                                        <p>Ideal for first-time business owners with full operational support.</p>
                                    </div>
                                </div>

                                <div class="icon-items d-flex">
                                    <div class="icon"><i class="fas fa-store-alt"></i></div>
                                    <div class="content">
                                        <h4>brand popularity</h4>
                                        <p>A rapidly expanding food & beverage brand across Tamil Nadu.</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Franchise CTA -->
                            <a href="contact.php#franchise-form" class="theme-btn bg-yellow mt-4 wow fadeInUp" data-wow-delay=".7s">
                                Apply for Franchise
                            </a>
                        </div>
                        <!-- END FRANCHISE BLOCK -->

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="food-processing-section section-padding fix bg-cover" style="padding-bottom:0px">
    <div class="container">
        <div class="section-title text-center">
            <span class="wow fadeInUp">Franchise Process</span>
            <h2 class="wow fadeInUp" data-wow-delay=".3s">
                How to Become a Vetri Velan Kaappi Franchise Partner?
            </h2>
        </div>

        <div class="food-processing-wrapper">
            <div class="row">

                <!-- Step 01 -->
                <div class="col-xl-4 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                    <div class="food-processing-items style-2 center">
                        <div class="food-processing-image" style="background:none;">
                            <i class="fa fa-handshake" style="font-size:60px; color:#D12525;"></i>
                            <div class="number"><span>01</span></div>
                        </div>
                        <div class="food-processing-content">
                            <h3>Initial Inquiry</h3>
                            <p>
                                Contact us with your interest in starting a Vetri Velan Kaappi outlet. 
                                Our team will guide you through all franchise details.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Step 02 -->
                <div class="col-xl-4 col-md-6 wow fadeInUp" data-wow-delay=".5s">
                    <div class="food-processing-items style-2 center">
                        <div class="food-processing-image" style="background:none;">
                            <i class="fa fa-map-marker" style="font-size:60px; color:#D12525;"></i>
                            <div class="number"><span>02</span></div>
                        </div>
                        <div class="food-processing-content">
                            <h3>Site Evaluation</h3>
                            <p>
                                Our experts evaluate your Coimbatore/Tamil Nadu shop location for feasibility 
                                and business potential.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Step 03 -->
                <div class="col-xl-4 col-md-6 wow fadeInUp" data-wow-delay=".7s">
                    <div class="food-processing-items style-2 center">
                        <div class="food-processing-image" style="background:none;">
                            <i class="fas fa-file-check" style="font-size:60px; color:#D12525;"></i>
                            <div class="number"><span>03</span></div>
                        </div>
                        <div class="food-processing-content">
                            <h3>Agreement & Approval</h3>
                            <p>
                                After location approval, we finalize the franchise agreement and start the onboarding process.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Step 04 -->
                <div class="col-xl-4 col-md-6 wow fadeInUp" data-wow-delay=".9s">
                    <div class="food-processing-items style-2 center">
                        <div class="food-processing-image" style="background:none;">
                            <i class="fa fa-cogs" style="font-size:60px; color:#D12525;"></i>
                            <div class="number"><span>04</span></div>
                        </div>
                        <div class="food-processing-content">
                            <h3>Setup & Store Design</h3>
                            <p>
                                We assist with interior design, store branding, kitchen setup, equipment selection, and more.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Step 05 -->
                <div class="col-xl-4 col-md-6 wow fadeInUp" data-wow-delay="1.1s">
                    <div class="food-processing-items style-2 center">
                        <div class="food-processing-image" style="background:none;">
                            <i class="fa fa-users" style="font-size:60px; color:#D12525;"></i>
                            <div class="number"><span>05</span></div>
                        </div>
                        <div class="food-processing-content">
                            <h3>Training & Support</h3>
                            <p>
                                Barista training, customer service, billing, operations, store management — full support provided.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Step 06 -->
                <div class="col-xl-4 col-md-6 wow fadeInUp" data-wow-delay="1.3s">
                    <div class="food-processing-items style-2 center">
                        <div class="food-processing-image" style="background:none;">
                            <i class="fa fa-coffee" style="font-size:60px; color:#D12525;"></i>
                            <div class="number"><span>06</span></div>
                        </div>
                        <div class="food-processing-content">
                            <h3>Grand Opening</h3>
                            <p>
                                With our marketing support and launch promotions, your Vetri Velan Kaappi outlet starts serving customers.
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>


<section class="faq-section fix section-padding" style="padding-top:80px">
    <div class="container">
        <div class="section-title text-center">
            <span class="wow fadeInUp">Franchise – Frequently Asked Questions</span>
            <h2 class="wow fadeInUp" data-wow-delay=".3s">Franchise FAQ</h2>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="faq-content">
                    <div class="faq-accordion">
                        <div class="accordion" id="accordion">

                            <!-- FAQ 1 -->
                            <div class="accordion-item">
                                <h4 class="accordion-header">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq1" aria-expanded="true">
                                        What is the investment required to start a Vetri Velan Kaappi Franchise?
                                    </button>
                                </h4>
                                <div id="faq1" class="accordion-collapse collapse show" data-bs-parent="#accordion">
                                    <div class="accordion-body">
                                        The total investment depends on location and shop size. On average, the investment starts from 
                                        <strong>₹6 Lakhs to ₹12 Lakhs</strong>, including setup, equipment, interior, training, and branding support.
                                    </div>
                                </div>
                            </div>

                            <!-- FAQ 2 -->
                            <div class="accordion-item">
                                <h4 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">
                                        What support do I receive as a franchise partner?
                                    </button>
                                </h4>
                                <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#accordion">
                                    <div class="accordion-body">
                                        We provide <strong>end-to-end support</strong>, including:
                                        <br>✔ Location selection & store layout  
                                        <br>✔ Staff training  
                                        <br>✔ License & vendor support  
                                        <br>✔ Branding, marketing & launch  
                                        <br>✔ Ongoing operational support and quality checks  
                                    </div>
                                </div>
                            </div>

                            <!-- FAQ 3 -->
                            <div class="accordion-item">
                                <h4 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3">
                                        How much space is required to open the franchise?
                                    </button>
                                </h4>
                                <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#accordion">
                                    <div class="accordion-body">
                                        A minimum space of <strong>150 to 300 sq. ft.</strong> is recommended.  
                                        Both <strong>kiosk</strong> and <strong>café</strong> model options are available based on business goals.
                                    </div>
                                </div>
                            </div>

                            <!-- FAQ 4 -->
                            <div class="accordion-item">
                                <h4 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq4">
                                        Where can I open a Vetri Velan Kaappi Franchise?
                                    </button>
                                </h4>
                                <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#accordion">
                                    <div class="accordion-body">
                                        You can open the franchise anywhere in <strong>Tamil Nadu</strong>, especially in:
                                        <br>✔ Coimbatore  
                                        <br>✔ Madurai  
                                        <br>✔ Trichy  
                                        <br>✔ Tiruppur  
                                        <br>✔ Dindigul  
                                        <br>✔ Erode  
                                        <br>✔ Theni  
                                        Expansion is also open for <strong>other South Indian states</strong>.
                                    </div>
                                </div>
                            </div>

                            <!-- FAQ 5 -->
                            <div class="accordion-item">
                                <h4 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq5">
                                        What will be the profit margin on net sales?
                                    </button>
                                </h4>
                                <div id="faq5" class="accordion-collapse collapse" data-bs-parent="#accordion">
                                    <div class="accordion-body">
                                        The profit margin depends on operational efficiency and sales performance.  
                                        On average, franchise partners can expect a <strong>10% to 30% profit margin on net sales</strong>.
                                    </div>
                                </div>
                            </div>


                            <!-- FAQ 6 -->
                            <div class="accordion-item">
                                <h4 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq6">
                                        How long does it take to launch the franchise?
                                    </button>
                                </h4>
                                <div id="faq6" class="accordion-collapse collapse" data-bs-parent="#accordion">
                                    <div class="accordion-body">
                                        Once the agreement is signed, the store typically launches within 
                                        <strong>20–30 days</strong>, including interior setup, equipment installation, and staff training.
                                    </div>
                                </div>
                            </div>

                            <!-- FAQ 7 -->
                            <div class="accordion-item">
                                <h4 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq7">
                                        Do I need prior business experience?
                                    </button>
                                </h4>
                                <div id="faq7" class="accordion-collapse collapse" data-bs-parent="#accordion">
                                    <div class="accordion-body">
                                        No business experience is required.  
                                        Our team provides <strong>complete training</strong>, making it easy for first-time entrepreneurs to run the franchise smoothly.
                                    </div>
                                </div>
                            </div>

                        </div><!-- accordion end -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="main-cta-banner section-padding pt-0">
            <div class="container">
                <div class="main-cta-banner-wrapper bg-cover mt-10">

        <div class="google-map-wrap">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4859.558213977671!2d77.00786897587055!3d11.023449854587058!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ba8570010927cbf%3A0x4f8f5bc0ad341591!2sVETRI%20VELAN%20KAAPPI!5e1!3m2!1sen!2sin!4v1764163501565!5m2!1sen!2sin" style="border:0; height:400px; border-radius: 10px" allowfullscreen="" loading="lazy"></iframe>
        </div>
                </div>
            </div>
</section>

<section class="booking-section fix section-padding bg-cover" style="background-image: url('assets/img/banner-new/1.jpg');">
    <div class="container">
        <div class="booking-wrapper style-responsive section-padding pb-0">
            <div class="row justify-content-between align-items-center">
                
                <!-- Left Side Content -->
                <div class="col-lg-6">
                    <div class="booking-content">
                        <div class="section-title">
                            <span class="wow fadeInUp" style="color:#FFB936">Join the Coffee Revolution</span>
                            <h2 class="text-white wow fadeInUp" data-wow-delay=".3s">
                                Want to start a franchise?<br>
                                Partner with Vetri Velan Kaappi
                            </h2>
                        </div>

                        <p class="text-white mt-3 wow fadeInUp" data-wow-delay=".4s" style="opacity: .9;">
                            Become part of Tamil Nadu’s fastest-growing premium filter coffee brand.  
                            Low investment • High profit • End-to-end business support • Strong brand identity.
                        </p>

                        <div class="icon-items d-flex align-items-center wow fadeInUp" data-wow-delay=".5s">
                            <div class="icon">
                                <i class="flaticon-phone-call-2" style="color:#FFB936"></i>
                            </div>
                            <div class="content">
                                <h5>Franchise Support Center</h5>
                                <h3><a href="tel:+919840678999">+91 9840678999</a></h3>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Right Side Form -->
                <div class="col-lg-5 mt-5 mt-lg-0 wow fadeInUp" data-wow-delay=".4s">
                    <div class="booking-contact bg-cover" style="background-image: url('assets/img/shape/booking-shape.png');">
                        
                        <h4 class="text-center text-white">Franchise Enquiry Form</h4>

                        <div class="booking-items">

                            <div class="form-clt">
                                <input type="text" name="fullname" id="fullname" placeholder="Full Name">
                                <div class="icon">
                                    <i class="fas fa-user"></i>
                                </div>
                            </div>

                            <div class="form-clt">
                                <input type="text" name="phone" id="phone" placeholder="Phone Number">
                                <div class="icon">
                                    <i class="fas fa-phone"></i>
                                </div>
                            </div>

                            <div class="form-clt">
                                <input type="email" name="email" id="email" placeholder="Email Address">
                                <div class="icon">
                                    <i class="fas fa-envelope"></i>
                                </div>
                            </div>

                            <div class="form-clt">
                                <input type="text" name="location" id="location" placeholder="Preferred Location (City / Area)">
                                <div class="icon">
                                    <i class="fas fa-map-marker-alt"></i>
                                </div>
                            </div>

                            <div class="form-clt">
                                <div class="nice-select" tabindex="0">
                                    <span class="current">
                                        Investment Range
                                    </span>
                                    <ul class="list">
                                        <li data-value="Below 5 Lakhs" class="option selected">Below 5 Lakhs</li>
                                        <li data-value="5 - 10 Lakhs" class="option">5 - 10 Lakhs</li>
                                        <li data-value="10 - 20 Lakhs" class="option">10 - 20 Lakhs</li>
                                        <li data-value="20 Lakhs Above" class="option">20 Lakhs Above</li>
                                    </ul>
                                </div>
                            </div>

                            <!-- change this part in your form -->
                            <div class="form-clt">
<a id="sendWhatsappBtn" href="#" class="theme-btn bg-yellow w-100 text-center">
    Submit Franchise Request
</a>

                            </div>


                            <p class="text-white text-center mt-3" style="font-size: 14px; opacity: .8;">
                                MSME Udyam Registration Number: <strong>UDYAM-TN-03-0258765</strong>
                            </p>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>




        <!-- Footer Contact Us Start -->
<footer class="footer-section section-bg-3 fix">
    <!-- <div class="footer-shape" style="translate: none; rotate: none; scale: none; transform: translate(0%, -100%);">
        <img src="assets/img/shape/footer-shape.png" alt="shape-img">
    </div> -->
    <!-- <div class="footer-shape-2"
        style="translate: none; rotate: none; scale: none; transform: translate3d(0px, 0px, 0px) rotate(27.36deg);">
        <img src="assets/img/shape/footer-shape-2.png" alt="shape-img">
    </div> -->
    <div class="container">
        <div class="footer-widgets-wrapper style-2">
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-6 pe-md-2 wow fadeInUp" data-wow-delay=".3s"
                    style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
                    <div class="single-footer-widget pe-md-5 border-right">
                        <div class="widget-head">
                            <a href="index.html">
                                <img src="assets/img/logo/logo_tamil.png" alt="logo-img" width="300">
                            </a>
                        </div>
                        <div class="footer-content">
                            <p>
                                Vetri Velan Kaappi – your favourite coffee destination in Coimbatore, Tamil Nadu. 
                                We serve freshly brewed filter coffee, premium snacks, and homemade bakery items 
                                crafted with quality ingredients. Experience authentic South Indian taste, warm 
                                hospitality, and a cosy ambience every time you visit.
                            </p>

                            <div class="social-icon d-flex align-items-center">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                                <a href="#"><i class="fab fa-whatsapp"></i></a>
                                <a href="#"><i class="fab fa-youtube"></i></a>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-xl-5 col-lg-4 col-md-6 ps-xl-5 pe-md-5 wow fadeInUp" data-wow-delay=".5s"
                    style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
                    <div class="single-footer-widget border-right">
                        <div class="widget-head">
                            <h4>Quick Links</h4>
                        </div>
                        <div class="list-area d-flex align-items-center">
                            <ul>
                                <li>
                                    <a href="index.php">
                                        <span class="text-effect">
                                            <span class="effect-1">Home</span>
                                            <span class="effect-1">Home</span>
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="about.php">
                                        <span class="text-effect">
                                            <span class="effect-1">About us</span>
                                            <span class="effect-1">About us</span>
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="products.php">
                                        <span class="text-effect">
                                            <span class="effect-1">Products</span>
                                            <span class="effect-1">Products</span>
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="franchise.php">
                                        <span class="text-effect">
                                            <span class="effect-1">Franchise</span>
                                            <span class="effect-1">Franchise</span>
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="contact.php">
                                        <span class="text-effect">
                                            <span class="effect-1">Contact</span>
                                            <span class="effect-1">Contact</span>
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="admin/login.php">
                                        <span class="text-effect">
                                            <span class="effect-1">Login</span>
                                            <span class="effect-1">Login</span>
                                        </span>
                                    </a>
                                </li>
                            </ul>

                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 ps-xl-5 wow fadeInUp" data-wow-delay=".7s"
                    style="visibility: visible; animation-delay: 0.7s; animation-name: fadeInUp;">
                    <div class="single-footer-widget">
                        <div class="widget-head">
                            <div class="widget-head">
                                <h4>contact us</h4>
                            </div>
                        </div>
                        <div class="footer-content">
                            <p>
                                No 77 Link road, periyar nagar Peelamedu avinashi road Fun mall backside Coimbatore 641004.
                            </p>
                            <a href="mailto:vetrivelankaappi@gmail.com" class="link">vetrivelankaappi@gmail.com</a>
                            <a href="tel:9840678999" class="number">9840678999</a> <br>
                            <a href="tel:9840786999" class="number">9840786999</a>
                            <ul class="info-date">
                                <li>Monday – Sunday: <span>24/7 Hours</span></li>
                                <!-- <li>Saturday: <span>8am – 12am</span></li> -->
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom style-2">
        <div id="scrollUp" class="scroll-icon bg-cover" style="background-image: url('assets/img/shop-food/box.png');">
            <i class="fas fa-arrow-alt-up"></i>
        </div>
        <div class="container">
            <div class="footer-bottom-wrapper d-flex align-items-center justify-content-between">
                <p class="wow fadeInLeft" data-wow-delay=".3s"
                    style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInLeft;">
                    © Copyright <span class="theme-color-3">2025</span> <a href="https://scriptingspider.com/">Scripting Spider</a>. All Rights
                    Reserved.
                </p>
                <ul class="wow fadeInRight" data-wow-delay=".5s"
                    style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInRight;">
                    <li>
                        <a href="#">
                            <span class="text-effect">
                                <span class="effect-1">Privacy Policy</span>
                                <span class="effect-1">Privacy Policy</span>
                            </span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span class="text-effect">
                                <span class="effect-1">Terms &amp; Condition</span>
                                <span class="effect-1">Terms &amp; Condition</span>
                            </span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>

        <!-- Map Section Start -->


        <!-- Footer Section Start -->

        
        <!-- Back To Top Start -->
        <div class="scroll-up">
            <svg class="scroll-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
                <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
            </svg>
        </div>
        
        <script>
            // Ensure this runs after page loads
            document.addEventListener("DOMContentLoaded", function () {

                const TARGET_WHATSAPP_NUMBER = "919840678999"; // ← your number here

                document.getElementById("sendWhatsappBtn").addEventListener("click", function (e) {
                    e.preventDefault();

                    // Get input values
                    const fullname = document.getElementById("fullname").value.trim();
                    const phone = document.getElementById("phone").value.trim();
                    const email = document.getElementById("email").value.trim();
                    const location = document.getElementById("location").value.trim();

                    // Get nice-select selected value
                    const selectedOption = document.querySelector(".nice-select .current");
                    const investmentRange = selectedOption ? selectedOption.textContent.trim() : "";

                    // ------------------ VALIDATION --------------------
                    if (fullname === "") {
                        alert("Please enter your Full Name.");
                        return;
                    }

                    if (phone === "") {
                        alert("Please enter your Phone Number.");
                        return;
                    }

                    if (!/^[0-9]{10,15}$/.test(phone)) {
                        alert("Phone number must be 10–15 digits.");
                        return;
                    }

                    if (email === "") {
                        alert("Please enter your Email Address.");
                        return;
                    }

                    const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                    if (!emailPattern.test(email)) {
                        alert("Please enter a valid Email Address.");
                        return;
                    }

                    if (location === "") {
                        alert("Please enter Preferred Location.");
                        return;
                    }

                    if (!investmentRange || investmentRange === "Investment Range") {
                        alert("Please select an Investment Range.");
                        return;
                    }

                    // ------------------ MESSAGE TEMPLATE --------------------
                    const message =
            `New Service Enquiry From Vetri Velan Kaappi Website

            Full Name: ${fullname}
            Phone Number: ${phone}
            Email Address: ${email}
            Preferred Location: ${location}
            Investment Range: ${investmentRange}`;

                    const encodedMessage = encodeURIComponent(message);

                    const waNumber = TARGET_WHATSAPP_NUMBER.replace(/\D+/g, "");
                    const waUrl = `https://wa.me/${waNumber}?text=${encodedMessage}`;

                    window.open(waUrl, "_blank");

                });
            });
        </script>


        <script>
        $('.product-carousel').owlCarousel({
            loop: true,
            margin: 25,
            autoplay: true,
            autoplayTimeout: 2500,
            smartSpeed: 600,
            dots: false,
            nav: false,
            responsive: {
                0:{ items:1 },
                576:{ items:2 },
                768:{ items:3 },
                1200:{ items:4 }
            }
        });
        </script>
        


        <!--<< All JS Plugins >>-->
        <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="assets/js/jquery-3.7.1.min.js"></script>
        <!--<< Viewport Js >>-->
        <script src="assets/js/viewport.jquery.js"></script>
        <!--<< Bootstrap Js >>-->
        <script src="assets/js/bootstrap.bundle.min.js"></script>
        <!--<< Nice Select Js >>-->
        <script src="assets/js/jquery.nice-select.min.js"></script>
        <!--<< Waypoints Js >>-->
        <script src="assets/js/jquery.waypoints.js"></script>
        <!--<< Counterup Js >>-->
        <script src="assets/js/jquery.counterup.min.js"></script>
        <!--<< Swiper Slider Js >>-->
        <script src="assets/js/swiper-bundle.min.js"></script>
        <!--<< MeanMenu Js >>-->
        <script src="assets/js/jquery.meanmenu.min.js"></script>
        <!--<< Magnific Popup Js >>-->
        <script src="assets/js/jquery.magnific-popup.min.js"></script>
        <!--<< GSAP Animation Js >>-->
        <script src="assets/js/animation.js"></script>
        <!--<< Wow Animation Js >>-->
        <script src="assets/js/wow.min.js"></script>
        <!--<< Main.js >>-->
        <script src="assets/js/main.js"></script>
    <script defer src="https://static.cloudflareinsights.com/beacon.min.js/vcd15cbe7772f49c399c6a5babf22c1241717689176015" integrity="sha512-ZpsOmlRQV6y907TI0dKBHq9Md29nnaEIPlkf84rnaERnq6zvWvPUqr2ft8M1aS28oN72PdrCzSjY4U6VaAw1EQ==" data-cf-beacon='{"version":"2024.11.0","token":"90f7972af14a48b4add7da2b74f5d675","r":1,"server_timing":{"name":{"cfCacheStatus":true,"cfEdge":true,"cfExtPri":true,"cfL4":true,"cfOrigin":true,"cfSpeedBrain":true},"location_startswith":null}}' crossorigin="anonymous"></script>
</body>
</html>