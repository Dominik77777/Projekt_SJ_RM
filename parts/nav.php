<?php
include_once "functions.php";

$menu = getMenuData("header");
?>
<header class="container main-header">
    <nav class="main-nav">
        <ul class="main-menu" id="main-menu container">
            <?php printMenu($menu); ?>
        </ul>
        <a class="hamburger" id="hamburger">
            <i class="fa fa-bars"></i>
        </a>
    </nav>
</header>