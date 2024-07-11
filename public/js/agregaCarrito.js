$(function () {
    $(".productoForm").submit(function (e) {
        e.preventDefault();
        const identificador = $(this).children('#identificador').val();
        let cantidad = $(this).children('#cantidadProd').val();
        const Token = $(this).children('input[name=_token]').val();
        const url = $('#urlAsset').val();

        if (typeof cantidad === "undefined") {
            cantidad = $('#cantidadProd').val();
        }

        $.ajax({
            type: "post",
            url: `${url}agregaCarrito`,
            data: { id: identificador, cantidad: cantidad, _token: Token },
        }).done(function (r) {
            $('#cantidadProductos').empty().html(r[0]);
            const myUrl = `${url}pagos`;
        }).fail(function () {
            console.log("Hubo un error");
        });
    });
});

// valorBtn = () => {
//     $('.btn').click(function (e) {
//         e.preventDefault();
//         console.log($(this).val());
//     });
// }
