<?php 
	include("db_connection.php");
?>
<style>
	body {
        background-image: url("employees.jpg");
        background-size: 100%;
    }
	.container{
		margin-top: 20px;
		background-color: white;
	}
	header{
        width: 100px;
        margin-left: 160px;
		margin-top: 50px;
        font-size: large;
	}
	#h{
		color: black;
		background-color: white;
		border: 2px solid black;
        width: 57px;
        padding: 2px;
		text-decoration: none;
		font-weight: bold;
	}
	#h:hover{
		color: darkgray;
		background-color: whitesmoke;
	}
</style>
<html>
<head>
	<title>Търсене на служители по градове</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
	<script>
	$(document).ready(function(){
		load_data();
		function load_data(query)
		{
			$.ajax({
			url:"searchresult.php",
			method:"POST",
			data:{query:query},
			success:function(data)
			{
				$('#result').html(data);
			}
			});
		}
		$('#search').keyup(function(){
		var search = $(this).val();
		if(search != '')
		{
			load_data(search);
		}
		else
		{
			load_data();
		}
		});
	});
	</script>
</head>
<body>
<header class="back"><p><a href="employees.php" id="h"> Назад </a></p></header>
<div class="container-fluid">       
<div class="content-wrapper">
	<div class="container">
		<h1>Търсене на служители по градове</h1>
		<div class="row">
		<div class="col-xs-12">
			<input type="text" name="search" id="search" placeholder="Търсене" class="form-control" />
			<div id="result"></div>
		</div>
		</div>	
	</div>
</div>
</div>
</body>
</html>