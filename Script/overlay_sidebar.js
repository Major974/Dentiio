function openNav() {
    document.getElementById("myNav").style.width = "20vw";
    document.getElementsByClassName('main_container_bla')[0].style.opacity = "50%";
}

function closeNav() {
    document.getElementById("myNav").style.width = "0%";
    document.getElementsByClassName('main_container_bla')[0].style.opacity = "100%"
}