const menuBTN = document.getElementById("menubtn");
const menuContainer = document.getElementById("menucontainer");
const menuClose = document.getElementById("menuclose");

menuBTN.addEventListener("click", toggleMenu);
menuClose.addEventListener("click", closeMenu);

function toggleMenu(event) {
    event.stopPropagation(); // Hentikan penyebaran klik
    menuContainer.classList.toggle("hidden");
    menuContainer.classList.toggle("lg:hidden");
}

function toggleSidebar(context) {
    context = document.getElementById(context);
    if (
        context.classList.contains("hidden") ||
        context.classList.contains("lg:hidden")
    ) {
        context.classList.remove("hidden");
        context.classList.remove("lg:hidden");
    } else {
        context.classList.add("hidden");
        context.classList.add("lg:hidden");
    }
}

function To(context) {
    window.location.replace(context);
}

function closeMenu() {
    menuContainer.classList.add("hidden");
    menuContainer.classList.add("lg:hidden");
}

function closeAlert(alert) {
    let AlertContainer = document.getElementById(alert);
    AlertContainer.classList.add("hidden");
    AlertContainer.classList.add("lg:hidden");
}

function konfirmasi(massage) {
    return confirm(massage);
}
