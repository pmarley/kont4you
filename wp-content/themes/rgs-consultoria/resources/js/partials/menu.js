export default function menu() {
    const menu = document.querySelector('.menu');
    const menuButton = document.querySelector('.menu-button');
    const menuClose = document.querySelector('.menu-close');
    
    menuButton.addEventListener('click', () => {
        menu.classList.toggle('menu-active');
    });

    menuClose.addEventListener('click', () => {
        menu.classList.toggle('menu-active');
    })
}