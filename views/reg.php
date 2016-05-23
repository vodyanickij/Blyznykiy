<?php include("../n/header.php")?>

<div id='wrapper'>
    <div id = "login">
        <form action = "save_user.php" method = "post">
            <label> Вашое имя: </label>
            <input type = "text" name = "user" /><br/><br />
            <label> Ваша фамилия: </label>
            <input type = "text" name = "family" /<br/><br />
            <label> Ваш email: </label>
            <input type = "email" name = "email" /<br/><br />
            <label> Ваш логин: </label>
            <input type = "text" name = "login" maxlength = "15" /<br /><br />
            <label> Ваш пароль: </label>
            <input type = "password" name = "password" maxlength = "15" /<br/><br />
            
            <input type = "submit" value = "Зарегистрироваться" name = "submit"/><br />
        </form>
    </div>
</div>

<?php include("../n/footer.php")?>
