var stripe = Stripe('pk_test_lzmUGC0klHxEVtSXuWntVaQO00Y29g3EDs');
var DIR = "/social";
var elements = stripe.elements();



var style = {

  base: {

    color: "#32325d",

    fontFamily: '"Helvetica Neue", Helvetica, sans-serif',

    fontSmoothing: "antialiased",

    fontSize: "16px",

    "::placeholder": {

      color: "#aab7c4"

    }

  },

  invalid: {

    color: "#fa755a",

    iconColor: "#fa755a"

  }

};



var card = elements.create("card", { style: style });

card.mount("#card-element");



var form = document.getElementById('payment-form');



form.addEventListener('submit', function(event) {

  event.preventDefault();

  changeLoadingState(true);

  createPaymentMethodAndCustomer(stripe, card);

});



var createPaymentMethodAndCustomer = function(stripe, card) {

  //var cardholderEmail = document.querySelector('#email').value;

  var cardholderEmail = $('#payemail').val();

  stripe.createPaymentMethod('card', card, {

      billing_details: {

        email: cardholderEmail

      }

    }).then(function(result) {

      if (result.error) {

        showCardError(result.error);

      } else {



      	console.log(result);

        createCustomer(result.paymentMethod.id, cardholderEmail);

      }

    });

  };



card.addEventListener('change', ({error}) => {

  const displayError = document.getElementById('card-errors');

  if (error) {

    displayError.textContent = error.message;

  } else {

    displayError.textContent = '';

  }

});


$('#continue-pay').click(function(){
    continuCustomer();
});






//create paement Method



async function createCustomer(paymentMethod, cardholderEmail) {

  

  $.ajax({

        url: DIR+"/pay/create-customer.php",

        type: "post",

        data: {

           email: cardholderEmail,

           payment_method: paymentMethod,

           to: $('#to').val()
        },

        success: function (response) {

          console.log(response);

           // You will get response from your PHP page (what you echo or print)

          var subscription = JSON.parse(response);

         // console.log(subscription.id)

          handleSubscription(subscription);

        }

      

    });

}



async function continuCustomer()
{
console.log($('#customerid').val());
console.log($('#to').val());
    $.ajax({

        url: DIR+"/pay/continue-customer.php",

        type: "post",

        data: {
          // email: cardholderEmail,
           customerID : $('#customerid').val(),
           to: $('#to').val(),
        },

        success: function (response) {

          console.log(response);

           // You will get response from your PHP page (what you echo or print)

          var subscription = JSON.parse(response);

         // console.log(subscription.id)

          handleSubscription(subscription);

        }

      

    });

}

function showCardError(error) {
  changeLoadingState(false);
  // The card was declined (i.e. insufficient funds, card has expired, etc)
  var errorMsg = document.querySelector('.sr-field-error');
  errorMsg.textContent = error.message;
  setTimeout(function() {
    errorMsg.textContent = '';
  }, 8000);
}


function handleSubscription(subscription) {

  const { latest_invoice } = subscription;

  const { payment_intent } = latest_invoice;



  if (payment_intent) {

    const { client_secret, status } = payment_intent;



    if (status === 'requires_action' || status === 'requires_payment_method') {

      stripe.confirmCardPayment(client_secret).then(function(result) {

        if (result.error) {

          // Display error message in your UI.

          // The card was declined (i.e. insufficient funds, card has expired, etc)

          changeLoadingState(false);

          showCardError(result.error);

        } else {

          // Show a success message to your customer

          //confirmSubscription(subscription.id);

        }

      });

    } else {

      // No additional information was needed

      // Show a success message to your customer
     location.reload();

      orderComplete(subscription);

    }

  } else {
    location.reload();
    orderComplete(subscription);

  }

}



function confirmSubscription(subscriptionId) {



  $.ajax({

    url:DIR+"/pay/subscription.php",

    type: "post",

    data: {

        subscriptionId: subscriptionId

    },

    success: function (response) {

      //console.log(response);

       // You will get response from your PHP page (what you echo or print)

      var subscription = JSON.parse(response);

     // console.log(subscription.id)

      orderComplete(subscription);

    }

  })

  // return fetch('/subscription', {

  //   method: 'post',

  //   headers: {

  //     'Content-type': 'application/json'

  //   },

  //   body: JSON.stringify({

  //     subscriptionId: subscriptionId

  //   })

  // })

  //   .then(function(response) {

  //     return response.json();

  //   })

  //   .then(function(subscription) {

  //     orderComplete(subscription);

  //   });

}



/* ------- Post-payment helpers ------- */



/* Shows a success / error message when the payment is complete */

var orderComplete = function(subscription) {

  changeLoadingState(false);

  var subscriptionJson = JSON.stringify(subscription, null, 2);

  document.querySelectorAll('.payment-view').forEach(function(view) {

    view.classList.add('hidden');

  });

  document.querySelectorAll('.completed-view').forEach(function(view) {

    view.classList.remove('hidden');

  });

  document.querySelector('.order-status').textContent = subscription.status;

  document.querySelector('code').textContent = subscriptionJson;

};




// Show a spinner on subscription submission

var changeLoadingState = function(isLoading) {

  if (isLoading) {

    document.querySelector('#spinner').classList.add('loading');

    document.querySelector('button').disabled = true;



    document.querySelector('#button-text').classList.add('hidden');

  } else {

    document.querySelector('button').disabled = false;

    document.querySelector('#spinner').classList.remove('loading');

    document.querySelector('#button-text').classList.remove('hidden');

  }

};





