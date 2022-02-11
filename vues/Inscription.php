<!DOCTYPE html>
<html lang="en">

<?php include '../Include/Head.php'; ?>


<body>
    <div class="main_container_inscrip">
        <div class="dentiio">
            Dentiio
            <img src="img/logo192.png" height="93px" alt="">
        </div>
        <div class="container">
            <div class="form_container_inscrip p-4 d-flex flex-column justify-content-center border border-1 rounded-3">
                <h1>Inscription</h1>
                <form action="" method="get">
                    <div class="mb-3">
                        <label for="pseudo1" class="form-label">Pseudo</label>
                        <input type="text" name="pseudo1" id="pseudo1" class="form-control" placeholder="Placeholder text...">
                    </div>
                    <div class="mb-3">
                        <label for="email1" class="form-label">Email</label>
                        <input type="email" name="email1" id="email1" class="form-control" placeholder="Placeholder text...">
                    </div>
                    <div class="mb-3">
                        <label for="pet-select" class="form-label">Vous êtes</label>
                        <select class="form-select" name="job" id="pet-select">
                            <option value="">--Choisissez une option--</option>
                            <option value="dentiste">Dentiste</option>
                            <option value="etudiant">Etudiant</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="mdp1" class="form-label">Mot de passe</label>
                        <input type="text" name="mdp1" id="mdp1" class="form-control" placeholder="Placeholder text..."><br>
                        <div id="mdp1Help" class="form-text">We'll never share your email with anyone else.</div>

                    </div>
                    <button type="submit" class="btn btn-primary">
                        S'inscrire
                    </button>
                    <!-- <input type="submit" value="S'inscrire"> -->
                </form>
                <div class="recommendation">Déjà un compte ?
                    <a href="" style="text-decoration: none">Connectez-vous</a>
                </div>
            </div>
        </div>

    </div>

</body>

</html>