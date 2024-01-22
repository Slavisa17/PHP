<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pregled Telefona</title>
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
        <p> Pregled po marki telefona(Xiaomi,Samsung...): </p>
        <input type="text" class="input" placeholder="Unesite marku telefona" name="marka"> <br> <br>
        <button type="submit" class="dugme" name="action" value="marka"> Pretraži</button>
    </form>

    <?php


    include "Pregled.php"




        ?>









</body>

</html>