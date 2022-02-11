<!DOCTYPE html>
<html lang="en">

<?php include '../Include/Head.php'; ?>

<?php
// include("../vues/NavBar.php");
?>

<div id="myNav" class="overlay">

    <div class="overlay-content">



        <div class="main_container_categorie d-flex flex-column">

            <div class="cat_container_titre">RECHERCHER PAR CATEGORIE</div>

            <div class="cat_container d-flex flex-column  p-2">
                <div class="category_button p-2">
                    <a href="Inscription.php">Pathologie
                        <img src="/img/outline_arrow_forward_ios_black_24dp.png" style="float:right">
                    </a>
                </div>
                <div class="category_button p-2">
                    <a href="Inscription.php">Traitement
                        <img src="/img/outline_arrow_forward_ios_black_24dp.png" style="float:right" style="float:right" alt="">
                    </a>
                </div>
                <div class="category_button p-2">
                    <a href="Inscription.php">Spécialité
                        <img src="/img/outline_arrow_forward_ios_black_24dp.png" style="float:right" alt="">
                    </a>
                </div>
                <div class="category_button p-2">
                    <a href="Inscription.php">Anatomie
                        <img src="/img/outline_arrow_forward_ios_black_24dp.png" style="float:right" alt="">
                    </a>
                </div>
            </div>

        </div>

        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    </div>
</div>
<span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; open</span>

<script>
    function openNav() {
        document.getElementById("myNav").style.width = "20vw";
        document.getElementsByClassName('main_container_bla')[0].style.opacity = "50%";
    }

    function closeNav() {
        document.getElementById("myNav").style.width = "0%";
        document.getElementsByClassName('main_container_bla')[0].style.opacity = "100%"
        // document.body.style.opacity = "100%"
    }
</script>