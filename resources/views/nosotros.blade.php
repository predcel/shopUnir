@component('components.layout')
    @slot('linksCss', '')
    @slot('JSscripts')
        <script src="{{ asset('js/agregaCarrito.js') }}"></script>
    @endslot
    @slot('body')
        <x-menu>{{ $carrito }}</x-menu>
        <div class="row justify-content-center align-items-center g-2 my-2">
            <div class="col-6">
                <div class="card">
                    <div class="card-header bg-info bg-opacity-50">
                        storeShop
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Tienda creada por Ing. Edcel Fuerte Martínez</h5>
                        <p class="card-text">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur molestie molestie maximus. Proin
                            eros purus, efficitur in arcu sit amet, iaculis vehicula risus. Sed sit amet est elit. Integer
                            elementum sagittis sapien vel placerat. Vivamus ut interdum erat. Ut cursus elit vitae dui fringilla
                            sagittis. Duis pellentesque hendrerit euismod. Sed laoreet neque est, vel gravida urna viverra a.
                            Proin gravida massa est. In non quam varius, finibus eros eu, tempus urna.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    @endslot
@endcomponent
