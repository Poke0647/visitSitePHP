<?php

include "php/head1.php";

$p = 'main';
$p = $_GET['p'];
  

  if ($p == 'main') {
    include "php/head_m.php";
  }
  elseif ($p == 'port') {
    include "php/head_p.php";
  }
  elseif ($p == 'cont') {
    include "php/main_c.php";
  }

include "php/header.php";

if($p == 'main'){
  include "php/subheader_m.php";
  include "php/main_m.php";
} elseif ($p == 'port') {
  include "php/subheader_p.php";
  include "php/main_p.php";
} elseif ($p == 'cont') {
  include "php/subheader_c.php";
  include "php/main_c.php";
}

include "php/footer.php";
?>