<!-- C'EST UN FICHIER TEST



MERCI DE NE PAS L'UTILISER-->



<body>

    <div id="myNav" class="overlay">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <div class="overlay-content">


            <div>

                <div class="main_container_categorie d-flex flex-row">

                    <div class="cat_container d-flex flex-column  p-2">
                        <div class="category_button p-2">Pathologie
                            <img src="/img/outline_arrow_forward_ios_black_24dp.png" style="float:right">
                        </div>
                        <div class="category_button p-2">Traitement
                            <img src="/img/outline_arrow_forward_ios_black_24dp.png" style="float:right" style="float:right" alt="">
                        </div>
                        <div class="category_button p-2">Spécialité
                            <img src="/img/outline_arrow_forward_ios_black_24dp.png" style="float:right" alt="">
                        </div>
                        <div class="category_button p-2">Anatomie
                            <img src="/img/outline_arrow_forward_ios_black_24dp.png" style="float:right" alt="">
                        </div>
                    </div>
                    <div class="opacity_container bd-highlight flex-grow-1">
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

</body>

</html>