<?php
include('db_functions.php');

$id = $_POST['id'];
$Title = $_POST['titel'];
$bericht = $_POST['bericht'];

startConnection();

$query = "Update bericht SET title = '$Title', bericht = '$bericht' WHERE id = '$id'";

executeInsertQuery($query);
header('Location: index.php');
?>