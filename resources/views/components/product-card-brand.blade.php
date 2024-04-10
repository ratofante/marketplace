<div class="product-card card-brand">
    <div class="product-card-top">
        <div class="product-card-top-tag">
            <span>new in</span>
        </div>
    </div>
    <div class="product-card-img">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
        <!-- Slides -->
            <div class="swiper-slide">
                <img src="{{ asset('images/app/product-card/hombres-1.jpg') }}" alt="">
            </div>
            <div class="swiper-slide">
                <img src="{{ asset('images/app/product-card/hombres-2.jpg') }}" alt="">
            </div>
            <div class="swiper-slide">
                <img src="{{ asset('images/app/product-card/hombres-3.jpg') }}" alt="">
            </div>
        </div>
        <div class="product-card-img-btn product-card-button-prev">
            @php
                echo file_get_contents('images/app/arrow-head-left.svg')
            @endphp     
        </div>
        <div class="product-card-img-btn product-card-button-next">
            @php
                echo file_get_contents('images/app/arrow-head-right.svg')
            @endphp
        </div>
        <a class="mobile-link" href=""></a>
    </div>
    <div class="product-card-body">
        <div class="product-card-body-category">
            <span>Mujer</span> <hr> <span>Botas</span>
        </div>
        <div class="product-card-body-name">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim commodi facere tempora quas quis. Atque soluta excepturi nesciunt aut laboriosam.</p>
        </div>
        <div class="product-card-body-price">
            <span class="previous-price">$3,000</span>
            <span class="current-price">$2,580</span>
        </div>
        <div class="product-card-body-interactions">
            <div class="card-like">
                @php
                    echo file_get_contents('images/app/product-card/btn-like.svg');
                @endphp
            </div>
            <div class="card-share">
                @php
                    echo file_get_contents('images/icons/btn-share.svg');
                @endphp
            </div>
        </div>
    </div>
    <div class="product-card-bottom">
        <a class="cardlink ask" href="">
            <button class="product-btn ask">
                <span>Consultar</span>
            </button>
        </a>
        <a class="cardlink details" href="">
            <button class="product-btn details">
                <span>Ver Detalle</span> 
            </button>
        </a>
    </div>
</div>