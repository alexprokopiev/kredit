<?php

if ($_POST["phone"] == '') return 0;

$leadtype = trim($_POST["leadtype"]);
$sitename = trim($_POST["city"]);
$sitetype = trim($_POST["type"]);
$utm_source = trim($_POST["utm_source"]);
$utm_medium = trim($_POST["utm_medium"]);
$utm_campaign = trim($_POST["utm_campaign"]);
$utm_term = trim($_POST["utm_term"]);
$utm_content = trim($_POST["utm_content"]);
$name = trim($_POST['name']);
$phone = trim($_POST['phone']);
$email = trim($_POST['email']);
$quest1 = trim($_POST['question_1']);
$quest2 = trim($_POST['question_2']);
$quest3 = trim($_POST['question_3']);
$quest4 = trim($_POST['question_4']);
$quest5 = trim($_POST['question_5']);
$quest6 = trim($_POST['question_6']);
$quest7 = trim($_POST['question_7']);
$quest8 = trim($_POST['question_8']);
$quest9 = trim($_POST['question_9']);
$quest10 = trim($_POST['question_10']);
$quest11 = trim($_POST['question_11']);
$host = $_SERVER['SERVER_NAME'];

require_once('phpmailer/PHPMailerAutoload.php');
$mail = new PHPMailer;
$mail->CharSet = 'utf-8';

// $mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'mail.netangels.ru';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'zayavka@bankrotstvo-24.ru';                 // Наш логин
$mail->Password = 'Zenit1925';                           // Наш пароль от ящика
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to

$mail->setFrom('zayavka@bankrotstvo-24.ru', 'Банкротство');   // От кого письмо 
$mail->addAddress('vladislav@leads4you.ru');     // Add a recipient
$mail->addAddress('kredit_ufa@inbox.ru');               // Name is optional
//$mail->addReplyTo('info@example.com', 'Information');
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');
//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = "Заявка (Кл.) - " . $sitetype . " - " . $sitename . "";
$mail->Body    = "
	<h2>Тип заявки: " . $leadtype . "</h2><br> 
	<p><strong>Имя:</strong> " . $name . "</p><br>
	<p><strong>Телефон:</strong> " . $phone . "</p><br>
	<p><strong>Email:</strong> " . $email . "</p><br>
	<p><strong>Какая сумма кредита Вас интересует? </strong> " . $quest1 . "</p><br>
	<p><strong>Как у Вас обстоят дела с кредитной историей? </strong> " . $quest2 . "</p><br>
	<p><strong>Вы работаете официально? </strong> " . $quest3 . "</p><br>
	<p><strong>Ваш уровень заработной платы? </strong> " . $quest4 . "</p>
	<p><strong>Есть ли у Вас возможность предоставить справку о доходах? </strong> " . $quest5 . "</p><br>
	<p><strong>Есть ли у Вас действующая просрочка по существующим кредитам? </strong> " . $quest6 . "</p><br>
	<p><strong>Были ли у Вас просрочки в текущем году? </strong> " . $quest7 . "</p><br>
	<p><strong>Есть ли у Вас задолженности в службе судебных приставов? </strong> " . $quest8 . "</p><br>
	<p><strong>Есть ли у Вас незакрытая судимость? </strong> " . $quest9 . "</p>
	<p><strong>Обращались ли Вы за кредитом в банки в текущем месяце? </strong> " . $quest10 . "</p><br>
	<p><strong>В какие банки Вы обращались? </strong> " . $quest11 . "</p><br>
	<p><strong>Источник перехода:</strong> " . $utm_source . " " . $utm_medium . " " . $utm_campaign . " " . $utm_term . " " . $utm_content . "</p><br>
	<p><strong>Адрес сайта: </strong> " . $host . "</p>";

if (!$mail->send()) {
	return false;
} else {
	return true;
}
