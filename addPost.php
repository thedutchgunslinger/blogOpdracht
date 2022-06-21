<?php
include('db_functions.php');

$Title = $_POST['titel'];
$bericht = $_POST['bericht'];

startConnection();

$query = "INSERT INTO bericht (title, bericht) VALUES ('$Title', '$bericht')";

executeInsertQuery($query);
header('Location: index.php');
?>