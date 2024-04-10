<x-layout>
@php
$categories = array(
    array(
        "logo" => "images/app/dummy_data/logos/saint-josua-logo.png",
        "brand" => "Saint Josua",
        "tagname" => "",
        "productImages" => array(
            "images/app/dummy_data/productos/sandalia-1.jpg",
            "images/app/dummy_data/productos/sandalia-2.jpg",
        ),
        "target" => "Mujer",
        "category" => "Calzado",
        "name" => "Sandalia beige para la playa y estar cómodo",
        "oldPrice" => "11,990",
        "price" => "9,990",
    ),
    array(
        "logo" => "images/app/dummy_data/logos/logo_lacoste.png",
        "brand" => "Lacoste",
        "tagname" => "",
        "productImages" => array(
            "images/app/dummy_data/productos/sandalia-negra-1.jpg",
            "images/app/dummy_data/productos/sandalia-negra-2.jpg",
            "images/app/dummy_data/productos/sandalia-negra-3.jpg",
            "images/app/dummy_data/productos/sandalia-negra-4.jpg",
        ),
        "target" => "Mujer",
        "category" => "Calzado",
        "name" => "Sandalias plásticas 100% durables, ajustables",
        "oldPrice" => "22,990",
        "price" => "19,990",
    ),
    array(
        "logo" => "images/app/dummy_data/logos/logo_lacoste.png",
        "brand" => "Lacoste",
        "tagname" => "",
        "productImages" => array(
            "images/app/dummy_data/productos/sandalia-rosa-1.jpg",
            "images/app/dummy_data/productos/sandalia-rosa-2.jpg",
        ),
        "target" => "Mujer",
        "category" => "Calzado",
        "name" => "Sandalia facha playera, 100% plástico, ajustable",
        "oldPrice" => "",
        "price" => "2,990",
    ),
    array(
        "logo" => "images/app/dummy_data/logos/logo_zara.png",
        "brand" => "Zara",
        "tagname" => "",
        "productImages" => array(
            "images/app/dummy_data/productos/tacos-1.jpg",
            "images/app/dummy_data/productos/tacos-2.jpg",
            "images/app/dummy_data/productos/tacos-3.jpg",
            "images/app/dummy_data/productos/tacos-4.jpg",
            "images/app/dummy_data/productos/tacos-5.jpg",
        ),
        "target" => "Mujer",
        "category" => "Calzado",
        "name" => "Tacos Gala Pasarela, 90% fashion 10% trashy, cuerina.",
        "oldPrice" => "22,990",
        "price" => "19,990",
    ),
    array(
        "logo" => "images/app/dummy_data/logos/logo_nike.png",
        "brand" => "Nike",
        "tagname" => "",
        "productImages" => array(
            "images/app/dummy_data/productos/zapatilla-1.jpg",
            "images/app/dummy_data/productos/zapatilla-2.jpg",
        ),
        "target" => "Mujer",
        "category" => "Calzado",
        "name" => "Zapatillas urbanas. 100% de productos reciclables, salva al planeta.",
        "oldPrice" => "",
        "price" => "32,590",
    ),
    array(
        "logo" => "images/app/dummy_data/logos/logo_hm.png",
        "brand" => "H&M",
        "tagname" => "",
        "productImages" => array(
            "images/app/dummy_data/productos/zapatilla-negra-1.jpg",
            "images/app/dummy_data/productos/zapatilla-negra-2.jpg",
            "images/app/dummy_data/productos/zapatilla-negra-3.jpg",
        ),
        "target" => "Mujer",
        "category" => "Calzado",
        "name" => "Zapatillas urbanas, ponéte ya a la moda con nuestro calzado.",
        "oldPrice" => "",
        "price" => "29,990",
    ),
);
@endphp

    <section class="category-hero">
         <div class="container-full">
            <div class="hero-container">
                <img class="hero-bg" src="{{ asset('images/app/category/category-hero.jpg') }}" alt="">
                <div class="container-boxed logo">
                    <span class="tagname">Mujer</span>
                    <h1 class="title">Calzado</h1>
                </div>
            </div>
         </div>
    </section>

    <section class="product-catalog">
        <div class="container-boxed">

            <nav class="brand-nav">
                <ul class="brand-nav-list">
                    <li class="brand-nav-list-item">
                        <a class="brand-nav-list-item-btn btn-nav-menu">Todo</a>
                        <hr>
                    </li>
                    <li class="brand-nav-list-item">
                        <a class="brand-nav-list-item-btn btn-nav-menu hover">Hombre</a>
                        <hr>
                    </li>
                    <li class="brand-nav-list-item">
                        <a class="brand-nav-list-item-btn btn-nav-menu">Mujer</a>
                        <hr>
                    </li>
                    <li class="brand-nav-list-item">
                        <a class="brand-nav-list-item-btn btn-nav-menu">Rebajas</a>
                        <hr>
                    </li>
                </ul>
                <div class="filters-bar-toggle">
                    <button id="filters-toggle" class="menu-toggle-btn">
                        @php
                            echo file_get_contents('images/app/menu-filter/filter-toggle.svg');
                        @endphp
                        <span>Filtros</span>
                    </button>
                    <div class="filter-by filter-by-mobile">
                        <select class="products-menu-filter">
                            <option value="">Más relevante</option>
                            <option value="">Más nuevos</option>
                            <option value="">A - Z</option>
                            <option value="">Z - A</option>
                            <option value="">Menor precio</option>
                            <option value="">Mayor precio</option>
                        </select>
                    </div>
                </div>
            </nav>

            <div class="product-catalog-container">

                <div class="products-menu">

                    <button class="close-filter-menu">
                        @php
                            echo file_get_contents('images/app/menu-filter/cross-thin.svg');
                        @endphp
                    </button>

                    <div class="product-filter-info">

                        <div class="product-menu-toggle">
                            <div class="menu-toggle-btn">
                                @php
                                    echo file_get_contents('images/app/menu-filter/filter-toggle.svg');
                                @endphp
                            </div>
                            <span>
                                Ocultar Filtros
                            </span>
                        </div>

                        <div class="filter-by filter-by-desktop">
                            {{-- <span>Ordenar por</span> --}}
                            <select class="products-menu-filter">
                                <option value="">Más relevante</option>
                                <option value="">Más nuevos</option>
                                <option value="">A - Z</option>
                                <option value="">Z - A</option>
                                <option value="">Menor precio</option>
                                <option value="">Mayor precio</option>
                            </select>
                        </div>

                        <div class="applied-filters">
                            <div class="applied-header">
                                <span>Tus Filtros</span>
                                <a class="delete-filters btn-nav-menu external" href="">
                                    Eliminar todos
                                </a>
                            </div>
                            <div class="applied-filters-container">
                                <span class="applied-filter">
                                    <button>
                                        @php
                                            echo file_get_contents('images/app/menu-filter/cross.svg');
                                        @endphp
                                        $200 - $10.000    
                                    </button>
                                </span>
                                <span class="applied-filter">
                                    <button>
                                        @php
                                            echo file_get_contents('images/app/menu-filter/cross.svg');
                                        @endphp
                                        Jeans    
                                    </button>
                                </span>
                                <span class="applied-filter">
                                    <button>
                                        @php
                                            echo file_get_contents('images/app/menu-filter/cross.svg');
                                        @endphp
                                        XL    
                                    </button>
                                </span>
                                <span class="applied-filter">
                                    <button>
                                        @php
                                            echo file_get_contents('images/app/menu-filter/cross.svg');
                                        @endphp
                                        L    
                                    </button>
                                </span>
                                <span class="applied-filter">
                                    <button>
                                        @php
                                            echo file_get_contents('images/app/menu-filter/cross.svg');
                                        @endphp
                                        $200 - $10.000    
                                    </button>
                                </span>
                                <span class="applied-filter">
                                    <button>
                                        @php
                                            echo file_get_contents('images/app/menu-filter/cross.svg');
                                        @endphp
                                        Jeans    
                                    </button>
                                </span>
                                <span class="applied-filter">
                                    <button>
                                        @php
                                            echo file_get_contents('images/app/menu-filter/cross.svg');
                                        @endphp
                                        XL    
                                    </button>
                                </span>
                                <span class="applied-filter">
                                    <button>
                                        @php
                                            echo file_get_contents('images/app/menu-filter/cross.svg');
                                        @endphp
                                        L    
                                    </button>
                                </span>
                            </div>
                        </div>

                    </div>
                        
                    <div class="box-filter">

                        <div class="filter accordion">
                            <div class="filter-name">
                                <span>Tipo de Prenda</span>
                                <div class="filter-name-btn">
                                    <div class="bar-top"></div>
                                    <div class="bar-bottom"></div>
                                </div>
                            </div>
                            <div class="filter-options">
                                <div style="display: flex; flex-direction: column;">
                                    <a href="" class="btn-nav-menu external">Remeras</a>
                                    <a href="" class="btn-nav-menu external">Sastrería</a>
                                    <a href="" class="btn-nav-menu external">Camperas</a>
                                    <a href="" class="btn-nav-menu external">Pantalones</a>
                                    <a href="" class="btn-nav-menu external">Camisas</a>
                                    <a href="" class="btn-nav-menu external">Zapatillas</a>
                                </div>
                            </div>
                        </div>

                        <div class="filter accordion">
                            <div class="filter-name">
                                <span>Estilo</span>
                                <div class="filter-name-btn">
                                    <div class="bar-top"></div>
                                    <div class="bar-bottom"></div>
                                </div>
                            </div>
                            <div class="filter-options">
                                <div class="filter-list">
                                    <a href="" class="btn-nav-menu external">Slandy Zip</a>
                                    <a href="" class="btn-nav-menu external">Widee</a>
                                    <a href="" class="btn-nav-menu external">Jojo style</a>
                                    <a href="" class="btn-nav-menu external">Pokemon Master</a>
                                </div>
                            </div>
                        </div>

                        <div class="filter accordion">
                            <div class="filter-name">
                                <span>Lavado</span>
                                <div class="filter-name-btn">
                                    <div class="bar-top"></div>
                                    <div class="bar-bottom"></div>
                                </div>
                            </div>
                            <div class="filter-options">
                                <div class="filter-list">
                                    <a href="" class="btn-nav-menu external">Si</a>
                                    <a href="" class="btn-nav-menu external">No</a>
                                </div>
                            </div>
                        </div>

                        <div class="filter accordion">
                            <div class="filter-name">
                                <span>Talla</span>
                                <div class="filter-name-btn">
                                    <div class="bar-top"></div>
                                    <div class="bar-bottom"></div>
                                </div>
                            </div>
                            <div class="filter-options product-sizes">
                                <div class="filter-list">
                                    <a href="" class="size-block">26</a>
                                    <a href="" class="size-block">44</a>
                                    <a href="" class="size-block">26</a>
                                    <a href="" class="size-block">44</a>
                                    <a href="" class="size-block">26</a>
                                    <a href="" class="size-block">44</a>
                                    <a href="" class="size-block">26</a>
                                    <a href="" class="size-block">44</a>
                                    <a href="" class="size-block">26</a>
                                    <a href="" class="size-block">44</a>                                    
                                </div>
                            </div>
                        </div>

                        <div class="filter accordion">
                            <div class="filter-name">
                                <span>Largo</span>
                                <div class="filter-name-btn">
                                    <div class="bar-top"></div>
                                    <div class="bar-bottom"></div>
                                </div>
                            </div>
                            <div class="filter-options product-sizes">
                                <div class="filter-list">
                                    <a href="" class="size-block">26</a>
                                    <a href="" class="size-block">44</a>
                                    <a href="" class="size-block">26</a>
                                    <a href="" class="size-block">44</a>
                                    <a href="" class="size-block">26</a>
                                    <a href="" class="size-block">44</a>
                                    <a href="" class="size-block">26</a>
                                    <a href="" class="size-block">44</a>
                                    <a href="" class="size-block">26</a>
                                    <a href="" class="size-block">44</a>
                                </div>
                            </div>
                        </div>

                        <div class="filter accordion">
                            <div class="filter-name">
                                <span>Precio</span>
                                <div class="filter-name-btn">
                                    <div class="bar-top"></div>
                                    <div class="bar-bottom"></div>
                                </div>
                            </div>
                            <div class="filter-options price-slider">
                                <div class="filter-list">
                                    <div class="dragable">
                                        <input type="text" class="product-range-slider" id="rangeSlider">
                                    </div>
                                    <a href="" class="btn-nav-menu external">
                                        Aplicar Filtro
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="filter accordion">
                            <div class="filter-name">
                                <span>Color</span>
                                <div class="filter-name-btn">
                                    <div class="bar-top"></div>                                        
                                    <div class="bar-bottom"></div>
                                </div>
                            </div>
                            <div class="filter-options product-colors">
                                <div class="filter-list wrapper">
                                    <a href="" class="color-block"></a>
                                    <a href="" class="color-block"></a>
                                    <a href="" class="color-block"></a>
                                    <a href="" class="color-block"></a>
                                    <a href="" class="color-block"></a>
                                    <a href="" class="color-block"></a>
                                    <div class="see-more">
                                        <a href="" class="btn-nav-menu external">
                                            Ver Más
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    
                </div>

                <div class="products-grid-container">

                    {{-- <h3  class="category-product-grid-title">
                        Botas
                    </h3> --}}

                    <div class="products-grid">
                         @for ($i = 0; $i < 2; $i++)

                            @foreach ($categories as $item)
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
                                :price="$item['price']">
                                </x-product-card>
                            @endforeach  

                        @endfor
                    </div>

                    {{-- <h3 class="category-product-grid-title">
                        Zapatillas
                    </h3>

                    <div class="products-grid">

                        @for ($i = 0; $i < 3; $i++)
                            <x-product-card></x-product-card>
                        @endfor
    
                    </div> --}}

                    <div class="products-grid-pagination">
                        <div class="options-container">
                            <span class="options-name">
                                Visualizar:
                            </span>
                            <div class="options">
                                <span class="option active">
                                    <hr>
                                    12
                                </span>
                                <span class="option">
                                    <hr>
                                    24
                                </span>
                            </div>
                        </div>
                        <div class="options-container-pages">
                            <span class="options-page active">
                                1
                            </span>
                            <span class="options-page">
                                2
                            </span>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </section>

    <x-banner-group></x-banner-group>

    <x-newsletter></x-newsletter>

</x-layout>