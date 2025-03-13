<?php

include __DIR__ . "/books.php";

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kallax Bookshelf</title>
    <link rel="stylesheet" href="/style.css">
</head>

<body>
    <ul class="bookshelf" aria-label="bookshelf">
        <?php foreach ($bookshelf as $book) { ?>
            <li><?= $book['title'] ?></li>
        <?php
        } ?>
    </ul>
</body>

</html>