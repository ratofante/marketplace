class ProductMenu {
    constructor() {
        if(document.querySelector('.filters-bar-toggle')){
            this.mainBtn = document.getElementById('filters-toggle');
            this.closeBtn = document.querySelector('.close-filter-menu');
            this.menu = document.querySelector('.products-menu');
            
            this.menu.classList.remove('open');

            this.init();
            this.resize();
        }
    }

    init() {
        [this.mainBtn, this.closeBtn].forEach(btn => {
            btn.addEventListener('click', () => {
                this.menu.classList.toggle('open');
            })
        }) 
    }

    resize() {
        window.addEventListener('resize', () => {
            if(window.innerWidth > 1200) {
                this.menu.classList.remove('open');
            }
        })
    }
}

export default ProductMenu;