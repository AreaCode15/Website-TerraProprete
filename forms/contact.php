<?php
	require_once(__DIR__.'/vendor/autoload.php');
	use \Mailjet\Resources;

	define('API_USER', '5643f20e6d7c930f4350c3416e19b7ef');
	define('API_LOGIN', 'b9a875920101663678e044233616f0b4');
	$mj = new \Mailjet\Client(API_USER, API_LOGIN,true,['version' => 'v3.1']);

	if(!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['message'])){
		$name = htmlspecialchars($_POST['name']);
		$email = htmlspecialchars($_POST['email']);
		$message = htmlspecialchars($_POST['message']);

		if(filter_var($email, FILTER_VALIDATE_EMAIL)){
			$body = [
				'Messages' => [
				  [
					'From' => [
					  'Email' => "contact@terra-multiservices.fr",
					  'Name' => "Arthur"
					],
					'To' => [
					  [
						'Email' => "contact@terra-multiservices.fr",
						'Name' => "Arthur"
					  ]
					],
					'Subject' => "Mail provenant du Site Terra Proprete & Multiservices",
					'TextPart' => "$email, $message",
				  ]
				]
			  ];
			  $response = $mj->post(Resources::$Email, ['body' => $body]);
			  $response->success();
			  echo "Email envoyé avec succès !";

		}else{
			echo "Email non valide";
		}

	}else{
		header('Location:index.html');
		die();
	}


?>