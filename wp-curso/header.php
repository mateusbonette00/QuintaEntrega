<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title(); ?></title>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Sriracha&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Balsamiq+Sans:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Staatliches&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Notable&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&display=swap" rel="stylesheet">
    
	<?php wp_head(); ?>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha256-pasqAKBDmFT4eHoN2ndd6lN370kFiGUFyTiUHWhU7k8="
    crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/script.js"></script>


</head>
<body>
    
                    <!-- NAVBAR -->


<div class="header">
    <div  class = "navbar-fixed transparent" > 
        <nav class = "transparent" class="navbar_gradient">
             <div class = "container nav-wrapper transparent" class="parallax-container">
                  <img src = " <?php  echo get_template_directory_uri (); ?>/logocovello.png " id = "logo" class = "brand-logo" class="parallax">
                  <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                  <ul class="right hide-on-med-and-down">
                    <li><a href= "#section 1"> HISTÓRIA </a></li>
                    <li><a href= "#section 2"> HABILIDADES </a></li>
                    <li><a href= "#section 3"> BUILDS</a></li>
                  </ul>     
            </div>  
        </nav>
    </div>   
    
                    <!-- SIDENAV -->
    

    <ul class="sidenav" id="mobile-demo">
        <li><a href="sass.html">HISTÓRIA</a></li>
        <li><a href="badges.html">HABILIDADES</a></li>
        <li><a href="collapsible.html">BUILDS</a></li>
      </ul>
      
    
    
                    <!-- HEADER -->
                
    
    <div class= "wrap">
        <h><a href="<?php echo site_url(); ?>" title="<?php bloginfo ('name'); ?>"></a></h>
            <div class="infor">
                <h4> OS CAÇADORES ETERNOS </h4>
                <h1> KINDRED </h1>
            </div>  
    </div>  
                
                
                
                
                
                
                
                
                


    <!-- Jquery CDN -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha256-pasqAKBDmFT4eHoN2ndd6lN370kFiGUFyTiUHWhU7k8=" crossorigin="anonymous"></script>
     
    <!-- Compiled and minified JavaScript -->
     <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

     <!-- Importando o arquivo js -->
      <script src="script.js"></script>

    