<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>

    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="SviTelefoni.php">Svi Telefoni</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Telefoni.php">Unos Telefona</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="PregledTelefona.php">Pretraga Telefona</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Korisnici.php">Registracija Korisnika</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Index.php">Admin</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>





    <form action="" class="forma" method="POST">
        <p> Brisanje telefona iz baze(Moze samo Admin sa šifrom): </p>
        <input type="password" class="input" placeholder="Unesite sifru" name="sifra"> <br> <br>
        <input type="text" class="input" placeholder="Unesite model telefona" name="model"> <br> <br>
        <button type="submit" name="action" value="model"> Izbriši</button>
    </form>





    <?php



    try {

        include "KonekcijaPDO.php";
        $pdo->beginTransaction();





        if (isset($_POST['model'])) {

            $sifra = $_POST['sifra'];



            $sql = "DELETE FROM telefoni WHERE model= :model";
            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(":model", $model);
            $model = $_POST['model'];
            if ($sifra == 12345) {
                $stmt->execute();
                echo "Uspesno brisanje! <br>";
            } else {
                echo "Samo Admin sa  šifrom može da briše iz baze!";
            }

        }

        $pdo->commit();
    } catch (PDOException $e) {
        $pdo->rollBack();
        echo $e->getMessage();
    }






    ?>







    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
        crossorigin="anonymous"></script>
</body>

</html>