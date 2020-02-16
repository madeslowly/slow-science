navbar = document.querySelector('nav');
brand = document.querySelector('.logo');

function navBarScroll() {
  if (window.pageYOffset != 0) {
    navbar.classList.add('nav-scrolled');
    brand.setAttribute("height", "40px");
  } else {
    navbar.classList.remove('nav-scrolled');
    brand.setAttribute("height", "80px"); } }

// load nav color if reloading and pageYOffset != 0
window.onload = function() { navBarScroll() };

window.onscroll = function() { navBarScroll() };
