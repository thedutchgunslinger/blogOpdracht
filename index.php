<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/main.css">
    <title>Blogger</title>
</head>
<body>
    <div class="container">
        
        <h1>Posts</h1>
        <a href="addPost.html">+ Voeg post toe!</a>
        <?php

        // Print de rij
        echo '<div class="post">';
        echo "<h2>" . $row['title'] . "</h2>";
        echo "<p>" . $row['bericht'] . "</p>";
        echo "<a href='editPost.php?id=" . $row['id'] . "'>Edit</a>";
        echo "<a href='deletePost.php?id=" . $row['id'] . "'>Delete</a>";
        echo '</div>';
    
    ?>
    </div>
</body>
</html>