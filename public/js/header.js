const ul = document.querySelector("header ul")

function changeMenu() {
  //console.log(screen.width)
  if (screen.width <= 370) {
    ul.classList.add("flex-column")
  } else {
    ul.classList.remove("flex-column")
  }
  //console.log("Ejecutado")
}

changeMenu()

window.addEventListener("resize", changeMenu)