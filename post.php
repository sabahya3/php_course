<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json");
header("Access-Control-Allow-Methods: POST");

include_once 'database.php';

$name=$_POST['name'];
$imageurl=$_POST['imageurl'];
$price=$_POST['price'];


$query="SELECT * FROM products WHERE name LIKE '$name'";
$stmt=$connect->prepare($query);
 $stmt->execute();
$result=$stmt->fetchColumn();





if($result>0){
	echo 'account is already exists';
}else{


$stmt=$connect->prepare("INSERT INTO `products` (`id`, `name`, `imageurl`, `price`) VALUES (NULL, ?, ?, ?)");
$stmt->bindParam(1,$name);
$stmt->bindParam(2,$imageurl);
$stmt->bindParam(3,$price);
$stmt->execute();
echo "new account was created!";
}



?>