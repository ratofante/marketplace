class NavMenu  {

    constructor() {

        this.links = document.querySelectorAll('.category-link');
        this.categories = document.querySelectorAll('.nav-menu-section');

        this.menuBtn = document.querySelector('.box-user-menu .menu-btn');
        this.mobileMenu = document.querySelector('.mobile-nav-menu');
        this.searchBtn = document.querySelector('.box-user-menu .search');

        this.init();
    }

    init() {
        this.mouseOverLink();
        this.toggleNavMenu();
        this.checkForCloseMenu();
        this.showSearchBar();

        this.menuBtn.addEventListener('click', () => {
            this.mobileToogle();
        });

        window.addEventListener('resize', () => {
            if(window.innerWidth > 1200) {
                this.mobileMenu.classList.contains('visible') && this.mobileToogle();
            }
        })
    }
    
    mouseOverLink() {
        this.links.forEach(link => {
            link.addEventListener('mouseover', () => {
                
                let isFilter = link.classList.contains('filter');

                if(isFilter) {
                    let filter = link.getAttribute('data-category');

                    this.categories.forEach(category => {
                        if(category.getAttribute('data-section') === filter) {

                            this.removeVisible();
                            category.classList.add('visible');
                        }
                    })
                    this.removeHover();
                    link.classList.add('hover');

                } else {
                    //Inicio || Contacto => cerramos menu. 
                    document.querySelector('.nav-menu').classList.remove('visible');
                    this.removeHover();
                } 
            })
        })
    }

    removeVisible() {
        this.categories.forEach(category => {
            if(category.classList.contains('visible')){
                category.classList.remove('visible');
            }
        })
    }

    removeHover() {
        this.links.forEach(link => {
            link.classList.contains('hover') && link.classList.remove('hover');
        })
    }

    checkForCloseMenu() {
        document.querySelector('.navigation').addEventListener('mouseleave', () => {
            this.removeHover();
            document.querySelector('.nav-menu').classList.remove('visible');
        })
    }

    toggleNavMenu() {
        document.querySelector('.category-list-ext').addEventListener('mouseover', () => {
            document.querySelector('.nav-menu').classList.add('visible');
        })

    }

    showSearchBar() {
        /**
         * Sadly, you should check NavOnScroll.hideNav() method
         * when you make changes here.
         */
        this.searchBtn.addEventListener('click', () => {
            this.searchBtn.classList.toggle('search-active');
            document.querySelector('.nav-main .box-search').classList.toggle('show');
            document.querySelector('.nav-mobile-bg').classList.toggle('search-active');
            document.querySelector('.mobile-nav-menu-menu').classList.toggle('search-active');
        })
    }

    mobileToogle() {
        this.mobileMenu.classList.toggle('visible');
        this.menuBtn.classList.toggle('close');
    }

}

export default NavMenu;