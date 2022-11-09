<div class="loginFormBg">
    <div class="loginForm">
        <h1>Вход</h1>
        
        <?php
        $login=NULL;
        $passwd=NULL;

        if (isset($_POST["login"]) and isset($_POST["passwd"])){
            $login = $_POST["login"];
            $passwd = CRYPT($_POST["passwd"]);
            echo "login: $login <br> password: $passwd <br>";
            $username = $login;
            $username = $_SESSION['username'];
            $link = new mysqli("95.154.67.183", "pavelisaenko_xyz_login", "George_Orwel_1984", "visit_site_db");

            if ($link == true){
                echo "Connection with database established!";
                
            } else {
                echo "Error: " .mysqli_connect_error();
            }
        }
        
        ?>

        <form name="login" method="POST" action="index.php?loginn=0">
            <input class="inp" type="text" placeholder="Логин" name="login"><br>
            <input class="inp" type="password" placeholder="Пароль" name="passwd"><br>
            <input type="submit" value="Вход" name="send">
        </form>
        <a href="index.php?loginn=2">Регистрация</a>
        <a href="index.php?loginn=0">Назад</a>
    </div>
</div>

