//the button
let mybutton = document.getElementById("btn-back-to-top");

window.onscroll = function () {
     if (window.innerWidth > 554) {
         scrollFunction();
     }
};

function scrollFunction() {
  if (
    document.body.scrollTop > 30 ||
    document.documentElement.scrollTop > 30
  ) {
    mybutton.style.display = "flex";
  } else {
    mybutton.style.display = "none";
  }
}
// clicks on the button
mybutton.addEventListener("click", backToTop);

function backToTop() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}