<?php 

// var_dump($_POST);

$token = "1437004960:AAFNz7URg5eyKN1aMcweP8VsTVp6H5PbPbw";
$chat_id = "-400261710";
$msg = json_encode($_POST, JSON_UNESCAPED_UNICODE);
$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$msg}","r");


if($sendToTelegram)
    {
echo
        '<div class="uk-button-group">
                <a class="uk-button uk-button-link uk-button-large" href="../auth/signup.php">Регистрация</a>
                <a class="uk-button uk-button-success uk-button-large uk-margin-left" href="../auth/login.php" style="background-color: #ffb433;"onmouseover="this.style.backgroundColor=\'#eb8d00\';" onmouseout="this.style.backgroundColor=\'#ffb433\';"><i class="uk-icon-lock uk-margin-small-right"></i> Войти</a>
        </div>'
;
} else {
echo 'Ошибка отправки, попробуйте еще раз!';
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