<?php

// priradenie databazy pre tento subor 

include "db_handler/database.php";

// zvolenie databazy zo servera 

$db = mysqli_select_db($conn, "zenit04");

// presny sql kod ktory sa ma vykonat nad danou databazou a tabulkou

$sql = mysqli_query($conn, "SELECT * FROM inzerat");

// cyklus while ktory prechadza vsetky data v tabulke inzerat a zapisuje ich do konkretnych php poli

while ($row = mysqli_fetch_array($sql)) {
    $titles[] = $row['titulok'];
    $text[] = $row['popis'];
    $psc[] = $row['psc'];
    $town[] = $row['mesto'];
    $date[] = $row['datum_vytvorenia'];
    $price[] = $row['cena'];
    $type[] = $row['typ'];
    $user_id[] = $row['user_id'];
}

// sql kod na vypis vsetkeho z tabulky photos
$sqlPhotos = mysqli_query($conn, "SELECT * FROM photos");

// cyklus while ktory prechadza tabulku photos a uchovava data z nej do php poli
while ($row = mysqli_fetch_array($sqlPhotos)) {
    $path[] = $row['path'];
}


?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/index.css">
    <title>ZENIT bazár</title>
</head>

<body>
    <!-- Navigacia -->
    <nav class="navbar fixed-top navbar-expand-lg" id="navigation">
        <div class="container-fluid">
            <div class="collapse navbar-collapse justify-content-around" id="navbarCenteredExample">
                <span>
                    <a href="index.php" style="text-decoration:none;">
                        <h1 class="heading">ZENIT BAZÁR</h1>
                    </a>
                </span>
                <ul class="navbar-nav mb-2 mb-lg-0 ">
                    <li class="nav-item">
                        <a class="nav-link " href="index.php">Úvodná stránka</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="podmienky.php">Podmienky použitia</a>
                    </li>
                </ul>
                <span>
                    <div class="col-lg-8">
                        <form>
                            <div class=" row">
                                <label class="col-sm-5 col-form-label" id="label">Login:</label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control" placeholder="login" id="userName">
                                </div>
                            </div>
                            <div class=" row">
                                <label class="col-sm-5 col-form-label" id="label">Heslo:</label>
                                <div class="col-sm-7">
                                    <input type="password" class="form-control" placeholder="heslo" id="userPassword">
                                    <button class="btn " id="loginButton">Login</button>
                                    <a href="newUser.php" id="newUser">Nový užívateľ</a>
                                </div>
                            </div>
                    </div>
                    </form>
            </div>
        </div>
        </span>
        </div>
        </div>
    </nav>

    <!-- Banner -->

    <section class="banner">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-6">
                    <div class="bannerBox">
                        <h2 class="bannerText">ZENIT-BAZÁR | OBČIANSKA INZERCIA</h2>
                        <p>
                            ideálne miesto pre Vašu inzerciu...
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Nadpis najnovsie inzeraty -->

    <section class="newestProducts">
        <div class="container">
            <h2 class="newestHeading">Najnovšie inzeráty</h2>
            <div class="row">
                <!-- Prvy inzerat z databazy -->
                <div class="col-3">
                    <!-- vypisy typu echo $nieco[0] su polia ktore nadobudli hodnoty na urcitych indexoch z danej tabulky -->
                    <img class="imgProduct" src="<?php echo $path[0] ?>samsung3.jpg" alt="Samsung">
                </div>
                <div class="col-6" id="productInfo">
                    <h2 class="currentProduct"><?php echo $titles[0] ?></h2>
                    <p class="dateInfo"><?php echo $date[0] . " | " . $psc[0] . " | " . $town[0] ?></p>
                    <p class="currentInfo"> <?php echo $text[0] ?></p>
                    <p class="price"><b>Cena: <?php echo $price[0] ?> €</b></p>
                    <button class="btn " id="sellButton">Predám</button>
                </div>
            </div>
            <hr class="hr">
        </div>

        <div class="container">
            <div class="row">
                <!-- Druhy inzerat z databazy -->
                <div class="col-3">
                    <img class="imgProduct" src="<?php echo $path[1] ?>kuga1.jpg" alt="Ford Kuga">
                </div>
                <div class="col-6" id="productInfo">
                    <h2 class="currentProduct"><?php echo $titles[1] ?></h2>
                    <p class="dateInfo"><?php echo $date[1] . " | " . $psc[1] . " | " . $town[1] ?></p>
                    <p class="currentInfo"> <?php echo $text[1] ?></p>
                    <p class="price"><b>Cena: <?php echo $price[1] ?> €</b></p>
                    <button class="btn " id="sellButton">Predám</button>
                </div>
            </div>
            <hr class="hr">
        </div>

        <div class="container">
            <div class="row">
                <!-- Treti inzerat z databazy -->
                <div class="col-3">
                    <img class="imgProduct" src="<?php echo $path[2] ?>pneumatiky1.jpg" alt="Pneumatiky">
                </div>
                <div class="col-6" id="productInfo">
                    <h2 class="currentProduct"><?php echo $titles[2] ?></h2>
                    <p class="dateInfo"><?php echo $date[2] . " | " . $psc[2] . " | " . $town[2] ?></p>
                    <p class="currentInfo"> <?php echo $text[2] ?></p>
                    <p class="price"><b>Cena: <?php echo $price[2] ?> €</b></p>
                    <button class="btn " id="sellButton"><?php echo $type[2] ?></button>
                </div>
            </div>
            <hr class="hr">
            <div class="last"></div>
        </div>

    </section>

    <!-- Footer -->

    <footer class=" footer text-center fixed-bottom">
        <div class="text-center p-4">
            Matej Bendík, Stredná priemyselná škola technická, Spišská Nová Ves <br>
            ZENIT ©2021 - krajské kolo
        </div>
    </footer>

    <script src="js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>