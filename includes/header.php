<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?= $meta_description ?? 'Custom handcrafted polymer clay pet sculptures. 100% hand-sculpted, unlimited revisions, made with love.' ?>">
    <title><?= $page_title ?? SITE_NAME . ' — ' . SITE_TAGLINE ?></title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;0,800;1,400;1,600&family=Poppins:wght@300;400;500;600;700&family=Dancing+Script:wght@600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="icon" href="assets/img/favicon.svg" type="image/svg+xml">
</head>
<body>

<!-- Cursor glow -->
<div class="cursor-glow" id="cursorGlow"></div>

<!-- Loader -->
<div class="page-loader" id="pageLoader">
    <div class="loader-inner">
        <div class="loader-paw">🐾</div>
        <div class="loader-text">Crafting with love...</div>
        <div class="loader-bar"><span></span></div>
    </div>
</div>

<!-- Navigation -->
<nav class="navbar" id="navbar">
    <div class="nav-container">
        <a href="index.php" class="nav-logo">
            <span class="logo-icon">🐾</span>
            <span class="logo-text">Tiny Tails <em>Studio</em></span>
        </a>
        <ul class="nav-links" id="navLinks">
            <li><a href="index.php#gallery">Gallery</a></li>
            <li><a href="index.php#process">How It Works</a></li>
            <li><a href="index.php#products">Products</a></li>
            <li><a href="index.php#reviews">Reviews</a></li>
            <li><a href="index.php#faq">FAQ</a></li>
            <li><a href="customize.php" class="nav-cta">Order Now</a></li>
        </ul>
        <button class="hamburger" id="hamburger" aria-label="Menu">
            <span></span><span></span><span></span>
        </button>
    </div>
</nav>
