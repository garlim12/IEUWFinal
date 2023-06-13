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
  else if($_POST["action"] == "interes"){
    interes();
  }
  else if($_POST["action"] == "interes2"){
    interes2();
  }
  else if($_POST["action"] == "interes3"){
    interes3();
  }
  else if($_POST["action"] == "interes4"){
    interes4();
  }
  else if($_POST["action"] == "interes5"){
    interes5();
  }
  else if($_POST["action"] == "interes6"){
    interes6();
  }
  else if($_POST["action"] == "interes7"){
    interes7();
  }
  else if($_POST["action"] == "interes8"){
    interes8();
  }
  else if($_POST["action"] == "topProductos"){
    topProductos();
  }
  else if($_POST["action"] == "interesTop1"){
    topProductosInteres();
  }
  else if($_POST["action"] == "interesTop2"){
    topProductosInteres();
  }
  else if($_POST["action"] == "interesTop3"){
    topProductosInteres();
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
  global $conn;

  unset($_SESSION["name"]);
  unset($_SESSION["email"]);
  unset($_SESSION["login"]);

  $_SESSION["login"] = false;
}

// TOP 3 PRODUCTOS
function topProductos(){
  global $conn;

  $user = mysqli_query($conn, "select id, nombre, precio, imagen from productos order by interes desc limit 3");

  if(mysqli_num_rows($user) > 0){

    $table = mysqli_fetch_all($user);

    $_SESSION["id"] = $table[0][0];
    $_SESSION["nombre"] = $table[0][1];
    $_SESSION["precio"] = $table[0][2];
    $_SESSION["imagen"] = $table[0][3];

    $_SESSION["id2"] = $table[1][0];
    $_SESSION["nombre2"] = $table[1][1];
    $_SESSION["precio2"] = $table[1][2];
    $_SESSION["imagen2"] = $table[1][3];

    $_SESSION["id3"] = $table[2][0];
    $_SESSION["nombre3"] = $table[2][1];
    $_SESSION["precio3"] = $table[2][2];
    $_SESSION["imagen3"] = $table[2][3];

    // echo $_SESSION["id"];
    // echo $_SESSION["nombre"];
    // echo $_SESSION["precio"];
    // echo $_SESSION["imagen"];

    // echo $_SESSION["id2"];
    // echo $_SESSION["nombre2"];
    // echo $_SESSION["precio2"];
    // echo $_SESSION["imagen2"];

    // echo $_SESSION["id3"];
    // echo $_SESSION["nombre3"];
    // echo $_SESSION["precio3"];
    // echo $_SESSION["imagen3"];

    // $myJSON = json_encode($table);

    // echo $myJSON;
  }
}

// Agregar interes a producto
function interes(){
  global $conn;
  topProductos();

  $identificador = $_POST["identificador"];

  $query = "UPDATE productos SET interes = interes + 1 WHERE id = $identificador";
  mysqli_query($conn, $query);
  echo "Producto agregado al carrito";
}

// Agregar interes a producto
function interes2(){
  global $conn;
  topProductos();

  $identificador = $_POST["identificador"];

  $query = "UPDATE productos SET interes = interes + 1 WHERE id = $identificador";
  mysqli_query($conn, $query);
  echo "Producto agregado al carrito";
}

function interes3(){
  global $conn;
  topProductos();

  $identificador = $_POST["identificador"];

  $query = "UPDATE productos SET interes = interes + 1 WHERE id = $identificador";
  mysqli_query($conn, $query);
  echo "Producto agregado al carrito";
}

function interes4(){
  global $conn;
  topProductos();

  $identificador = $_POST["identificador"];

  $query = "UPDATE productos SET interes = interes + 1 WHERE id = $identificador";
  mysqli_query($conn, $query);
  echo "Producto agregado al carrito";
}

function interes5(){
  global $conn;
  topProductos();

  $identificador = $_POST["identificador"];

  $query = "UPDATE productos SET interes = interes + 1 WHERE id = $identificador";
  mysqli_query($conn, $query);
  echo "Producto agregado al carrito";
}

function interes6(){
  global $conn;
  topProductos();

  $identificador = $_POST["identificador"];

  $query = "UPDATE productos SET interes = interes + 1 WHERE id = $identificador";
  mysqli_query($conn, $query);
  echo "Producto agregado al carrito";
}

function interes7(){
  global $conn;
  topProductos();

  $identificador = $_POST["identificador"];

  $query = "UPDATE productos SET interes = interes + 1 WHERE id = $identificador";
  mysqli_query($conn, $query);
  echo "Producto agregado al carrito";
}

function interes8(){
  global $conn;
  topProductos();

  $identificador = $_POST["identificador"];

  $query = "UPDATE productos SET interes = interes + 1 WHERE id = $identificador";
  mysqli_query($conn, $query);
  echo "Producto agregado al carrito";
}

function topProductosInteres(){
  global $conn;

  $identificador = $_POST["identificador"];

  $query = "UPDATE productos SET interes = interes + 1 WHERE id = $identificador";
  mysqli_query($conn, $query);
  echo $identificador;
}
?>