<?php
include "db_handler.php";

$db = mysqli_select_db($conn,"old_cars");

$sql = mysqli_query($conn,"SELECT * FROM sluzby");

while($row = mysqli_fetch_array($sql)){
    $names[] = $row['nazov_sluzby'];
    $images[] = $row['obrazok'];
    $list[] = $row['popis'];
}



?>


<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description"
        content="ZEN & HAR
váš špecialista na veterány">
    <link rel="stylesheet" href="css/style.css?<?php echo time(); ?>">
    <link rel="stylesheet" href="font/font.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
    <title>Old Cars Reservation</title>
</head>

<body class="container-fluid">
    <div class="container mainHeader ">
        <header id="topHeader"
            class=" flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 ">
            <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0 " id="navigation">
                <li>
                    <a id="navText" href="index.html" class="nav-link px-2"> ÚVOD</a>
                </li>
                <li>
                    <a id="navText" href="#sluzby" class="nav-link px-2"> SLUŽBY</a>
                </li>
                <li>
                    <a id="navText" href="#nasaPraca" class="nav-link px-2"> NAŠA PRÁCA</a>
                </li>
                <li>
                    <a id="navText" href="#rezervacka" class="nav-link px-2"> REZERVAČKA</a>
                </li>
            </ul>
        </header>

        <div class="row" id="mainSection">
            <div id="carousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="img " style= "background-image: url(img/pozadie-uvod.jpg)"></div>
                    <div id="carouselCaption" class="carousel-caption ">
                        <img class="img-fluid"  src="img/logo.png" id="logo"
                        alt="Logo" title="Logo">    
                    <h1 id="carouselCaptionH1">ZEN & HAR</h1>
                        <p id="carouselCaptionP">VÁŠ ŠPECIALISTA NA VETERÁNY</p>
                    </div>
                </img>
                </div>
            </div>
        </div>

<!-- Sluzby -->

            <div style="background-image: url(img/pozadie-sluzby.jpg)" class=" text-center container-fluid text-white" id="sluzby">
                <div class="row justify-content-md-center">

                <div class="col col-md-12 text-center">
                    <h2 class="text-white" id="sluzby">SLUŽBY</h2>
                    <hr class="hr" style="height:5px">
                </div>
                </div>
                <div class="row justify-content-md-center gx-5" id="sluzbyTexts">
                <div class="col col-4 ">
                <img src="img/<?php echo $images[0] ?>" alt="<?php echo $names[0] ?>" title="<?php echo $names[0] ?>">
                <h2 id="headingH2" class="text-white text-uppercase"><?php echo $names[0] ?></h2>
                <p><?php echo $list[0] ?></p>
                </div>
                <div class="col col-md-auto">
                <img src="img/<?php echo $images[1] ?>" alt="<?php echo $names[1] ?>" title="<?php echo $names[1] ?>">
                <h2 id="headingH2" class="text-white text-uppercase"><?php echo $names[1] ?></h2>
                <p><?php echo $list[1] ?></p>
                </div>
                <div class="col col-4">
                <img src="img/<?php echo $images[2] ?>" alt="<?php echo $names[2] ?>" title="<?php echo $names[2] ?>">
                <h2 id="headingH2" class="text-white text-uppercase"><?php echo $names[2] ?></h2>
                <p><?php echo $list[2] ?> </p>
                </div>
                </div>
            </div>


<!-- Gallery -->

<div class="container" id="gallery" >

<div class="row justify-content-center">
                <div class="col col-md-12 text-center" id="galleryHeading">
                    <h2 class="text-black" id="nasaPraca">NAŠA PRÁCA</h2>
                    <hr class="hrGallery" style="height:5px">
                    <p>Zbierka veteránov, ktoré sme renovovali s láskou</p>
                </div>
  <div class="col-lg-3 col-md-12 mb-4 mb-lg-0">
    <img
      src="img/foto/foto005-nahlad.jpg"
      class="w-100 shadow-1-strong  mb-4 imgG"
      alt="foto005" title="foto005" onclick="window.open('img/foto/foto005.jpg', '_blank')"
    />
  </div>
  <div class="col-lg-3 mb-4 mb-lg-0">
    <img
      src="img/foto/foto004-nahlad.jpg"
      class="w-100 shadow-1-strong  mb-4 imgG"
      alt="foto004" title="foto004" onclick="window.open('img/foto/foto004.jpg', '_blank')"
    />
  </div>
  <div class="col-lg-6 mb-4 mb-lg-0">
    <img
      src="img/foto/foto003-nahlad.jpg"
      class="w-100 shadow-1-strong  mb-4 imgG"
      alt="foto003" title="foto003" onclick="window.open('img/foto/foto003.jpg', '_blank')"
    />
  </div>


