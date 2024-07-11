$(function () {
    $("#form2").validate({
        submitHandler: function (form) {
            $("#cantidadO").val($("#cantidadProd").val());
            form.submit();
        }
    });
});

