AOS.init();
let slide;

if (window.matchMedia("(max-width: 600px)").matches) {
  slide = 1;
} else if (window.matchMedia("(max-width: 800px)").matches) {
  slide = 2;
} else {
  slide = 3;
}
// } else if (window.matchMedia("(min-width: 1000px)").matches) {
//   slide = 3;
// }

var swiper = new Swiper(".mySwiper", {
  slidesPerView: slide,
  loop: true,
  spaceBetween: 30,
  keyboard: {
    enabled: true,
  },
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
});

//naviagtion toggle

const nav = document.querySelector(".main--navigation");

const checkbox = document.querySelector("#checkbox");

checkbox.addEventListener("click", () => {
  nav.classList.toggle("show");
});

function loaders() {
  let loader = document.querySelector(".loader");
  loader.style.display = "none";
}
setInterval(loaders, 3000);
