// EVENT LISTENERS
$("#hamburger").on("click", toggleMenu);

// EVENT FUNCTIONS
function toggleMenu() {
    $(".menu").slideToggle();
}