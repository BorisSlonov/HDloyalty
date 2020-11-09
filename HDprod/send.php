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
            <span style="font-size:18px;color:#fff;font-family:sans-serif;">Ваша заявка отправлена, свяжемся с вами в ближайшее время</span>
        </div>
        <style>*{padding:0;margin:0;}</style>
        '
;
} else {
echo   '<div style="background-color:rgb(59, 59, 53);height:100%;min-height:100vh;display:flex;justify-content:center;align-items:center;">
<span style="font-size:18px;color:#fff;font-family:sans-serif;">Что-то пошло не так, заполните заявку еще раз</span>
</div>
<style>*{padding:0;margin:0;}</style>
'
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