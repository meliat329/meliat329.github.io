// When the user scrolls the page, execute myFunction
window.onscroll = function () { myFunction() };

// Get the header
var header = document.getElementById("myMenuBar");

// Get the offset position of the navbar
var sticky = header.offsetTop;

// Add the sticky class to the header when you reach its scroll position. Remove "sticky" when you leave the scroll position
function myFunction() {
    if (window.pageYOffset > sticky) {
        header.classList.add("sticky");
    } else {
        header.classList.remove("sticky");
    }
}

var x = 0;

function scrollHome() {
    window.scrollTo(0, 0);
    x = 0;
}

var aboutPos = document.getElementById("about");
var nav = document.getElementById("myMenuBar");

function scrollAbout() {
    if (x == 0) {
        window.scrollTo(0, (aboutPos.offsetTop - nav.offsetHeight));
        x += 1;
    }
    else {
        window.scrollTo(0, aboutPos.offsetTop);
    }
}

var academPos = document.getElementById("academics");
function scrollAcademics() {
    if (x == 0) {
        window.scrollTo(0, (academPos.offsetTop - nav.offsetHeight));
        x += 1;
    }
    else {
        window.scrollTo(0, academPos.offsetTop);
    }
}

var expPos = document.getElementById("experience");
function scrollExperience() {
    if (x == 0) {
        window.scrollTo(0, (expPos.offsetTop - nav.offsetHeight));
        x += 1;
    }
    else {
        window.scrollTo(0, expPos.offsetTop);
    }
}

var contPos = document.getElementById("contact");
function scrollContact() {
    if (x == 0) {
        window.scrollTo(0, (contPos.offsetTop - nav.offsetHeight));
        x += 1;
    }
    else {
        window.scrollTo(0, contPos.offsetTop);
    }
}

var frmvalidator = new Validator("contactform");
frmvalidator.addValidation("name", "req", "Please provide your name");
frmvalidator.addValidation("email", "req", "Please provide your email");
frmvalidator.addValidation("email", "email", "Please enter a valid email address");
