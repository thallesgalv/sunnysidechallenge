function handleMenu() {
  if (document.querySelector("header .routes"))
    document.querySelector("header .routes").classList.toggle("active");
}

function handleScroll() {
  if (window.pageYOffset !== 0) {
    document.querySelector("header").classList.add("active");
  } else {
    document.querySelector("header").classList.remove("active");
  }
}

if (document.querySelector(".menuHamburguer"))
  document
    .querySelector(".menuHamburguer")
    .addEventListener("click", handleMenu);

window.addEventListener("scroll", handleScroll);
