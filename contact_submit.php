<?php
include('db.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $name    = trim($_POST['name'] ?? '');
    $email   = trim($_POST['email'] ?? '');
    $address = trim($_POST['address'] ?? '');
    $message = trim($_POST['message'] ?? '');

    // Validation
    if ($name === '' || $email === '' || $address === '') {
        header("Location: contact.php?error=validation");
        exit;
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header("Location: contact.php?error=email");
        exit;
    }

    $stmt = $conn->prepare(
        "INSERT INTO contact_messages (name, email, address, message)
         VALUES (?, ?, ?, ?)"
    );

    if (!$stmt) {
        header("Location: contact.php?error=prepare");
        exit;
    }

    $stmt->bind_param("ssss", $name, $email, $address, $message);

    if ($stmt->execute()) {
        header("Location: contact.php?success=1");
        exit;
    } else {
        header("Location: contact.php?error=insert");
        exit;
    }
}
