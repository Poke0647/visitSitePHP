<?php
include "./general/head1.php";

//$p = 0;

if(!isset($_SESSION['p'])){
  $p = $_GET['p'];
  $loginn = $_GET['loginn'];
}


// $loginn = 0;  



if ($p == 0) {
  include "./main/head_m.php";
} elseif ($p == 1) {
  include "./port/head_p.php";
} elseif ($p == 2) {
  include "./contacts/head_c.php";
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
