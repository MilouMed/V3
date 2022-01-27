<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Incentive House Messages</title>

<link rel="shortcut icon" href="images/logo.jpg">
<link href="https://fonts.googleapis.com/css2?family=Merienda&display=swap" rel="stylesheet">
   
  <link rel="stylesheet" href="css/bootstrap.min.css" crossorigin="anonymous">
 
<style>
    
</style>
</head> 
 
<body style="font-family: Merienda; ">
     
    <div class="col-md-12  text-center  " style="margin-top:20%;">
<!-- <label   class="col-md-12  text-center"> --> 

<?php
require_once(__DIR__ . '/vendor/autoload.php');

use \Mailjet\Resources;

define('API_PUBLIC_KEY', '2b967e781c17db1f6cda275cc663f3c9');
define('API_PRIVATE_KEY', 'd83d62da141fbefca1ce459dbf88af82');
$mj = new \Mailjet\Client(API_PUBLIC_KEY, API_PRIVATE_KEY, true, ['version' => 'v3.1']);
 

if (!empty($_POST['_name']) && !empty($_POST['subject']) && !empty($_POST['email']) && !empty($_POST['message'])) {

    $Name_ = htmlspecialchars($_POST['_name']);
    $Subject = htmlspecialchars($_POST['subject']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);
    
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {

        $date1 = date('Y-m-d'); // Date du jour
        setlocale(LC_TIME, "fr_FR", "French"); 

        $headers = '';
        $headers .= 'De:  <' . $email . '>' . "\r\n";
        $headers .= "Nom Complete :  $Name_  \r\n";
        $headers .= "Subject f :    $Subject  \r\n";
        $headers .= "Message  : $message \r\n \r\n";
       //  $headers .= 'Fait le  ' . strftime("%A", strtotime($date1)) . ' -- ' . date("H - i - s") . ' ***** 17-12-2020  ';
        $headers .= 'Fait le  ' . strftime("%A", strtotime($date1)) . ' -- ' . date("H - i - s") . ' *****  ' . date("d-m-Y") . " \r\n";
        $headers .=  "Site web :: Incentive House \r\n";

        $body = [
            'Messages' => [
                [
                    'From' => [
                        'Email' => "develop26master@gmail.com",
                        'Name' => "Message du site web Incentive House"
                    ],
                    'To' => [
                        [
                            'Email' => "develop26master@gmail.com",
                            'Name' => "Message du site web Incentive House"
                        ]
                    ],
                    'Subject' => "SUJECT",
                    // 'TextPart' => 'De : '.$email.'  Message :'.  $message, 
                    'TextPart' => $headers,
                    // 'HTMLPart' => 'De : '.$email.'<br>  Message : '.  $message, 
                    // 'HTMLPart' => "TEXT EMAIL", 
                ]
            ]
        ];
        // $response = $mj->post(Resources::$Email, ['body' => $body]);
        // $response->success(); 
        echo '<div class="p-3 mb-2 bg-success text-white">Email envoyé avec succès !</div>';
  
    } else {    
        echo '<div class="p-3 mb-2 bg-danger text-white">Email non valide</div>';
      
    }
} else {
    // header('Location: index-1.html#contact');
    // header('Location: index-1.html');
    // echo "location v";
    //   <div class="p-3 mb-2 bg-warning text-dark">.bg-warning</div>
        echo '<div class="p-3 mb-2 bg-danger text-white">Erreur !!!</div> '; 
}

// echo '<div class="p-3 mb-2 bg-danger text-white">Email non valide</div>';
// echo '<div class="p-3 mb-2 bg-success text-white">Email envoyé avec succès !</div>';
echo ' <br><br><br><br> <a href="index.html">Reteur à la page </a>';
 
?> 
    </div>
    <br><br>
    
 <!-- Button trigger modal -->
    <!-- <div class="col-md-12  text-center">
<input type="button" class="btn btn-outline-primary " value="sende 0 Inpuut " data-toggle="modal" data-target="#exampleModal">
    -->
 
   
<!-- --><script src="js/bootstrap.min.js"></script> 
<!-- <script src="js/jquery-3.6.0.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script> -->


   <!-- jQuery first, then Popper.js, then Bootstrap JS 
   <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  --><!--   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script> -->

 <!-- <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>  -->
 <!-- <link rel="stylesheet" href="css/sweetalert2.min.css">   -->
<script src="js/sweetalert2@11.js"></script>  


<hr><!-- 
<input type="button" value="Envoyer" class="btn btn-outline-primary " id="btn_send_sontact" onclick="f1()">
 
--><script src="js/jquery.js"></script>  

</body>
</html>