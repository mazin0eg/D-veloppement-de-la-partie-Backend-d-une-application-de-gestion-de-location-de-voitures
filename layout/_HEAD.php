<?php
    $page = $_SERVER['PHP_SELF'];

?>

<aside class="sidebar">
            <h2 class="sidebar-title">RENTAL CAR</h2>
            <ul class="sidebar-list">
                <li class="sidebar-item"><a href="./index.php" class="sidebar-link <?php  if($page ==  '/pages/index.php') echo 'active' ?>">Tableau de Bord</a></li>
                <li class="sidebar-item"><a href="./contract.php" class="sidebar-link">Réservations</a></li>
                <li class="sidebar-item"><a href="./clietns.php" class="sidebar-link">Clients</a></li>
                <li class="sidebar-item"><a href="./voiture.php" class="sidebar-link">Voitures</a></li>
                
            </ul>
        </aside>