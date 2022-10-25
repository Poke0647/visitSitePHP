<?php

include "head1.php";

    $p = $_GET['p'];

    if (p == 'main') {
        include "head_m.php";
        include "subheader_m.php";
        include "main_m.php";
    }
    elseif (p == 'port') {
        include "head_p.php";
        include "subheader_p.php";
        include "main_p.php";
    }
    elseif (p == 'cont') { 
        include "main_i.php";
        include "subheader.php";
        include "main_c.php";
    }

include "footer.php";
?>