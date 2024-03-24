<?php
// Start the session.
session_start();

$table_name = $_SESSION['table'];
$First_name = $_POST['First_name'];
$Last_name = $_POST['Last_name'];
$Email = $_POST['Email'];
$Password = $_POST['Password'];
$encrypted = password_hash($Password, PASSWORD_DEFAULT);

// Adding to the record.
try {
    $command = "INSERT INTO $table_name (First_name, Last_name, Email, Password, Created_at, Updated_at) VALUES ('$First_name', '$Last_name', '$Email', '$encrypted', NOW(), NOW())";

    include('connection.php');

    $conn->exec($command);
    $response = [
        'success' => true,
        'message' => $First_name . ' ' . $Last_name . ' successfully added to the system.'
    ];
} catch (PDOException $e) {
    $response = [
        'success' => false,
        'message' => $e->getMessage()
    ];
}

$_SESSION['response'] = $response;
header('location: ../users.app.php');
?>
