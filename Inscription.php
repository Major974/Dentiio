<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="assets/style.css">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


</head>

<body>
    <div class="main_container_inscrip">
        <div class="dentiio">
            Dentiio
            <img src="assets/base_assets/logo192.png" height="93px" alt="">
        </div>
        <div class="container">
            <div class="form_container_inscrip p-4 d-flex flex-column justify-content-center border border-1 rounded-3">
                <h1>Inscription</h1>
                <form action="" method="get">
                    <div class="mb-3">
                        <label for="pseudo1" class="form-label">Pseudo</label>
                        <input type="text" name="pseudo1" id="pseudo1" placeholder="Placeholder text...">
                    </div>
                    <div class="mb-3">
                        <label for="email1" class="form-label">Email</label>
                        <input type="email" name="email1" id="email1" placeholder="Placeholder text...">
                    </div>
                    <div class="mb-3">
                        <label for="pet-select" class="form-label">Vous êtes</label>
                        <select class="form-select" name="job" id="pet-select">
                            <option value="">--Please choose an option--</option>
                            <option value="dentiste">Dentiste</option>
                            <option value="etudiant">Etudiant</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="mdp1" class="form-label">Mot de passe</label>
                        <input type="text" name="mdp1" id="mdp1" placeholder="Placeholder text..."><br>
                        <div id="mdp1Help" class="form-text">We'll never share your email with anyone else.</div>

                    </div>
                    <button type="submit" class="btn btn-primary">
                        S'inscrire
                    </button>
                    <!-- <input type="submit" value="S'inscrire"> -->
                </form>
                <div class="recommendation">aaaaaaa</div>
            </div>
        </div>

    </div>

</body>

</html>