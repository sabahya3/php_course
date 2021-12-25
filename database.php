<?php 
$dsn='mysql:host=localhost;dbname=users';
// this is variable to put data to connect with database;
// host ==> السيرفر المتصل عليه /=> ex:- host=localhost;
// dbname ==> اسم قاعدة البيانات اللى هتصل بيها
$user_admin="root"; // it use to login to database;
$pass=''; 
$opt=array(
    PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
);

try {  
  $connect=new PDO($dsn,$user_admin,$pass,$opt); // it use to connect by database

} catch (PDOException $e) {
    echo "Failed ".$e->getMessage();
} 
?>
