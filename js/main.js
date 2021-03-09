let openMenu = document.querySelector('.open')
let hiddenMenu = document.querySelector('.hiddenNav')

openMenu.addEventListener('click', () => {
    if (hiddenMenu.style.display !== "block") {
        hiddenMenu.style.display = "block"
    } else {
        hiddenMenu.style.display = "none"
    }
})

// menu activation
let urlString = document.location.href
console.log(urlString)
let urlArray = urlString.split('/')
console.log(urlArray)
let pageHREF = urlArray[urlArray.length-1]
console.log(pageHREF)
let menu = document.querySelectorAll('.normalNav .li a')
console.log(menu)
let mobileMenu = document.querySelectorAll('.hiddenNav .li a')
console.log(mobileMenu)

let matchfound = false

for (let item of menu) {
    let currentURL = item.getAttribute('href')
    console.log(`${currentURL} === ./${pageHREF}`)
    if (currentURL === './' + pageHREF) {
        console.log('match!')
        item.parentNode.className = 'li active'
        matchfound = true
    } else {
        console.log('no match')
        item.parentNode.className = 'li'
    }
}

for (let item of mobileMenu) {
    let currentURL = item.getAttribute('href')
    console.log(`${currentURL} === ./${pageHREF}`)
    if (currentURL === './' + pageHREF) {
        console.log('match!')
        item.parentNode.className = 'li active'
        matchfound = true
    } else {
        console.log('no match')
        item.parentNode.className = 'li'
    }
}

if (!matchfound) {
    menu[0].parentNode.className = 'li active'
    mobileMenu[0].parentNode.className = 'li active'
}