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
    <h2>Carrito</h2>
  </div>

  <div class="product-container2">

  <div class="small-container cart-page">

  <table>
    <tr>
      <th>Producto</th>
      <th>Cantidad</th>
      <th>Subtotal</th>
    </tr>
    <!--Producto-->
    <tr>
      <td>
        <div class="cart-info">
          <img src="images/prod2.png" alt="">
          <div>
            <p>Cinta Motivo Navideño Gorilla</p>
            <small>Precio: $50.00</small>
            <br>
            <a href="">Eliminar</a>
          </div>
        </div>

      </td>
      <td><input type="number" value="1"></td>
      <td>$50.00</td>
    </tr>
    <!--Fin producto-->

        <!--Producto-->
        <tr>
      <td>
        <div class="cart-info">
          <img src="images/prod2.png" alt="">
          <div>
            <p>Cinta Motivo Navideño Gorilla</p>
            <small>Precio: $50.00</small>
            <br>
            <a href="">Eliminar</a>
          </div>
        </div>

      </td>
      <td><input type="number" value="1"></td>
      <td>$50.00</td>
    </tr>
    <!--Fin producto-->

        <!--Producto-->
        <tr>
      <td>
        <div class="cart-info">
          <img src="images/prod2.png" alt="">
          <div>
            <p>Cinta Motivo Navideño Gorilla</p>
            <small>Precio: $50.00</small>
            <br>
            <a href="">Eliminar</a>
          </div>
        </div>

      </td>
      <td><input type="number" value="1"></td>
      <td>$50.00</td>
    </tr>
    <!--Fin producto-->

    <tr>
      <th></th>
      <th></th>
      <th></th>
    </tr>
  </table>

  <div class="total-price">

  <table>
    <tr>
      <td>Subtotal</td>
      <td>$200.00</td>
    </tr>
    <tr>
      <td>Envío a toda la república</td>
      <td>$150.00</td>
    </tr>
    <tr>
      <td>Total</td>
      <td>$350.00</td>
    </tr>
    <tr>
      <td>
        <div class="subscribe">
          <a href="carritofinalizar.php">
          <input type="submit" onclick="" value="Continuar">
          </a>
        </div>
      </td>
    </tr>
  </table>

  </div>

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