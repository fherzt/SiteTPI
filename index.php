<!DOCTYPE html>
<html lang="en">
    <head>
    <title>Menu Principal</title>
    <meta charset="utf-8">
    <link rel="icon" href="images/favicon.ico">
    <link rel="shortcut icon" href="images/favicon.ico" />
    <link rel="stylesheet" href="css/style.css">
    <script src="js/jquery.js"></script>
    <script src="js/jquery-migrate-1.1.1.js"></script>
    <script src="js/jquery.equalheights.js"></script>
    <script src="js/jquery.ui.totop.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script>
      $(document).ready(function(){
        $( ".block1" ).mouseover(function() {
          $(this).addClass( "blur" );
        });
        $( ".block1" ).mouseout(function() {
          $(this).removeClass( "blur" );
        });
        $().UItoTop({ easingType: 'easeOutQuart' });
      }) 
    </script>
     <!--[if lt IE 8]>
       <div style=' clear: both; text-align:center; position: relative;'>
         <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
           <img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
         </a>
    <![endif]-->
    <!--[if lt IE 9]>
    
      <script src="js/html5shiv.js"></script>
      <link rel="stylesheet" media="screen" href="css/ie.css">
    <![endif]-->
    <!--[if lt IE 10]>
      <link rel="stylesheet" media="screen" href="css/ie1.css">
    <![endif]-->
    
     </head>
     <body class="page1">

<!--==============================header=================================-->
<header> 
  <div class="container_12">
    <div class="grid_12"> 
      <div class="socials">
        <a href="#"></a>
        <a href="#"></a>
        <a href="#"></a>
        <a href="#" class="last"></a>
      </div>
      <h1><a href="index.php"><img src="images/logo.png" alt="Boo House"></a> </h1>
      <div class="menu_block">
        <nav id="bt-menu" class="bt-menu">
          <a href="#" class="bt-menu-trigger"><span>Menu</span></a>
          <ul>
            <li class="current bt-icon "><a href="index.php">Home</a></li>
             <li class="bt-icon"><a href="About.php">About</a></li>
             <li class="bt-icon"><a href="Menu.php">Menu</a></li>
             <li class="bt-icon"><a href="Blog.php">Blog</a></li>
             <li class="bt-icon"><a href="Modulos/Pedidos/Ordenar.php">Ordenar</a></li>
             <li class="bt-icon"><a href="Contacts.php">Contacts</a></li>
          </ul>
        </nav>
        <div class="clear"></div>
      </div>
      <div class="clear"></div>
    </div>
  </div>
</header>

<!--==============================Content=================================-->

<div class="content"><div class="ic">More Website Templates @ TemplateMonster.com - December 02, 2013!</div>
<a href="Menu.html" class="block1">
  <img src="images/blur_img6.jpg" alt="">
  <span class="price"><span>DESAYUNOS</span></span>
</a>
<a href="Menu.html" class="block1">
  <img src="images/blur_img2.jpg" alt="">
  <span class="price"><span>ALMUERZOS</span></span>
</a>
<a href="Menu.html" class="block1">
  <img src="images/blur_img6.jpg" alt="">
  <span class="price"><span>CENA</span></span>
</a>
<a href="Menu.html" class="block1">
  <img   src="images/blur_img7.jpg" alt="">
  <span class="price"><span>BEBIDAS</span></span>
</a>
<a href="Menu.html" class="block1">
  <img   src="images/blur_img8.jpg" alt="">
  <span class="price"><span>POSTRES</span></span>
</a>
</div>

<!--==============================footer=================================-->
<footer>    
  <div class="container_12">
    <div class="grid_6 prefix_3">
      <a href="index.php" class="f_logo"><img src="images/f_logo.png" alt=""></a>
      <div class="copy">
      &copy; 2013 | <a href="#">Privacy Policy</a> <br> Website   designed by <a href="http://www.templatemonster.com/" rel="nofollow">TemplateMonster.com</a>
      </div>
    </div>
  </div>
</footer>
<script>
  $(document).ready(function(){
    $(".bt-menu-trigger").toggle(
      function(){
        $('.bt-menu').addClass('bt-menu-open');
      },
      function(){
        $('.bt-menu').removeClass('bt-menu-open');
      }
      );
  })
</script>
</body>
</html>