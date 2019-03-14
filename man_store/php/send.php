 <?php
$msg_box = ""; // в этой переменной будет хранится сообщение формы

if($_POST['btn_submit']){
    $errors = array();  // контейнер для ошибки
    //проверка коррективности полей
    if($_POST['user_name'] == "") $erroros[] = "Поле 'Ваше имя' не заполнено!";
    if($_POST['user_email'] == "") $erroros[] = "Поле 'Ваш e-mail' не заполнено!";
    if($_POST['text_message'] == "") $erroros[] = "Поле 'Сообщение' не заполнено!";
    // если форма без ошибок
    if(empty($erroros)){
        // собираем данные из формы
        $message = "Ваше имя" . $_POST["user_name"] . "</br>"; 
        $message .= "Ваш e-mail" . $_POST["user_email"] . "</br>"; 
        $message .= "Сообщение" . $_POST["text_message"]; 
        send_mail($message); // отправляем письмо
        //выведение сообщение об успехе
        $msg_box = "<span style='color: green;'>Сообщение успешно отправильно!</span>";

    }else{
        // если были ошибкиб то выводим их
        $msg_box = "";
        foreach($erroros as $one_error){
            $msg_box .= "<span style='color: red;'>$one_error</span><br/>";
        }
    }
}
//функция отправки письма
function send_mail($message){
    //почта на которую придет письмо
    $mail_to = "mracdorac@gmail.com";
    //тема письма
    $subject = "Письмо с сайта (мужская одежда)";
    //заголовок письма
    $headers = "MIME-Version: 1.0\r\n";
    $headers .="Content-type: text/html; charset=utf-8\r\n";
    $headers .= "From: Тестовое письмо <man-shop.ua>\r\n";
    //отправка письма
    mail($mail_to,$subject,$message,$headers);
}
?>