<?php
require_once 'class/bsgateway.php';
$config = array('appid'=>'12345','callback'=>1);
$messageObj = new BSGateway($config);

// Test Login Credentials
$login_status = $messageObj->tryLogin('raphealolams@yahoo.com', 'ajilore');

// Check Account Balance
$account_balance = $messageObj->checkBalance('raphealolams@yahoo.com', 'ajilore');

// Sending Sample Text
$response = $messageObj->sendMessage('raphealolams@yahoo.com', 'ajilore', 'SENDER', '234XXXXXXXXXX', 'Your Message', 0);

// Sending a Flash Text Message
$response = $messageObj->sendMessage('raphealolams@yahoo.com', 'ajilore', 'SENDER', '234XXXXXXXXXX', 'Your Message', 1);

// Sending a Scheduled Message 
$response = $messageObj->scheduleMessage('yourname@example.com', 'yourpassword', 'SENDER', '234XXXXXXXXXX', 'Your Message', 1345898220);

// Loading Delivery Report
$response = $messageObj->loadDLReport('AA297098789');




//https://www.bbnplace.com/sms/bulksms/bulksms.php?username=$username&password=$password&sender=$sender&message=$text&mobile=$mobiles