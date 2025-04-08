<?php
$host = 'localhost';
$dbname = 'tvojadatabaza';
$user = 'root';
$pass = '';

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $user, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo "Chyba pripojenia: " . $e->getMessage();
}
?>
