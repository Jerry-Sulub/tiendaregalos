var e=document.getElementById('price');
var price = e.getAttribute('value');

paypal.Buttons({
  style:{
    shape:'pill'
  },
  createOrder: function(data, actions){
    return actions.order.create({
      purchase_units:[{
        amount:{
          value: price
        }
      }]
    });
  },
  onApprove: function(data, actions){
    actions.order.capture().then(function (detalles){
      console.log(detalles);
      alert("Pago realizado con éxito")
    });
  },
  onCancel: function(data){
    alert("Pago Cancelado");
    console.log(data);
  }
}).render('#paypal-button-container');