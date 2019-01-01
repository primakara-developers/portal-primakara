const handleCategoryCollapse = () => {
    const categoryCollapseButton = document.getElementsByClassName('navigation-bar__category-collapse-button')[0]
    const categoryCollapse = document.getElementsByClassName('navigation-bar__category--collapse')[0]
    categoryCollapseButton.addEventListener('click', () => {
        if (categoryCollapse.style.height) {
            categoryCollapse.removeAttribute('style')

            categoryCollapseButton.classList.remove('navigation-bar__category-collapse-button--active')
        } else {
            const categoryCollapseHeight = categoryCollapse.scrollHeight
            categoryCollapse.style.height = categoryCollapseHeight + 'px'

            categoryCollapseButton.classList.add('navigation-bar__category-collapse-button--active')
        }
    })

    window.addEventListener('click', e => {
        if (!categoryCollapse.contains(e.target) && !categoryCollapseButton.contains(e.target)) {
            if (categoryCollapse.style.height) {
                categoryCollapse.removeAttribute('style')

                categoryCollapseButton.classList.remove('navigation-bar__category-collapse-button--active')

                e.preventDefault()
            }
        }
    })
}

export default () => {
    const category = document.getElementsByClassName('navigation-bar__category')[0]
    const categoryList = document.getElementsByClassName('navigation-bar__category-list')[0]

    if (categoryList.offsetWidth > category.offsetWidth) {
        category.classList.add('navigation-bar__category--collapse')
        handleCategoryCollapse()
    }
}
