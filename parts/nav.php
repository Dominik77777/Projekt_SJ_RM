<?php
include "classes/Menu.php";
$menuManager = new Menu();
?>
<header>
    <nav>
        <div class="logo">
            <a href="<?php echo (isset($menuManager->getMenuData("header")['home']['path'])) ?
                $menuManager->getMenuData("header")['home']['path'] : ''; ?>">
                <img src="img/logo.webp" alt="Real Madrid">
            </a>
        </div>
        <div class="nadpis">Real Madrid</div>
        <ul class="sidebar">
            <li onclick=hideSidebar()><a href="#"><svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24"><path d="m256-200-56-56 224-224-224-224 56-56 224 224 224-224 56 56-224 224 224 224-56 56-224-224-224 224Z"/></svg></a></li>
            <?php
            // Overenie validácie typu navigácie
            if ($menuManager->isValidMenuType("header")) {
                $menuData = $menuManager->getMenuData("header");
                $menuManager->printMenu($menuData);
            } else {
                echo "Neplatný typ menu";
            }
            ?>
        </ul>
        <ul>
            <li class="hideOnMobile"><a href="index.php">DOMOV</a></li>
            <li class="hideOnMobile"><a href="história.php">HISTÓRIA</a></li>
            <li class="hideOnMobile"><a href="supiska.php">SÚPISKA</a></li>
            <li class="hideOnMobile"><a href="úspechy.php">ÚSPECHY</a></li>
            <li class="hideOnMobile"><a href="kontakt.php">KONTAKT</a></li>
            <li class="menu-button" onclick=showSidebar()><a href="#"><svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24"><path d="M120-240v-80h720v80H120Zm0-200v-80h720v80H120Zm0-200v-80h720v80H120Z"/></svg></a></li>
        </ul>
    </nav>
</header>
