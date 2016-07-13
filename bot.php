<?php

$botToken = "223138735:AAEUkvdRUMHh876IaKsslmkGpmVk3GG_aWA";
$website = "https://api.telegram.org/bot".$botToken;

$update = file_get_contents('php://input');
$update = json_decode($update, TRUE);


$chatId = $update["message"]["chat"]["id"];
$message = $update["message"]["text"];


switch($message) {
 
 case "/test":
  sendMessage($chatId, "test");
  break;
   case "/developer":
  sendMessage($chatId, "My Developer Amir White Hat");
  break;
   case "/hello":
  sendMessage($chatId, "hi");
  break;
   case "/start":
  sendMessage($chatId, "bot is started");
  break;
 case "/hi":
  sendMessage($chatId, "hi there!");
  break;
 default: 
  sendMessage($chatId, "default");
 
}

function sendMessage ($chatId, $message) {
 
 $url = $GLOBALS[website]."/sendMessage?chat_id=".$chatId."&text=".urlencode($message);
 file_get_contents($url);
 
}
 




?>
