<?php
$username='root';
$password='';

try{
    $conn=new PDO ('mysql:host=localhost;dbname=hacktom;port=',$username, $password);
    $conn-> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo 'ERRO:', $e->getMessage(); 
}
?>