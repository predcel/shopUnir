@component('components.layout')
    @slot('linksCss', '')
    @slot('JSscripts')
        <script src="{{ asset('js/agregaCarrito.js') }}"></script>
    @endslot
    @slot('body')
        <x-menu>{{ $carrito }}</x-menu>
        <div class="row justify-content-center align-items-center g-2 my-2">
            <div class="col-10">
                <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="{{ asset('images/bikers.jpg') }}" class="d-block w-100" alt="..." height="350px">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('images/istockphoto-1344995037-612x612.jpg') }}" class="d-block w-100"
                                alt="..." height="350px">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('images/biker-407123_1280.jpg') }}" class="d-block w-100" alt="..."
                                height="350px">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>

        <div class="row justify-content-center align-items-center g-2 my-3">
            <div class="col-lg-6 text-center">
                <div class="row justify-content-center align-items-center g-2">
                    <div class="col-6">
                        <x-cardProducto imagen="images/carbon 00.png" cardAlt="carbon" producto="1" precio="3999">
                            Casco carbon
                        </x-cardProducto>
                    </div>
                    <div class="col-6">
                        <x-cardProducto imagen="images/jet 00.png" cardAlt="jet" producto="2" precio="2499">
                            Casco Jet
                        </x-cardProducto>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 text-center">
                <div class="row justify-content-center align-items-center g-2">
                    <div class="col-6">
                        <x-cardProducto imagen="images/playera 00.png" cardAlt="playera" producto="3" precio="1299">
                            Playera Fox
                        </x-cardProducto>
                    </div>
                    <div class="col-6">
                        <x-cardProducto imagen="images/maleta 00.png" cardAlt="maleta" producto="4" precio="7899">
                            Maleta
                        </x-cardProducto>
                    </div>
                </div>
            </div>
        </div>

    @endslot
@endcomponent
