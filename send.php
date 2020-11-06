<?php 

var_dump($_POST);

$token = "1437004960:AAFNz7URg5eyKN1aMcweP8VsTVp6H5PbPbw";
$chat_id = "-400261710";

$msg = json_encode($_POST);
$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text=text","r");
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


  //Если сообщение отправлено, напишет "Thank you", если нет - "Error"
    if ($sendToTelegram) {
    echo "Thank you";
    } else {
    echo "Error";
  }

}
?>