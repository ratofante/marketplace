    <div class="subscribe-mask subscribe" id="subscribe">
        <div class="subscribe-container">
            <div class="subscribe-header">

                <div class="subscribe-header-img">
                    <picture>
                        <source srcset="{{ asset('images/app/subscribe-2.jpg') }}" media="(max-width: 767px)" type="image/webp">
                        <source srcset="{{ asset('images/app/subscribe-img.jpg') }}" media="(max-width: 767px)" type="image/webp">

                        <img src="{{ asset('images/app/subscribe-img.jpg') }}" alt="">
                    </picture>
                    
                </div>

                <div class="subscribe-header-close">
                    <button class="subscribe-close-btn">
                        @php
                            echo file_get_contents('images/app/circle-and-cross.svg');
                        @endphp
                    </button>
                </div>

            </div>

            <div class="subscribe-body">

                <div class="subscribe-text">
                    <h2 class="title">Beneficios exclusivos</h2>
                    <p class="text">
                            Suscríbite a nuestro newsletter para recibir noticias y ofertas exclusivas.
                    </p>
                </div>

                <form action="" class="subscribe-form">
                        <select name="genero" id="">
                            <option value="mujer">Mujer</option>
                            <option value="hombre">Hombre</option>
                        </select>
                        <hr>
                        <input type="email" name="email" id="" placeholder="Ingresa tu correo electrónico">
                        <button type="submit">
                            suscribirme
                        </button>
                </form>

                <button class="subscribe-mobile">
                    suscribirme
                </button>

            </div>
        </div>
    </div>