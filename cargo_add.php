<!DOCTYPE html>
<style>
    .button {
        margin-top: 10px;
    }

    input {
        margin: 5px 0px 5px 0px;
    }

    body {
        margin-left: 530px;
        margin-top: 100px;
        background-image: url("warehouse.jpg");
        background-size: 100%;
        opacity: 0.85;
    }

    table {
        border: 2px solid black;
        background-color: white;
        padding: 30px;
    }
    td{
        width: 120px;
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
                <th> <input class="button" type="button" onclick="window.location.replace('cargo.php')" value="Назад" />
                </th>
                <th><u>Товар</u></th>
            </tr>
            <tr>
                <td>Продукт:</td>
                <td><input type="text" name="name" /></td>
            </tr>
            <tr>
                <td>Тегло (kg):</td>
                <td><input type="text" name="weight" /></td>
            </tr>
            <tr>
                <td>Обем (m³):</td>
                <td><input type="text" name="volume" /></td>
            </tr>
            <tr>
                <td>Количество:</td>
                <td><input type="text" name="qty" /></td>
            </tr>
            <tr>
                <th><input class="button" type="submit" name="submit" value="Добави" class="button" id="submit" /></th>
                <th><input class="button" type="button" onclick="window.location.replace('cargo.php')" value="Отказ" />

                    </a></th>
            </tr>
        <tr></tr>
    </form>
    <br />


    <?php
    include 'db_connection.php';
    if (isset($_POST['submit'])) {
        if ((!empty($_POST['name'])) && (!empty($_POST['weight'])) && (!empty($_POST['volume']))  && (!empty($_POST['qty']))) {
            $name = $_POST['name'];
            $weight = $_POST['weight'];
            $volume = $_POST['volume'];
            $qty = $_POST['qty'];

            $sqlQuery = "INSERT INTO cargo (name,weight,volume,qty) VALUES ('$name', '$weight', '$volume', '$qty')";
            $result = mysqli_query($link, $sqlQuery) or die(mysqli_error($link));

            if (!$result)
                die("<tr><td colspan='2' id='msg'>Неуспешно добавяне на нов товар: </td></tr>" . mysqli_error($sqlQuery));
            else {
                echo "<tr><td colspan='2 id='msg''>Нов товар беше добавен успешно!</td></tr>";
            }
        } else
            echo "<tr><td colspan='2' id='msg'>Моля, попълнете всички полета!</td></tr>";
    }
    ?>
</table>
</body>

</html>