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
    <h2>Datos de facturación</h2>
  </div>

  <div class="product-container3">
    <div class="pay-form">

    <strong>Dirección</strong>
    <!--inputs-->
    <form id="registroForm" autocomplete="off" action="" method="post">
        <input type="hidden" id="action2" value="register">
        <input type="text" class="field1" id="name" placeholder="Calle y número" name="fullname" required>
        <input type="email" id="username2" placeholder="Colonia" name="email" required>
        <input type="password" id="password2" placeholder="Estado" required>
        <input type="password" id="password22" placeholder="Teléfono" required>
        <!--submit-->
    </form>

    <strong>Pago total: $</strong>
    <strong>1000</strong>
    
    <div class="subscribe">
          <a href="compraproceso.php">
          <input type="submit" onclick="" value="Pagar">
          </a>
        </div>

        <!--inputs-->
        <form id="registroForm" autocomplete="off" action="" method="post">
        <input type="hidden" id="action2" value="register">
        <img src="https://cdn-p.vanquis.co.uk/media/2104376/midnight-blue-flat.png" alt="">
        <label for="cars">Selecciona la tarjeta guardada:</label>
        <select name="tarjetacr" id="tarjeta">
        <option value="credito">Tarjeta de crédito</option>
        <option value="debito">Tarjeta de débito</option>
        </select>
        
        <!--submit-->
    </form>

    </div>
  </div>


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