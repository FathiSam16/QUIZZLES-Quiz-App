<?php
$host = '127.0.0.1';
$port = '3307';
$dbname = 'quiz_db';
$username = 'root';
$password = '';

try {
    $pdo = new PDO("mysql:host=$host;port=$port;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "Connected successfully"; // You can uncomment this to test
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>