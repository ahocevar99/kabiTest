function showMobileNav() {
    const navMobile = document.querySelector('.navigation-mobile');
    navMobile.style.display = 'flex'

    gsap.set(navMobile, { x: '100%' });
    gsap.to(navMobile, {
        duration: 0.5,
        x: 0,
        ease: 'power3.out'
    });
}

function closeMobileNav() {
    const navMobile = document.querySelector('.navigation-mobile');
    gsap.to(navMobile, {
        duration: 0.4,
        x: '100%',
        ease: 'power3.in',
        onComplete: () => {
            navMobile.style.display = 'none';
        }
    });
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