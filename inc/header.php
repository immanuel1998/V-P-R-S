<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="A front-end template that helps you build fast, modern mobile web apps.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
    <title>V - P - R - S</title>

    <!-- Add to homescreen for Chrome on Android -->
    <meta name="mobile-web-app-capable" content="yes">
    <link rel="icon" sizes="192x192" href="images/android-desktop.png">

    <!-- Add to homescreen for Safari on iOS -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="Material Design Lite">
    <link rel="apple-touch-icon-precomposed" href="images/ios-desktop.png">

    <!-- Tile icon for Win8 (144x144 + tile color) -->
    <meta name="msapplication-TileImage" content="images/touch/ms-touch-icon-144x144-precomposed.png">
    <meta name="msapplication-TileColor" content="#3372DF">
    <link rel="shortcut icon" href="images/favicon.png">

    <!-- SEO: If your mobile URL is different from the desktop URL, add a canonical link to the desktop page https://developers.google.com/webmasters/smartphone-sites/feature-phones -->
    <!--
    <link rel="canonical" href="http://www.example.com/">
    -->
   
    <script src="assets/js/jquery-3.3.1.js"></script>
    <link rel="stylesheet" href="assets/material.min.css">
    <link rel="stylesheet" href="assets/css/dataTables.jqueryui.css">
    <script src="assets/js/jquery.dataTables.min.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="styles.css">
    <style>
    #view-source {
      position: fixed;
      display: block;
      right: 0;
      bottom: 0;
      margin-right: 40px;
      margin-bottom: 40px;
      z-index: 900;
    }

    
    </style>
  </head>
  <body>
    <div class="demo-layout mdl-layout mdl-js-layout mdl-layout--fixed-drawer mdl-layout--fixed-header" >
       <header class="demo-header mdl-layout__header mdl-color-text--grey-600">
            <div class="mdl-layout__header-row">
          <span class="mdl-layout-title" style="color: white;"><span class="mdl-layout-title">Vehicle Parking Registration System</span>
                </span>
              <div class="mdl-layout-spacer"></div>
             
              <button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon" id="hdrbtn" style="color: white;">
                <i class="material-icons">more_vert</i>
              </button>
              <ul class="mdl-menu mdl-js-menu mdl-js-ripple-effect mdl-menu--bottom-right" for="hdrbtn">
                <li class="mdl-menu__item">About</li>
                <li class="mdl-menu__item">Contact</li>
                <li class="mdl-menu__item">Legal information</li>
              </ul>
            </div>
          </header>
      <div class="mdl-layout__drawer">
        
        <nav class="mdl-navigation">
          <a class="mdl-navigation__link" style="font-weight: bold;" href="index.php" disabled>H O M E</a>
          <hr>
          <a class="mdl-navigation__link" href="h-official.php" style="color:#e74c3c;font-weight: bold;">O F F I C I A L</a>
          <a class="mdl-navigation__link" href="h-employee.php" style="color:#2ecc71;font-weight: bold;">E M P L O Y E E</a>
          <a class="mdl-navigation__link" href="h-private.php"  style="color:#3498db;font-weight: bold;">P R I V A T E</a>
        </nav>
     
      </div>
      