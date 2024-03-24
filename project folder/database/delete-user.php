<?php
$data = $_POST;
$userid = (int) $data['userid'];
$First_name = $data['fname'];
$Last_name =  $data['lname'];

// Adding to the record.
try {  
    $command = "DELETE FROM users WHERE id = $userid"; // Corrected SQL query
    include('connection.php');

    $conn->exec($command);

    echo json_encode([
       'success' => true,
       'message' => $First_name . ' ' . $Last_name . ' successfully deleted. ' // Corrected concatenation
    ]);
} catch (PDOException $e) {
    echo json_encode([
       'success' => false,
       'message' => 'Error processing your request!' // Removed unnecessary space
    ]);
}
?>
