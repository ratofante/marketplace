<div class="product-card {{ $class }}">
    <div class="product-card-top">

        <div class="product-card-top-left">
            <div class="product-card-top-left-avatar">
                <img src="{{ $logo }}" alt="">
            </div>

            <div class="product-card-top-left-name">
                <h3> {{ $brand }}</h3>
            </div>
        </div>
        @if ($tagname !== '')
        <div class="product-card-top-tag">
            <span>{{ $tagname }}</span>
        </div>
        @endif
    </div>
    <div class="product-card-img">
        
        <div class="swiper-wrapper">
            @foreach ($productImages as $img)

                <div class="swiper-slide">
                    <img src="{{ $img }}" alt="{{ $name }}">
                </div>

            @endforeach
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
            <span>{{ $target }}</span>
            <hr> 
            <span>{{ $category }}</span>
        </div>
        <div class="product-card-body-name">
            <p>{{ $name }}</p>
        </div>
        <div class="product-card-body-price">
            <span class="previous-price">
                @if ($oldPrice !== '')
                    ${{ $oldPrice }}
                @endif
            </span>
            <span class="current-price">${{ $price }}</span>
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

        <button class="product-btn ask">
            <span>Consultar</span>
        </button>
        <button class="product-btn details">
            <span>Ver Detalle</span> 
        </button>
        
    </div>
</div>