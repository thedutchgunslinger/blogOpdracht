<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/main.css">
    <title>Document</title>
</head>

<body>

    <?php
    include('db_functions.php');
    $id = $_GET['id'];

    startConnection();
    $query = "SELECT * FROM bericht WHERE id = '$id'";
    $result = executeQuery($query);

    while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
        echo '
        <div class="container">
        <h1>Edit Post</h1>
        <a href="index.php">Terug</a>
    <form action="updatePost.php" method="post">
        <input type="text" name="titel" placeholder="Titel" value="' . $row["title"] . '">
        <textarea name="bericht" placeholder="Bericht" rows="10" cols="50">' . $row["bericht"] . '</textarea>
        <input type="hidden" name="id" value=' . $row["id"] . '>
        <input type="submit" value="Update!">
    </form>
    </div>
        ';
    }
    ?>
</body>

</html>