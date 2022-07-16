<!DOCTYPE html>
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
    div{
        margin-left: 60px;
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
<html >
<head>
    <meta charset="utf-8">
</head>
<body>

<form method="POST">
    <input class="button" type="button" onclick="window.location.replace('clients.php')" value="Назад" /><br>
	<div><p>Изберете индустрия: 
    <select name="industry">
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
                    </select>
                    
	<input class="button" type="submit" name="submit" value="Покажи"/></p>
    </div>
</form>
<br/>


<?php
	include 'db_connection.php'; 
	if (isset($_POST['submit'])){
		if ((!empty($_POST['industry']))){
			$industry=$_POST['industry'];
		
			$sqlQuery= "SELECT * FROM clients WHERE industry="."'".$industry."'"; 
			$result = mysqli_query($link, $sqlQuery) or die(mysqli_error($link));  
			if (!$result)     
				die("Неуспешно изпълнение на заявката: " . mysqli_error($sqlQuery)); 
			else{
				if (mysqli_num_rows($result)==0){
                    echo "Индустрия: ".$industry;
                    echo "<hr/>";
					echo "Няма клиенти от тази индустрия."; 
                }
				else{
                    echo "Индустрия: ".$industry;
                    while ($row = mysqli_fetch_array($result)) {
                    echo "<hr/>";
                    echo "Клиентски №: " . $row['client_id'] . "<br/>";   
					echo "Име на компания: " . $row['company'] . "<br/>";        
					echo "Индустрия: " . $row['industry'] . "<br/>";     
                    echo "Брой поръчки: " . $row['orders'] . "<br/>";
                    echo "Име на управител: " . $row['m_name'] . "<br/>";       
					echo "Имейл на управител: " . $row['m_email'] . "<br/><br/>";
                    echo "Телефон на управител: " . $row['m_tel'] . "<br/><br/>";
                    }
				}
			}
		} else 
			echo 'Моля, изберете индустрия!';
	}
?>

</body>
</html>