@component('components.layout')
    @slot('linksCss', '')
    @slot('JSscripts')
        <script src="{{ asset('js/contacto.js') }}"></script>
    @endslot
    @slot('body')
        <x-menu>{{ $carrito }}</x-menu>
        <div class="row justify-content-center align-items-center g-2 my-2">
            <div class="col-lg-3 text-center">
                <p>Contactanos mediante</p>
                <p>Correo: <br> <a href="mailto:predcel@hotmail.com">predcel@hotmail.com</a></p>
                <p>Telefono: <br> 5560308000 </p>
            </div>
            <div class="col-lg-5">
                <div class="card">
                    <div class="card-header">
                        Dejanos un mensaje
                    </div>
                    <div class="card-body">
                        <form action="#" method="POST" id="mensajeForm">
                            <div class="row justify-content-center align-items-center g-2 my-1">
                                <div class="col-10">
                                    <label for="nombre">Nombre</label>
                                    <input type="text" class="form-control" name="nombre" id="nombre" required>
                                </div>
                            </div>
                            <div class="row justify-content-center align-items-center g-2 my-1">
                                <div class="col-10">
                                    <label for="correo">Correo</label>
                                    <input type="email" class="form-control" name="correo" id="correo" required>
                                </div>
                            </div>
                            <div class="row justify-content-center align-items-center g-2 my-1">
                                <div class="col-10">
                                    <label for="msg">Mensaje</label>
                                    <textarea class="form-control" style="resize: none" name="msg" id="msg" cols="30" rows="5" required></textarea>
                                </div>
                            </div>
                            <div class="row justify-content-center align-items-center g-2 my-1">
                                <div class="col-2">
                                    <button class="btn btn-success">Enviar</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endslot
@endcomponent
