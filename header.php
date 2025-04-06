<?php
// Function to get current page filename without extension
function getCurrentPage() {
    // Get the current page filename
    $currentPage = basename($_SERVER['PHP_SELF']);
    
    // Remove file extension (e.g., .php)
    $currentPage = pathinfo($currentPage, PATHINFO_FILENAME);
    
    return $currentPage;
}

// echo getCurrentPage();

// Function to check if this is the current page
function isActive($pageName) {
    $currentPage = getCurrentPage();
    
    // Return 'active' class if it's the current page
    return ($currentPage == $pageName) ? 'active' : '';
}

// Array of pages with their titles
$pages = [
    'index' => 'EASY TREND LUXE | Premium Fashion & Professional Photography',
    'store' => 'Luxury Collections | EASY TREND LUXE',
    'studio' => 'Luxury Photo Sessions | EASY TREND LUXE Studio',
    'gallery' => 'Luxury Photography Showcase | EASY TREND LUXE',
    'about' => 'Our Luxury Story | EASY TREND LUXE',
    'contact' => 'Connect With Us | EASY TREND LUXE',
    'cart' => 'EASY TREND LUXE | Your Cart',
    'checkout' => 'EASY TREND LUXE - Checkout',
    'confirm_order' => 'EASY TREND LUXE - Order Confirmation',
];

// Get the current page title
$currentPage = getCurrentPage();
$pageTitle = isset($pages[$currentPage]) ? $pages[$currentPage] : 'Welcome to Our Website';

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> <?= $pageTitle ?> </title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.4/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.4/ScrollTrigger.min.js"></script>
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- <link rel="stylesheet" href="assets/css/shop.css"> -->
    <link rel="stylesheet" href="assets/css/<?= getCurrentPage() ?>.css">
</head>
<body>
    <!-- Header Section -->
    <header id="header">
        <div class="container header-container">
            <div class="logo">
                <a href="index.php">EASY <span>TREND</span> LUXE</a>
            </div>

            <nav class="nav-desktop">
                <ul>
                    <li class="<?= isActive('index'); ?>"><a href="index.php">Home</a></li>
                    <li class="<?= isActive('store'); ?>"><a href="store.php">Fashion Store</a></li>
                    <li class="<?= isActive('studio'); ?>"><a href="studio.php">Studio</a></li>
                    <li class="<?= isActive('gallery'); ?>"><a href="gallery.php">Gallery</a></li>
                    <li class="<?= isActive('about'); ?>"><a href="about.php">About Us</a></li>
                    <li class="<?= isActive('contact'); ?>"><a href="contact.php">Contact</a></li>
                </ul>
            </nav>

            <div class="nav-icons">
                <!-- <div class="nav-icon">
                    <i class="fas fa-search"></i>
                </div> -->

                <!-- User Dropdown Version -->
                <div class="user-dropdown nav-icon">
                    <i class="fas fa-user"></i>
                    <ul class="dropdown-menu">
                        <li><a href="login.php"><i class="fas fa-sign-in-alt"></i> Login</a></li>
                        <li><a href="register.php"><i class="fas fa-user-plus"></i> Register</a></li>
                        <li class="dropdown-divider"></li>
                        <li><a href="wishlist.php"><i class="fas fa-heart"></i> My Wishlist</a></li>
                        <li><a href="orders.php"><i class="fas fa-box"></i> My Orders</a></li>
                    </ul>
                </div>

                <!-- Auth Buttons Version -->
                <!-- <div class="auth-buttons">
                    <a href="login.php" class="auth-btn signin-btn">Sign In</a>
                    <a href="register.php" class="auth-btn signup-btn">Sign Up</a>
                </div> -->


                <!-- <div class="nav-icon">
                    <i class="fas fa-user"></i>
                </div> -->

                <div class="nav-icon cart-icon <?= isActive('cart'); ?>">
                    <i class="fas fa-shopping-bag"></i>
                    <span class="cart-count">3</span>
                </div>
                <button class="hamburger" id="menu-toggle">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
            </div>
        </div>

        <!-- Mobile Menu -->
        <div class="mobile-menu" id="mobile-menu">
            <button class="close-menu" id="close-menu">
                <i class="fas fa-times"></i>
            </button>
            <ul>
                <li class="<?= isActive('index'); ?>"><a href="index.php">Home</a></li>
                <li class="<?= isActive('store'); ?>"><a href="store.php">Fashion Store</a></li>
                <li class="<?= isActive('studio'); ?>"><a href="studio.php">Studio</a></li>
                <li class="<?= isActive('gallery'); ?>"><a href="gallery.php">Gallery</a></li>
                <li class="<?= isActive('about'); ?>"><a href="about.php">About Us</a></li>
                <li class="<?= isActive('contact'); ?>"><a href="contact.php">Contact</a></li>
            </ul>
            <div class="mobile-socials">
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-facebook"></i></a>
                <a href="#"><i class="fab fa-pinterest"></i></a>
                <a href="#"><i class="fab fa-tiktok"></i></a>
            </div>
        </div>
        <div class="overlay" id="overlay"></div>
    </header>

