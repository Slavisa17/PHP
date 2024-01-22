<?php
include "KonekcijaPDO.php";

if (isset($_POST['marka'])) {
    $sql = "SELECT * FROM telefoni WHERE marka = :marka";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(":marka", $marka);
    $marka = $_POST['marka'];
    $stmt->execute();
    $result = $stmt->fetchAll();
    foreach ($result as $row) {
        echo "<b>Marka: </b>" . $row['marka'] . "<br>" . "<b>Model: </b>" . $row['model'] . "<br>" . "<b>Cena: </b>" . $row['cena'] . "<br>" . "<b>Dodatni opis: </b>" . $row['opis'] . "<br><hr>";



    }
}


?>