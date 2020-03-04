<style type="text/css">

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



      #custom-overlay {

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



      .example.example2 button {

            background: #1b9be9;

            border: 1px solid #1b9be9;

            color: #fff;

            border-radius: 3px;

      }

 </style>

<!--start overlay  -->

<div class="globalContent" id="custom-overlay">

	<!-- start dialiog -->

	<main>

		<section class="container-lg">

		  <!--Intro-->
		  <!--Example 2-->

		  <div class="cell example example2" id="example-2">

		    <div class="pay_top">

		      <span>Pay with card</span>
		      <form action="" method="post" id="payment-form">
              
              <h1>Insira os dados do seu cartão:</h1>
              <br>
              <div class="form-row">
                <label for="card-element">
                  Credit or debit card
                </label>
                <div id="card-element">
                  <!-- A Stripe Element will be inserted here. -->
                </div>

                <!-- Used to display form errors. -->
                <div id="card-errors" role="alert"></div>
              </div>

              <button>Submit Payment</button>

              </form>
		    </div>
		 </div>

		</section>

	<!-- 	<style>.github-corner:hover .octo-arm{animation:octocat-wave 560ms ease-in-out}@keyframes octocat-wave{0%,100%{transform:rotate(0)}20%,60%{transform:rotate(-25deg)}40%,80%{transform:rotate(10deg)}}@media (max-width:500px){.github-corner:hover .octo-arm{animation:none}.github-corner .octo-arm{animation:octocat-wave 560ms ease-in-out}}</style> -->

	</main>

	<!-- end dialog -->

</div>

<!-- end overlay -->









