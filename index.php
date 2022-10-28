<?php

include "general/head1.php";

$p = 'main';
$p = $_GET['p'];
  

  if ($p == 'main') {
    include "main/head_m.php";
  } elseif ($p == 'port') {
    include "port/head_p.php";
  } elseif ($p == 'cont') {
    include "cont/head_c.php";
  }

include "general/header.php";

if($p == 'main'){
  include "main/subheader_m.php";
  include "main/main_m.php";
} 
elseif ($p == 'port') {
  include "port/subheader_p.php";
  include "port/php/main_p.php";
} 
elseif ($p == 'cont') {
  include "contacts/subheader_c.php";
  include "contacts/main_c.php";
}

include "general/footer.php";
?>