<head>
   <meta http-equiv="Refresh" content="5; url=index.php">
</head>

<?php
require 'php/function.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paulistas - Tienda en línea</title>

    <link rel="shorcut icon" href="images/fav-icon.png">

    <link rel="stylesheet" type= "text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/lightslider.css">
    
    <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/c8e4d183c2.js" crossorigin="anonymous"></script>
    <script src="js/lightslider.js"></script>
</head>
<body>
    <!--Navigation bar-->
<div id="navigation">

</div>

<script>
$(function(){
  $("#navigation").load("assets/email.php");
});
</script>
<!--end of Navigation bar-->

  <!--Categorias destacadas-->
  <div class="feature-heading">
    <h2>¡Compra exitosa!</h2>
  </div>

  <div class="feature-heading">
    <h2>Gracias por tu compra <?php echo $_SESSION["name"]; ?></h2>
  </div>

  <div class="feature-heading">
    <h2>Se envió un recibo a tu correo:</h2>
  </div>

  <div class="feature-heading">
    <h2><?php echo $_SESSION["email"]; ?></h2>
  </div>

  <?php
    insertarCompra();

    unset($_SESSION["total"]);
    unset($_SESSION["tablaCarrito"]);

    borrarProductoCarrito();
  ?>

<!---Ofertas------------------------------------>
<section class="sale">
    <!--oferta-1-------------------->
    <div class="sale-box sale-1">
        <img src="images/oferta1.png">
        
        <a href="#">
        <div class="sale-text">
          <strong>Máquinas dispensadoras de cinta</strong>
          <span>25% de descuento</span>
        </div></a>
    
      </div>
       <!--oferta-2-------------------->
    <div class="sale-box sale-1">
      <img src="images/oferta2alt.png">
      
      <a href="#"><div class="sale-text">
        <strong>Esquineros de cartón corrugado</strong>
        <span>10% de descuento solo HOY</span>
      </div></a>
  
    </div>
     <!--oferta-3-------------------->
     <div class="sale-box sale-1">
      <img src="images/oferta3.png">
      
      <a href="#">
      <div class="sale-text">
        <strong>Cajas de cartón</strong>
        <span>5% de descuento por el mes de mayo</span>
      </div></a>
  
    </div>
</section>

    <!--Footer-->
    <div id="footer">

    </div>
    
    <script>
    $(function(){
      $("#footer").load("assets/footer.html");
    });
    </script>
    <!--Fin de footer-->

  <script>
    /*Slider script*/
    $(document).ready(function() {
    $('#adaptive').lightSlider({
        adaptiveHeight:true,
        auto: true,
        item:1,
        slideMargin:0,
        loop:true
    });
    });
  </script>

</body>
</html>