<section class="home-brands">
        <div class="container-fluid">
            <div class="home-brands-header">
                <h3 class="title">Marcas destacadas</h3>

                <div class="header-navigation">
                    <div class="swiper-brands-button-prev">
                        @php
                            echo file_get_contents('images/app/arrow-head-left.svg');
                        @endphp
                    </div>
                    <div class="swiper-brands-button-next">
                        @php
                            echo file_get_contents('images/app/arrow-head-right.svg');
                        @endphp
                    </div>
                </div>
            </div>

            <!-- Slider main container -->
            <div class="swiper-brands">

                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">
                    <!-- Slides -->
                    @for ($i = 1; $i < 9; $i++)
                        <div class="swiper-slide">
                            <div class="slide">
                                <div class="slide-img">
                                    <img src="./images/app/brands/brand-{{ $i > 4 ? $i - 4 : $i}}.jpg" alt="">
                                </div>
                                <div class="slide-info">
                                    <div class="slide-info-text-mask">
                                        <h3>Our Brand</h3>
                                    </div>
                                    <div class="slide-info-btn-mask">
                                        <button class="btn-simple">
                                            <span>DESCUBRÍ LA COLECCIÓN</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div> 
                    @endfor
                </div>

                <!-- If we need pagination -->
                <div class="swiper-brands-pagination"></div>

                <!-- If we need scrollbar -->
                <div class="swiper-brands-scrollbar"></div>

            </div>

        </div>
    </section>