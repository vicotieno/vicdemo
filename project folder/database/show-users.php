<?php

include("connection.php");


$stmt = $conn->prepare("SELECT * FROM users ORDER BY Created_at DESC");
$stmt -> execute();
$stmt -> setFetchmode(PDO::FETCH_ASSOC);

return $stmt->fetchAll();

?>