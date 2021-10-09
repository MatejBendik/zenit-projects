<?php 
include "database.php";

$db = mysqli_select_db($conn,"books");

$sql = mysqli_query($conn,"SELECT * FROM knihy GROUP BY Datum DESC");

while($row = mysqli_fetch_array($sql)){
    $names[] = $row['Nazov'];
    $text[] = $row['Text'];
    $images[] = $row['Obrazok'];
    $publicDate[] = $row['Datum'];
    $price[] = $row['Cena'];
}


?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Sir Arthur Conan Doyle (* 22. máj 1859, Edinburgh – † 7. júl 1930, Crowborough, Sussex, Spojené kráľovstvo) bol škótsky spisovateľ, ktorý sa preslávil poviedkami o Sherlockovi Holmesovi. Jeho ďalšie veľmi známe dielo je Stratený svet.">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/books.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
    <title>Knihy</title>
</head>

<body class="container-fluid">
    <div class="mainHeader">
        <header id="topHeader"
            class=" d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 ">
            <a href="index.html" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 ">
                <img id="navLogo" src="img/logo.png" alt="Logo">
            </a>
            <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
                <li>
                    <a id="navText" href="index.html" class="nav-link px-2"> Uvod</a>
                </li>
                <li>
                    <a id="navText" href="autor.html" class="nav-link px-2"> Autor</a>
                </li>
                <li>
                    <a id="navText" href="knihy.php" class="nav-link px-2"> Knihy</a>
                </li>
            </ul>
            <div class="col-md-3 text-end" id="rightElements">
                <a href="https://twitter.com"><img class="socialIcon" id="twitter" src="img/socialIcons/twitterWhite.png" alt="Twitter" title="Twitter"></a>
                <a href="https://www.facebook.com"><img class="socialIcon" id="facebook" src="img/socialIcons/facebookWhite.png" alt="Facebook" title="Facebook"></a>
                <a href="https://www.pinterest.com/"><img class="socialIcon" id="pinterest" src="img/socialIcons/pinterestWhite.png" alt="Pinterest" title="Pinterest"></a>
                <a href="https://www.instagram.com/"><img class="socialIcon" id="instagram" src="img/socialIcons/instagramWhite.png" alt="Instagram" title="Instagram"></a>
            </div>
        </header>

        <div class="row" id="mainSection">
            <div class="col-sm-3" id="textAlign">
            <img class="img-fluid" src="img/books/<?php echo $images[0]?>" alt="<?php echo $names[0] ?>" title="<?php echo $names[0] ?>">     
        </div>
            <div class="col-sm-9">
                <h2><?php echo "$names[0]"?></h2>
                <p>Publikované: <?php echo date("j. M Y ",strtotime($publicDate[0]))?></p>
                <p><?php echo $text[0]?></p>
                <div class="row">
                    <div class="col-sm-6 ">
                        <p id="price"> <?php echo $price[0] . " €"?></p>
                    </div>
                    <div class="col-sm-6">
                            <button id="buyButton" class="btn " type="button">Kúpiť</button>
                    </div>
                </div>
            </div>
        </div>


        <div class="row" id="mainSection">
            <div class="col-sm-3" id="textAlign">
            <img class="img-fluid" src="img/books/<?php echo $images[1]?>" alt="<?php echo $names[1] ?>" title="<?php echo $names[1] ?>">     
        </div>
            <div class="col-sm-9">
                <h2><?php echo "$names[1]"?></h2>
                <p>Publikované: <?php echo date("j. M Y ",strtotime($publicDate[1]))?></p>
                <p><?php echo $text[1]?></p>
                <div class="row">
                    <div class="col-sm-6 ">
                        <p id="price"> <?php echo $price[1] . " €"?></p>
                    </div>
                    <div class="col-sm-6">
                            <button id="buyButton" class="btn " type="button">Kúpiť</button>
                    </div>
                </div>
            </div>
        </div>



        <div class="row" id="mainSection">
            <div class="col-sm-3" id="textAlign">
            <img class="img-fluid" src="img/books/<?php echo $images[2]?>" alt="<?php echo $names[2] ?>" title="<?php echo $names[2] ?>">     
        </div>
            <div class="col-sm-9">
                <h2><?php echo "$names[2]"?></h2>
                <p>Publikované: <?php echo date("j. M Y ",strtotime($publicDate[2]))?></p>
                <p><?php echo $text[2]?></p>
                <div class="row">
                    <div class="col-sm-6 ">
                        <p id="price"> <?php echo $price[2] . " €"?></p>
                    </div>
                    <div class="col-sm-6">
                            <button id="buyButton" class="btn " type="button">Kúpiť</button>
                            <p id="bottomSpace"></p>
                    </div>
                </div>
            </div>
        </div>


        <!-- Footer -->
        <footer id="footer" class="text-center ">
            <!-- Grid container -->
            <div class="container p-4 pb-0">
                <!-- Section: Links -->
                <!--Grid row-->
                <div class="row">
                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
                        <p id="footerTextLeft">
                            ©2018 Zenit
                            <br>
                            Matej Bendik, SPŠ technická
                        </p>
                    </div>
                    <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
                        <p id="footerText">
                            221B Baker Street
                            <br>
                            Marylebone, City of Westminster
                            <br>
                            London
                        </p>
                    </div>
                    <!-- Grid column -->

                    <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
                        <p id="footerTextRight">
                            <a id="footerSources" href="http://arthurconandoyle.com" title="arthurconandoyle.com"
                                alt="arthurconandoyle.com">http://arthurconandoyle.com </a>
                            <a id="footerSources" href="http://wikipedia.org" title="wikipedia.org"
                                alt="wikipedia.org">http://wikipedia.org</a>
                        </p>
                    </div>
                    <!-- Grid column -->
                </div>
                <!--Grid row-->
                <!-- Section: Links -->
            </div>
            <!-- Grid container -->
        </footer>
        <!-- Footer -->
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ"
        crossorigin="anonymous"></script>
    <script src="js/script.js"></script>
</body>

</html>