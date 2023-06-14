<script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js">
</script>

<script type="text/javascript">
  //Registro en base de datos
  function submitData(){
    $(document).ready(function(){
      var data = {
        name: $("#name").val(),
        username: $("#username").val(),
        password: $("#password").val(),
        action: $("#action").val(),
      };

      $.ajax({
        url: '/IEUWFinal/php/function.php',
        type: 'post',
        data: data,
        success:function(response){
          alert(response);
          if(response == "Login Successful"){
            window.location.reload();
          }
        }
      });
    });
  }

  function submitData2(){
    $(document).ready(function(){
      var data = {
        name: $("#name").val(),
        username: $("#username2").val(),
        password: $("#password2").val(),
        password2: $("#password22").val(),
        action: $("#action2").val(),
      };

      $.ajax({
        url: '/IEUWFinal/php/function.php',
        type: 'post',
        data: data,
        success:function(response){
          alert(response);
          if(response == "Login Successful"){
            window.location.reload();
          }
        }
      });
    });
  }

  function submitData3(){
    $(document).ready(function(){
      var data = {
        action: $("#action3").val(),
      };

      $.ajax({
        url: '/IEUWFinal/php/function.php',
        type: 'post',
        data: data,
        success:function(response){
          alert(response);
          if(response == "Logout Successful"){
            window.location.reload();
          }
        }
      });
    });
  }

  function topProd(){
    $(document).ready(function(){
      var data = {
        action: $("#actionTop").val(),
      };

      $.ajax({
        url: '/IEUWFinal/php/function.php',
        type: 'post',
        data: data,
        success:function(response){
          alert(response);
          if(response == "Interes agregado al producto"){
            window.location.reload();
          }
        }
      });
    });
  }

  function obtenerCarrito(){
    $(document).ready(function(){
      var data = {
        action: $("#actionCarrito").val(),
      };

      $.ajax({
        url: '/IEUWFinal/php/function.php',
        type: 'post',
        data: data,
        success:function(response){
          alert(response);
          if(response == "Interes agregado al producto"){
            window.location.reload();
          }
        }
      });
    });
  }

  function agregarInteres(){
    $(document).ready(function(){
      var data = {
        action: $("#action4").val(),
        identificador: $("#identificador").val(),
        nombre: $("#nombre").val(),
        precio: $("#precio").val(),
        imagen: $("#imagen").val(),
      };

      $.ajax({
        url: '/IEUWFinal/php/function.php',
        type: 'post',
        data: data,
        success:function(response){
          alert(response);
          if(response == "Interes agregado al producto"){
            window.location.reload();
          }
        }
      });
    });
  }

  function agregarInteres1(){
    $(document).ready(function(){
      var data = {
        action: $("#action5").val(),
        identificador: $("#identificador2").val(),
        nombre: $("#nombre2").val(),
        precio: $("#precio2").val(),
        imagen: $("#imagen2").val(),
      };

      $.ajax({
        url: '/IEUWFinal/php/function.php',
        type: 'post',
        data: data,
        success:function(response){
          alert(response);
          if(response == "Interes agregado al producto"){
            window.location.reload();
          }
        }
      });
    });
  }

  function agregarInteres2(){
    $(document).ready(function(){
      var data = {
        action: $("#action6").val(),
        identificador: $("#identificador3").val(),
        nombre: $("#nombre3").val(),
        precio: $("#precio3").val(),
        imagen: $("#imagen3").val(),
      };

      $.ajax({
        url: '/IEUWFinal/php/function.php',
        type: 'post',
        data: data,
        success:function(response){
          alert(response);
          if(response == "Interes agregado al producto"){
            window.location.reload();
          }
        }
      });
    });
  }

  function agregarInteres3(){
    $(document).ready(function(){
      var data = {
        action: $("#action7").val(),
        identificador: $("#identificador4").val(),
        nombre: $("#nombre4").val(),
        precio: $("#precio4").val(),
        imagen: $("#imagen4").val(),
      };

      $.ajax({
        url: '/IEUWFinal/php/function.php',
        type: 'post',
        data: data,
        success:function(response){
          alert(response);
          if(response == "Interes agregado al producto"){
            window.location.reload();
          }
        }
      });
    });
  }

  function agregarInteres4(){
    $(document).ready(function(){
      var data = {
        action: $("#action8").val(),
        identificador: $("#identificador5").val(),
        nombre: $("#nombre5").val(),
        precio: $("#precio5").val(),
        imagen: $("#imagen5").val(),
      };

      $.ajax({
        url: '/IEUWFinal/php/function.php',
        type: 'post',
        data: data,
        success:function(response){
          alert(response);
          if(response == "Interes agregado al producto"){
            window.location.reload();
          }
        }
      });
    });
  }

  function agregarInteres5(){
    $(document).ready(function(){
      var data = {
        action: $("#action9").val(),
        identificador: $("#identificador6").val(),
        nombre: $("#nombre6").val(),
        precio: $("#precio6").val(),
        imagen: $("#imagen6").val(),
      };

      $.ajax({
        url: '/IEUWFinal/php/function.php',
        type: 'post',
        data: data,
        success:function(response){
          alert(response);
          if(response == "Interes agregado al producto"){
            window.location.reload();
          }
        }
      });
    });
  }

  function agregarInteres6(){
    $(document).ready(function(){
      var data = {
        action: $("#action10").val(),
        identificador: $("#identificador7").val(),
        nombre: $("#nombre7").val(),
        precio: $("#precio7").val(),
        imagen: $("#imagen7").val(),
      };

      $.ajax({
        url: '/IEUWFinal/php/function.php',
        type: 'post',
        data: data,
        success:function(response){
          alert(response);
          if(response == "Interes agregado al producto"){
            window.location.reload();
          }
        }
      });
    });
  }

  function agregarInteres7(){
    $(document).ready(function(){
      var data = {
        action: $("#action11").val(),
        identificador: $("#identificador8").val(),
        nombre: $("#nombre8").val(),
        precio: $("#precio8").val(),
        imagen: $("#imagen8").val(),
      };

      $.ajax({
        url: '/IEUWFinal/php/function.php',
        type: 'post',
        data: data,
        success:function(response){
          alert(response);
          if(response == "Interes agregado al producto"){
            window.location.reload();
          }
        }
      });
    });
  }

  function agregarInteresTop1(){
    $(document).ready(function(){
      var data = {
        action: $("#actionTop1").val(),
        identificador: $("#identificadorTop1").val(),
      };

      $.ajax({
        url: '/IEUWFinal/php/function.php',
        type: 'post',
        data: data,
        success:function(response){
          alert(response);
          if(response == "Interes agregado al producto"){
            window.location.reload();
          }
        }
      });
    });
  }

  function agregarInteresTop2(){
    $(document).ready(function(){
      var data = {
        action: $("#actionTop2").val(),
        identificador: $("#identificadorTop2").val(),
      };

      $.ajax({
        url: '/IEUWFinal/php/function.php',
        type: 'post',
        data: data,
        success:function(response){
          alert(response);
          if(response == "Interes agregado al producto"){
            window.location.reload();
          }
        }
      });
    });
  }

  function agregarInteresTop3(){
    $(document).ready(function(){
      var data = {
        action: $("#actionTop3").val(),
        identificador: $("#identificadorTop3").val(),
      };

      $.ajax({
        url: '/IEUWFinal/php/function.php',
        type: 'post',
        data: data,
        success:function(response){
          alert(response);
          if(response == "Interes agregado al producto"){
            window.location.reload();
          }
        }
      });
    });
  }
</script>