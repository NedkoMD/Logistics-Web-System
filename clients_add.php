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
        background-image: url("clients.jpg");
        background-size: 100%;
        opacity: 0.85;
    }
    table{
        border: 2px solid black;
        background-color: white;
        padding: 30px;
    }
    td{
        width: 160px;
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
                <th><input class="button" type="button" onclick="window.location.replace('clients.php')" value="Назад" /></th>
                <th><u>Клиент</u></th>
            </tr>
            <tr>
                <td>Име на компания:</td>
                <td><input type="text" name="company" /></td>
            </tr>
            <tr>
                <td>Индустрия:</td>
                <td><select name="industry">
                        <option>
                            ИТ
                        </option>
                        <option>
                            Здравеопазване
                        </option>
                        <option>
                            Логистика
                        </option>
                        <option>
                            Образование
                        </option>
                        <option>
                            Военна дейност
                        </option>
                        <option>
                            Автомобили
                        </option>
                        <option>
                            Производство
                        </option>
                        <option>
                            Хранителна
                        </option>
                        <option>
                            Търговия
                        </option>
                        <option>
                            Спорт
                        </option>
                        <option>
                            Хазарт
                        </option>
                        <option>
                            Развлечения
                        </option>
                    </select></td>
            </tr>
            <tr>
                <td>Брой поръчки:</td>
                <td><input type="text" name="orders" /></td>
            </tr>
            <tr>
                <td>Име на управител:</td>
                <td><input type="text" name="m_name" /></td>
            </tr>
            <tr>
                <td>Имейл на управител:</td>
                <td><input type="text" name="m_email" /></td>
            </tr>
            <tr>
                <td>Телефон на управител:</td>
                <td><input type="text" name="m_tel" /></td>
            </tr>
            <tr>
                <th><input class="button" type="submit" name="submit" value="Добави" class="button" id="submit" /></th>
                <th><input class="button" type="button" onclick="window.location.replace('clients.php')" value="Отказ" />

                    </a></th>
            </tr>
            <tr></tr>
    </form>
    <br />


    <?php
    include 'db_connection.php';
    if (isset($_POST['submit'])) {
        if ((!empty($_POST['company'])) && (!empty($_POST['industry'])) && (!empty($_POST['orders'])) && (!empty($_POST['m_name'])) && (!empty($_POST['m_email'])) && (!empty($_POST['m_tel']))) {
            $company = $_POST['company'];
            $industry = $_POST['industry'];
            $orders = $_POST['orders'];
            $m_name = $_POST['m_name'];
            $m_email = $_POST['m_email'];
            $m_tel = $_POST['m_tel'];

            $sqlQuery = "INSERT INTO clients (company,industry,orders,m_name,m_email,m_tel) VALUES ('$company', '$industry', '$orders', '$m_name', '$m_email', '$m_tel')";
            $result = mysqli_query($link, $sqlQuery) or die(mysqli_error($link));

            if (!$result)
                die("<tr><td colspan='2' id='msg'>Неуспешно добавяне на нов клиент: " . mysqli_error($sqlQuery))."</td></tr>";
            else {
                echo "<tr><td colspan='2' id='msg'>Нов клиент беше добавен успешно!</td></tr>";
            }
        } else
            echo "<tr><td colspan='2' id='msg'>Моля, попълнете всички полета!</td><tr>";
    }
    ?>
</table>
</body>

</html>