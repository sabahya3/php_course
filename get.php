<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json");
include_once 'database.php';


$stmt=$connect->prepare("SELECT * FROM products");
$result= $stmt->execute();

echo json_encode($stmt->fetchAll(PDO::FETCH_ASSOC));



?>