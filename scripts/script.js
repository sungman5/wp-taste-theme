

// mobile-menu

const btnMenuOpen = document.querySelector('.mobile_nav_open');
const mobileNav = document.querySelector('.mobile_nav')
const btnMenuClose = document.querySelector('.mobile_nav_close');

btnMenuOpen.addEventListener('click', () => {
    document.body.classList.add('opend_menu')
    mobileNav.style.transition = '0.5s';    
    mobileNav.style.transform = 'translateX(0)';
})

btnMenuClose.addEventListener('click', () => {
    document.body.classList.remove('opend_menu')
    mobileNav.style.transition = '0.1s';
    mobileNav.style.transform = 'translateX(-100%)';
})