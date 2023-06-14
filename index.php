<?php
require 'php/function.php';
topProductos();
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
  $("#navigation").load("assets/navbar.php");
});
</script>
<!--end of Navigation bar-->

<!--Slider-->
<ul id="adaptive" class="cs-hidden">
    <!--Caja 1-->
    <li class="item-a">
        <!--Caja-->
        <div class="full-slider-box f-slide-1">
            <div class="slider-text-container">
                <div class="f-slider-text">
                    <span>No te preocupes por los envíos</span>
                    <strong>Nosotros <font>nos encargamos</font></b> </strong>
                    <a href="#" class="f-slider-btn">Ordena ahora</a>
                </div>
            </div>
        </div>
    </li>

        <!--Caja 2-->
        <li class="item-a">
            <!--Caja-->
            <div class="full-slider-box f-slide-2">
                <div class="slider-text-container">
                    <div class="f-slider-text">
                        <span>Lo que tu negocio necesita                        </span>
                        <strong><font>Al alcance de tu mano</font></b> </strong>
                        <a href="#" class="f-slider-btn">Ordena ahora</a>
                    </div>
                </div>
            </div>
        </li>

            <!--Caja 3-->
    <li class="item-a">
        <!--Caja-->
        <div class="full-slider-box f-slide-3">
            <div class="slider-text-container">
                <div class="f-slider-text">
                    <span>Los mejores productos</span>
                    <strong>Con más de<font> 15 años en México</font></b> </strong>
                    <a href="#" class="f-slider-btn">Ordena ahora</a>
                </div>
            </div>
        </div>
    </li>
  </ul>

  <!--Categorias destacadas-->
  <div class="feature-heading">
    <h2>Productos destacados</h2>
  </div>

  <section class="new-arrival">

  <!--productos----------------------->
  <div class="product-container">
                  
    <!--caja-1---------->
      <div class="product-box">
          <!--product-img------------>
          <div class="product-img">
              <!--add-cart---->
              <input type="hidden" id="action4" value="interes">
              <input type="hidden" id="identificador" value="1010"></input>
              <input type="hidden" id="nombre" value="Cinta engomada color kraft"></input>
              <input type="hidden" id="precio" value="5.70"></input>
              <input type="hidden" id="imagen" value="images/prod1.jpg"></input>

              <button type="submit" onclick="agregarInteres();" class="add-cart">
                  <i class="fas fa-shopping-cart"></i>
              </button>
              <!--img------>
            <img src="images/prod1.jpg" >
          </div>
          <!--product-details-------->
          <div class="product-details">
              <a href="#" class="p-name">Cinta engomada color kraft</a>
              <span class="p-price">$5.70</span>
          </div>
      </div>
        <!--caja-2---------->
        <div class="product-box">
            <!--product-img------------>
            <div class="product-img">
              <!--add-cart---->
              <input type="hidden" id="action5" value="interes2">
              <input type="hidden" id="identificador2" value="1011"></input>
              <input type="hidden" id="nombre2" value="Cinta Motivo Navideño Gorilla"></input>
              <input type="hidden" id="precio2" value="8.40"></input>
              <input type="hidden" id="imagen2" value="images/prod2.png"></input>

              <button type="submit" onclick="agregarInteres1();" class="add-cart">
                  <i class="fas fa-shopping-cart"></i>
              </button>
              <!--img------>
              <img src="images/prod2.png" >
            </div>
            <!--product-details-------->
            <div class="product-details">
                <a href="#" class="p-name">Cinta Motivo Navideño Gorilla</a>
                <span class="p-price">$8.40</span>
            </div>
        </div>
      <!--caja-3---------->
      <div class="product-box">
        <!--product-img------------>
        <div class="product-img">
              <!--add-cart---->
              <input type="hidden" id="action6" value="interes3">
              <input type="hidden" id="identificador3" value="1012">
              <input type="hidden" id="nombre3" value="Mini equipo dispensador Better Packages"></input>
              <input type="hidden" id="precio3" value="226.00"></input>
              <input type="hidden" id="imagen3" value="images/3.png"></input>

              <button type="submit" onclick="agregarInteres2();" class="add-cart">
                  <i class="fas fa-shopping-cart"></i>
              </button>
            <!--img------>
          <img src="images/3.png" >
        </div>
        <!--product-details-------->
        <div class="product-details">
            <a href="#" class="p-name">Mini equipo dispensador Better Packages</a>
            <span class="p-price">$226.00</span>
        </div>
    </div>
      <!--caja--4---------->
      <div class="product-box">
        <!--product-img------------>
        <div class="product-img">
              <!--add-cart---->
              <input type="hidden" id="action7" value="interes4">
              <input type="hidden" id="identificador4" value="1013">
              <input type="hidden" id="nombre4" value="Cinta adhesiva transparente"></input>
              <input type="hidden" id="precio4" value="22.00"></input>
              <input type="hidden" id="imagen4" value="images/prod4.jpg"></input>

              <button type="submit" onclick="agregarInteres3();" class="add-cart">
                  <i class="fas fa-shopping-cart"></i>
              </button>
            <!--img------>
          <img src="images/prod4.jpg" >
        </div>
        <!--product-details-------->
        <div class="product-details">
            <a href="#" class="p-name">Cinta adhesiva transparente</a>
            <span class="p-price">$22.00</span>
        </div>
    </div>
      <!--caja--5---------->
      <div class="product-box">
        <!--product-img------------>
        <div class="product-img">
              <!--add-cart---->
              <input type="hidden" id="action8" value="interes5">
              <input type="hidden" id="identificador5" value="1014">
              <input type="hidden" id="nombre5" value="CAJA KRAFT 7-9 kg"></input>
              <input type="hidden" id="precio5" value="4.70"></input>
              <input type="hidden" id="imagen5" value="images/prod5.png"></input>

              <button type="submit" onclick="agregarInteres4();" class="add-cart">
                  <i class="fas fa-shopping-cart"></i>
              </button>
            <!--img------>
          <img src="images/prod5.png" >
        </div>
        <!--product-details-------->
        <div class="product-details">
            <a href="#" class="p-name">CAJA KRAFT 7-9 kg</a>
            <span class="p-price">$4.70</span>
        </div>
    </div>
      <!--caja--6---------->
      <div class="product-box">
        <!--product-img------------>
        <div class="product-img">
              <!--add-cart---->
              <input type="hidden" id="action9" value="interes6">
              <input type="hidden" id="identificador6" value="1015">
              <input type="hidden" id="nombre6" value="Cacahuate biodegradable"></input>
              <input type="hidden" id="precio6" value="341.00"></input>
              <input type="hidden" id="imagen6" value="images/prod6.jpg"></input>

              <button type="submit" onclick="agregarInteres5();" class="add-cart">
                  <i class="fas fa-shopping-cart"></i>
              </button>
            <!--img------>
          <img src="images/prod6.jpg" >
        </div>
        <!--product-details-------->
        <div class="product-details">
            <a href="#" class="p-name">Cacahuate biodegradable</a>
            <span class="p-price">$341.00</span>
        </div>
    </div>
      <!--caja--7---------->
      <div class="product-box">
        <!--product-img------------>
        <div class="product-img">
              <!--add-cart---->
              <input type="hidden" id="action10" value="interes7">
              <input type="hidden" id="identificador7" value="1016">
              <input type="hidden" id="nombre7" value="Sobre de presión sensitiva (Millar)"></input>
              <input type="hidden" id="precio7" value="595.00"></input>
              <input type="hidden" id="imagen7" value="images/prod7.jpg"></input>

              <button type="submit" onclick="agregarInteres6();" class="add-cart">
                  <i class="fas fa-shopping-cart"></i>
              </button>
            <!--img------>
          <img src="images/prod7.jpg" >
        </div>
        <!--product-details-------->
        <div class="product-details">
            <a href="#" class="p-name">Sobre de presión sensitiva (Millar)</a>
            <span class="p-price">$595.00</span>
        </div>
    </div>
      <!--caja--8---------->
      <div class="product-box">
        <!--product-img------------>
        <div class="product-img">
              <!--add-cart---->
              <input type="hidden" id="action11" value="interes8">
              <input type="hidden" id="identificador8" value="1017">
              <input type="hidden" id="nombre8" value="Sellador automático de cinta"></input>
              <input type="hidden" id="precio8" value="42282.00"></input>
              <input type="hidden" id="imagen8" value="images/prod8.jpg"></input>

              <button type="submit" onclick="agregarInteres7();" class="add-cart">
                  <i class="fas fa-shopping-cart"></i>
              </button>
            <!--img------>
          <img src="images/prod8.jpg" >
        </div>
        <!--product-details-------->
        <div class="product-details">
            <a href="#" class="p-name">Sellador automático de cinta</a>
            <span class="p-price">$42282.00</span>
        </div>
    </div>
  </div>
