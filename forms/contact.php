<?php
header('Content-Type: application/json');
require_once __DIR__ . '/../classes/ContactHandler.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $contactHandler = new ContactHandler();
    $response = $contactHandler->sendEmail($_POST);
    echo json_encode($response);
} else {
    echo json_encode(['status' => 'error', 'message' => 'Invalid request method']);
}
?>