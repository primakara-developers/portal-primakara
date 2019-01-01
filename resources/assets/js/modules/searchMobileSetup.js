export default () => {
    if (window.outerWidth <= 530) {
        const navigationBar = document.getElementsByClassName('navigation-bar')[0]
        const searchInput = document.getElementsByClassName('navigation-bar__search-input')[0]
        searchInput.addEventListener('focus', () => {
            navigationBar.classList.add('navigation-bar--search-focus')
        })
        searchInput.addEventListener('blur', () => {
            navigationBar.classList.remove('navigation-bar--search-focus')
        })
    }
}
