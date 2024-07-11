$(function () {
    const monto = parseFloat($('#cuentaTotal').val());
    renderiza(monto);
});


const renderiza = (precio) => {
    $('#paypal-button-container').empty();
    paypal.Buttons({
        style: {
            color: 'blue',
            shape: 'pill',
            label: 'pay'
        },
        createOrder: (data, actions) => {
            return actions.order.create({
                purchase_units: [{
                    amount: {
                        value: precio
                    },
                    description: `Pago Store Shop`
                }]
            });
        },

        onApprove: (data, actions) => {
            actions.order.capture().then((detalles) => {
                console.log(detalles.payer.payer_id);
                myalert(`SU PAGO SE HA REALIZADO EXITOSAMENTE CON EL FOLIO: ${detalles.payer.payer_id}`)
            });
        },

        onCancel: (data) => {
            console.log(`CIERRA VENTANA PAGO:`);
            alertify.alert('storeShop', `<div class="row justify-content-center align-items-center g-2 mt-2">
            <div class="col-sm-10">
                <div class="alert alert-info text-center" role="alert">
                    <h5>
                    SU PAGO NO HA SIDO PROCESADO
                    </h5>
                </div>
            </div>
        </div>`)
                .setting({ 'frameless': false });
        }
    }).render('#paypal-button-container');
}

const myalert = (msg) => {
    alertify.alert('myShop',
        `<div class="row justify-content-center align-items-center g-2 mt-2">
                                <div class="col-sm-10">
                                    <div class="alert alert-info text-center" role="alert">
                                        <h5>
                                            ${msg}
                                        </h5>
                                    </div>
                                </div>
                            </div>
                            `).setting({
            'frameless': true,
            'resizable': true,
            'onclose': () => {
                let myUrl = $('#urlAsset').val();
                myUrl = `${myUrl}cleanCarrito`;
                $(location).attr("href", myUrl);
            }
        })
        .resizeTo(800, 250);
}
