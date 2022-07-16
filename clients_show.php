<style>
	html{
        background-image: url("clients.jpg");
        background-size: 100%;
    }
    td {
        width: 300px;
        text-align: center;
    }
    body{
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
<div><input class="button" type="button" onclick="window.location.replace('clients.php')" value="Назад" /><br>
</html>
<?php
	include 'db_connection.php';
	$sqlQuery = 'SELECT * FROM clients'; 
	$result = mysqli_query($link, $sqlQuery) or die(mysqli_error($link));  
	if ($result) {		
		$b="style='border:1px solid  gray; border-collapse:collapse; text-align:center'";
		echo "<table $b><tr $b><th $b>Клиентски №</th><th $b>Име на компания</th><th $b>Индустрия</th><th $b>Брой поръчки</th><th $b>Име на управител</th><th $b>Имейл на управител</th><th $b>Телефон на управител</th></tr>";
		while ($row = mysqli_fetch_array($result)) {
			echo "<tr $b>";
            echo "<td $b>".$row['client_id']."</td>";     
			echo "<td $b>".$row['company']."</td>";         
			echo "<td $b>".$row['industry']."</td>";        
			echo "<td $b>".$row['orders']."</td>";         
			echo "<td $b>".$row['m_name']."</td>";  
            echo "<td $b>".$row['m_email']."</td>";  
            echo "<td $b>".$row['m_tel']."</td>";  
			echo "</tr>";
		}
		echo "</table>";
	}
