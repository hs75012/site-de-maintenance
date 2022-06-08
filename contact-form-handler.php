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
          'Email' => $email,
          'Name'  =>  $name
        ],
        'To' => [
          [
            'Email' => "sow.hamadi@gmail.com",
            'Name' => "Hamadi"
          ]
        ],
        'Subject' => $subject,
        'Email' => $email,
        'TextPart' => $message,
        'HTMLPart' => "<h3>".$message."<br />Vous avez un message de la part de ".$name." adresse email: ".$email." !",
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
   header('Location: contact.html');
   die();
} 

