<?php
function contact($name, $email, $message) {
    // Telegram
    //
    // Replace this function with anything you want.
    $token   = "BOT:TOKEN";
    $id      = "TELEGRAMID";
    $message = "📧<b>From:</b> $name [<code>$email</code>]\n<i>$message</i>";
    $url = "https://api.telegram.org/bot" . $token . "/sendMessage?chat_id=" . $id ."&parse_mode=HTML";
    $url = $url . "&text=" . urlencode($message);
    file_get_contents($url);
}
