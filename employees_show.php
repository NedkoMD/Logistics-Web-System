<style>
	html {
		background-image: url("employees.jpg");
		background-size: 100%;
	}

	td {
		width: 300px;
		text-align: center;
	}

	body {
		margin-left: 250px;
		margin-top: 50px;
		background-color: white;
		border: 2px solid black;
		width: 950px;
		opacity: 0.85;
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
<div><input class="button" type="button" onclick="window.location.replace('employees.php')" value="Назад" /><br>
</html>
<?php
include 'db_connection.php';
$sqlQuery = 'SELECT * FROM employees';
$result = mysqli_query($link, $sqlQuery) or die(mysqli_error($link));
if ($result) {
	$b = "style='border:1px solid  gray; border-collapse:collapse; text-align:center'";
	echo "<table $b><tr $b><th $b>Служебен №</th><th $b>Име</th><th $b>Град</th><th $b>Адрес</th><th $b>Имейл</th><th $b>ЕГН</th><th $b></th></tr>";
	while ($row = mysqli_fetch_array($result)) {
		echo "<tr $b>";
		echo "<td $b>" . $row['employee_id'] . "</td>";
		echo "<td $b>" . $row['name'] . "</td>";
		echo "<td $b>" . $row['city'] . "</td>";
		echo "<td $b>" . $row['address'] . "</td>";
		echo "<td $b>" . $row['email'] . "</td>";
		echo "<td $b>" . $row['egn'] . "</td>";
		echo "</tr>";
	}
	echo "</table>";
}