<div class="row justify-content-center">
  <div class="col-lg-6 col-md-4 " id="down">
    <img id="down"
      src="img/foto/foto001-nahlad.jpg"
      class="w-100 shadow-1-strong  mb-4 imgG" 
      alt="foto001" title="foto001" onclick="window.open('img/foto/foto001.jpg', '_blank')"
    />
  </div>
  <div class="col-lg-6 mb-4 ">
    <img
      src="img/foto/foto002-nahlad.jpg"
      class="w-100 shadow-1-strong  mb-4 imgG"
      alt="foto002" title="foto002" onclick="window.open('img/foto/foto002.jpg', '_blank')"
    />
  </div>
  </div>


</div>

</div>


</div>


<!-- Rezervacka -->

            <div style="background-image: url(img/pozadie-sluzby.jpg)" class=" text-center container-fluid text-white" id="sluzby">
                <div class="row justify-content-md-center">

                <div class="col col-md-12 text-center">
                    <h2 class="text-white" id="rezervacka">REZERVAČKA</h2>
                    <hr class="hr" style="height:5px">
                </div>
                <div class="row justify-content-md-center" id="generalis">
    <div class="col col-lg-3">
      <img src="img/generalka1.jpg" class="w-100" alt="">
    </div>
    <div class="col col-lg-4 text-center" id="generalka">
      <h5>Generalna oprava</h5>
      <p>1 hr | 50,00 €</p>
      <button type="button" id="btn" data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn ">REZERVOVAŤ</button>
    </div>
    <div class="col col-lg-3">
      <img src="img/generalka2.jpg"  class="w-100"alt="">
    </div>
  </div>


                <div class="row justify-content-md-center" id="generalis">
    <div class="col col-lg-3">
      <img src="img/calunenie2.jpg" class="w-100" alt="">
    </div>
    <div class="col col-lg-4 text-center" id="generalka">
      <h5>Čalúnenia</h5>
      <p>1 hr | 40,00 €</p>
      <button type="button" class="btn " data-bs-toggle="modal" data-bs-target="#exampleModal"  id="btn">REZERVOVAŤ</button>
    </div>
    <div class="col col-lg-3">
      <img src="img/calunenie1.jpg"  class="w-100"alt="">
    </div>
  </div>


                <div class="row justify-content-md-center" id="generalis">
    <div class="col col-lg-3">
      <img src="img/natery2.jpg" class="w-100" alt="">
    </div>
    <div class="col col-lg-4 text-center" id="generalka">
      <h5>Lakovanie, farbenie, nátery</h5>
      <p>1 hr | 25,00 €</p>
      <button type="button" class="btn " data-bs-toggle="modal" data-bs-target="#exampleModal" id="btn" >REZERVOVAŤ</button>
    </div>
    <div class="col col-lg-3">
      <img src="img/natery1.jpg"  class="w-100"alt="">
    </div>
  </div>

                <div class="row justify-content-md-center" id="generalis">
    <div class="col col-lg-3">
      <img src="img/poradenstvo1.jpg" class="w-100" alt="">
    </div>
    <div class="col col-lg-4 text-center" id="generalka">
      <h5>Osobné konzultácie</h5>
      <p>1 hr | 15,00 €</p>
      <button type="button" class="btn " data-bs-toggle="modal" data-bs-target="#exampleModal" id="btn" >REZERVOVAŤ</button>
    </div>
    <div class="col col-lg-3">
      <img src="img/poradenstvo2.jpg"  class="w-100"alt="">
    </div>
  </div>


                </div>
            </div>


<!-- Modal formular -->

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Rezervovať - </h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Meno:</label>
            <input type="text" class="form-control" id="name" name="name" required>
          </div>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Email:</label>
            <input type="email" class="form-control" id="email" name="email">
          </div>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Datum:</label>
            <input type="date" class="form-control" id="date" name="date">
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Zrušiť</button>
        <button type="button" class="btn btn-primary">Odoslať rezerváciu</button>
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
                    <div class="col-md-4 col-lg-4 col-xl-4 mx-auto mt-3">
                        <p id="footerText">
                            Ⓒ 2018 vytvoril Matej Bendik, SPŠ technická
                            <br>
                            všetky práva vyhradené ZENIT
                        </p>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ"
        crossorigin="anonymous"></script>
    <script src="js/script.js"></script>
</body>

</html>