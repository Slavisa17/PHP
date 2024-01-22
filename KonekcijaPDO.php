<?php
try {
    $pdo = new PDO("mysql:host=localhost;dbname=projekat", "root", "");

} catch (PDOException $e) {
    echo $e->getMessage();
}


?>