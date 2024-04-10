<div class="cookies" id="cookies">
    <div class="container-fluid">
        <div class="cookies-container">
            <div class="cookies-logo">
                <img src="{{ asset('images/app/cookies/cookies.png') }}" alt="">
            </div>
            <div class="cookies-msg">
                Este sitio utiliza cookies. si continúa utilizando el sitio, acepta nuestra Política de cookies.
            </div>
            <div class="cookies-options">
                <button class="btn-cookie btn-primary">
                    acepto
                </button>
                <button class="btn-cookie cross" id="cookies-close">
                    @php
                        echo file_get_contents('images/app/cookies/cross.svg');
                    @endphp
                </button>
            </div>
        </div>
    </div>
</div>