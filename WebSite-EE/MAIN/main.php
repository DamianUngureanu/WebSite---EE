<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paulino</title>

    <?php require("../LOADING_SCREEN/loadingScreen.html") ?>
    
    <!-- font-family -->
    <?php include("../FONT-FAMILY.html") ?>

    <!-- Style -->
    <style>
        <?php 
        require('../mainGeneral.css');
        require('main.css');
        require('navbar/SCSS-part/navbar.css');
        require('moto/SCSS-part/moto.css');
        require('figure/SCSS-part/figure.css');
        require('history/SCSS-part/history.css');
        require('projects/SCSS-part/projects.css');
        require('colection/SCSS-part/colection.css');
        require('citate/SCSS-part/citate.css');
        require('service/SCSS-part/service.css');
        require('containerIMG/SCSS-part/containerIMG.css');
        require('contact/SCSS-part/contact.css');
        ?>
    </style>
    
</head>
<body>
        <?php 
            require ('navbar/HTML-part/navbar.html');
            require('moto/HTML-part/moto.html');
            require('figure/HTML-part/figure.html');
            require('history/HTML-part/history.html');
            require('projects/HTML-part/projects.html');
            require('colection/HTML-part/colection.html');
            require('citate/HTML-part/citate.html');
            require('service/HTML-part/service.html');
            require('containerIMG/HTML-part/containerIMG.html');
            require('contact/HTML-part/contact.html');
        ?>
        <footer></footer>


        
        
        

        

        
    
    
    <!-- ion icon -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

    <script>
        //navbar
        document.getElementById("moto").style.paddingTop=document.getElementById("nav").offsetHeight+50+"px";
        //IMG1 - aia de sus de tot
        document.getElementById("DivIMG1").style.height=document.getElementById("IMG1").offsetHeight+"px";
        <?php 
            require('projects/JS-part/projects.js');
            require('containerIMG/JS-part/containerIMG.js');
        ?>

        

    </script>
</body>
</html>