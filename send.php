<?php 

var_dump($_POST);
// $msg = json_encode($_POST);
// $convertedText = mb_convert_encoding($txt, 'utf-8', mb_detect_encoding($txt));

$token = "1437004960:AAFNz7URg5eyKN1aMcweP8VsTVp6H5PbPbw";
$chat_id = "-400261710";
$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

if ($_POST['act'] == 'order') {
    $name = ($_POST['name']);
    $email = ($_POST['email']);
    $message = ($_POST['message']);

    $arr = array(
        'Name:' => $name,
        'Email:' => $email,
        'Msg:' => $message
    );


    foreach($arr as $key => $value) {
        $txt .= "<b>".$key."</b> ".$value."%0A";
    }

}
?>