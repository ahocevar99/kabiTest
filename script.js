function showMobileNav() {
    const navMobile = document.querySelector('.navigation-mobile');
    navMobile.style.display='flex'
}

function closeMobileNav() {
    const navMobile = document.querySelector('.navigation-mobile');
    navMobile.style.display='none'
}

function toggleNavigation() {
    const navDesktop = document.querySelector('.navigation-desktop');
    const navMobileMenu = document.querySelector('.navigation-mobile-menu');

    console.log(window.innerWidth)

    if (window.innerWidth < 870) {
        navDesktop.style.display = 'none';
        navMobileMenu.style.display = 'flex';
    } else {
        navDesktop.style.display = 'grid';
        navMobileMenu.style.display = 'none';
        closeMobileNav()
    }
}

document.addEventListener('keydown', (e) => {
    if (e.key === 'Escape') {
        closeMobileNav();
    }
});

window.addEventListener('DOMContentLoaded', toggleNavigation);
window.addEventListener('resize', toggleNavigation);