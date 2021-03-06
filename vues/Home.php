<!DOCTYPE html>
<html lang="en">

<?php include '../Include/Head.php'; ?>

<?php
include("../vues/NavBar.php");
?>

<body>
    <div class="d-flex flex-column p-2 mx-auto">
        <!-- <div class="bg-warning mx-auto border d-flex flex-row p-2"> -->
        <div class="container_barre_recherche">

            <div class="barre_recherche_cat">

                <button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal" style="background-color: transparent;">
                    Toutes les categories
                </button>
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
        <div class="container_titre_cas">
            Sujets de discussion
        </div>
        <div class="sujet_container mx-auto">
            <div class="sujet_arrow_container">
                <a href="">
                    <div class="sujet_arrow_container_stuff">
                        <img src="/img/outline_arrow_forward_ios_blue4dp.png" alt="" style="height:100ù; transform: rotate(180deg);">
                    </div>
                </a>
            </div>

            <div class="sujet_discussion">
                <div class="sujet_discussion_indicator">5</div>
                <div class="sujet_discussion_portrait">
                    <img src="/img/293894935051211.png" alt="" style="height:6vh">
                </div>
            </div>
            <div class="sujet_discussion">
                <div class="sujet_discussion_indicator">3</div>
                <div class="sujet_discussion_portrait">
                    <img src="/img/293894935051211.png" alt="" style="height:6vh">
                </div>
            </div>
            <div class="sujet_discussion">
                <div class="sujet_discussion_indicator">3</div>
                <div class="sujet_discussion_portrait">
                    <img src="/img/293894935051211.png" alt="" style="height:6vh">
                </div>
            </div>
            <div class="sujet_discussion">
                <div class="sujet_discussion_indicator">2</div>
                <div class="sujet_discussion_portrait">
                    <img src="/img/293894935051211.png" alt="" style="height:6vh">
                </div>
            </div>
            <div class="sujet_discussion">
                <div class="sujet_discussion_indicator">7</div>
                <div class="sujet_discussion_portrait">
                    <img src="/img/293894935051211.png" alt="" style="height:6vh">
                </div>
            </div>
            <div class="sujet_discussion">
                <div class="sujet_discussion_indicator">5</div>
                <div class="sujet_discussion_portrait">
                    <img src="/img/293894935051211.png" alt="" style="height:6vh">
                </div>
            </div>
            <div class="sujet_discussion">

                <div class="sujet_discussion_indicator">9</div>
                <div class="sujet_discussion_portrait">
                    <img src="/img/293894935051211.png" alt="" style="height:6vh">
                </div>
            </div>
            <div class="sujet_arrow_container">
                <a href="">
                    <div class="sujet_arrow_container_stuff">
                        <img src="/img/outline_arrow_forward_ios_blue4dp.png" alt="" style="height:100ù;">
                    </div>
                </a>
            </div>
        </div>
        <div class="container_titre_cas">
            Cas clinique

        </div>
        <div>
            <div class="btn-group" style="margin-left:12vw; margin-top:2vh">
                <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Tri par : Plus recent
                </button>
                <ul class="dropdown-menu">
                    ...
                </ul>
            </div>
        </div>

        <div class="cas_container d-flex padding flex-row justify-content-between">
            <div>
                <div class="column">
                    <div class="card" style="width: 20rem;">
                        <div id="cercle-top"><img src="../img/Etoile_Bleu_PLeine.png" class="card-img" alt="dev-meme-1"></div>
                       <a href="/vues/Message.php"><img src="../img/4ooord.jpg" class="card-img-top" alt="dev-meme-1"></a> 
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
                            <img src="" class="" alt="">
                            <div id="cercle"></div>
                            <div class="namecl">
                                <a>Arthur</a>
                                <p class="lastmin1">étudiant</p>
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

            <div>
                <div class="column-1">
                    <div class="card" style="width: 20rem;">
                        <div id="cercle-top"><img src="../img/Etoile_Bleu_PLeine.png" class="card-img" alt="dev-meme-1"></div>
                        <img src="../img/Git_branch_meme.webp" class="card-img-top" alt="dev-meme-2">
                        <div class="">
                            <div class="barbleu3"><a>Machoire</a></div>
                            <div class="barbleu4"><a>Parodontie</a></div>
                            <div class="barbleu5"><a>Extraction</a></div>
                        </div>
                        <div class="card-body">
                            <title>Parodontite aîgue</title>
                            <p class="card-text">L’énucléation et l’exérèse de la lésion avaient été
                                réalisées sous anesthésie locorégionale. En
                                macroscopie, la pièce opératoire était ferme avec
                                des contours irréguliers (Fig 5). L’examen
                                anatomopathologique de la lésion révélait la
                                présence d’une prolifération tumorale ...</p>
                            <img src="" class="" alt="">
                            <div id="cercle"></div>
                            <div class="namecl">
                                <a>Nikita</a>
                                <p class="lastmin1">inplantologue</p>
                            </div>
                            <div id="cercle-bot1">
                                <img src="../img/dent_bleu_pleine.png" class="card-img" alt="">
                                <a id="cercle-bot3">4.3</a>
                            </div>
                            <div id="cercle-bot2">
                                <img src="../img/logo_chat_bleu.png" class="card-img" alt="">
                                <a id="cercle-bot3">13</a>
                            </div>
                        </div>
                    </div>
                </div>
            </Div>
            <div>
                <div class="column-1">
                    <div class="card" style="width: 20rem;">
                        <div id="cercle-top"><img src="../img/Etoile_Bleu_creuse.png" class="card-img" alt="dev-meme-1"></div>
                        <img src="../img/jack.webp" class="card-img-top" alt="dev-meme-2">
                        <div class="">
                            <div class="barbleu6"><a>fumeur</a></div>
                            <div class="barbleu7"><a>Parodontie</a></div>
                            <div class="barbleu8"><a>Abcés</a></div>
                        </div>
                        <div class="card-body">
                            <title>Abcés parodontal</title>
                            <p class="card-text">Un jeune patient de 38 ans s’était présentéen
                                consultation au service d’Odontologie Chirurgicale
                                du Centre de Consultation et de Traitements
                                Dentaires du CHU Ibn Rochd de Casablanca, pour
                                une tuméfactionendobuccale de la région
                                prémolaire mandibulaire droite...</p>
                            <img src="" class="" alt="">
                            <div id="cercle"></div>
                            <div class="namecl">
                                <a>Mounia</a>
                                <p class="lastmin1">chirurgien-dentiste</p>
                            </div>
                            <div id="cercle-bot1">
                                <img src="../img/dent_bleu_pleine.png" class="card-img" alt="">
                                <a id="cercle-bot3">3.9</a>
                            </div>
                            <div id="cercle-bot2">
                                <img src="../img/logo_chat_bleu.png" class="card-img" alt="">
                                <a id="cercle-bot3">6</a>
                            </div>
                        </div>
                    </div>
                </div>
            </Div>
        </div>

        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <?php
                    include("Overlay_categorie.php");
                    ?>
                </div>
            </div>
        </div>
    </div>


    </div>
</body>

<footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="../Script/Notif.js"></script>
</footer>