<?php
// Require the bundled autoload file - the path may need to change
// based on where you downloaded and unzipped the SDK
require __DIR__ . '/twilio-php-master/Twilio/autoload.php';
// Use the REST API Client to make requests to the Twilio REST API
use Twilio\Rest\Client;
// Your Account SID and Auth Token from twilio.com/console
$sid = 'ACdafadaa1d3251521abf5faa9c84b6982';
$token = '410d5f48a19ecda830c2a0323718d635';
$client = new Client($sid, $token);
//$mobileno = $_SESSION['mobile'] ;
$phoneno ="8106110298";
$msg_number = '+91'.$phoneno;
// Use the client to do fun stuff like send text messages!
$a=$client->messages->create(
    // the number you'd like to send the message to
    $msg_number,
    array(
        // A Twilio phone number you purchased at twilio.com/console
        'from' => '+13372107332',
        // the body of the text message you'd like to send
        'body' => "If u are free to donate blood you can contact us"
    )
);
if($a)
{
	echo "message sent successfully";
}
else
{
	echo "error";
}
?>