<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="assets/main.css">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="assets/style.css">
    <link rel="stylesheet" href="Styles/NavStyle.css">

</head>
<?php
include("vues/NavBar.php");
?>

<body>
    <div>
        <div class="LEBLOCK">

        </div>

        <div class="main_container_categorie d-flex flex-row">

            <div class="d-flex flex-column  p-2 " style="height:90vh; width:20vw">
                <div class="category_button p-2">Pathologie</div>
                <div class="category_button p-2">Traitement ></div>
                <div class="category_button p-2">Spécialité ></div>
                <div class="category_button p-2">Anatomie ></div>
            </div>
            <div class="opacity_container bd-highlight flex-grow-1" style="width:50vw;">
            </div>
        </div>
    </div>
</body>

</html>