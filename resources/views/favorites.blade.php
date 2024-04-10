<x-layout>

    <section class="favorites">
        <div class="favorites-header">
            <h3 class="title">Favoritos</h3>
            <p class="text">
                Todos tus favoritos los encontrarás acá.
            </p>
        </div>
        <div class="favorites-container empty-favorites">
            <div class="favorites-logo">
                @php
                    echo file_get_contents('images/app/product-card/btn-like.svg');
                @endphp
            </div>
            <h5 class="favorites-secondary-title">
                tu wishlist está vacía
            </h5>
            <p class="favorites-secondary-text">
                Comenzá a guardar tus productos favoritos para no perderlos de vista en el futuro.
            </p>
            <button class="btn-primary">
                <a href="#">descubrir</a>
            </button>
        </div>
    </section>
    
    <x-selected-brands></x-selected-brands>

    <x-newsletter></x-newsletter>
    
</x-layout>