$(function () {
    $('#mensajeForm').validate({
        submitHandler: function (form) {
            alertify.alert('storeShop', `<div class="row justify-content-center align-items-center g-2 mt-2">
            <div class="col-sm-10">
                <div class="alert alert-info text-center" role="alert">
                    <h5>
                    Gracias por su mensaje, en breve nos comunicaresmos contigo.
                    </h5>
                </div>
            </div>
        </div>`)
                .setting({
                    'frameless': false,
                    'onclose': () => {
                        $(location).attr("href", window.location.href);
                    }
                });
        }
    });
});
