<!DOCTYPE html>
<style>
    .button {
        margin-top: 10px;
    }

    input {
        margin: 5px 0px 5px 0px;
    }
    body{
        margin-left: 530px;
        margin-top: 100px;
        background-image: url("trucks.jpg");
        background-size: 100%;
        opacity: 0.85;
    }
    table{
        border: 2px solid black;
        background-color: white;
        padding: 30px;
    }
    td{
        width: 140px;
    }
    #msg{
        border: 1px solid black;
    }
    .button{
        border: 2px solid black;
        padding: 2px;
        background-color: white;
        color: black;
		font-weight: bold;
    }
	.button:hover{
		color: darkgray;
		background-color: whitesmoke;
	}
</style>
<html>

<head>
    <meta charset="utf-8">
</head>

<body>

    <form method="POST">
        <table>
            <tr>
                <th> <input class="button" type="button" onclick="window.location.replace('vehicles.php')" value="Назад" />
                </th>
                <th><u>ППС</u></th>
            </tr>
            <tr>
                <td>Регистрационен №:</td>
                <td><input type="text" name="reg" /></td>
            </tr>
            <tr>
                <td>Марка:</td>
                <td><input type="text" name="brand" /></td>
            </tr>
            <tr>
                <td>Модел:</td>
                <td><input type="text" name="model" /></td>
            </tr>
            <tr>
                <td>Производство:</td>
                <td><input type="text" name="prod" /></td>
            </tr>
            <tr>
                <td>Пробег (km):</td>
                <td><input type="text" name="mileage" /></td>
            </tr>
            <tr>
                <th><input class="button" type="submit" name="submit" value="Добави" class="button" id="submit" /></th>
                <th><input class="button" type="button" onclick="window.location.replace('vehicles.php')" value="Отказ" />

                    </a></th>
            </tr>
        <tr></tr>
    </form>
    <br />


    <?php
    include 'db_connection.php';
    if (isset($_POST['submit'])) {
        if ((!empty($_POST['reg'])) && (!empty($_POST['brand'])) && (!empty($_POST['model'])) && (!empty($_POST['prod'])) && (!empty($_POST['mileage']))) {
            $reg = $_POST['reg'];
            $brand = $_POST['brand'];
            $model = $_POST['model'];
            $prod = $_POST['prod'];
            $mileage = $_POST['mileage'];

            $sqlQuery = "INSERT INTO vehicles (reg,brand,model,prod,mileage) VALUES ('$reg', '$brand', '$model', '$prod', '$mileage')";
            $result = mysqli_query($link, $sqlQuery) or die(mysqli_error($link));

            if (!$result)
                die("<tr><td colspan='2' id='msg'>Неуспешно добавяне на ново ППС: </td></tr>" . mysqli_error($sqlQuery));
            else {
                echo "<tr><td colspan='2' id='msg'>Ново ППС беше добавено успешно!</td></tr>";
            }
        } else
            echo "<tr><td colspan='2' id='msg'>Моля, попълнете всички полета!</td></tr>";
    }
    ?>
</table>
</body>

</html>