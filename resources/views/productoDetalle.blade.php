@component('components.layout')
    @slot('linksCss', '')
    @slot('JSscripts')
        <script src="{{ asset('js/agregaCarrito.js') }}"></script>
        <script src="{{ asset('js/productoDetalle.js') }}"></script>
    @endslot
    @slot('body')
        <x-menu>{{ $carrito }}</x-menu>

        <div class="row justify-content-center align-items-center g-2 my-3">
            <div class="col-lg-5">
                <div id="carouselExampleIndicators" class="carousel slide">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                            aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                            aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                            aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        @foreach ($producto['imagenes'] as $key => $imagen)
                            <div class="carousel-item @if ($key == 0) active @endif">
                                <img src="{{ asset('images/' . $imagen) }}" class="d-block w-100" alt="{{ $key }}">
                            </div>
                        @endforeach
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
            <div class="col-lg-5">
                <h1>{{ $producto['nombre'] }}</h1>
                <h2>$ {{ $producto['precio'] }}.00</h2>
                <form action="#" class="productoForm">
                    @csrf
                    <input type="hidden" name="identificador" id="identificador" value="{{ $producto['identificador'] }}">
                    <div class="row mt-2">
                        <div class="col-4">
                            <label for="cantidadProd" class="fs-5 text">Cantidad</label>
                            <input type="number" class="form-control" min="1" max="5" value="1"
                                name="cantidadProd" id="cantidadProd">
                        </div>
                    </div>
                    <div class="row justify-content-center align-items-center g-2 mt-2">
                        <div class="col-12">
                            <div class="d-grid gap-2">
                                <button class="btn btn-success" name="enviar" value="A">Agregar al carrito</button>
                            </div>
                        </div>
                    </div>
                </form>
                <form action="{{ asset('agregaPaga') }}" id="form2" method="post">
                    @csrf
                    <input type="hidden" class="form-control" name="cantidadO" id="cantidadO">
                    <input type="hidden" name="identificadorO" id="identificadorO" value="{{ $producto['identificador'] }}">
                    <div class="row justify-content-center align-items-center g-2 mt-2">
                        <div class="col-12">
                            <div class="d-grid gap-2">
                                <button class="btn btn-primary" name="enviar" value="P">Agregar y pagar</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    @endslot
@endcomponent
