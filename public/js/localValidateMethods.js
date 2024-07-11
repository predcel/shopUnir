// Método para validar un CURP con expresión regular
$.validator.addMethod("CURP", function (value, element) {
    if (value !== '') {
        var patt = new RegExp("^[A-Z][A,E,I,O,U,X][A-Z]{2}[0-9]{2}[0-1][0-9][0-3][0-9][M,H][A,B,C,D,G,H,J,M,N,O,P,Q,S,T,V,Y,Z][C,E,F,G,H,L,M,N,P,R,S,T,Z][B,C,D,F,G,H,J,K,L,M,N,Ñ,P,Q,R,S,T,V,W,X,Y,Z]{3}[0-9,A-Z][0-9]$");
        return patt.test(value);
    } else {
        return true;
    }
}, "Ingrese una CURP valida");

$.validator.addMethod("formatoFecha", function (value, element) {
    if (value !== '') {
        var patt = new RegExp("^[0-9]{4}[\-](0[1-9]|1[0-2])[\-]([0-2][0-9]|3[0-1])$");
        return patt.test(value);
    } else {
        return true;
    }
}, "El formato de fecha debe ser aaaa-mm-dd");


// Método para revisar que un archivo recibido no pese mas de 10 MB
$.validator.addMethod("FileSize10MB", function (value, element) {
    if (element.files[0].size <= 10485760) {
        return true;
    } else {
        return false;
    }
});


// Método para revisar que fechaInicio no sea mayor que fechaFin
// value = $("#fechaFin").val()
$.validator.addMethod("fechasCorrectas", function (value, element) {
    var value2 = $("#fechaInicio").val();

    if (value > value2) {
        return true;
    } else {
        return false;
    }
});


// Método para revisar que nacimiento (fecha de nacimiento) no sea mayor que hoy
// Las fechas tienen que estar en el mismo formato para que puedan ser comparadas
// Usamos el formato yy-mm-dd
// $.validator.addMethod("fechaNacimiento", function (value, element) {
//     // Obtenemos un objeto de tipo fecha para poder obtener la fecha actual
//     var fechaHoy = new Date();

//     // El método getMonth() regresa un solo dígito por lo que concatenamos un 0
//     var mes = (fechaHoy.getMonth() + 1).toString();
//     if(mes.length == 1){
//         mes = "0" + mes;
//     }

//     // Obtenemos la fecha de hoy en el formato necesario
//     fechaHoy =  fechaHoy.getFullYear() + "/" + mes + "/" + fechaHoy.getDate() ;
//     console.log(value);
//     console.log(fechaHoy);

//     // Si se quiere verificar que una fecha de nacimiento sea mayor a 15 años
//     // var mayorDe15 = new Date(fechaHoy.getFullYear()-15, fechaHoy.getMonth(), fechaHoy.getDate());

//     if (value < fechaHoy) {
//         return true;
//     } else {
//         return false;
//     }
// });

