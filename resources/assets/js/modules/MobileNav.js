class MobileNav {
    constructor() {
        this.mobileNav = document.querySelector('.mobile-nav')
    }

    open() {
        this.mobileNav.classList.add('mobile-nav--open')
    }
}

export default MobileNav
