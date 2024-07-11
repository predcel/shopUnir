@props(['imagen', 'cardAlt', 'producto', 'precio'])
@php
    $url = "producto/{$producto}";
    $url = asset($url);
@endphp
<div class="card mx-auto" style="width: 80%">
    <a href="{{ $url }}">
        <img src="{{ asset($imagen) }}" class="card-img-top rounded-circle" alt="{{ $cardAlt }}">
    </a>
    <div class="card-body">
        <h5 class="card-title">{{ $slot }}</h5>
        <p>
        <form action="#" class="productoForm">
            @csrf
            <h4>${{ $precio }}</h4>
            <input type="hidden" name="cantidadProd" id="cantidadProd" value="1">
            <input type="hidden" name="identificador" id="identificador" value="{{ $producto }}">
            <button class="btn btn-success" value="A">Agregar al carrito</button>
        </form>
        </p>
        <p><a href="{{ $url }}" class="btn btn-secondary">Ver detalles &raquo;</a></p>
    </div>
</div>
