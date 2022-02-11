<!DOCTYPE html>
<html lang="en">

<?php include '../Include/Head.php'; ?>

<?php
include("../vues/NavBar.php");
?>

<div id="myNav" class="overlay">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <div class="overlay-content">


        <div>

            <div class="main_container_categorie d-flex flex-column">
                <div></div>

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
        </div>


    </div>
</div>
<span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; open</span>

<script>
    function openNav() {
        document.getElementById("myNav").style.width = "100%";
    }

    function closeNav() {
        document.getElementById("myNav").style.width = "0%";
    }
</script>