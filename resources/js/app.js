require('./bootstrap');

import Bowser from 'bowser';
import swal from 'sweetalert';

// Import Swiper
import Swiper, { Navigation, Pagination, Autoplay } from 'swiper';
// import Swiper and modules styles
import 'swiper/css';
import 'swiper/css/navigation';
import 'swiper/css/pagination';

// Site Components
import NavMenu from './NavMenu/NavMenu';
import ProductCard from './ProductCard/ProductCard';
import NavOnScroll from './NavOnScroll/NavOnScroll';
import ProductDetail from './ProductDetail/ProductDetail'
import Accordion from './Accordion/Accordion';
import RangeSlider from './RangeSlider/RangeSlider';
import Cookies from './Cookies/Cookies';
import Subscribe from './Subscribe/Subscribe';
import ProductMenu from './ProductMenu/ProductMenu';
import Select from './Select/Select';
import MySwiper from './mySwiper/mySwiper';

window.browser = Bowser.getParser(window.navigator.userAgent);
document.querySelector('html').setAttribute('data-device', window.browser.getPlatformType());

const swiperHero = new Swiper('.swiper-hero', {

    modules: [Navigation, Pagination, Autoplay],

    loop: true,
    speed: 1500,
    spaceBetween: 0,
    navigation: {
        nextEl: '.swiper-hero-button-next',
        prevEl: '.swiper-hero-button-prev',
    },
    scrollbar: {
        el: '.swiper-hero-scrollbar',
    },
    // autoplay: {
    //     delay: 5000,
    // }

});

const swiperBrands = new Swiper('.swiper-brands', {

    modules: [Navigation, Pagination, Autoplay],

    loop: true,
    speed: 500,
    navigation: {
        nextEl: '.swiper-brands-button-next',
        prevEl: '.swiper-brands-button-prev',
    },
    scrollbar: {
        el: '.swiper-brands-scrollbar',
    },
    slidesPerView: 1.3,
    centeredSlides: true,
    spaceBetween: 25,
    breakpoints: {
        500: {
            slidesPerView: 2,
            spaceBetween: 15,
        },
        900: {
            slidesPerView: 3,
            spaceBetween: 20,
        },
        1500: {
            slidesPerView: 4,
            spaceBetween: 30,
        },
    },
    autoplay: {
        delay: 2000,
        pauseOnMouseEnter: true,
        deisableOnInteraction: false,
    }
});

const swiperBanner = new Swiper('.swiper-banner', {

    modules: [Autoplay],

    speed: 500,
    slidesPerView: 1,
    spaceBetween: 0,
    breakpoints: {
        500: {
            slidesPerView: 2,
            spaceBetween: 15,
        },
        900: {
            slidesPerView: 3,
            spaceBetween: 20,
        },
    },
    autoplay: {
        delay: 5000,
    }
});

const swiperSolicitados = new Swiper('.product-slider', {

    modules: [Navigation, Pagination, Autoplay],

    loop: true,
    speed: 1500,
    slidesPerView: 2,
    spaceBetween: 10,
    navigation: {
        nextEl: '.swiper-product-slider-button-next',
        prevEl: '.swiper-product-slider-button-prev',
    },
    breakpoints: {
        530: {
            slidesPerView: 3,
            spaceBetween: 15,
        },
        998: {
            slidesPerView: 4,
            spaceBetween: 20,
        }
    },

});

const navMenu = new NavMenu();
const select = new Select();
const productCard = new ProductCard();
const navOnScroll = new NavOnScroll();
const productDetail = new ProductDetail();
const productMenu = new ProductMenu();
const accordion = new Accordion();
const rangeSlider = new RangeSlider();
const cookies = new Cookies();
const subscribe = new Subscribe();
const mySwiper = new MySwiper();
