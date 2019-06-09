<?php
ini_set('error_reporting', 0);
ini_set('display_errors', 0);
ini_set('display_startup_errors', 0);
require_once('./table.php');
require_once 'table.php';
$headers= "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=utf-8\r\n"; // кодировка письма
$headers .= "From: <support@wolfseye.ru>\r\n"; // от кого письмо
$tableStyle = [
  'table' => 'width: 100%;',
  'cell' => 'padding: 10px;border: #e9e9e9 1px solid;'
];
$mails = [
  'for.a.work.wgif@mail.ru',
  'kremer_german@mail.ru'
];
$table = new Table();
$data = [
  [
    'Имя',
    $_POST['name']
  ],
  [
    'email',
    $_POST['email']
  ],
  [
    'Сообщение',
    $_POST['msg']
  ],
];

$mailContent = $table->getTable($data, $tableStyle);
foreach ($mails as $mail) {  
  mail($mail, 'Заявка с сайта wolfseye.ru' , $mailContent, $headers);
}
header('Location: http://wolfseye.ru/spasibo');