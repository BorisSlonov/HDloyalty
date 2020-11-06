<?php 

// var_dump($_POST);

$token = "1437004960:AAFNz7URg5eyKN1aMcweP8VsTVp6H5PbPbw";
$chat_id = "-400261710";
$msg = json_encode($_POST, JSON_UNESCAPED_UNICODE);
$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$msg}","r");


if($sendToTelegram)
    {
echo
        '<div style="background-color:rgb(59, 59, 53);height:100%;min-height:100vh;display:flex;justify-content:center;align-items:center;">
            <span style="font-size:18px;color:#fff;">Ваша заявка отправлена, свяжемся с вами в ближайшее время</span>
        </div>'
;
} else {
echo   '<div style="background-color:rgb(59, 59, 53);height:100%;min-height:100vh;display:flex;justify-content:center;align-items:center;">
<span style="font-size:18px;color:#fff;">Что-то пошло не так, заполните заявку еще раз</span>
</div>'
;
}









// if ($_POST['act'] == 'order') {
//     $name = ($_POST['name']);
//     $email = ($_POST['email']);
//     $message = ($_POST['message']);

//     $arr = array(
//         'Name:' => $name,
//         'Email:' => $email,
//         'Msg:' => $message
//     );

//     foreach($arr as $key => $value) {
//         $txt .= "<b>".$key."</b> ".$value."%0A";
//     }

// }


 ?>