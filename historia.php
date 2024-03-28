<!DOCTYPE html>
<html lang="sk">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Popis mojej stránky">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>História</title>
</head>
<body>
<header>
    <nav>
        <?php
        $file_path = "parts/nav.php";
        if(!include($file_path)) {
            echo"Failed to include $file_path";
        }
        ?>
    </nav>
</header>

<div class="history">
    <h3>REAL MADRID CLUB DE FÚTBOL</h3>
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