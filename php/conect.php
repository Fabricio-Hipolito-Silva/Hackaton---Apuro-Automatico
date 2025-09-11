<?php
$username='root';
$password='usbw';

try{
    $conn=new PDO ('mysql:host=localhost;dbname=db_usuarios;port=3307',$username, $password);
    $conn-> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo 'ERRO:', $e->getMessage();
}
?>