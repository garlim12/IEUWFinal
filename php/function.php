<?php
session_start();
$conn = mysqli_connect("localhost:3307", "root", "", "paulistasieuw");

// IF
if(isset($_POST["action"])){
  if($_POST["action"] == "register"){
    register();
  }
  else if($_POST["action"] == "logout"){
    logout();
  }
  else if($_POST["action"] == "login"){
    login();
  }
}

// REGISTER
function register(){
  global $conn;

  $name = $_POST["name"];
  $username = $_POST["username"];
  $password = $_POST["password"];
  $password2 = $_POST["password2"];



  if(empty($name)) {
    echo "Introduce un nombre";
    exit;
  }

  if(empty($username)) {
    echo "Introduce un correo";
    exit;
  }

  if(empty($password)) {
    echo "Introduce una contraseña";
    exit;
  }

  if(empty($password2)) {
    echo "Confirma tu contraseña";
    exit;
  }

  if($password != $password2){
    echo "La contraseña debe coincidir";
    exit;
  }

  $user = mysqli_query($conn, "SELECT * FROM user WHERE email = '$username'");
  if(mysqli_num_rows($user) > 0){
    echo "Correo ya registrado";
    exit;
  }

  $query = "INSERT INTO user VALUES('$name', '$username', '$password')";
  mysqli_query($conn, $query);
  echo "Registro exitoso";
}

// LOGIN
function login(){
  global $conn;

  $username = $_POST["username"];
  $password = $_POST["password"];

  $user = mysqli_query($conn, "SELECT * FROM user WHERE email = '$username'");

  if(mysqli_num_rows($user) > 0){

    $row = mysqli_fetch_assoc($user);

    if($password == $row['password']){
      echo "Inicio de sesión exitoso";
      $_SESSION["login"] = true;
      $_SESSION["name"] = $row["nombre"];
      $_SESSION["email"] = $row["email"];
    }
    else{
      echo "Contraseña equivocada";
      exit;
    }
  }
  else{
    echo "Usuario no registrado";
    exit;
  }
}

// LOGOUT
function logout(){
  unset($_SESSION["name"]);
  unset($_SESSION["email"]);
  unset($_SESSION["login"]);

  $_SESSION["login"] = false;
}
?>