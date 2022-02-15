<!DOCTYPE html>
<html lang="en">

<?php include '../Include/Head.php'; ?>
<?php
require_once 'Overlay_pathologie.php';
?>

<div id="myNav_cat" class="overlay">

    <div class="overlay-content">



        <div class="main_container_categorie d-flex flex-column">

            <div class="cat_container_titre">RECHERCHER PAR CATEGORIE</div>

            <div class="cat_container d-flex flex-column  p-2">
                <div class="cat_button p-2">
                    <a id="bouton_pathologie" onclick="go_to_path()">Pathologie
                        <img src="/img/outline_arrow_forward_ios_black_24dp.png" style="float:right">
                    </a>
                </div>
                <div class="cat_button p-2">
                    <a href="Inscription.php">Traitement
                        <img src="/img/outline_arrow_forward_ios_black_24dp.png" style="float:right" alt="">
                    </a>
                </div>
                <div class="cat_button p-2">
                    <a href="Inscription.php">Spécialité
                        <img src="/img/outline_arrow_forward_ios_black_24dp.png" style="float:right" alt="">
                    </a>
                </div>
                <div class="cat_button p-2">
                    <a href="Inscription.php">Anatomie
                        <img src="/img/outline_arrow_forward_ios_black_24dp.png" style="float:right" alt="">
                    </a>
                </div>
            </div>

        </div>

        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    </div>
</div>
<!-- <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; open</span> -->

<script src="../Script/overlay_sidebar.js"></script>