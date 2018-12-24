import MobileNav from './modules/MobileNav'

const mobileNav = new MobileNav()

const menuMobileIcon = document.querySelector('.site-header__menu-mobile-icon')
menuMobileIcon.addEventListener('click', e => {
    mobileNav.open()
})

const closeButton = document.querySelector('.mobile-nav__close-button')
closeButton.addEventListener('click', e => {
    mobileNav.close()
})

window.addEventListener('click', e => {
    // If click event is OUTSIDE '.mobile-nav' and '.site-header__menu-mobile-icon' content
    if (!document.querySelector('.mobile-nav').contains(e.target) && !menuMobileIcon.contains(e.target)) {
        if (mobileNav.isOpen()) {
            mobileNav.close()

            // If the clicked item was an <a> element. Prevent default behavior
            e.preventDefault()
        }
    }
})
