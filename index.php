<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> <?php echo "Home";?> </title>
    <!-- Header (navbar + hero) combined CSS -->
    <link rel="stylesheet" href="style/header.css">
    <link rel="stylesheet" href="style/hero.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap" rel="stylesheet">
    <!-- Project split CSS: base, buttons, featured -->
    <link rel="stylesheet" href="style/base.css">
    <link rel="stylesheet" href="style/buttons.css">
    <link rel="stylesheet" href="style/featured.css">
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light shadow px-lg-5" id="navbar">
            <div class="container d-flex flex-row align-items-center justify-content-between">
                <a href="index.php" class="brand navbar-brand order-2 order-lg-1">
                    BRAND
                </a>

                <a class="navbar-toggler border-0 order-1" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar" aria-controls="collapsibleNavbar" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="bi bi-list menu-button"></i>
                </a>

                <div class="collapse navbar-collapse order-4 order-lg-2" id="collapsibleNavbar">
                    <ul class="navbar-nav mx-auto" id="pages-links">
                        <li class="nav-item"><a href="index.php" class="nav-link active">Home</a></li>
                        <li class="nav-item"><a href="shop.php" class="nav-link">Shop</a></li>
                    </ul>
                </div>

                <ul class="navbar-nav d-flex flex-row gap-3 order-3 justify-content-center align-items-center" id="nav-icons">
                    <li class="nav-item">
                        <a href="#" class="nav-link active" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-title="Cart" aria-label="Cart">
                            <i class="bi bi-cart2"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link active" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-title="Sign in" aria-label="Sign in">
                            <i class="bi bi-person"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
        <script>
        document.addEventListener("DOMContentLoaded", function () {
            const tooltipTriggerList = Array.prototype.slice.call(document.querySelectorAll('#nav-icons [data-bs-toggle="tooltip"]'));
            tooltipTriggerList.forEach(el => new bootstrap.Tooltip(el));
        });
        </script>
    </header>
    <section class="hero-section py-5 py-md-6 d-flex flex-column justify-content-center">
        <div class="container">
            <div class="hero-content mx-auto d-flex flex-column align-items-start">
                <h1 class="hero-title luxury-font">
                    Thoughtful design for
                    <br>
                    <span class="primary-color-text luxury-font"> everyday life</span>
                </h1>

                <p class="hero-text mt-4 primary-font">
                    Curated essentials that bring beauty and function to your daily rituals.
                    Quality craftsmanship, timeless style.
                </p>

                <div class="mt-4 d-flex flex-column flex-sm-row gap-3 primary-font" >
                    <a href="shop.php" class="btn primary-color-btn btn-lg primary-font" id="hero-buttons">
                        Shop Collection
                    </a>

                    <a href="shop.php" class="btn secondary-color-btn btn-lg primary-font" id="hero-buttons">
                        Explore Clothing
                    </a>
                </div>
            </div>
        </div>
    </section>
    <section id="featured-items">

    </section>
</body>
</html>