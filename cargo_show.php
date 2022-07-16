<style>
	html {
		background-image: url("warehouse.jpg");
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
<div><input class="button" type="button" onclick="window.location.replace('cargo.php')" value="Назад" /><br>
</html>
<?php
include 'db_connection.php';
$sqlQuery = 'SELECT * FROM cargo';
$result = mysqli_query($link, $sqlQuery) or die(mysqli_error($link));
if ($result) {
	$b = "style='border:1px solid  gray; border-collapse:collapse; text-align:center'";
	echo "<table $b><tr $b><th $b>№</th><th $b>Продукт</th><th $b>Тегло (kg)</th><th $b>Обем (m³)</th><th $b>Количество</th></tr>";
	while ($row = mysqli_fetch_array($result)) {
		echo "<tr $b>";
		echo "<td $b>" . $row['cargo_id'] . "</td>";
		echo "<td $b>" . $row['name'] . "</td>";
		echo "<td $b>" . $row['weight'] . "</td>";
		echo "<td $b>" . $row['volume'] . "</td>";
		echo "<td $b>" . $row['qty'] . "</td>";
		echo "</tr>";
	}
	echo "</table>";
}
