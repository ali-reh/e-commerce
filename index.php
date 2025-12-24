<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> <?php echo "Home";?> </title>
    <link rel="stylesheet" href="navbar.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light shadow px-lg-5 fixed-top" id="navbar">
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

                <ul class="navbar-nav d-flex flex-row gap-3 order-3" id="nav-icons">
                    <li class="nav-item">
                        <a href="#" class="nav-link active" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-title="Sign in" aria-label="Sign in">
                            <i class="bi bi-person"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link active" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-title="Cart" aria-label="Cart">
                            <i class="bi bi-cart"></i>
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
</body>
</html>