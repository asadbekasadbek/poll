<?php
date_default_timezone_set("Asia/Tashkent");
$week = date('w');
if ($week != 6 && $week != 0) {
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

    $all = [
        [
            "chat_id" => -1001571807802,
            "question" => "What will we have for lunch ? | option from Timur",
            "options" =>
                [
                    "KFC",
                    "LOOOK",
                    "TARNOV",
                    "FISH",
                    "BBQ",
                    "MBC",
                    "BALIHOVUS",
                    "BISTRO",
                    "WOK",
                    "CAN NOT JOIN"
                ],
            "is_anonymous" => false
        ],
        [
            "chat_id" => -1001571807802,
            "question" => "What will we have for lunch ? | option from Timur",
            "options" =>
                [
                    "KFC",
                    "LOOOK",
                    "TARNOV",
                    "FISH",
                    "BBQ",
                    "MBC",
                    "BALIHOVUS",
                    "BISTRO",
                    "WOK",
                    "CAN NOT JOIN"
                ],
            "is_anonymous" => false
        ],
        [
            "chat_id" => -1001571807802,
            "question" => "What will we have for lunch ? | option from MIRKOMIL",
            "options" =>
                [
                    "BESHQOZON",
                    "FISH",
                    "KFC",
                    "OSH",
                    "BISTRO",
                    "HOTDOG",
                    "NON KABOB",
                    "BBQ",
                    "ZOHID KABAB",
                    "CAN NOT JOIN"
                ],
            "is_anonymous" => false
        ],
        [
            "chat_id" => -1001571807802,
            "question" => "What will we have for lunch ? | option from MIRKOMIL",
            "options" =>
                [
                    "BESH QOZON",
                    "TAZNOV",
                    "PLOVCITY",
                    "MAXWAY",
                    "EVOS",
                    "BOLOHOVUZ",
                    "SOMSA",
                    "KOMOLON",
                    "LOOOK",
                    "CAN NOT JOIN"
                ],
            "is_anonymous" => false
        ],
        [
            "chat_id" => -1001571807802,
            "question" => "What will we have for lunch ? | option from Azizbek Eshonaliyev",
            "options" =>
                [
                    "TARNOV",
                    "BESHQOZN",
                    "BOLOHOVUZ",
                    "MAXWAY",
                    "EVOS",
                    "BBQ",
                    "LESAILES",
                    "SOMSA",
                    "KFC",
                    "CAN NOT JOIN"
                ],
            "is_anonymous" => false
        ],
        [
            "chat_id" => -1001571807802,
            "question" => "What will we have for lunch ? | option from RUSLAN",
            "options" =>
                [
                    "KFC",
                    "LOOOK",
                    "BBQ",
                    "EVOS",
                    "BISTRO",
                    "MASTER FOOD",
                    "BENTO",
                    "BOLO HOVUZ",
                    "PIZZA",
                    "CAN NOT JOIN"
                ],
            "is_anonymous" => false
        ],
        [
            "chat_id" => -1001571807802,
            "question" => "What will we have for lunch ? | option from OTABEK",
            "options" =>
                [
                    "OSH",
                    "KFC",
                    "LOOOK",
                    "MAXWAY",
                    "EVOS",
                    "BESHBARMOG",
                    "BOLO HOVUZ",
                    "SAMSA",
                    "TARNOV",
                    "CAN NOT JOIN"
                ],
            "is_anonymous" => false
        ],
        [
            "chat_id" => -1001571807802,
            "question" => "What will we have for lunch ? | option from SHAKHRIYOR",
            "options" =>
                [
                    "LOOOK",
                    "KFC",
                    "TARNOV",
                    "EMBASSY",
                    "BBQ",
                    "BOLIHOVUZ",
                    "MAXWAY",
                    "BELLISIMO",
                    "EVOS",
                    "CAN NOT JOIN"
                ],
            "is_anonymous" => false
        ],
        [
            "chat_id" => -1001571807802,
            "question" => "What will we have for lunch ? | option from KOMIL",
            "options" =>
                [
                    "LOOOK",
                    "MAXWAY",
                    "TARNOV",
                    "SOMSA",
                    "EMBASSY BURGER",
                    "KFC",
                    "EVOS",
                    "KAMOLON OSH",
                    "BISTNO",
                    "CAN NOT JOIN"
                ],
            "is_anonymous" => false
        ],
        [
            "chat_id" => -1001571807802,
            "question" => "What will we have for lunch ? | option from RAHMATULLOH",
            "options" =>
                [
                    "KFC",
                    "BENTO",
                    "BADDY BURGER",
                    "TARNOV",
                    "TERIYAKI",
                    "MAXWAY",
                    "EVOS",
                    "LOOOK",
                    "BBQ",
                    "CAN NOT JOIN"
                ],
            "is_anonymous" => false
        ],
        [
            "chat_id" => -1001571807802,
            "question" => "What will we have for lunch ? | option from RAHMATULLOH",
            "options" =>
                [
                    "KAMOLON",
                    "BESH QOZON",
                    "EMBOSHY BURGER",
                    "BOLOHOVUZ",
                    "SOMSA",
                    "SHEF BURGER",
                    "BELLISSIMO",
                    "OQTEP LAVASH",
                    "PAST-PAST",
                    "CAN NOT JOIN"
                ],
            "is_anonymous" => false
        ],
        [
            "chat_id" => -1001571807802,
            "question" => "What will we have for lunch ? | option from ABZALKHUJA",
            "options" =>
                [
                    "FISH AND BREAD",
                    "SUSHI ROLLS (YAPONA MAMA, YAPOSHA)",
                    "BALI HOVUZ",
                    "SHEF BURGER",
                    "EVOS",
                    "UMMAT FOOD",
                    "TERRIYAKI",
                    "WOK",
                    "CHINA SHASHLIK",
                    "CAN NOT JOIN"
                ],
            "is_anonymous" => false
        ],
        [
            "chat_id" => -1001571807802,
            "question" => "What will we have for lunch ? | option from ABZALKHUJA",
            "options" =>
                [
                    "BBQ",
                    "EMBASSY BURGER",
                    "LES ALIES",
                    "TARNOV",
                    "KFC",
                    "LOOOK",
                    "MAX WAY",
                    "BESH QOZON",
                    "PIZZA",
                    "CAN NOT JOIN"
                ],
            "is_anonymous" => false
        ],
        [
            "chat_id" => -1001571807802,
            "question" => "What will we have for lunch ? | option from BUTUZOV",
            "options" =>
                [
                    "MRS CHORSU",
                    "GRAND SAMSUSHKI",
                    "SALVIA SAMSUSHKI",
                    "DUNYO",
                    "EVOS",
                    "BODRUM",
                    "LES ALIES",
                    "TARNOV",
                    "KFC",
                    "CAN NOT JOIN"
                ],
            "is_anonymous" => false
        ],
        [
            "chat_id" => -1001571807802,
            "question" => "What will we have for lunch ? | option from ZAFAR",
            "options" =>
                [
                    "EVOS",
                    "BELISSIMO",
                    "BESHQOZON",
                    "KFC",
                    "YOPONA MAMA",
                    "FISH AND BREAD",
                    "RAYHON",
                    "OQTEPA LAVESH",
                    "GO'SHTUZ",
                    "CAN NOT JOIN"
                ],
            "is_anonymous" => false
        ],
        [
            "chat_id" => -1001571807802,
            "question" => "What will we have for lunch ? | option from SINDOR",
            "options" =>
                [
                    "BESHQOZON OSH",
                    "KOKOLON OSH",
                    "EMBASSY BURER",
                    "SHEF BURGER",
                    "KING PLOV",
                    "JIZ MARKAZI",
                    "XADRA MILLIY TAOMLAR",
                    "LOOK",
                    "SOMSA",
                    "CAN NOT JOIN"
                ],
            "is_anonymous" => false
        ],
        [
            "chat_id" => -1001571807802,
            "question" => "What will we have for lunch ? | option from SINDOR",
            "options" =>
                [
                    "BESHQOZON OSH",
                    "KOKOLON OSH",
                    "EMBASSY BURER",
                    "SHEF BURGER",
                    "KING PLOV",
                    "JIZ MARKAZI",
                    "XADRA MILLIY TAOMLAR",
                    "LOOK",
                    "SOMSA",
                    "CAN NOT JOIN"
                ],
            "is_anonymous" => false
        ],
        [
            "chat_id" => -1001571807802,
            "question" => "What will we have for lunch ? | option from Makhmudov MAKHMUDOV AZIZBEK",
            "options" =>
                [
                    "KFC",
                    "EVOS",
                    "LESALLES",
                    "TARNOV",
                    "OSH",
                    "SOMSA",
                    "SUSHI",
                    "TAYYOR OBED DASTAVKA ",
                    "POKE",
                    "CAN NOT JOIN"
                ],
            "is_anonymous" => false
        ],
    ];

    $option = 1;
    $date = date('j');
    echo $date;
    if ($date > 17) {
        $option = $date - 17;
    } else {
        $option = $date;
    }


    $data = json_encode($all[$option]);

    curl_setopt($curl, CURLOPT_POSTFIELDS, $data);


    curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

    $resp = curl_exec($curl);
    curl_close($curl);
    var_dump($resp);

}