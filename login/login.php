<div class="loginFormBg">
    <div class="loginForm">
        <h1>Вход</h1>
        
        <?php
        $login=NULL;
        $passwd=NULL;

        if (isset($_POST["login"]) and isset($_POST["passwd"])){
            $logn = $_POST["login"];
            $passwd = $_POST["passwd"];
        }
        echo "login: $login <br> password: $passwd";
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

