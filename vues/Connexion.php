<!DOCTYPE html>
<html lang="en">

<?php include '../Include/Head.php'; ?>

<body>
    <div class="main_container_inscrip">
        <div class="dentiio">
            Dentiio
            <img src="img/logo192.png" alt="">
        </div>
        <div class="container">
            <div class="form_container_inscrip p-4 d-flex flex-column justify-content-center border border-1 rounded-3">
                <h1>Connexion</h1>
                <form action="" method="get">
                    <div class="mb-3">
                        <label for="pseudo1" class="form-label">Pseudo ou Mail</label>
                        <input type="text" name="pseudo1" id="pseudo1" class="form-control" placeholder="Placeholder text...">
                    </div>
                    <div class="mb-3">
                        <label for="mdp1" class="form-label">Mot de passe</label>
                        <input type="text" name="mdp1" id="mdp1" class="form-control" placeholder="Placeholder text..."><br>

                    </div>
                    <button type="submit" class="btn btn-primary">
                        Se Connecter
                    </button>
                    <!-- <input type="submit" value="S'inscrire"> -->
                </form>
                <div class="recommendation">Pas de compte ?
                    <a href="" style="text-decoration: none">Inscrivez-vous</a>
                </div>
            </div>
        </div>

    </div>

</body>

</html>