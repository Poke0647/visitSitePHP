<div class="loginFormBg">
    <div class="loginForm">
        <h1>Вход</h1>
        
        <?php
        $login=NULL;
        $passwd=NULL;
        $login = $_POST["login"];
        $passwd = CRYPT($_POST["passwd"]);

        if (isset($_POST["login"]) and isset($_POST["passwd"])){
            if (mysql_connect("95.154.67.183", "pavelisaenko_xyz_login", "George_Orwel_1984", "visit_site_db") == true){
                echo "Connection with database established!";
            } else {
                echo "Error: Can not connect to database! " .mysql_connect_error();
            }
            echo "login: $login <br> password: $passwd";
        }
        
        ?>

        <form name="login" method="POST" action="index.php?loginn=1">
            <input class="inp" type="text" placeholder="Логин" name="login"><br>
            <input class="inp" type="password" placeholder="Пароль" name="passwd"><br>
            <input type="submit" value="Вход" name="send">
        </form>
        <a href="index.php?loginn=2">Регистрация</a>
        <a href="index.php?loginn=0">Назад</a>
    </div>
</div>

