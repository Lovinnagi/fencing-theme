<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Fencing
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">

    <?php wp_head(); ?>
    <style>
    :root {
        --primary: #0a0a0a;
        --secondary: #39476b;
        --overlay: rgba(57, 71, 107, 0.7);
        --tertiary: #ebf4fb;
        --orange: #f26101;
        --yellow: #facc15;
        --red: #ed3f3f;
        --green: #0a4737;
        --black: #212121;
        --white: #ffffff;
        --gray: #f6f6f6;
        --gray-100: #f3f4f6;
        --gray-200: #e5e7eb;
        --gray-400: #d6d6d6;
    }
    </style>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <div id="page" class="site">
        <header class="position-fixed w-100 top-0 d-xs-none">
            <div class="px-3 py-2 bg-white text-black">
                <div class="container ">
                    <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                        <a href="<?php echo home_url(); ?>"
                            class="d-flex align-items-center my-2 my-lg-0 me-lg-auto text-white text-decoration-none p-l">
                            <img src="<?php echo THEME_IMAGE_URL; ?>/logo.png">
                        </a>

                        <ul class="nav col-12 col-lg-auto my-2 justify-content-center my-md-0 text-small p-0">
                            <li>
                                <a href="#" class=" d-flex align-items-center gap-3 nav-link text-secondary">
                                    <img width="30px" height="30px" src="<?php echo THEME_IMAGE_URL; ?>/clock.svg">
                                    <div>
                                        <h6 class="m-0">Mon-Sun 6AM-12AM</h6>
                                        <span class="extra-small">Emergency Service Available</span>
                                    </div>

                                </a>
                            </li>
                            <li>
                                <a href="#" class=" d-flex align-items-center gap-3 nav-link text-secondary">
                                    <img width="30px" height="30px" src="<?php echo THEME_IMAGE_URL; ?>/address.svg">
                                    <div>
                                        <h6 class="m-0">6810 SR-7 Suite 223</h6>
                                        <span class="extra-small">Coconut Creek FL 33073</span>
                                    </div>

                                </a>
                            </li>
                            <li>
                                <a href="#" class=" d-flex align-items-center gap-3 nav-link text-secondary">
                                    <img width="30px" height="30px" src="<?php echo THEME_IMAGE_URL; ?>/phone.svg">
                                    <div>
                                        <h6 class="m-0">(954) 480-1843</h6>
                                        <span class="extra-small">Call For Locksmith Service</span>
                                    </div>

                                </a>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
            <div class="px-5 py-2 mb-3 bg-bar">

                <div class=" container d-flex flex-wrap justify-content-between collapse">
                    <ul class="p-0 list-unstyled gap-4 m-0 ">
                        <li><a class="nav-link text-link" href="#">Home</a></li>
                        <li><a class="nav-link text-link" href="#">About</a></li>
                        <li class="dropdown">
                            <a class="dropdown-toggle nav-link" type="button" id="dropdownMenuButton1"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Services
                            </a>
                            <ul class="dropdown-menu p-0" aria-labelledby="dropdownMenuButton1">
                                <li class="p-0 d-block"> <a class="px-2 py-1 nav-link text-secondary" href="#">Another
                                        action</a></li>

                            </ul>
                        </li>
                        <li><a class="nav-link text-link" href="#">Gallery</a></li>
                        <li><a class="nav-link text-link" href="#">Reviews</a></li>
                        <li><a class="nav-link text-link" href="#">Blog</a></li>
                        <li><a class="nav-link text-link" href="#">Contact</a></li>
                    </ul>

                    <div class="text-end d-flex align-items-center ">
                        <div class="d-flex gap-2">
                            <i class=" text-white fa-brands fa-facebook"></i>
                            <i class="text-white fa-brands fa-x-twitter"></i>
                            <i class=" text-white fa-brands fa-linkedin"></i>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- ============ Header End ============= -->

        <!-- ============ Mobile Header start ============= -->
        <section class="d-md-none ">
            <div class="p-0">
                <div class="justify-content-between d-flex bg-bar align-items-center py-2 px-3">
                    <div class="col-md-7">
                        <p class="m-0 text-white">Emergency Service Available</p>
                    </div>
                    <div class="col-md-5">
                        <div class="d-flex gap-3">
                            <i class=" text-white fa-brands fa-facebook"></i>
                            <i class="text-white fa-brands fa-x-twitter"></i>
                            <i class=" text-white fa-brands fa-linkedin"></i>
                        </div>
                    </div>
                </div>
            </div>

            <nav class="navbar navbar-expand-lg text-secondary">
                <div class="container-fluid p-0">
                    <div class="px-3 d-flex justify-content-between w-100 align-items-center">
                        <a class="navbar-brand" href="#">
                            <img src="<?php echo THEME_IMAGE_URL; ?>/logo.png">
                        </a>

                        <i data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation"
                            class="fa-solid fa-bars text-black fs-1"></i>
                    </div>
                    <div class="collapse navbar-collapse position-relative " id="navbarNavDropdown">
                        <ul class="navbar-nav position-absolute top-0 bg-green start-0 end-0 p-3 z-index-9">
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="#">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">About</a>
                            </li>
                            <li class="dropdown">
                                <a class="dropdown-toggle nav-link" type="button" id="dropdownMenuButton1"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    Services
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                    <li><a class="dropdown-item px-2" href="#">Another action</a></li>

                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Gallery</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Reviews</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Blog</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Contact</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </section>