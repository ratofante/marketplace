@php
    $targets = array(
        'marcas',
        'hombre',
        'mujer',
        'niño',
        'niña'
    );
    $categories = array(
        'Chaquetas',
        'Deportivos',
        'Blazers',
        'Accesorios',
        'Pantalones',
        'Tops',
        'Jeans',
        'Camisetas',
        'Bodies',
        'Vestidos',
        'Monos',
    );
@endphp
<nav class="navigation">
    <div class="container-fluid">
            <div class="nav-main">
                <div class="box-logo">
                    <img src="{{ asset('images/app/logo-2.png') }}" alt="AvellanedaGo.com">
                </div>
                <div class="box-search">
                    <form action="">
                        <div class="wrapper-search">
                            <div class="search-filter">
                                <select name="search-filter" class="navigation-select">
                                    <option value="">Marcas</option>
                                    <option value="">Hombre</option>
                                    <option value="">Mujer</option>
                                    <option value="">Niño</option>
                                    <option value="">Niña</option>
                                </select>
                            </div>
                            <div class="search-input">
                                <input type="search" name="search-keyword" id="search-keyword" placeholder="Buscar">
                            </div>
                        </div>
                    </form>        
                </div>
                <div class="box-user-menu">
                    <div class="btn-login">
                        <a href="#">Ingresar</a>
                    </div>
                    <div class="btn-favs">
                        <a href="#">
                            <img src="{{ asset('images/icons/heart-line.svg') }}" alt="Favoritos">
                        </a>
                    </div>
                    <button class="search">
                        @php
                            echo file_get_contents('images/app/lupa.svg');
                        @endphp
                    </button>
                    <button class="menu-btn">
                        <div class="top-bar"></div>
                        <div class="middle-bar"></div>
                        <div class="bottom-bar"></div>
                    </button>
                </div>
                <div class="nav-mobile-bg"></div>
                <div class="mobile-nav-menu">

                    <div class="mobile-nav-menu-side-bg">
                        <img src="{{ asset('images/app/side-menu-bg.jpg') }}" alt="">
                        <div class="mobile-nav-menu-side-bg-text">
                            <img src="{{ asset('images/app/avellanedago.com.png') }}" alt="">
                            <h3>
                                Encontrá toda la moda en un solo lugar
                            </h3>
                        </div>
                    </div>

                    <div class="mobile-nav-menu-menu">
    
                        <div class="mobile-nav-menu-option">
                            
                            <div class="mobile-nav-menu-category">
                                <div class="mobile-nav-menu-category-header">
                                    <a href="/">
                                        <p class="mobile-nav-menu-text">Inicio</p>
                                    </a>
                                </div>
                            </div>
                            
                            <div class="mobile-nav-menu-category accordion">
                                <div class="mobile-nav-menu-category-header">
                                    <p class="mobile-nav-menu-text">
                                        Mujer
                                    </p>
                                    <div class="mobile-nav-menu-plus">
                                        <div class="bar-top"></div>
                                        <div class="bar-bottom"></div>
                                    </div>
                                </div>
                                <div class="mobile-nav-menu-category-content">
                                    <ul>
                                        @foreach ($categories as $item)
                                            <li class="category-item">
                                                <a href="">
                                                    {{ $item }}
                                                </a>
                                            </li>
                                        @endforeach
                                    </ul>
                                    <a href="">
                                        <p class="category-item see-category">Ver toda la ropa de mujer</p>
                                    </a>
                                </div>
                            </div>
                            <div class="mobile-nav-menu-category accordion">
                                <div class="mobile-nav-menu-category-header">
                                    <p class="mobile-nav-menu-text">
                                        Niña
                                    </p>
                                    <div class="mobile-nav-menu-plus">
                                        <div class="bar-top"></div>
                                        <div class="bar-bottom"></div>
                                    </div>
                                </div>
                                <div class="mobile-nav-menu-category-content">
                                    <ul>
                                        @foreach ($categories as $item)
                                            <li class="category-item">
                                                <a href="">
                                                    {{ $item }}
                                                </a>
                                            </li>
                                        @endforeach
                                    </ul>
                                    <a href="">
                                        <p class="category-item see-category">Ver toda la ropa de niña</p>
                                    </a>
                                </div>
                            </div>
                            <div class="mobile-nav-menu-category accordion">
                                <div class="mobile-nav-menu-category-header">
                                    <p class="mobile-nav-menu-text">
                                        Hombre
                                    </p>
                                    <div class="mobile-nav-menu-plus">
                                        <div class="bar-top"></div>
                                        <div class="bar-bottom"></div>
                                    </div>
                                </div>
                                <div class="mobile-nav-menu-category-content">
                                    <ul>
                                        @foreach ($categories as $item)
                                            <li class="category-item">
                                                <a href="">
                                                    {{ $item }}
                                                </a>
                                            </li>
                                        @endforeach
                                    </ul>
                                    <a href="">
                                        <p class="category-item see-category">Ver toda la ropa de hombre</p>
                                    </a>
                                </div>
                            </div>
                            <div class="mobile-nav-menu-category accordion">
                                <div class="mobile-nav-menu-category-header">
                                    <p class="mobile-nav-menu-text">
                                        Niño
                                    </p>
                                    <div class="mobile-nav-menu-plus">
                                        <div class="bar-top"></div>
                                        <div class="bar-bottom"></div>
                                    </div>
                                </div>
                                <div class="mobile-nav-menu-category-content">
                                    <ul>
                                        @foreach ($categories as $item)
                                            <li class="category-item">
                                                <a href="">
                                                    {{ $item }}
                                                </a>
                                            </li>
                                        @endforeach
                                    </ul>
                                    <a href="">
                                        <p class="category-item see-category">Ver toda la ropa de niño</p>
                                    </a>
                                </div>
                            </div>
                            <div class="mobile-nav-menu-category accordion">
                                <div class="mobile-nav-menu-category-header">
                                    <p class="mobile-nav-menu-text">
                                        Marcas
                                    </p>
                                    <div class="mobile-nav-menu-plus">
                                        <div class="bar-top"></div>
                                        <div class="bar-bottom"></div>
                                    </div>
                                </div>
                                <div class="mobile-nav-menu-category-content">
                                    <ul>
                                        @foreach ($categories as $item)
                                            <li class="category-item">
                                                <a href="">
                                                    {{ $item }}
                                                </a>
                                            </li>
                                        @endforeach
                                    </ul>
                                    <a href="">
                                        <p class="category-item see-category">Ver todas las marcas</p>
                                    </a>
                                </div>
                            </div>
                            
                        </div>

                        <div class="mobile-nav-menu-account">
                            <div class="gradient"></div>
                            <div class="not-subscribed">
                                <div class="top-section">
                                    <div class="login-logo">
                                        @php
                                            echo file_get_contents('images/icons/user-3-line.svg');
                                        @endphp
                                    </div>
                                    <h6 class="login-header">Bienvenido</h6>
                                    <p class="login-instructions">
                                        Ingresá a tu cuenta para ver tus compras, favoritos, etc.
                                    </p>
                                </div>
                                <div class="bottom-section">
                                    <button class="btn-primary login">Ingresá</button>
                                    <button class="btn-primary sign">Creá tu cuenta</button>
                                </div>
                            </div>
                            <div class="subscribed">
                                <a href="">
                                    @php
                                        echo file_get_contents('images/icons/user-3-line.svg');
                                    @endphp
                                    <span class="mobile-nav-menu-user">
                                        Perfil
                                    </span>
                                </a>
                                <a href="">
                                    @php
                                        echo file_get_contents('images/icons/heart-line.svg');
                                    @endphp
                                    <span class="mobile-nav-menu-user">
                                        Favoritos
                                    </span>
                                </a>
                                <a href="">
                                    @php
                                        echo file_get_contents('images/icons/logout.svg');
                                    @endphp
                                    <span class="mobile-nav-menu-user">
                                        Favoritos
                                    </span>
                                </a> 
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="nav-categories">
                <ul class="category-list">
                    <li class="category">
                        <a href="#" class="category-link btn-nav-menu external">INICIO</a>
                    </li>
                    <div class="category-list-ext">

                        @foreach ($targets as $target)
                            <li class="category">
                                <a href="#" class="category-link filter btn-nav-menu" data-category="{{ $target }}">{{ $target }}</a>
                            </li>
                        @endforeach
                    
                    </div>
                    <li class="category">
                        <a href="#" class="category-link btn-nav-menu external">CONTACTO</a>
                    </li>
                </ul>
            </div>
            <div class="nav-menu">

                @foreach ($targets as $target)

                    <div class="nav-menu-section" data-section="{{ $target }}">
                        <div class="nav-menu-categories">
                            <div class="nav-menu-header">
                                <h3>Productos para {{ $target }}</h3>
                            </div>
                            <div class="menu-categories">
                                @foreach ($categories as $item)
                                <div class="category-slot">
                                    <button class="btn-slide">
                                        <span class="btn-slide-line"></span>
                                        <span class="btn-slide-text">{{$item}}</span>
                                    </button>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="nav-menu-main-products">
                            <div class="nav-menu-header">
                                <h3>Principales marcas de {{ $target }}</h3>
                            </div>
                            <div class="nav-menu-main-products-slides">
                                @for ($i = 0; $i < 4; $i++)
                                    <div class="slide">
                                        <div class="slide-img">
                                            <img src="{{ asset('images/app/navmenu/product.jpg') }}" alt="">
                                        </div>
                                        <div class="slide-info">
                                            <div class="slide-info-text-mask">
                                                <h3>Our Brand</h3>
                                            </div>
                                            <div class="slide-info-btn-mask">
                                                <button class="btn-simple">
                                                    <span>Ver más</span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                @endfor
                            </div>
                        </div>
                    </div>

                @endforeach

            </div>

    </div>
</nav>

<div class="nav-fill"></div>