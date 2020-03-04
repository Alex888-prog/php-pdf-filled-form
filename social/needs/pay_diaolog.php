<style>

   .pay_top 



      {



        background: #f6f7f9;



        border-top-left-radius: 4px;



        border-top-right-radius: 4px;



        text-align: center;



        padding: 10px 7px 10px 10px !important;



        border-bottom: 1px solid #eee;



        font-weight: 600 !important;



        font-size: 14px !important;



        text-align: left;



        width: 100%;



      }







      



      .custom-overlay {



          position: fixed; 



          display: none;



          width: 100%; 



          height: 100%; 



          top: 0;



          left: 0;



          right: 0;



          bottom: 0;



          background-color: rgba(0,0,0,0.5); 



          z-index: 4; 



          cursor: pointer; 



      }



</style>

<!--start overlay  -->

<div class="sr-root custom-overlay">

  

	

  <div class="sr-main">

  <header class="sr-header">

  <h2>Stripe</h2>

  </header>

  <div class="sr-payment-summary payment-view">

    <h1 class="order-amount">$2.99</h1>

  </div>

        <form id="payment-form" class="sr-payment-form">

          <div class="sr-combo-inputs-row">

            <div class="sr-input sr-card-element" id="card-element"></div>

          </div>

        

          <button id="submit">

            <div class="spinner hidden" id="spinner"></div>

            <span id="button-text">Pay</span><span id="order-amount"></span>

          </button>



          

        </form>
	<button  class="p_t_cancel">Cancel</button>
        <div class="sr-result hidden">

          <p>Payment completed<br/></p>

          <pre>

            <code></code>

          </pre>

        </div>

        <div class="sr-payment-summary hidden completed-view">

          <h1>Your subscription is <span class="order-status"></span></h1>

        </div>

        

    </div>

</div>



<div class="sr-root custom-overlay">

 

  <div class="sr-main">

    <header class="sr-header">

        <h1 class="order-amount">Confirm</h1>

    </header>

    <div class="sr-payment-summary payment-view">

     

      <span>you are about to be charged $2.99/monthly, are you sure you want to continue</span>

    </div>
      <div class="sr-field-error" id="card-errors" role="alert"></div>

    <button id="continue-pay">

      <div class="spinner hidden" id="spinner"></div>

      <span id="button-text">Pay</span><span id="order-amount"></span>

    </button>



    <button  class="p_t_cancel">Cancel</button>

        

        

  </div>

</div>































