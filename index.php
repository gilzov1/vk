<?php

$token = "vk1.a.aHPNZWhg2PyjAnDhvrz_uJ9QgceeVBn-KzCXRbDO0r7H9HvFOGWO4doxvWKmVbHR4DAg7icO7uD7ryO1V7lTzvx_AtOiz68TIaY1aG6vhprGP1T5wB35b2BXKF_rQJV1JO0l3tGqhlr1x0FSOLL2EqS_2by9C10FVXRGZIIgVh0nK0ZDn-h5zpJh-TA0LOhE69kkOjXiSs8sAZBbB722dQ";

$user_id = $_GET['vk_id'];
$msg = $_GET['msg'];

$text = "Код подтверждения: ".$msg;

$url = "https://api.vk.com/method/messages.send?user_id=".$user_id.
"&random_id=".rand(1,999999999).
"&message=".urlencode($text).
"&access_token=".$token.
"&v=5.131";

echo file_get_contents($url);

?>
