@component('components.layout')
    @slot('linksCss', '')
    @slot('JSscripts')
        <script src="{{ asset('js/myVideos.js') }}"></script>
    @endslot
    @slot('body')
        <x-menu>{{ $carrito }}</x-menu>
        <input type="hidden" name="urlAsset" id="urlAsset" value="{{ URL::asset('') }}">
        <div class="row justify-content-center align-items-center mt-2">
            <div class="col-12 text-center">
                <h2>Inspección de cascos</h2>
            </div>
        </div>

        <div class="row justify-content-end align-items-center mt-4">
            <div class="col-lg-8 text-center">
                <video controls poster="{{ asset('images/video1poster.png') }}" width="100%" id="videoPlayer">
                    <source id="sourceVideo" src="{{ asset('videos/Casco Alpinestars SUPERTECH R10.mp4') }}">
                    <track src="{{ asset('videos/subtitulos/subEnVideo1.vtt') }}" kind="subtitles" srclang="en"
                        label="Ingles">
                    <track src="{{ asset('videos/subtitulos/subEsVideo1.vtt') }}" kind="subtitles" srclang="es"
                        label="Español">
                    Tu navegador no soporta video HTML5.
                </video>
                <br>
                <button data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-title="Play/Pause" class="btn btn-primary"
                    id="playPause">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-play-fill" viewBox="0 0 16 16">
                        <path
                            d="m11.596 8.697-6.363 3.692c-.54.313-1.233-.066-1.233-.697V4.308c0-.63.692-1.01 1.233-.696l6.363 3.692a.802.802 0 0 1 0 1.393" />
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-pause-fill" viewBox="0 0 16 16">
                        <path
                            d="M5.5 3.5A1.5 1.5 0 0 1 7 5v6a1.5 1.5 0 0 1-3 0V5a1.5 1.5 0 0 1 1.5-1.5m5 0A1.5 1.5 0 0 1 12 5v6a1.5 1.5 0 0 1-3 0V5a1.5 1.5 0 0 1 1.5-1.5" />
                    </svg>
                </button>
                <button data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-title="Reiniciar" class="btn btn-primary"
                    id="reload">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-arrow-clockwise" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M8 3a5 5 0 1 0 4.546 2.914.5.5 0 0 1 .908-.417A6 6 0 1 1 8 2z" />
                        <path
                            d="M8 4.466V.534a.25.25 0 0 1 .41-.192l2.36 1.966c.12.1.12.284 0 .384L8.41 4.658A.25.25 0 0 1 8 4.466" />
                    </svg>
                </button>
                <button data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-title="Video anterior" class="btn btn-dark"
                    id="backwardBtn">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-skip-backward-fill" viewBox="0 0 16 16">
                        <path
                            d="M.5 3.5A.5.5 0 0 0 0 4v8a.5.5 0 0 0 1 0V8.753l6.267 3.636c.54.313 1.233-.066 1.233-.697v-2.94l6.267 3.636c.54.314 1.233-.065 1.233-.696V4.308c0-.63-.693-1.01-1.233-.696L8.5 7.248v-2.94c0-.63-.692-1.01-1.233-.696L1 7.248V4a.5.5 0 0 0-.5-.5" />
                    </svg>
                </button>
                <button data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-title="Más lento" class="btn btn-dark"
                    id="slowBtn">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-rewind-fill" viewBox="0 0 16 16">
                        <path
                            d="M8.404 7.304a.802.802 0 0 0 0 1.392l6.363 3.692c.52.302 1.233-.043 1.233-.696V4.308c0-.653-.713-.998-1.233-.696z" />
                        <path
                            d="M.404 7.304a.802.802 0 0 0 0 1.392l6.363 3.692c.52.302 1.233-.043 1.233-.696V4.308c0-.653-.713-.998-1.233-.696z" />
                    </svg>
                </button>
                <button data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-title="Más rápido" class="btn btn-dark"
                    id="fastBtn">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-fast-forward-fill" viewBox="0 0 16 16">
                        <path
                            d="M7.596 7.304a.802.802 0 0 1 0 1.392l-6.363 3.692C.713 12.69 0 12.345 0 11.692V4.308c0-.653.713-.998 1.233-.696z" />
                        <path
                            d="M15.596 7.304a.802.802 0 0 1 0 1.392l-6.363 3.692C8.713 12.69 8 12.345 8 11.692V4.308c0-.653.713-.998 1.233-.696z" />
                    </svg>
                </button>
                <button data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-title="Siguiente video" class="btn btn-dark"
                    id="forwardBtn">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-skip-forward-fill" viewBox="0 0 16 16">
                        <path
                            d="M15.5 3.5a.5.5 0 0 1 .5.5v8a.5.5 0 0 1-1 0V8.753l-6.267 3.636c-.54.313-1.233-.066-1.233-.697v-2.94l-6.267 3.636C.693 12.703 0 12.324 0 11.693V4.308c0-.63.693-1.01 1.233-.696L7.5 7.248v-2.94c0-.63.693-1.01 1.233-.696L15 7.248V4a.5.5 0 0 1 .5-.5" />
                    </svg>
                </button>
                <button data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-title="Silenciar" class="btn btn-secondary"
                    id="muting">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-volume-mute-fill" viewBox="0 0 16 16">
                        <path
                            d="M6.717 3.55A.5.5 0 0 1 7 4v8a.5.5 0 0 1-.812.39L3.825 10.5H1.5A.5.5 0 0 1 1 10V6a.5.5 0 0 1 .5-.5h2.325l2.363-1.89a.5.5 0 0 1 .529-.06m7.137 2.096a.5.5 0 0 1 0 .708L12.207 8l1.647 1.646a.5.5 0 0 1-.708.708L11.5 8.707l-1.646 1.647a.5.5 0 0 1-.708-.708L10.793 8 9.146 6.354a.5.5 0 1 1 .708-.708L11.5 7.293l1.646-1.647a.5.5 0 0 1 .708 0" />
                    </svg>
                </button>
                <button data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-title="Bajar volumen"
                    class="btn btn-secondary" id="volLess">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-volume-down-fill" viewBox="0 0 16 16">
                        <path
                            d="M9 4a.5.5 0 0 0-.812-.39L5.825 5.5H3.5A.5.5 0 0 0 3 6v4a.5.5 0 0 0 .5.5h2.325l2.363 1.89A.5.5 0 0 0 9 12zm3.025 4a4.5 4.5 0 0 1-1.318 3.182L10 10.475A3.5 3.5 0 0 0 11.025 8 3.5 3.5 0 0 0 10 5.525l.707-.707A4.5 4.5 0 0 1 12.025 8" />
                    </svg>
                </button>
                <button data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-title="Subir volumen"
                    class="btn btn-secondary" id="volMore">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-volume-up-fill" viewBox="0 0 16 16">
                        <path
                            d="M11.536 14.01A8.47 8.47 0 0 0 14.026 8a8.47 8.47 0 0 0-2.49-6.01l-.708.707A7.48 7.48 0 0 1 13.025 8c0 2.071-.84 3.946-2.197 5.303z" />
                        <path
                            d="M10.121 12.596A6.48 6.48 0 0 0 12.025 8a6.48 6.48 0 0 0-1.904-4.596l-.707.707A5.48 5.48 0 0 1 11.025 8a5.48 5.48 0 0 1-1.61 3.89z" />
                        <path
                            d="M8.707 11.182A4.5 4.5 0 0 0 10.025 8a4.5 4.5 0 0 0-1.318-3.182L8 5.525A3.5 3.5 0 0 1 9.025 8 3.5 3.5 0 0 1 8 10.475zM6.717 3.55A.5.5 0 0 1 7 4v8a.5.5 0 0 1-.812.39L3.825 10.5H1.5A.5.5 0 0 1 1 10V6a.5.5 0 0 1 .5-.5h2.325l2.363-1.89a.5.5 0 0 1 .529-.06" />
                    </svg>
                </button>
                <button data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-title="Cambiar modo de video"
                    class="btn btn-light" id="screenMode">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-aspect-ratio-fill" viewBox="0 0 16 16">
                        <path
                            d="M0 12.5v-9A1.5 1.5 0 0 1 1.5 2h13A1.5 1.5 0 0 1 16 3.5v9a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 12.5M2.5 4a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 1 0V5h2.5a.5.5 0 0 0 0-1zm11 8a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-1 0V11h-2.5a.5.5 0 0 0 0 1z" />
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-aspect-ratio" viewBox="0 0 16 16">
                        <path
                            d="M0 3.5A1.5 1.5 0 0 1 1.5 2h13A1.5 1.5 0 0 1 16 3.5v9a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 12.5zM1.5 3a.5.5 0 0 0-.5.5v9a.5.5 0 0 0 .5.5h13a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5z" />
                        <path
                            d="M2 4.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1H3v2.5a.5.5 0 0 1-1 0zm12 7a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1 0-1H13V8.5a.5.5 0 0 1 1 0z" />
                    </svg>
                </button>
                <button data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-title="Pantalla completa"
                    class="btn btn-light" id="fullScreen">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-arrows-fullscreen" viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                            d="M5.828 10.172a.5.5 0 0 0-.707 0l-4.096 4.096V11.5a.5.5 0 0 0-1 0v3.975a.5.5 0 0 0 .5.5H4.5a.5.5 0 0 0 0-1H1.732l4.096-4.096a.5.5 0 0 0 0-.707m4.344 0a.5.5 0 0 1 .707 0l4.096 4.096V11.5a.5.5 0 1 1 1 0v3.975a.5.5 0 0 1-.5.5H11.5a.5.5 0 0 1 0-1h2.768l-4.096-4.096a.5.5 0 0 1 0-.707m0-4.344a.5.5 0 0 0 .707 0l4.096-4.096V4.5a.5.5 0 1 0 1 0V.525a.5.5 0 0 0-.5-.5H11.5a.5.5 0 0 0 0 1h2.768l-4.096 4.096a.5.5 0 0 0 0 .707m-4.344 0a.5.5 0 0 1-.707 0L1.025 1.732V4.5a.5.5 0 0 1-1 0V.525a.5.5 0 0 1 .5-.5H4.5a.5.5 0 0 1 0 1H1.732l4.096 4.096a.5.5 0 0 1 0 .707" />
                    </svg>
                </button>
                <button data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-title="Tomar captura"
                    class="btn btn-info" id="screenShot">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-camera-fill" viewBox="0 0 16 16">
                        <path d="M10.5 8.5a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0" />
                        <path
                            d="M2 4a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2h-1.172a2 2 0 0 1-1.414-.586l-.828-.828A2 2 0 0 0 9.172 2H6.828a2 2 0 0 0-1.414.586l-.828.828A2 2 0 0 1 3.172 4zm.5 2a.5.5 0 1 1 0-1 .5.5 0 0 1 0 1m9 2.5a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0" />
                    </svg>
                </button>
            </div>
            <div class="col-lg-4 text-center" id="colVideos">
                <a href="">
                    <div class="row border border-danger border-3" id="divVideo0">
                        <input type="hidden" id="imagen0" value="0">
                        <div class="col-6">
                            <img src="{{ asset('images/video1poster.png') }}" height="120">
                        </div>
                        <div class="col-6">Casco 1</div>
                    </div>
                </a>
                <a href="">
                    <div class="row mt-1 border border-primary border-1" id="divVideo1">
                        <input type="hidden" id="imagen1" value="1">
                        <div class="col-6">
                            <img src="{{ asset('images/agvK1.png') }}" height="120">
                        </div>
                        <div class="col-6">Casco 2</div>
                    </div>
                </a>
                <a href="">
                    <div class="row mt-1 border border-primary border-1" id="divVideo2">
                        <input type="hidden" id="imagen2" value="2">
                        <div class="col-6">
                            <img src="{{ asset('images/araiRx.png') }}" height="120">
                        </div>
                        <div class="col-6">Casco 3</div>
                    </div>
                </a>
                <a href="">
                    <div class="row mt-1 border border-primary border-1" id="divVideo3">
                        <input type="hidden" id="imagen3" value="3">
                        <div class="col-6">
                            <img src="{{ asset('images/redBull.png') }}" height="120">
                        </div>
                        <div class="col-6">Casco 4</div>
                    </div>
                </a>
            </div>
        </div>
        <div class="row justify-content-center mt-3">
            <div class="col-lg-6 text-center">
                <canvas id="frame"></canvas>
            </div>
        </div>

    @endslot
@endcomponent
