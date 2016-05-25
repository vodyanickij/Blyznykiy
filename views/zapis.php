<!DOCTYPE html>
<html>
<head>
    <?php include("../blocks/head.php")?>
</head>
<body>

<?php include("../blocks/header.php")?>
    <div id='wrapper'> 
        <h1>ЗАПИСЬ НА ПРИЕМ</h1>
        <div id = "login">
            <form id="addHistory" action="zap.php" method="post">
                <label for="name"><b>Имя:</b></label><br>
                <input type="text" size="30" name="name"><br>
                <label for="last_name"><b>Фамилия:</b></label><br>
                <input type="text" size="30" name="last_name"><br>
                <label for="adress"><b>Адрес:</b></label><br>
                <input type="text" size="40" name="adress"><br>
                <label for="telefon"><b>Телефон:</b></label><br>
                <input type="text" size="30" name="telefon"><br>
                <label for="date"><b>Дата приема:</b></label><br>
                <input type="date" name="date" value="2015-03-03 12:00:00" size="20"><br>
                <label for="comments"><b>Какая проблема беспокоит?</b></label><br>
                <textarea cols="25" rows="5" name="comments"></textarea><br>
                    <?php
                        include("../bd.php");
                        connect();
                        // вывод фио доктора
                        $sotr = mysql_query("SELECT * FROM doctor");
                        if ($sotr == true) {
                             echo "<select id='doctorName' name='doctorName'>";
                             while ($s = mysql_fetch_array($sotr)) {
                                  echo "<option>".$s['family']." ".$s['name']." ".$s['patronymic']."</option>";
                             }
                            echo "</select>";
                        }
                        else {
                            echo "Сотрудники отсутствуют";
                        }
                    ?>
                <input type="submit" value="Новая запись" name="add_history">
                <INPUT TYPE="RESET" VALUE ="Сброс">
            </form>
        </div>
    </div>
<?php include("../blocks/footer.php")?>
    
</body>
</html>