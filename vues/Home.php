<!DOCTYPE html>
<html lang="en">

<?php include '../Include/Head.php'; ?>

<?php
include("../vues/NavBar.php");
?>

<body>
    <div class="d-flex flex-column p-2 mx-auto">
        Container de tout
        <!-- <div class="bg-warning mx-auto border d-flex flex-row p-2"> -->
        <div class="container_barre_recherche">

            <div class="barre_recherche_cat">
                Toutes les categories
            </div>
            <div class="barre_recherch_main">
                Pathologie
            </div>
            <div class="barre_recherch_loupe">
                <a href="">
                    <img src="/img/Recherche Blanc.png" style="height:auto">
                </a>
            </div>
        </div>
        <!-- <div class="sujet_container d-flex flex-row m-2 p-2 mt-5 justify-content-between mx-auto" style="width: 80vw;"> -->
        <div class="sujet_container mx-auto">

            <div class="sujet_discussion">
                <div class="sujet_discussion_indicator"></div>
                <div class="sujet_discussion_portrait"></div>
            </div>
            <div class="sujet_discussion">
                <div class="sujet_discussion_indicator"></div>
                <div class="sujet_discussion_portrait"></div>
            </div>
            <div class="sujet_discussion">
                <div class="sujet_discussion_indicator"></div>
                <div class="sujet_discussion_portrait"></div>
            </div>
            <div class="sujet_discussion">
                <div class="sujet_discussion_indicator"></div>
                <div class="sujet_discussion_portrait"></div>
            </div>
            <div class="sujet_discussion">
                <div class="sujet_discussion_indicator"></div>
                <div class="sujet_discussion_portrait"></div>
            </div>
            <div class="sujet_discussion">
                <div class="sujet_discussion_indicator"></div>
                <div class="sujet_discussion_portrait"></div>
            </div>
            <div class="sujet_discussion">

                <div class="sujet_discussion_indicator"></div>
                <div class="sujet_discussion_portrait"></div>
            </div>
        </div>
        Cas cliniques
        <div class=" cas_container d-flex flex-row">

            <div class="column">
                <div class="card" style="width: 20rem;">
                    <div id="cercle-top"><img src="../img/Etoile_Bleu_PLeine.png" class="card-img" alt="dev-meme-1"></div>
                    <img src="../img/4ooord.jpg" class="card-img-top" alt="dev-meme-1">
                    <div class="">
                        <div class="barbleu1"><a>Greffe</a></div>
                        <div class="barbleu2"><a>Gencive</a></div>
                    </div>
                    <div class="card-body">
                        <title>Greffe de gencive</title>
                        <p class="card-text">L’améloblastome est une tumeur odontogène
                            bénigne, d’agressivité locale, avec un taux de
                            transformation maligne très faible. Elle est
                            néanmoins connue très récidivante après
                            traitement. Il s’agit de la tumeur odontogène
                            bénigne la plus fréquente dans les pays ...</p>
                        <div class="card-body">
                            <title>Greffe de gencive</title>
                            <p class="card-text">L’améloblastome est une tumeur odontogène
                                bénigne, d’agressivité locale, avec un taux de
                                transformation maligne très faible. Elle est
                                néanmoins connue très récidivante après
                                traitement. Il s’agit de la tumeur odontogène
                                bénigne la plus fréquente dans les pays ...</p>
                            <img src="" class="" alt="">
                            <div id="cercle"></div>
                            <div class="namecl">
                                <a>Arthur</a>
                                <p>étudiant</p>
                            </div>
                            <div id="cercle-bot1"><img src="../img/dent_bleu_pleine.png" class="card-img" alt="">
                                <a id="cercle-bot3">4.8</a>
                            </div>
                            <div id="cercle-bot2"><img src="../img/logo_chat_bleu.png" class="card-img" alt="">
                                <a id="cercle-bot3">18</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div>Cas 2</Div>
            <div>Cas 3</div>
        </div>
    </div>
</body>