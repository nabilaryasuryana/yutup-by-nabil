const menuBTN = document.getElementById("menubtn");
const menuContainer = document.getElementById("menucontainer");
const menuClose = document.getElementById("menuclose");

menuBTN.addEventListener('click', toggleMenu);
menuClose.addEventListener('click', closeMenu);

function toggleMenu(event) {
    event.stopPropagation(); // Hentikan penyebaran klik
    menuContainer.classList.toggle("hidden");
    menuContainer.classList.toggle("lg:hidden");
}

function closeMenu() {
    menuContainer.classList.add("hidden");
    menuContainer.classList.add("lg:hidden");
}
