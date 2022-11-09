<body>
    <header class="header">
    
        <nav class="nav" >
            <div class="vis_nav">
                <div class="containder-fluid">
                    <div class="nav__box">
                        <div class="logod">
                            <!-- <img src="images/logo.svg" class="logo"> -->
                            <p><a href="." class="rollover"> </a></p>
                        </div>
                        <div class="mmenu_block">
                            <ul class="mmenu">
                                <li><a href="index.php?p=0">Главная</a></li>
                                <li><a href="index.php?p=1">Портфолио</a></li>
                                <li><a href="index.php?p=2">Контакты</a></li>
                               
                                <?php 
                                // $username = $_SESSION['username'];
                                if (isset($username)) {
                                    echo '<li><a href="index.php?loginn=1">', $username, '</a></li>';
                                } else {
                                    echo '<li><a href="index.php?loginn=1">Вход</a></li>';
                                }
                                ?>
                               
                                <li><a href="./ftp">FTP</a></li>
                            </ul>
                           
