<?php

include __DIR__ . "/books.php";

if (isset($_GET['sort'])) {
    $sortOrder = $_GET['sort'];

    if ($sortOrder === "ascTitle") {
        usort($bookshelf, fn($a, $b) => strcmp($a['title'], $b['title']));
    } elseif ($sortOrder === "descTitle") {
        usort($bookshelf, fn($a, $b) => strcmp($b['title'], $a['title']));
    } elseif ($sortOrder === "ascAuthor") {
        usort($bookshelf, fn($a, $b) => strcmp($a['author'], $b['author']));
    } elseif ($sortOrder === "descAuthor") {
        usort($bookshelf, fn($a, $b) => strcmp($b['author'], $a['author']));
    }
}

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
    <select name="sort" id="sort">
        <option value="ascTitle">Sort by title ASC</option>
        <option value="descTitle">Sort by title DESC</option>
        <option value="ascAuthor">Sort by author ASC</option>
        <option value="descAuthor">Sort by author DESC</option>
    </select>
    <section aria-label="bookshelf">

        <?php foreach ($bookshelf as $book) { ?>
            <li><?= $book['title'] . ' - ' . $book['author'] ?></li>
        <?php
        } ?>
    </ul>
    </section>
    <script>
        document.getElementById('sort').addEventListener('change', function() {
            const sortValue = this.value;
            window.location.href = `/index.php?sort=${sortValue}`;
        });
    </script>
</body>

</html>