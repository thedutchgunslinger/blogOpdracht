<?php
include('db_functions.php');
$id = $_GET['id'];

startConnection();
$query = "DELETE FROM bericht WHERE id = $id";	
executeInsertQuery($query);
header('Location: index.php');
?>