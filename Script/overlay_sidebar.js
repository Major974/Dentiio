function openNav() {
    document.getElementById("myNav_cat").style.width = "25vw";
    document.getElementsByClassName('main_container_bla')[0].style.opacity = "70%";
}

function closeNav() {
    document.getElementById("myNav_cat").style.width = "0%";
    document.getElementsByClassName('main_container_bla')[0].style.opacity = "100%"
}

function go_to_path() {
    document.getElementById("myNav_cat").style.width = "0%";
    document.getElementById("myNav_path").style.width = "25vw";
}