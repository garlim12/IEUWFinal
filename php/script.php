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
</script>