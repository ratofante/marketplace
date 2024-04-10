<x-layout>
@php
$brand = array(
    array(
        "logo" => "images/app/dummy_data/logos/saint-josua-logo.png",
        "brand" => "Saint Josua",
        "tagname" => "",
        "productImages" => array(
            "images/app/dummy_data/brand/brand-1.1.webp",
            "images/app/dummy_data/brand/brand-1.2.webp",
            "images/app/dummy_data/brand/brand-1.3.webp",
            "images/app/dummy_data/brand/brand-1.4.webp",
            "images/app/dummy_data/brand/brand-1.5.webp",
        ),
        "target" => "Mujer",
        "category" => "Blazer",
        "name" => "Fina seda sustanciosa en algodón",
        "oldPrice" => "13,290",
        "price" => "9,990",
    ),
    array(
        "logo" => "images/app/dummy_data/logos/saint-josua-logo.png",
        "brand" => "Saint Josua",
        "tagname" => "new in",
        "productImages" => array(
            "images/app/dummy_data/brand/brand-2.1.webp",
            "images/app/dummy_data/brand/brand-2.2.webp",
            "images/app/dummy_data/brand/brand-2.3.webp",
            "images/app/dummy_data/brand/brand-2.4.webp",
            "images/app/dummy_data/brand/brand-2.5.webp",
        ),
        "target" => "Mujer",
        "category" => "Bodies",
        "name" => "Entero floreado, summer breeze",
        "oldPrice" => "19,990",
        "price" => "18,990",
    ),
    array(
        "logo" => "images/app/dummy_data/logos/saint-josua-logo.png",
        "brand" => "Saint Josua",
        "tagname" => "most wanted",
        "productImages" => array(
            "images/app/dummy_data/brand/brand-3.1.webp",
            "images/app/dummy_data/brand/brand-3.2.webp",
            "images/app/dummy_data/brand/brand-3.3.webp",
            "images/app/dummy_data/brand/brand-3.4.webp",
            "images/app/dummy_data/brand/brand-3.5.webp",
        ),
        "target" => "Mujer",
        "category" => "Vestidos",
        "name" => "Falda media",
        "oldPrice" => "",
        "price" => "9,990",
    ),
    array(
        "logo" => "images/app/dummy_data/logos/saint-josua-logo.png",
        "brand" => "Saint Josua",
        "tagname" => "",
        "productImages" => array(
            "images/app/dummy_data/brand/brand-4.1.jpg",
            "images/app/dummy_data/brand/brand-4.2.jpg",
            "images/app/dummy_data/brand/brand-4.3.jpg",
            "images/app/dummy_data/brand/brand-4.4.jpg",
        ),
        "target" => "Mujer",
        "category" => "Vestidos",
        "name" => "Falda secretaria, formal. Tela muy flexible.",
        "oldPrice" => "",
        "price" => "29,990",
    ),
    array(
        "logo" => "images/app/dummy_data/logos/saint-josua-logo.png",
        "brand" => "Saint Josua",
        "tagname" => "very large text for testing extreme cases of tagname naming",
        "productImages" => array(
            "images/app/dummy_data/brand/brand-5.1.jpg",
            "images/app/dummy_data/brand/brand-5.2.jpg",
            "images/app/dummy_data/brand/brand-5.3.jpg",
            "images/app/dummy_data/brand/brand-5.4.jpg",
            "images/app/dummy_data/brand/brand-5.5.jpg",
        ),
        "target" => "Mujer",
        "category" => "Vestidos",
        "name" => "Vestido floreal summer",
        "oldPrice" => "",
        "price" => "35,990",
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
)
@endphp
    <section class="brand-hero">
         <div class="container-boxed">
            <div class="hero-container">
                <img class="hero-bg" src="{{ asset('images/app/brands/brand-banner.jpg') }}" alt="">
                <div class="logo">
                    <img src="{{ asset('images/app/brands/brand-logo.png') }}" alt="">
                </div>
            </div>
         </div>
    </section>

    <section class="brand-presentation">
        <div class="container-boxed">

            <div class="brand-presentation-container">
                <div class="brand-presentation-bio">
                    <div class="brand-presentation-bio-name">
                        <h1>Saint Josua</h1>
                        <span class="tagname">
                            Inspired by a dream.
                        </span>
                    </div>
                    <div class="brand-presentation-bio-story">
                        <span>Bio</span>
                        <p>
                            Somos una empresa con una trayectoria de más de 20 años en el rubro. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy.
                        </p>
                    </div>
                </div>
                <div class="brand-presentation-info">
                    <div class="brand-presentation-info-block">
                        <h5>Ubicación</h5>
                        <p>Felipe Vallese 3171</p>
                    </div>
                    <div class="brand-presentation-info-block">
                        <h5>Mínimo</h5>
                        <p>De compra $3000</p>
                    </div>
                    <div class="brand-presentation-info-block">
                        <h5>Registro</h5>
                        <p>En AvellanedaGo.com desde 20/08/2022</p>
                    </div>
                    <div class="brand-presentation-info-block">
                        <h5>Contacto</h5>
                        <div class="brand-bio-phone">
                            @php
                                echo file_get_contents('images/app/whatsapp.svg');
                            @endphp
                            <span class="phone">
                                +54 11 9255-2370
                            </span>
                        </div>
                    </div>
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
                    <div class="filter-by">
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

                        <div class="filter-by">
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

                    <div class="products-grid">

                        @for ($i = 0; $i < 2; $i++)

                            @foreach ($brand as $item)
                            
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
                </div> 

            </div>

        </div>
    </section>

    <x-newsletter></x-newsletter>

</x-layout>