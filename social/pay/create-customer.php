<?php

	require_once('config.php');



	if (isset($_POST['email']) && isset($_POST['payment_method']))

	{

		

		//create customer.

		

		 	

		

		



		

		// This creates a new Customer and attaches the default PaymentMethod in one API call.

		$customer = \Stripe\Customer::create([

		  'payment_method' => $_POST['payment_method'],

		  'email' => $_POST['email'],

		  'invoice_settings' => [

		    'default_payment_method' => $_POST['payment_method']

		  ]

		]);



		





		$plan = \Stripe\Plan::create([

		    'currency' => 'usd',

		    'interval' => 'month',

		    'product' => 'prod_GSyLeB0OGDroiO',

		    'nickname' => $_POST['to'],

		    'amount' => 299,

		]);

	//	echo $customer;

		

		//create a subscription

		$subscription = \Stripe\Subscription::create([

	    "customer" => $customer['id'],

	    "items" => [

	      [

	        "plan" => $plan['id'],

	      ],

	    ], 

	    "expand" => ['latest_invoice.payment_intent']

	    ]);







		echo json_encode($subscription);

	}





?>