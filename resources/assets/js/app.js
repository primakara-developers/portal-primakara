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
