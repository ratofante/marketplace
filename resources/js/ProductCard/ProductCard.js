// import Swiper JS
import Swiper, { Navigation } from 'swiper';
import Bowser from 'bowser';

// import Swiper and modules styles
import 'swiper/css';
import 'swiper/css/navigation';

class ProductCard {
    constructor() {
        this.cards = document.querySelectorAll('.product-card-img');
        this.platform = window.browser.getPlatformType();
        this.init();
    }

    init() {
        if(this.platform === 'desktop') {
            if(this.cards.length > 0) {
                this.cards.forEach(card => {
                    new Swiper(card, {
    
                        modules: [Navigation],
                    
                        // Optional parameters
                        speed: 750,
                        spaceBetween: 0,
                        slidesPerView: 1,
                        spaceBetween: 0,
                    
                        // Navigation arrows
                        navigation: {
                            nextEl: '.product-card-button-next',
                            prevEl: '.product-card-button-prev',
                        },
                    
                    });
                })
            }
        } 
    }
}

export default ProductCard;