</section>

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

<div class="feature-heading">
    <strong>Productos más agregados a carritos</strong>
</div>

<section class="feature-heading">

    <!--productos----------------------->
    <div class="product-container">
      <!--caja-1---------->
        <div class="product-box">
            <!--product-img------------>
            <div class="product-img">
              <!--add-cart---->
              <input type="hidden" id="actionTop1" value="interesTop1">
              <input type="hidden" id="identificadorTop1" value="<?php echo $_SESSION["id"] ?>">
              <button type="submit" onclick="agregarInteresTop1();" class="add-cart">
                  <i class="fas fa-shopping-cart"></i>
              </button>
                <!--img------>
              <img src="<?php echo $_SESSION["imagen"] ?>" >
            </div>
            <!--product-details-------->
            <div class="product-details">
                <a href="#" class="p-name">
                  <?php echo $_SESSION["nombre"] ?>
                </a>
                <span class="p-price">$
                  <?php echo $_SESSION["precio"] ?>
                </span>
            </div>
        </div>
          <!--caja-2---------->
          <div class="product-box">
            <!--product-img------------>
            <div class="product-img">
              <!--add-cart---->
              <input type="hidden" id="actionTop2" value="interesTop2">
              <input type="hidden" id="identificadorTop2" value="<?php echo $_SESSION["id2"] ?>">
              <button type="submit" onclick="agregarInteresTop2();" class="add-cart">
                  <i class="fas fa-shopping-cart"></i>
              </button>
                <!--img------>
              <img src="<?php echo $_SESSION["imagen2"] ?>" >
            </div>
            <!--product-details-------->
            <div class="product-details">
                <a href="#" class="p-name">
                  <?php echo $_SESSION["nombre2"] ?>
                </a>
                <span class="p-price">$
                  <?php echo $_SESSION["precio2"] ?>
                </span>
            </div>
        </div>
        <!--caja-3---------->
        <div class="product-box">
            <!--product-img------------>
            <div class="product-img">
              <!--add-cart---->
              <input type="hidden" id="actionTop3" value="interesTop3">
              <input type="hidden" id="identificadorTop3" value="<?php echo $_SESSION["id3"] ?>">
              <button type="submit" onclick="agregarInteresTop3();" class="add-cart">
                  <i class="fas fa-shopping-cart"></i>
              </button>
                <!--img------>
              <img src="<?php echo $_SESSION["imagen3"] ?>" >
            </div>
            <!--product-details-------->
            <div class="product-details">
                <a href="#" class="p-name">
                  <?php echo $_SESSION["nombre3"] ?>
                </a>
                <span class="p-price">$
                  <?php echo $_SESSION["precio3"] ?>
                </span>
            </div>
        </div>
      </div>
    </div>
  </section>

<!--Servicios ofrecidos------------------------->
<section class="services">
    <!--Caja de servicios---------->
    <div class="services-box">
        <i class="fas fa-shipping-fast"></i>
        <span>Entrega gratuita</span>
        <p>Para envíos de más de $2000</p>
    </div>
    <!--Caja de servicios---------->
    <div class="services-box">
        <i class="fas fa-headphones-alt"></i>
        <span>Soporte telefónico</span>
        <p>Disponible de lunes a viernes las 24 horas</p>
    </div>
    <!---Caja de servicios---------->
    <div class="services-box">
        <i class="fas fa-sync"></i>
        <span>100% de reembolso</span>
        <p>En caso de algún defecto en su producto</p>
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