<?php
if (isset($_POST['submit'])) {

    $marka = $_POST['marka'];
    $model = $_POST['model'];
    $cena = $_POST['cena'];
    $opis = $_POST['opis'];


    class telefoni
    {
        protected $marka;
        protected $model;
        protected $cena;
        protected $opis;

        public function __construct($marka, $model, $cena, $opis)
        {

            $this->marka = $marka;
            $this->model = $model;
            $this->cena = $cena;
            $this->opis = $opis;

        }



        protected function ProveraUnosa()
        {
            if (ctype_alnum($this->marka)) {
                return true;
            } else {
                return false;
            }

            if (ctype_alnum($this->model)) {
                return true;
            } else {
                return false;
            }
            if (ctype_digit($this->cena)) {
                return true;
            } else {
                return false;
            }
            if (ctype_alnum($this->opis)) {
                return true;
            } else {
                return false;
            }

        }
        public function Unos()
        {

            include "KonekcijaMysqli.php";

            $sql = "INSERT INTO telefoni(marka,model,cena,opis) VALUES (?,?,?,?)";
            if (!$stmt = $mysqli->prepare($sql)) {
                echo 'Neuspešan upit';
            }
            $stmt->bind_param('ssis', $this->marka, $this->model, $this->cena, $this->opis);

            if ($stmt->execute()) {
                echo "Uspešan unos u tabelu <br>";
            } else {
                echo "Greška pri unosu!";
            }
        }

    }

    $telefon = new telefoni($marka, $model, $cena, $opis);
    $telefon->Unos();

}


?>