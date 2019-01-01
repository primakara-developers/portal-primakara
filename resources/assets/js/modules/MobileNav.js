class MobileNav {
    constructor() {
        this.mobileNav = document.querySelector('.mobile-nav')
    }

    open() {
        this.mobileNav.classList.add('mobile-nav--open')
    }

    close() {
        this.mobileNav.classList.remove('mobile-nav--open')
    }

    isOpen() {
        return this.mobileNav.classList.contains('mobile-nav--open')
    }
}

export default MobileNav
