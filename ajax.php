<?php
// Получаем данные из формы
$lastname = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$company = $_POST['company'];
$summa = $_POST['user_profile_color_2'];
$galochka = $_POST['checkbox_galochka'];

// Формируем текст сообщения
$message = "Новый мамонт:\n" .
    "Имя: $lastname\n" .
    "Телефон: $phone\n" .
    "E-mail: $email\n" .
    "Название компании, где наебали: $company\n" .
    "Готов принять звонок: $galochka" .
    "Сумма потерянных бабок: $summa";

// Отправляем сообщение в Telegram
$url = "https://api.telegram.org/bot7137573288:AAGwC30qyIptry-xn0R1F_Lwud7Piw0vhok/sendMessage";
$data = [
    'chat_id' => -1002236764860,
    'text' => $message,
];
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);
$response = curl_exec($ch);
curl_close($ch);

// Возвращаем ответ пользователю (например, сообщение об успешной отправке)
echo json_encode(['status' => 'success']);
?>я