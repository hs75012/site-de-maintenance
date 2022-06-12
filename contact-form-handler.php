<?php
    require_once(__DIR__ . '/vendor/autoload.php');
    use \Mailjet\Resources;
    include('security.php');
    require '_inc.php';

    $mj = new \Mailjet\Client(API_PUBLIC_KEY, API_PRIVATE_KEY,true,['version' => 'v3.1']);
    if(!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['subject']) && !empty($_POST['message']) && isset($mj)){
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
        'HTMLPart' => "<h3>".$message."<br />Vous avez un message de la part de ".$name." adresse email: ".$email."\n!",
        'CustomID' => "AppGettingStartedTest"
      ]
      ]
  ];
  
  $response = $mj->post(Resources::$Email, ['body' => $body]);
  $response->success();
  //echo "Email envoyé avec succès !";
  $_SESSION['success'] = 1;
  header('Location: contact.php');

 }
 else{
  echo "Email non valide";
  
 }
} else {
  if (empty($mj) || is_null($mj) || $mj == NULL) echo "L'api MailJet a un problème";
   header('Location: contact.php');
   die();
} 

