class ProductDetail {
    constructor() {
        if(document.querySelector('.product-detail')) {
            this.images = document.querySelectorAll('.product-detail-container .images .small-image');
            this.productImage = document.querySelector('.product-detail-container .product-image img');
            this.animationInProgress = false;
            this.productImage.src = this.images[0].querySelector('img').getAttribute('data-img');

            this.nextBtn = document.querySelector('.product-image-next.buttons');
            this.prevBtn = document.querySelector('.product-image-prev.buttons');

            this.setActive(this.images[0]);
            this.init(); 
        }
    }

    init() {
        this.images.forEach(img => {
            img.addEventListener('click', () => {
                if(!this.animationInProgress){

                    let url = img.querySelector('img').getAttribute('data-img');
                    this.setNewImg(url, img);
                }
            })
        })

        this.nextBtn.addEventListener('click', () => {
            this.nextImg('next');
        });
        this.prevBtn.addEventListener('click', () => {
            this.nextImg('prev')
        })
    }

    nextImg(order) {

        let images = document.querySelectorAll('.product-detail-container .images .small-image');

        if(!this.animationInProgress) {

            let url;
            let activeImg;

            for (let i = 0; i < images.length; i++) {

                if(images[i].classList.contains('active')) {
                    
                    if(order === "next") {

                        if (i + 1 === images.length) {
                            url = images[0].querySelector('img').getAttribute('data-img');
                            activeImg = images[0];
                        } else {
                            url = images[i + 1].querySelector('img').getAttribute('data-img');
                            activeImg = images[i + 1];
                        }

                    } else if(order === 'prev') {

                        if(i - 1 < 0) {
                            url = images[images.length - 1].querySelector('img').getAttribute('data-img');
                            activeImg = images[images.length - 1];
                        } else {
                            url = images[i - 1].querySelector('img').getAttribute('data-img');
                            activeImg = images[i - 1];
                        }
                    }
                    this.setNewImg(url, activeImg);
                    break;
                }
            }
        }
    }

    setNewImg(url, newImg) {
        this.productImage.src = url;
        this.animate();
        this.setActive(newImg)
    }

    animate() {
        this.animationInProgress = true;
        this.productImage.classList.add('animation');
        setTimeout(() => {
            this.productImage.classList.remove('animation');
            this.animationInProgress = false;
        }, 400);
    }

    setActive(newImg) {

        this.images.forEach(img => {
            img.classList.contains('active') && img.classList.remove('active');
        })
        newImg.classList.add('active');
    }
}
export default ProductDetail;