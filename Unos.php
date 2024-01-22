<?php



$mysqli = new mysqli("localhost", "root", "", "projekat");

if ($mysqli->connect_errno) {
    echo "Greška pri konekciji na bazu!";
    exit();
}

$sql = "INSERT INTO telefoni(marka,model,cena,opis) VALUES('Xiaomi','Redmi Note10',25000,'dobar telefon')";



if ($mysqli->query($sql)) {

} else {
    echo "Greška pri unosu podataka: ";
}

$sql1 = "UPDATE telefoni SET cena = 567000 WHERE model LIKE('Redmi Note8')";
if ($mysqli->query($sql1)) {

} else {
    echo "Greška pri izmeni podataka: ";
}


?>