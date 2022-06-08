<?php
    require_once(__DIR__ . '/vendor/autoload.php');
    use \Mailjet\Resources;
    define('API_PUBLIC_KEY', '7983095634bfc78d3a7a94de61db9d7f');
    define('API_PRIVATE_KEY', '68832a614e80fc00f7a2db44d5829033');
    $mj = new \Mailjet\Client(API_PUBLIC_KEY, API_PRIVATE_KEY,true,['version' => 'v3.1']);

    if(!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['subject']) && !empty($_POST['message'])){
      $name = htmlspecialchars($_POST['name']);
      $email = htmlspecialchars($_POST['email']);
      $subject = htmlspecialchars($_POST['subject']);
      $message = htmlspecialchars($_POST['message']);

    if(filter_var($email, FILTER_VALIDATE_EMAIL)){
    $body = [
    'Messages' => [
      [
        'From' => [
          'Email' => "sow.hamadi@gmail.com",
          'Name' => "Hamadi"
        ],
        'To' => [
          [
            'Email' => "sow.hamadi@gmail.com",
            'Name' => "Hamadi"
          ]
        ],
        'Subject' => "Greetings from Mailjet.",
        'TextPart' => "$email, $message",
        'HTMLPart' => "<h3>Dear passenger 1, welcome to <a href='https://www.mailjet.com/'>Mailjet</a>!</h3><br />May the delivery force be with you!",
        'CustomID' => "AppGettingStartedTest"
      ]
      ]
  ];
  
  $response = $mj->post(Resources::$Email, ['body' => $body]);
  $response->success();
  echo "Email envoyé avec succès !";
 }
 else{
  echo "Email non valide";
 }
} else {
   header('Location: index.php');
   die();
} 

