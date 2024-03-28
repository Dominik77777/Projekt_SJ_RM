<!DOCTYPE html>
<html lang="sk">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Popis mojej stránky">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>História</title>
</head>
<body>
<header>
    <nav>

    </nav>
</header>

<div class="history">

</div>

<!--footer-->
<footer>
    <?php
    $file_path = "parts/footer.php";
    if(!include($file_path)) {
        echo"Failed to include $file_path";
    }
    ?>
</footer>
</body>
</html>
