
// PARALLAX ON LANDING PAGE
let bg = document.getElementById("bg");
let moon = document.getElementById("moon");
let text = document.getElementById("text");

window.addEventListener('scroll', function () {
    var value = window.scrollY;

    bg.style.top = value * 0.5 + 'px';
    moon.style.left = value * 2.80 + 'px';

    if (document.body.scrollTop > 580 || document.documentElement.scrollTop > 580) {
        text.style.fontSize = "25px";

    } else {
        text.style.top = value * 0.45 + 'px';
        text.style.fontSize = 70 - +window.pageYOffset / 13 + 'px';
    }
})