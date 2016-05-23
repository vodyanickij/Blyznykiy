<!DOCTYPE html>
<html>
<head>
    <?php include("../blocks/head.php")?>
</head>
<body>

<?php include("../blocks/header.php")?>
    
    <div id='wrapper'> 
        <div id = "login">
            <form action="log.php" method="post">
                <label>Ваш логин:</label>
                <input type="text" name="login" size="15" maxlength="15" /><br /><br />
                <label>Ваш пароль:</label>
                <input type="password" name="password" size="15" maxlength="15"/><br/><br />
                <input type="submit" value = "Войти" name="submit"/><br />
                <hr/>
                <a href="reg.php">Регистрация</a>
            </form>
        </div>
    </div>

<?php include("../blocks/footer.php")?>
</body>
</html>