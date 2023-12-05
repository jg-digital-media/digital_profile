<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-N9WB623MVP"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-N9WB623MVP');
    </script>

    <!-- Slick Styling -->
    <link rel="stylesheet" type="text/css" href ="assets/slick/slick.css" />
    <link rel="stylesheet" type="text/css" href ="assets/slick/slick-theme.css" />
    
    <!-- Styles -->
    <link rel="stylesheet" type="text/css" href ="style.css" />

    <!-- Lightbox-->
    <link href="../assets/lightbox/dist/css/lightbox.css" rel="stylesheet" />

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Merriweather|Odibee+Sans|Quicksand&display=swap" rel="stylesheet">
    <!--<link href="https://fonts.googleapis.com/css2?family=DM+Sans&family=Lato&family=Noto+Sans+Nabataean&family=Nunito+Sans:wght@400;800&family=Patua+One&family=Roboto&family=Merriweather|Odibee+Sans|Quicksand&display=swap&display=swap" rel="stylesheet">-->
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans&family=Lato&family=Noto+Sans+Nabataean&family=Nunito+Sans:wght@400;800&family=Patua+One&family=Roboto&display=swap" rel="stylesheet">

    <!-- Favicon -->
    <link rel="icon" href="favicon.png" type="image/png">

    <!-- Meta Tags -->
    <meta name="description" content="">
    <meta name="keywords" content=""> 
    <meta name="image" content="">

    <!-- FACEBOOK: Open Graph -->
    <meta property="og:title" content="">
    <meta property="og:description" content="">
    <meta property="og:image" content="">
    <meta property="og:url" content="">

    <!-- TWITTER: Open Graph -->
    <meta name="twitter:title" content="">
    <meta name="twitter:description" content="">
    <meta name="twitter:image" content="">
    <meta name="twitter:card" content="jg_digital_profile">

    <!-- Canonical link -->
    <link rel="canonical" href="">

    <!-- Page Title-->
    <title>JG - Digital Profile</title>

</head>
<body>
    
    <div id="banner" class="banner">
        
        <p id="digital_profile_title"><acronym title="Jonnie Grieve Digital Media">JGDM:</acronym> Digital Profile Card</p>
        
        <button id="hideBanner">Hide Banner &uarr;</button>
        
    </div>
    
    <a href="#" id="js-flip" class="flip_profile"><img src="assets/img/flip_card.png" id="flip_btn">&nbsp;</a>
    
    <main id="main_container">
    
        <?php require "assets/template-parts/side-one.php"; ?>
    
        <?php require "assets/template-parts/side-two.php"; ?>
    
    </main>
    
    
    
    <!-- <a href="#" id="js-flip" class="flip_profile"><img src="assets/img/flip_btn.png" id="flip_btn">Flip</a> -->
    
    <footer>Digital Profile. Created by Jonnie Grieve Digital Media &copy; (<?php echo date('Y'); ?>)</footer>
    
    <script src="app.js" type="text/javascript"></script>
</body>
</html>