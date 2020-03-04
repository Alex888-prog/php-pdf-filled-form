<?php


require_once('config.php');
if(isset($_POST['email']))

{

	

	$cus = \Stripe\Customer::all(['email' => $_POST['email']]);



	//$subscription =  \Stripe\Customer::all(['customer' => $cus['data'][0]['id']]);



	echo  $cus['data'][0]['id'];

}





?>