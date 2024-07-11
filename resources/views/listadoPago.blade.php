@component('components.layout')
    @slot('linksCss', '')
    @slot('JSscripts')
        <script
            src="https://www.paypal.com/sdk/js?client-id=AdqDUqHWkhQZ9XmnO8X00vYrDfCUEi0lqSh2uOUZ7bIojBvbTsaXdWIOGsQEbpGq8mEsYiPmpQZyGvrP&currency=MXN&locale=es_MX">
        </script>

        <script src="{{ asset('js/listadoPago.js') }}"></script>
    @endslot
    @slot('body')
        <x-menu>{{ $carrito }}</x-menu>

        @if ($carrito == 0)
            <div class="row justify-content-center align-items-center g-2">
                <div class="col-6 text-center my-3">
                    <h1>No hay articulos en el carrito</h1>
                </div>
            </div>
            <div class="row justify-content-center align-items-center g-2">
                <div class="col-6 my-3">
                    <div class="d-grid gap-2">
                        <a href="{{ asset('/') }}" class="btn btn-lg btn-primary">Regresar a inicio</a>
                    </div>
                </div>
            </div>
        @else
            <div class="row justify-content-center align-items-center g-2 mt-3">
                <div class="col-3">
                    <h3>Articulo</h3>
                </div>
                <div class="col-2 text-center">
                    <h3>Cantidad</h3>
                </div>
                <div class="col-2 text-center">
                    <h3>Precio unitario</h3>
                </div>
                <div class="col-2">
                    <h3>Total</h3>
                </div>
            </div>

            @foreach ($productosData as $key => $item)
                @php
                    $totalProducto = $cantidadXProducto[$key] * $item['precio'];
                    if (isset($sumaTotal)) {
                        $sumaTotal += $totalProducto;
                    } else {
                        $sumaTotal = $totalProducto;
                    }
                @endphp
                <div class="row justify-content-center align-items-center g-2">
                    <div class="col-3">
                        <h5>
                            {{ $item['nombre'] }}
                        </h5>
                    </div>
                    <div class="col-2 text-center">
                        {{ $cantidadXProducto[$key] }}
                    </div>
                    <div class="col-2 text-center">
                        $ {{ $item['precio'] }}.00
                    </div>
                    <div class="col-2 text-end">
                        $ {{ $totalProducto }}.00
                    </div>
                </div>
            @endforeach

            <div class="row justify-content-center align-items-center g-2">
                <div class="col-3">
                    <h5>Total</h5>
                </div>
                <div class="col-2 text-center">
                </div>
                <div class="col-2 text-center">
                </div>
                <div class="col-2 text-end">
                    <h5>$ {{ $sumaTotal }}.00</h5>
                    <input type="hidden" name="cuentaTotal" id="cuentaTotal" value="{{ $sumaTotal }}">
                </div>
            </div>

            <div class="row justify-content-center align-items-center g-2 mt-3">
                <div class="col-sm-3">
                    <hr>
                    <h2 class="text-center my-3">Proceder al pago</h2>
                    <div id="paypal-button-container"></div>
                    <hr>
                </div>
            </div>

            <div class="row justify-content-center align-items-center g-2 my-4">
                <div class="col-3">
                    <div class="d-grid gap-2">
                        <a href="{{ asset('cleanCarrito') }}" class="btn btn-warning rounded-pill" name="enviar">Vaciar carrito</a>
                    </div>
                </div>
            </div>
        @endif


    @endslot
@endcomponent
