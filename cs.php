<?php
date_default_timezone_set("Asia/Tashkent");
$week = date('w');
if ($week == 5) {
    $url = "https://api.telegram.org/bot6105706009:AAGNtsgnYVN0KM9PwxWGpVY6XsCjwCt2tM8/sendPoll";

    $curl = curl_init($url);
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_POST, true);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

    $headers = array(
        "Accept: application/json",
        "Content-Type: application/json",
    );
    curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);


    $data = json_encode([
        "chat_id" => -1001571807802,
        "question" => "who will play CS GO ?",
        "options" =>
            [
                "yes i will",
                "no, I will not"
            ],
        "is_anonymous" => false
    ]);

    curl_setopt($curl, CURLOPT_POSTFIELDS, $data);

//for debug only!
    curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

    $resp = curl_exec($curl);
    curl_close($curl);
    var_dump($resp);
}
