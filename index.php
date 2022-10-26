<?php

include "./general/head1.php";

//$p = 0;
$p = $_GET['p'];  

if ($p == 0) {
  include "./main/head_m.php";
}
elseif ($p == 1) {
  include "./port/head_p.php";
}
elseif ($p == 2) {
  include "./cont/head_c.php";
}

include "./general/header.php";

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
?>
