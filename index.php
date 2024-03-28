<!DOCTYPE html>
<html lang="sk">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Popis mojej stránky">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Real Madrid</title>
</head>
<body>
<header>
    <!--Navigácia-->
    <nav>

    </nav>
</header>
<section class="domov">
    <!--Domovská stránka-->
    <h3>REAL MADRID CLUB DE FÚTBOL</h3>
    <p>
        Vitajte na oficiálnej webovej stránke Real Madrid Club de Fútbol. Real Madrid je jedným z najslávnejších a najúspešnejších futbalových klubov na svete.
    </p>

    <p>
        Klub bol založený v roku 1902 a od tej doby si získal mnoho fanúšikov svojimi úspechmi v domácich aj medzinárodných súťažiach.
    </p>
</section>
<!--Footer-->
<footer>
    <?php
    $file_path = "parts/footer.php";
    if(!include($file_path)) {
        echo"Failed to include $file_path";
    }
    ?>
</footer>
</body>
</html
