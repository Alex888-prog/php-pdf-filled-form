<?php 

	require_once('config.php');

	



	if(isset($_POST['to']) && isset($_POST['email']))

	{
		
		$subid = "";
		$email = $_POST['email'];

		$to = $_POST['to'];

		$customers = \Stripe\Customer::all(['email' => $email ]);

		
		
		$customer = $customers['data'][0];
		
 		
		foreach($customer['subscriptions']['data'] as $val)

		{

			echo $val['plan']['nickname'];

			if($val['plan']['nickname'] == $_POST['to'])
			{
				$subid = $val['id'];	
			} 
			

		}
		
		if($subid != "")
		{
			


			$data = \Stripe\Subscription::retrieve($subid);
	
			$data->cancel();			

			
		
			echo "success";	

		}
		else
		{
			echo "non data";
		}


		



	}



?>
