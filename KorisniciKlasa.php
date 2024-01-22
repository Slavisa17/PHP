<?php
if (isset($_POST['submit'])) {

    $ime = $_POST['ime'];
    $prezime = $_POST['prezime'];
    $email = $_POST['email'];
    $br_telefona = $_POST['br_telefona'];


    class korisnici
    {
        protected $ime;
        protected $prezime;
        protected $email;
        protected $br_telefona;

        public function __construct($ime, $prezime, $email, $br_telefona)
        {

            $this->ime = $ime;
            $this->prezime = $prezime;
            $this->email = $email;
            $this->br_telefona = $br_telefona;

        }



        protected function ProveraUnosa()
        {
            if (ctype_alnum($this->ime)) {
                return true;
            } else {
                return false;
            }

            if (ctype_alnum($this->prezime)) {
                return true;
            } else {
                return false;
            }

            if (filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
                return true;
            } else {
                return false;
            }

            if (ctype_digit($this->br_telefona)) {
                return true;
            } else {
                return false;
            }
        }
        public function Unos()
        {

            include "KonekcijaMysqli.php";

            $sql = "INSERT INTO korisnici(ime,prezime,email,br_telefona) VALUES (?,?,?,?)";
            if (!$stmt = $mysqli->prepare($sql)) {
                echo 'Neuspešan upit';
            }
            $stmt->bind_param('sssi', $this->ime, $this->prezime, $this->email, $this->br_telefona);

            if ($stmt->execute()) {
                echo "Uspešan unos u tabelu";
            } else {
                echo "Greška pri unosu!";
            }
        }

    }

    $clan = new korisnici($ime, $prezime, $email, $br_telefona);
    $clan->Unos();

}


?>