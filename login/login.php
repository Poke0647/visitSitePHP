<div class="loginFormBg">
    <div class="loginForm">
        <h1>Вход</h1> 
        <form name="login" method="POST" action="login.php">
            <input class="inp" type="text" placeholder="Логин" name="login"><br>
            <input class="inp" type="password" placeholder="Пароль" name="passwd"><br>
            <input type="submit" value="Вход" name="send">
        </form>
        <a href="index.php?loginn=2">Регистрация</a>
        <a href="index.php?loginn=0">Назад</a>
    </div>
</div>

<?php
$logn=NULL;
$passwd=NULL;

if (isset($_POST["logn"]) and isset($_POST["passwd"])){
    $logn = $_POST["logn"];
    $passwd = $_POST["passwd"];
}