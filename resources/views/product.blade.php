<x-layout>
@php
$destacadosMujer = array(
    array(
        "logo" => "images/app/dummy_data/logos/logo_ck.png",
        "brand" => "Calvin Klein",
        "tagname" => "",
        "productImages" => array(
            "images/app/dummy_data/productos/vestido-color-1.jpg",
            "images/app/dummy_data/productos/vestido-color-2.jpg",
            "images/app/dummy_data/productos/vestido-color-3.jpg",
        ),
        "target" => "Mujer",
        "category" => "Vestidos",
        "name" => "Vestido rojo floreado, summer sale",
        "oldPrice" => "18,990",
        "price" => "17,990",
    ),
    array(
        "logo" => "images/app/dummy_data/logos/logo_zara.png",
        "brand" => "Zara",
        "tagname" => "",
        "productImages" => array(
            "images/app/dummy_data/productos/vestido-blanco-1.jpg",
            "images/app/dummy_data/productos/vestido-blanco-2.jpg",
            "images/app/dummy_data/productos/vestido-blanco-3.jpg",
            "images/app/dummy_data/productos/vestido-blanco-4.jpg",
        ),
        "target" => "Mujer",
        "category" => "Vestidos",
        "name" => "Exotic Fiber, vestido seda floreado",
        "oldPrice" => "22,590",
        "price" => "21,990",
    ),
    array(
        "logo" => "images/app/dummy_data/logos/logo_lacoste.png",
        "brand" => "Lacoste",
        "tagname" => "",
        "productImages" => array(
            "images/app/dummy_data/productos/cartera-1.jpg",
            "images/app/dummy_data/productos/cartera-2.jpg",
            "images/app/dummy_data/productos/cartera-3.jpg",
        ),
        "target" => "Mujer",
        "category" => "Cartera",
        "name" => "Cartera shiny delux",
        "oldPrice" => "",
        "price" => "16,299",
    ),
    array(
        "logo" => "images/app/dummy_data/logos/logo_hm.png",
        "brand" => "H&M",
        "tagname" => "",
        "productImages" => array(
            "images/app/dummy_data/productos/vestido-beige-1.jpg",
            "images/app/dummy_data/productos/vestido-beige-2.jpg",
            "images/app/dummy_data/productos/vestido-beige-3.jpg",
            "images/app/dummy_data/productos/vestido-beige-4.jpg",
        ),
        "target" => "Mujer",
        "category" => "Vestidos",
        "name" => "Vestido party fiesta, beige, 99% algodón",
        "oldPrice" => "",
        "price" => "25,990",
    ),
    array(
        "logo" => "images/app/dummy_data/logos/logo_miracle.webp",
        "brand" => "Miracle",
        "tagname" => "",
        "productImages" => array(
            "images/app/dummy_data/productos/tacos-1.jpg",
            "images/app/dummy_data/productos/tacos-2.jpg",
            "images/app/dummy_data/productos/tacos-3.jpg",
            "images/app/dummy_data/productos/tacos-4.jpg",
            "images/app/dummy_data/productos/tacos-5.jpg",
        ),
        "target" => "Hombre",
        "category" => "Remeras",
        "name" => "Vestido blanquiazul fiesta",
        "oldPrice" => "",
        "price" => "20,090",
    ),
);
@endphp

    <section class="product-hero">
        <div class="container-boxed">
            <div class="hero-container">
                @php
                    echo file_get_contents('images/app/product/product-hero.svg');
                @endphp
                <img src="{{ asset('images/app/product/product-hero-bg.jpg') }}" alt="">
            </div>
        </div>
    </section>

    <section class="product-detail">
        <div class="container-boxed">
            <div class="breadcrumps">
                <span class="crump section">
                    <span>/&nbsp;</span>Marcas
                </span>
                <span class="crump brand">
                    <span>/&nbsp;</span>Saint Josua
                </span>
                <span class="crump target">
                    <span>/&nbsp;</span>Mujer
                </span>
                <span class="crump category">
                    <span>/&nbsp;</span>Jeans
                </span>
            </div>
            <div class="product-detail-container">
                <div class="images">
                     <div class="small-image">
                        <img src="./images/app/product/detail-1.jpg" alt="" data-img="./images/app/product/detail-1.jpg">
                     </div>
                     <div class="small-image">
                        <img src="./images/app/product/detail-2.jpg" alt="" data-img="./images/app/product/detail-2.jpg">
                     </div>
                     <div class="small-image">
                        <img src="./images/app/product/detail-3.jpg" alt="" data-img="./images/app/product/detail-3.jpg">
                     </div>
                     <div class="small-image">
                        <img src="./images/app/product/detail-4.jpg" alt="" data-img="./images/app/product/detail-4.jpg">
                     </div>
                     <div class="small-image">
                        <img src="./images/app/product/detail-1.jpg" alt="" data-img="./images/app/product/detail-1.jpg">
                     </div>
                     <div class="small-image">
                        <img src="./images/app/product/detail-2.jpg" alt="" data-img="./images/app/product/detail-2.jpg">
                     </div>
                </div>
                <div class="product-image">
                    <div class="product-image-container">
                        <img src="" alt="">
                        <div class="product-image-next buttons">
                            @php
                                echo file_get_contents('images/app/arrow-head-right.svg');
                            @endphp
                        </div>
                        <div class="product-image-prev buttons">
                            @php
                                echo file_get_contents('images/app/arrow-head-left.svg');
                            @endphp
                        </div>
                    </div>
                </div>
                <div class="details">
                    <div class="details-header">
                        <div class="details-header-info">
                            <h3 class="title">Saint Josua</h3>
                            <span class="tagname">Jean Lightblue Broken</span>
                            <span class="price">$2,580</span>
                        </div>
                        <div class="details-header-buttons">
                            <button class="product-like">
                                @php
                                    echo file_get_contents('images/app/product-card/btn-like.svg');
                                @endphp
                            </button>
                            <button class="product-share">
                                @php
                                    echo file_get_contents('images/icons/btn-share.svg');
                                @endphp
                            </button>
                        </div>
                    </div>
                    <div class="details-sizes">
                        <div class="available">
                            <span class="tagname">Talles disponibles</span>
                            <span class="size">
                                &nbsp;24&nbsp;<span>-</span>
                            </span>
                            <span class="size">
                                &nbsp;26&nbsp;<span>-</span>
                            </span>
                        </div>
                        <button class="btn-simple guide">
                            Guía de talles
                        </button>
                    </div>
                    <div class="details-whatsapp">
                        <button class="btn-primary">
                            consultar por whatsapp
                            <span>
                                @php
                                    echo file_get_contents('images/app/whatsapp.svg');
                                @endphp
                            </span>
                        </button>
                    </div>
                    <div class="details-detail">
                        <span class="details-detail-header">detalle del producto</span>
                        <p class="details-detail-info">
                            Chupín tiro alto en tejido de alto peso y mucha suavidad y elastizada. Esos jeans que modelan. Un básico.
                        </p>
                    </div>
                    <div class="details-info">
                        <span class="tagname">información</span>
                        <div class="details-info-container">
                            <div class="product-data">
                                <span class="product-data-type">Composición</span>
                                <p>98% algodón - 2% elastano</p>
                            </div>
                            <div class="product-data">
                                <span class="product-data-type">Corte</span>
                                <p>Chupin</p>
                            </div>
                            <div class="product-data">
                                <span class="product-data-type">Tiro</span>
                                <p>Alto</p>
                            </div>
                            <div class="product-data">
                                <span class="product-data-type">Bolsillos</span>
                                <p>Cuatro</p>
                            </div>
                            <div class="product-data">
                                <span class="product-data-type">Color</span>
                                <p>Celeste</p>
                            </div>
                            <div class="product-data">
                                <span class="product-data-type">Código artículo</span>
                                <p>ST158AT74EYRAR</p>
                            </div>
                            <div class="details-type">
                                <span class="tagname">Compra</span>
                                <p>Mayorista</p>
                            </div>
                        </div>
                    </div>
                    <div class="details-tags">
                        <div class="details-tags-title">Tags</div>
                        <div class="details-tags-tag">
                            <span>Mujer</span>
                        </div>
                        <div class="details-tags-tag">
                            <span>Jeans</span>
                        </div>
                        <div class="details-tags-tag">
                            <span>Skinny</span>
                        </div>
                        <div class="details-tags-tag">
                            <span>Tiro Alto</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="product-slider-brands">
        <div class="container-boxed">

            <!-- Slider main container -->
            <div class="product-slider">

                <!-- If we need navigation buttons -->
                <div class="swiper-top">
                    <h3 class="title-product-slider">Mujer - Prendas más solicitadas</h3>
                    <div class="swiper-top-btn desktop">
                        <div class="btn swiper-product-slider-button-prev">
                            @php
                                echo file_get_contents('images/app/circle-arrow-left.svg')
                            @endphp
                        </div>
                        <div class="btn swiper-product-slider-button-next">
                            @php
                                echo file_get_contents('images/app/circle-arrow-right.svg')
                            @endphp
                        </div>
                    </div>
                </div>

                <div class="swiper-wrapper">
                    <!-- Slides -->
                    @for ($i = 0; $i < 2; $i++)
                        @foreach ($destacadosMujer as $item)
                            <div class="swiper-slide">

                                <x-product-card
                                class="card-brand"
                                :logo="$item['logo']"
                                :brand="$item['brand']"
                                :tagname="$item['tagname']"
                                :product-images="$item['productImages']"
                                :target="$item['target']"
                                :category="$item['category']"
                                :name="$item['name']"
                                :old-price="$item['oldPrice']"
                                :price="$item['price']"
                                >
                                </x-product-card>

                            </div>
                        @endforeach
                    @endfor

                </div>

                <div class="swiper-top-btn mobile">
                    <div class="btn swiper-product-slider-button-prev rotate">
                        @php
                            echo file_get_contents('images/app/swiper-btn-mobile.svg')
                        @endphp
                    </div>
                    <div class="btn swiper-product-slider-button-next">
                        @php
                            echo file_get_contents('images/app/swiper-btn-mobile.svg')
                        @endphp
                    </div>
                </div>

            </div>

        </div>
    </section>

    <x-banner-group></x-banner-group>

    <x-newsletter></x-newsletter>

</x-layout>
