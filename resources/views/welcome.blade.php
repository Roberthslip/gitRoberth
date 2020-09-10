 @extends('home');
 
 @section("content")


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Black Fox - Free CSS Template</title>
<meta name="keywords" content="" />
<meta name="description" content="" />

<link href="css/templatemo_style.css" rel="stylesheet" type="text/css" />


<link href="css/jquery.ennui.contentslider.css" rel="stylesheet" type="text/css" media="screen,projection" />

 @yield('css')

</head>

<body>

<div id="templatemo_menu_wrapper">

    <div id="templatemo_menu">
    
        <ul>
            <li><a href="/" class="current">Home</a></li>
            <li><a href=" jugadores">Jugadores</a></li>
            <li><a href="estadisticas">Equipos</a></li>
            <li><a href="sedes">Sede</a></li>
            <li><a href="panelInicio">PanelControl</a></li>
        </ul>       
    
    </div> <!-- end of templatemo_menu -->
</div> <!-- end of menu wrapper -->

<div id="templatemo_header_wrapper">
  <div id="templatemo_header">
    <div id="site_title">
      <h3> FULBITO CHINGON</h3>
    </div>
    <div id="templatemo_slider">
      <div id="one" class="contentslider">
        <div class="cs_wrapper">
        
          <div class="cs_slider">
          
                <div class="cs_article"> 
                    <a href="#"> 
                    <img src="fotos/pelota.jpg" alt="Project 1" /></a> 
                </div>
                
                <div class="cs_article"> 
                    <a href="#">
                    <img src="images/slider/fotos/juga.jpg" alt="Project 2" /></a> 
                </div>
                
                <div class="cs_article"> 
                    <a href="#">
                    <img src="images/slider/templatemo_slide03.jpg" alt="Project 3" /></a> 
                </div>
                
                <div class="cs_article"> 
                    <a href="#">
                    <img src="images/slider/templatemo_slide04.jpg" alt="Project 4" /></a> 
                </div>
            
          </div>
          <!-- End cs_slider -->
          
        </div>
        <!-- End cs_wrapper -->
      </div>
      <!-- End contentslider -->
      <!-- Site JavaScript -->
      <script type="text/javascript" src="js/jquery-1.3.1.min.js"></script>
      <script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
      <script type="text/javascript" src="js/jquery.ennui.contentslider.js"></script>
      <script type="text/javascript">
                $(function() {
                $('#one').ContentSlider({
                width : '430px',
                height : '200px',
                speed : 600,
                easing : 'easeInOutQuart'
                });
                });
            </script>
      <script src="js/jquery.chili-2.2.js" type="text/javascript"></script>
      <script src="js/chili/recipes.js" type="text/javascript"></script>
      <div class="cleaner"></div>
    </div>
    <!-- end of templatemo_slider -->
  </div>
  <!-- header -->

</div> 
<div class="card-group">
  <div class="card text-white bg-dark mb-3" >
    <img src="fotos/mesi.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">MEJOR JUGADOR</h5>
      <p class="card-text">El actual ganador 2019, es el argentino Lionel Messi, quien sumó su quinto galardón, igualando así al portugués Cristiano Ronaldo; seguidos por el brasileño Ronaldo, con tres entorchados.</p>
     
    </div>
  </div>
  <div class="card text-white bg-dark mb-3" >
    <img src="fotos/ki.png" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">CAMPEONATO</h5>
      <p class="card-text">Se le denomina campeonato a la serie de pruebas que enfrentan una serie de competidores, con el fin de medir sus capacidades, siendo el más hábil, fuerte o preparado, el que consiga la victoria. Por lo general, el concepto es asociado con campos como el deporte y los juegos.</p>
      
    </div>
  </div>
  <div class="card text-white bg-dark mb-3" >
    <img src="fotos/ci.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">MUNDIAL DE FUBBOL</h5>
      <p class="card-text">La Copa Mundial de la FIFA, también conocida como Copa Mundial de Fútbol, Copa del Mundo o simplemente Mundial, cuyo nombre original fue Campeonato Mundial de Fútbol, es el principal torneo internacional oficial de fútbol masculino a nivel de selecciones nacionales en el mundo.​</p>
      
    </div>
  </div>
</div>
<!-- end header wrapper -->

 <!-- end of top row wrapper -->

<div id="templatemo_content_wrapper">
    <div id="templatemo_content">
        
        <h1>Campeonato de Futbol</h1>
        <div class="image_wrapper fl_img">
            <a href="#"><img src="fotos/info.jpg" alt="image" /></a>        </div>
      <p>El nombre fútbol proviene de la palabra inglesa “football”, que significa “pie” y “pelota”, también conocido como balompié o soccer. Es un deporte que se juega sobre un campo rectangular con dos porterías entre dos equipos de once jugadores con una pelota esférica. </p>
    

        <div class="cleaner"></div>
    </div> <!-- end of content -->
</div> <!-- end of content_wrapper -->

<div id="templatemo_footer_wrapper">
    <div id="templatemo_footer">
    
        <div class="footer_box">
        
            <div class="footer_menu">
            
              <h3>About Us</h3>
                
                <img src="fotos/fu.jpg" alt="image" />
                <p>Nullam ultrices tempor nisi, ac egestas diam aliquam  mattis adipiscing imperdiet.</p>
                
                <div class="button"><a href="#"></a></div>
                
            </div>
            
        </div>
        
        <div class="footer_box">
        
            <div class="footer_menu">
            
                <h3>Navigation</h3>
    
                <ul class="footer_menu">
                    <li><a href="index.html">Home</a></li>
                    <li><a href="about.html">About Us</a></li>
                    <li><a href="services.html">Services</a></li>
                    <li><a href="gallery.html">Gallery</a></li>
                    <li><a href="contact.html">Contact Us</a></li>
                </ul>
                
            </div>
        </div>
    
        <div class="footer_box">
        
            <h3>Partners</h3>
        
            <ul class="footer_menu">
            
                <li><a href="#">Website Templates</a></li> 
                <li><a href="#">Free Flash Templates</a></li>
                <li><a href="#">Premium Themes</a></li>
                <li><a href="#">Web Design Blog</a></li>
                <li><a href="#">Flash Websites Gallery</a></li>               
                
            </ul>

        </div>
        
        <div class="cleaner"></div>
    </div> <!-- end of footer -->
</div> <!-- end of footer wrapper -->    

<div id="templatemo_copyright_wrapper">
    <div id="templatemo_copyright">
    
        Copyright © 2048 <a href="#">Your Company Name</a> <!-- Credit: www.templatemo.com -->| 
        Validate <a href="http://validator.w3.org/check?uri=referer">XHTML</a> &amp; <a href="http://jigsaw.w3.org/css-validator/check/referer">CSS</a>
        
    </div> <!-- end of templatemo_copyright -->
</div> <!-- end of copyright wrapper -->
<!-- templatemo 256 black fox -->
<!-- 
Black Fox Template 
http://www.templatemo.com/preview/templatemo_256_black_fox 
-->
</body>
</html>

@endsection