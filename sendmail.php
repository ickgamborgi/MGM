<?php

require_once('includes/connect.php');

header("Access-Control-Allow-Origin: *"); 
header("Content-Type: application/json; charset=UTF-8");

$name = trim($_POST['name'] ?? '');
$email = trim($_POST['email'] ?? '');
$phone = trim($_POST['phone'] ?? ''); // Captura o telefone
$honeypot = trim($_POST['honeypot'] ?? '');
$mathAnswer = trim($_POST['math_answer'] ?? '');
$mathExpected = trim($_POST['math_expected'] ?? '');
$message = trim($_POST['message'] ?? ''); // Mensagem opcional

$errors = [];

// Validações no backend
if (empty($name)) {
    $errors[] = "Por favor, preencha seu NOME";
}

if (empty($email)) {
    $errors[] = "Por favor, preencha seu EMAIL";
} else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors[] = "Por favor, insira um EMAIL VÁLIDO";
}

if (!empty($honeypot)) {
    $errors[] = "Bot detected! Submission blocked.";
}

if ($mathAnswer !== $mathExpected) {
    $errors[] = "Por favor, resolva a pergunta de SEGURANÇA corretamente";
}

// Retorna erros, se houver
if (!empty($errors)) {
    echo json_encode(["errors" => $errors]);
    exit;
}

try {
    // Insere os dados no banco de dados
    $query = "INSERT INTO contact (name, email, phone, message) VALUES (?, ?, ?, ?)";
    $stmt = $connect->prepare($query);
    $stmt->bindParam(1, $name, PDO::PARAM_STR);
    $stmt->bindParam(2, $email, PDO::PARAM_STR);
    $stmt->bindParam(3, $phone, PDO::PARAM_STR); // Adiciona o telefone ao banco de dados
    $stmt->bindParam(4, $message, PDO::PARAM_STR);
    $stmt->execute();

    // Informações do email
    $to = 'henriquegamborgi@gmail.com, escritorio@advocaciamgm.com.br';
    $subject = 'Novo Contato pelo Website';
    $headers = "From: no-reply@advocaciamgm.com.br\r\n";
    $headers .= "Reply-To: $email\r\n";

    $emailMessage = "Uma nova mensagem foi enviada pelo seu Website:\n\n";
    $emailMessage .= "Nome: " . $name . "\n";
    $emailMessage .= "E-mail: " . $email . "\n";
    $emailMessage .= "Celular: " . ($phone ?: "Campo não preenchido") . "\n"; // Adiciona o telefone ao e-mail
    $emailMessage .= "Demanda: " . ($message ?: "Campo não preenchido") . "\n";

    mail($to, $subject, $emailMessage, $headers); // Envia o email

    // Retorna mensagem de sucesso
    echo json_encode(["message" => "Mensagem enviada! Iremos retornar o mais breve possível."]);
} catch (PDOException $e) {
    echo json_encode(["error" => "Erro no banco de dados: " . $e->getMessage()]);
}

?>