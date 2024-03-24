<?php
$data = $_POST;
$userid = (int) $data['userid'];
$First_name = $data['f_name'];
$Last_name =  $data['l_name'];
$Email = $data['Email'];



// Adding to the record.
try {  
    $sql ="UPDATE users SET Email=?, First_name=?, Last_name=?, Updated_at=? WHERE id=?";
    include('connection.php');
    $conn->prepare($sql) ->execute([$Email, $First_name, $Last_name, date('Y-m-d h:i:s'), $userid]);


    echo json_encode([
       'success' => true,
       'message' => $First_name . ' ' . $Last_name . ' successfully updated. '
    ]);
} catch (PDOException $e) {
    echo json_encode([
       'success' => false,
       'message' => 'Error processing your request!' 
    ]);
}
?>
