<?php

	
	require_once('config.php');


	if (isset($_POST['to']) && isset($_POST['customerID']))

	{

		$plan = \Stripe\Plan::create([

		    'currency' => 'usd',

		    'interval' => 'month',

		    'product' => 'prod_GSyLeB0OGDroiO',

		    'nickname' => $_POST['to'],

		    'amount' => 299,

		]);

		

		

		//create a subscription

		$subscription = \Stripe\Subscription::create([

	    "customer" => $_POST['customerID'],

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