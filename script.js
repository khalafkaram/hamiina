//menu//
const nav = document.querySelector(".mobile-nav"),
  navMenuBtn = document.querySelector(".nav-menu-btn"),
  navCloseBtn = document.querySelector(".nav-close-btn");

const navToggleFunc = () => nav.classList.toggle("active");
navMenuBtn.addEventListener("click", navToggleFunc);
navCloseBtn.addEventListener("click", navToggleFunc);

const themeBtn = document.querySelectorAll(".theme-btn");
//dark annd light theme//
for (let i = 0; i < themeBtn.length; i++) {
    themeBtn[i].addEventListener("click", function () {
      document.body.classList.toggle("light-theme");
      document.body.classList.toggle("dark-theme");
  
      for (let j = 0; j < themeBtn.length; j++) {
        themeBtn[j].classList.toggle("light");
        themeBtn[j].classList.toggle("dark");
      }
    });
  }
//back to top//
button = document.getElementById("topo");
 
window.onscroll = function() {scrollFunction()};
 
function scrollFunction() {
  if (document.body.scrollTop >80 || document.documentElement.scrollTop > 80) {
    button.style.display = "block";
  } 
  else {
    button.style.display = "none";
}
  }
function topfun() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}
function tous() {
  document.documentElement.scrollTop = 200;
}
