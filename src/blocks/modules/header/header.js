'use strict'

//burger
window.addEventListener('DOMContentLoaded', () => {
    const menu = document.querySelector('.header__list'),
        menuItem = document.querySelectorAll('.header__link'),
        hamburger = document.querySelector('.header__burger');

    hamburger.addEventListener('click', () => {
        hamburger.classList.toggle('burger_active');
        menu.classList.toggle('menu_active');
    });

    menuItem.forEach(item => {
        item.addEventListener('click', () => {
            hamburger.classList.toggle('burger_active');
            menu.classList.toggle('menu_active');
        })
    })
})

// slowScroll
const anchors = document.querySelectorAll('a[href*="#"]')

for (let anchor of anchors) {
    anchor.addEventListener('click', function (e) {
        e.preventDefault()

        const blockID = anchor.getAttribute('href').substr(1)

        document.getElementById(blockID).scrollIntoView({
            behavior: 'smooth',
            block: 'start'
        })
    })
}



//add class on scroll
document.addEventListener("scroll", (e) => {

    const content = document.querySelector("body");
    let scrolled = document.scrollingElement.scrollTop;
    let position = content.offsetTop;
    let header = document.querySelector("header");

    if (scrolled > position + 50) {
        content.classList.add('header-bgc');
    } else {
        content.classList.remove('header-bgc');
        content.classList.add('header-none-bgc');
    }
});