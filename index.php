<?php
session_start();


$p = $_GET['p'];

//Данный кусок вместе с session_start(); позволяет после вызова login.php
// и выхода из него оставаться на странице, которая была только что активна
//--------------
$loginn = $_GET['loginn'];
if(isset($_SESSION['p'])){
  if (isset($loginn)){
    $p = $_SESSION['p'];
  }
}

if (isset($_SESSION['username'])){
  $username = $_SESSION['username'];
}
//--------------

include "./general/head1.php";

//Когда окно входа не открыто, блюр применяется к хедеру
//--------------
if ($loginn < 1){
  include "./login/cssForLogin.php";
} else {
  include "./login/whenLogInIsOn.php";
}
//--------------

if ($p == 0) {
  include "./main/head_m.php";
} elseif ($p == 1) {
  include "./port/head_p.php";
} elseif ($p == 2) {
  include "./contacts/head_c.php";
}

if (isset($_POST["login"]) and isset($_POST["passwd"])){
  $login = $_POST["login"];
  $passwd = CRYPT($_POST["passwd"]);
  echo "login: $login <br> password: $passwd <br>";
  $username = $login;

  $link = new mysqli("95.154.67.183", "pavelisaenko_xyz_login", "George_Orwel_1984", "visit_site_db");

  if ($link == true){
    echo "Connection with database established!"; 
  } else {
    echo "Error: " .mysqli_connect_error();
  }

  $_SESSION['username'] = $username;
}

include "./general/header.php";

if ($loginn == 1){
  include "./login/login.php";
} elseif ($loginn == 2){
  include "./login/signup.php";
}

if($p == 0){
  include "./main/subheader_m.php";
  include "./main/main_m.php";
} elseif ($p == 1) {
  include "./port/subheader_p.php";
  include "./port/main_p.php";
} elseif ($p == 2) {
  include "./contacts/subheader_c.php";
  include "./contacts/main_c.php";
}

include "./general/footer.php";



        





$_SESSION['p'] = $p;
?>
