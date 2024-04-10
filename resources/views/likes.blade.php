<x-layout>

@php
$favorites = array(
    array(
        "logo" => "images/app/dummy_data/logos/logo_ck.png",
        "brand" => "Calvin Klein",
        "tagname" => "",
        "productImages" => array(
            "images/app/dummy_data/productos/camisa-azul-1.jpg",
            "images/app/dummy_data/productos/camisa-azul-2.jpg",
            "images/app/dummy_data/productos/camisa-azul-3.jpg",
            "images/app/dummy_data/productos/camisa-azul-4.jpg",
        ),
        "target" => "Hombre",
        "category" => "Camisas",
        "name" => "Camisa Azul Fachera",
        "oldPrice" => "11,990",
        "price" => "9,990",
    ),
    array(
        "logo" => "images/app/dummy_data/logos/logo_nike.png",
        "brand" => "Nike",
        "tagname" => "",
        "productImages" => array(
            "images/app/dummy_data/productos/camisa-floreada-1.jpg",
            "images/app/dummy_data/productos/camisa-floreada-2.jpg",
            "images/app/dummy_data/productos/camisa-floreada-3.jpg",
        ),
        "target" => "Hombre",
        "category" => "Camisas",
        "name" => "Camisa Floreada Masculina, tela muy firme",
        "oldPrice" => "13,990",
        "price" => "12,990",
    ),
    array(
        "logo" => "images/app/dummy_data/logos/logo_lacoste.png",
        "brand" => "Lacoste",
        "tagname" => "",
        "productImages" => array(
            "images/app/dummy_data/productos/camisa-verde-1.jpg",
            "images/app/dummy_data/productos/camisa-verde-2.jpg",
            "images/app/dummy_data/productos/camisa-verde-3.jpg",
            "images/app/dummy_data/productos/camisa-verde-4.jpg",
            "images/app/dummy_data/productos/camisa-verde-5.jpg",
        ),
        "target" => "Hombre",
        "category" => "Camisas",
        "name" => "Camisa Verde Elegante, con clase y finura",
        "oldPrice" => "",
        "price" => "15,499",
    ),
    array(
        "logo" => "images/app/dummy_data/logos/logo_hm.png",
        "brand" => "H&M",
        "tagname" => "",
        "productImages" => array(
            "images/app/dummy_data/productos/remera-estampado-1.jpg",
            "images/app/dummy_data/productos/remera-estampado-2.jpg",
            "images/app/dummy_data/productos/remera-estampado-3.jpg",
            "images/app/dummy_data/productos/remera-estampado-4.jpg",
        ),
        "target" => "Hombre",
        "category" => "Remeras",
        "name" => "Remera Beige con dibujos Hippies",
        "oldPrice" => "6,990",
        "price" => "5,990",
    ),
    array(
        "logo" => "images/app/dummy_data/logos/logo_miracle.webp",
        "brand" => "Miracle",
        "tagname" => "",
        "productImages" => array(
            "images/app/dummy_data/productos/remera-negra-1.jpg",
            "images/app/dummy_data/productos/remera-negra-2.jpg",
            "images/app/dummy_data/productos/remera-negra-3.jpg",
        ),
        "target" => "Hombre",
        "category" => "Remeras",
        "name" => "Remera negra oscura para hombres malos",
        "oldPrice" => "8,990",
        "price" => "6,590",
    ),
    array(
        "logo" => "images/app/dummy_data/logos/logo_zara.png",
        "brand" => "Zara",
        "tagname" => "",
        "productImages" => array(
            "images/app/dummy_data/productos/remera-salmon-1.jpg",
            "images/app/dummy_data/productos/remera-salmon-2.jpg",
            "images/app/dummy_data/productos/remera-salmon-3.jpg",
            "images/app/dummy_data/productos/remera-salmon-4.jpg",
        ),
        "target" => "Hombre",
        "category" => "Remeras",
        "name" => "Remera Salmón, tela 100% algodón para hombres que les gust el mar",
        "oldPrice" => "",
        "price" => "10,890",
    ),
);
@endphp

    <section class="favorites">
        <div class="container-boxed">
            <div class="favorites-header">
                <h3 class="title">Favoritos</h3>
                <p class="text">
                    Todos tus favoritos los encontrarás acá.
                </p>
            </div>
            <div class="product-catalog favorites-container favorites-list">
    
                <div class="products-grid">

                    @foreach ($favorites as $item)
                    
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

                    @endforeach
    
                </div>
    
            </div>
            <div class="favorites-footer">
                <button class="btn-primary">
                    VER MÁS
                </button>
            </div>
        </div>
    </section>

    <x-selected-brands></x-selected-brands>

    <x-newsletter></x-newsletter>
    
</x-layout>