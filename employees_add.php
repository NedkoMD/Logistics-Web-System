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
        background-image: url("employees.jpg");
        background-size: 100%;
        opacity: 0.85;
    }
    table{
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
                <th> <input class="button" type="button" onclick="window.location.replace('employees.php')" value="Назад" />
                </th>
                <th><u>Служител</u></th>
            </tr>
            <tr>
                <td>Име:</td>
                <td><input type="text" name="name" /></td>
            </tr>
            <tr>
                <td>Град:</td>
                <td><input type="text" name="city" /></td>
            </tr>
            <tr>
                <td>Адрес:</td>
                <td><input type="text" name="address" /></td>
            </tr>
            <tr>
                <td>Имейл:</td>
                <td><input type="text" name="email" /></td>
            </tr>
            <tr>
                <td>ЕГН:</td>
                <td><input type="text" name="egn" /></td>
            </tr>
            <tr>
                <th><input class="button" type="submit" name="submit" value="Добави" class="button" id="submit" /></th>
                <th><input class="button" type="button" onclick="window.location.replace('employees.php')" value="Отказ" />

                    </a></th>
            </tr>
        <tr></tr>
    </form>
    <br />


    <?php
    include 'db_connection.php';
    if (isset($_POST['submit'])) {
        if ((!empty($_POST['name'])) && (!empty($_POST['city'])) && (!empty($_POST['address'])) && (!empty($_POST['email'])) && (!empty($_POST['egn']))) {
            $name = $_POST['name'];
            $city = $_POST['city'];
            $address = $_POST['address'];
            $email = $_POST['email'];
            $egn = $_POST['egn'];

            $sqlQuery = "INSERT INTO employees (name,city,address,email,egn) VALUES ('$name', '$city', '$address', '$email', '$egn')";
            $result = mysqli_query($link, $sqlQuery) or die(mysqli_error($link));

            if (!$result)
                die("<tr><td colspan='2' id='msg'>Неуспешно добавяне на нов служител: </td></tr>" . mysqli_error($sqlQuery));
            else {
                echo "<tr><td colspan='2' id='msg'>Нов служител беше добавен успешно!</td></tr>";
            }
        } else
            echo "<tr><td colspan='2' id='msg'>Моля, попълнете всички полета!</td></tr>";
    }
    ?>
</table>
</body>

</html>