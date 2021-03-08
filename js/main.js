let openMenu = document.querySelector('.open')
let hiddenMenu = document.querySelector('.hiddenNav')

openMenu.addEventListener('click', () => {
    if (hiddenMenu.style.display !== "block") {
        hiddenMenu.style.display = "block"
    } else {
        hiddenMenu.style.display = "none"
    }
})