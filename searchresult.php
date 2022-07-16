<?php
require ('db_connection.php');
$return = '';
if(isset($_POST["query"]))
{
	$search = mysqli_real_escape_string($link, $_POST["query"]);
	$query = "SELECT * FROM employees
	WHERE city  LIKE '%".$search."%'
	";}
else
{
	$query = "SELECT * FROM employees";
}
$result = mysqli_query($link, $query);
if(mysqli_num_rows($result) > 0)
{
	$return .='
	<div class="table-responsive">
	<table class="table table bordered">
	<tr>
		<th>№</th>
		<th>ЕГН</th>
		<th>Име</th>
		<th>Град</th>
		<th>Адрес</th>
        <th>Имейл</th>
	</tr>';
	while($row1 = mysqli_fetch_array($result))
	{
		$return .= '
		<tr>
		<td>'.$row1["employee_id"].'</td>
		<td>'.$row1["egn"].'</td>
		<td>'.$row1["name"].'</td>
		<td>'.$row1["city"].'</td>
		<td>'.$row1["address"].'</td>
        <td>'.$row1["email"].'</td>
		</tr>';
	}
	echo $return;
	}
else
{
	echo '<td>Няма записи за служители от този град.</td>';
}
?>