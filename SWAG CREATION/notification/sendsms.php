<?php
require('textlocal.class.php');

$textlocal = new Textlocal('karthikb2999@gmail.com', 'K@rthik77');

$numbers = array(9110415681);
$sender = 'TXTLCL';

$message = 'Booking is confirmed';

try {
    $result = $textlocal->sendSms($numbers, $message, $sender);
    print_r($result);
} catch (Exception $e) {
    die('Error: ' . $e->getMessage());
}
?>