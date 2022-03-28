<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/home.css">
    <title>Zenit Fitness</title>
</head>

<body>
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark">
        <div class="container">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mb-2 me-auto mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#uvod">Úvod</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#oNas">O nás</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#ponukame">Ponúkame</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#galeria">Galéria</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#cennik">Cenník</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#kontakt">Kontakt</a>
                    </li>
                </ul>
                <span class="navbar-text">
                    <button type="button" class="btn" id="registerBtn" onclick="showRegisterForm()">Registrovať</button>
                </span>
            </div>
        </div>
    </nav>

    <div class="banner-image w-100 vh-100 d-flex justify-content-right align-items-center">
        <div class="container" id="uvod">
            <div class="row">
                <div class="col-lg-6 p-4" id="uvodny">
                    <div style="clear: both">
                        <h1 class="zenit">ZENIT&nbsp;</h1>
                        <h1 class="fitness"> FITNESS </h1>
                    </div>
                    <p id="quote"> "Starajte sa o svoje telo. Je to jediné miesto, kde musíte žiť."
                        (Jim Rohn)</p>
                    <div class="text-center">
                        <button class="btn" id="loginBtn" onclick="showLoginForm()">Prihlásiť</button>
                    </div>
                </div>
                <div id="registerForm" class="col-4 text-center" style="
                    padding: 20px 60px 0px 60px; 
                    margin-left:160px; 
                    background-color: rgba(255,255,255,0.7);
                    border-radius: 5px;
                    display:none;
                    ">
                    <h5 class="mb-4" style="font-family: PlayFairDisplay-Medium;" id="headingRegForm">Registračný formulár</h5>
                    <form style="font-family: PlayFairDisplay-Regular; font-size: 17px;">
                        <div class="row mb-3">
                            <label class="col-5 col-form-label float-start d-flex me-4" id="nameLabel" style="display:none;">Meno:</label>
                            <div class="col-6">
                                <input type="text" id="name" class="form-control form-control-sm" style="
                                box-shadow: 2px 2px 3px grey;
                                border-radius: 5px;
                                display:none;
                                ">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-5 col-form-label float-start d-flex me-4" id="surnameLabel">Priezvisko:</label>
                            <div class="col-6">
                                <input type="text" id="surname" class="form-control form-control-sm" style="
                                box-shadow: 2px 2px 3px grey;
                                border-radius: 5px;
                                ">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-5 col-form-label float-start d-flex me-4" id="yearOfBirthLabel">Rok narodenia:</label>
                            <div class="col-6">
                                <input type="text" id="yearOfBirth" class="form-control form-control-sm" style="
                                box-shadow: 2px 2px 3px grey;
                                border-radius: 5px;
                                ">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-5 col-form-label float-start d-flex me-4" id="townLabel">Mesto/Obec:</label>
                            <div class="col-6">
                                <input type="text" id="town" class="form-control form-control-sm" style="
                                box-shadow: 2px 2px 3px grey;
                                border-radius: 5px;
                                ">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-5 col-form-label float-start d-flex me-4" id="chooseLabel">Zameranie:</label>
                            <div class="col-6">
                                <select class="form-select form-select-sm" id="choose" aria-label=".form-select-sm example" style="
                                box-shadow: 2px 2px 3px grey;
                                border-radius: 5px;
                                ">
                                    <option value="1">Bez zamerania</option>
                                    <option value="2" selected>Kulturistika</option>
                                    <option value="3">WomenFitness</option>
                                    <option value="4">MenFitness</option>
                                    <option value="5">BikinyFitness</option>
                                    <option value="6">LoseWeight</option>
                                    <option value="7">Seniors</option>
                                </select>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-5 col-form-label float-start d-flex me-4" id="phoneLabel">Telefón:</label>
                            <div class="col-6">
                                <input type="text" id="phone" class="form-control form-control-sm float-end d-flex" style="
                                box-shadow: 2px 2px 3px grey;
                                border-radius: 5px;
                                ">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-5 col-form-label float-start d-flex me-4" id="loginLabel">Login:</label>
                            <div class="col-6">
                                <input type="text" id="loginInput" class="form-control form-control-sm float-end d-flex" style="
                                box-shadow: 2px 2px 3px grey;
                                border-radius: 5px;
                                ">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-5 col-form-label float-start d-flex me-4" id="passwordLabel">Password:</label>
                            <div class="col-6">
                                <input type="text" id="password" class="form-control form-control-sm float-end d-flex" style="
                                box-shadow: 2px 2px 3px grey;
                                border-radius: 5px;
                                ">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-5 col-form-label float-start d-flex me-4" id="rePasswordLabel">Re Password:</label>
                            <div class="col-6">
                                <input type="text" id="rePassword" class="form-control form-control-sm float-end d-flex" style="
                                box-shadow: 2px 2px 3px grey;
                                border-radius: 5px;
                                ">
                            </div>
                        </div>
                        <div class="d-grid gap-2 mb-4">
                            <button type="submit" class="btn text-white" id="registerFormBtn" style="
                                background-color: #617f20;
                            ">Zaregistrovať</button>
                            <a href="#" onclick="hideForm()" class="mt-3 mb-3" style="
                            color:#de4642; 
                            text-decoration:none;
                            font-family: PlayFairDisplay-Medium;
                            
                            ">Skryť registračný formulár</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="container" id="oNas">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="pt-5 pb-2" id="o_nas">O nás</h2>
                <p id="o_nas_text">V našej posilňovni sú Vám k dispozícii posilňovacie stroje, na ktorých
                    je možné precvičovať všetky svalové partie. Súčasťou posilňovne je aj
                    priestor pre klasických bodybuilderov, ktorý zahŕňa sady lavičiek,
                    voľných činiek a ťažkých jednoručiek. Stroje svojím jednoduchým ovládaním,
                    moderným dizajnom a nezanedbateľnou efektívnosťou určite splnia očakávania
                    každého zákazníka, pre ktorého sa stane cvičenie zábavou a inšpiráciou.
                    Cvičenie na strojoch je nenahraditeľné hlavne pre začiatočníkov, kde sa na
                    zreteľ dáva jeho účinnosť, technická nenáročnosť a minimalizuje sa možnosť
                    zranenia. K dispozícii máme 15 kardiostrojov, ktoré snímajú pulzovú frekvenciu.
                    Tá je hlavným ukazovateľom efektivity tréningu. Potrebujete si oddýchnuť po cvičení,
                    alebo len tak posedieť s priateľmi, partnermi alebo rodinou? Náš bar je tu pre Vás.
                    Vychutnajte si kávičku alebo jeden z našich osviežujúcich nápojov v príjemnom
                    interiéri s príjemnou obsluhou. Pre skutočných vyznávačov fitness životného
                    štýlu ponúkame aj energetické a proteínové nápoje od výrobcov svetových značiek.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <h5 class="pt-4 pb-4 text-center" id="otvaracie_hodiny">Otváracie hodiny</h5>
                <div class="row">
                    <div class="d-flex justify-content-center">
                        <div class="col-2 pe-5">
                            <h6 id="rozpis">Pondelok - Piatok</h6>
                            <h6 id="rozpis">Sobota</h6>
                            <h6 id="rozpis">Nedeľa</h6>
                        </div>
                        <div class="col-1 ps-2">
                            <h6 id="rozpis">6:00 - 21:00</h6>
                            <h6 id="rozpis">8:00 - 20:00</h6>
                            <h6 id="rozpis">6:00 - 20:00</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container" id="ponukame">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="pt-5 pb-2 mt-5" id="o_nas">Služby našim zákazníkom</h2>

                <!-- 
                <div class="carousel">
                    <div class="carousel-item carousel-item-visible">
                        <img src="img/carousel/coach.jpg" alt="Coach" title="Coach" height="100px" width="100px">
                    </div>
                    <div class="carousel-item">
                        <img src="img/carousel/equipment.jpeg" alt="Equipment" title="Equipment">
                    </div>
                    <div class="carousel-item">
                        <img src="img/carousel/family.jpg" alt="Family" title="Family">
                    </div>
                    <div class="carousel-actions">
                        <button id="carousel-button-prev" aria-label="Previous">
                            <button id="carousel-button-next" aria-label="Next"></button>
                    </div>
                    <div class="carousel-dots">
                        <input class="dot selected-dot" type="radio" name="dot" checked />
                        <input class="dot" type="radio" name="dot" />
                        <input class="dot" type="radio" name="dot" />
                    </div>
                </div>
                -->

                <div class="row pb-4">
                    <div class="col-lg-1" style="margin-top:120px;">
                        <div class="prev" height="200px">
                            <img class="align-middle" src="https://img.icons8.com/material/24/000000/chevron-left--v1.png" />
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="img">
                            <img src="img/carousel/coach.jpg" alt="Coach" title="Coach" width="110%" height="100%">
                        </div>
                        <div class="navigation">
                            <label for="radio1" class="navigation-btn">
                            </label>
                            <label for="radio2" class="navigation-btn">
                            </label>
                            <label for="radio3" class="navigation-btn">
                            </label>
                            <label for="radio4" class="navigation-btn">
                            </label>
                            <label for="radio5" class="navigation-btn">
                            </label>
                        </div>
                    </div>
                    <div class="col-lg-6 ms-5">
                        <h4 class="pb-4" id="carousel_heading">Osobný tréner</h4>
                        <p id="carousel_text">Splupracujeme s viacerými kvalifikovanými trénermi, za ktorými sú nemalé úspechy na
                            vrcholovej úrovni kulturistiky a fitness. Sú to profesionáli a so svojím ľudským prístupom
                            ku každému klientovi si ťa okamžite získajú a cvičenie s nimi ťa bude neskutočne baviť.</p>
                    </div>
                    <div class="col-lg-1 align-end" style="margin-top:120px;">
                        <div class="prev" height="200px">
                            <img src="https://img.icons8.com/material/24/000000/chevron-right--v1.png" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container" id="galeria">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="pt-5 pb-2 mt-1" id="o_nas">Galéria</h2>
                <p id="o_nas_text" style="font-family: PlayFairDisplay-Regular">Vojdite do galérie a prezrite si priestory nášho fitnesscentra. Priestory sú kompletne zrekonštruované,
                    čisté, pravidelne dezinfikované. Používame najnovšie profesionálne fitness vybavenie. Samozrejmosťou je
                    klimatizácia, WC a po tri sprchovacie kúty v každej, pánskej i dámskej, šatni. </p>
            </div>
            <div class="container" id="gallery">
                <div class="row justify-content-md-center p-2">
                    <div class="col-3 text-end">
                        <img id="galleryImg" src="img/gallery/fitness1.jpg" alt="" width="95%" height="95%">
                    </div>
                    <div class="col-3 text-center">
                        <img id="galleryImg" src="img/gallery/fitness2.jpg" alt="" width="95%" height="95%">
                    </div>
                    <div class="col-3 text-start">
                        <img id="galleryImg" src="img/gallery/fitness3.jpg" alt="" width="95%" height="95%">
                    </div>
                </div>
                <div class="row justify-content-md-center p-2">
                    <div class="col-3 text-end">
                        <img id="galleryImg" src="img/gallery/fitness4.jpg" alt="" width="95%" height="95%">
                    </div>
                    <div class="col-3 text-center">
                        <img id="galleryImg" src="img/gallery/fitness5.jpg" alt="" width="95%" height="95%">
                    </div>
                    <div class="col-3 text-start">
                        <img id="galleryImg" src="img/gallery/fitness6.jpg" alt="" width="95%" height="95%">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container" id="cennik">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="pt-5 pb-2" id="o_nas">Cenník</h2>
                <div class="row justify-content-md-center">
                    <div class="col-8 col-auto">
                        <table class="table table-borderless">
                            <thead class="table-light" id="head1">
                                <tr>
                                    <th>VSTUPY</th>
                                    <th class="text-center">štandardný</th>
                                    <th class="text-center">študent/dôchodca</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Bežný vstup</td>
                                    <td class="text-center">3.50 &euro;</td>
                                    <td class="text-center">2.50 &euro;</td>
                                </tr>
                                <tr>
                                    <td>Zľavnený (10:00 - 14:00)</td>
                                    <td class="text-center">2.50 &euro;</td>
                                    <td class="text-center">2.50 &euro;</td>
                                </tr>
                            </tbody>
                            <thead class="table-light" id="head2">
                                <tr>
                                    <th>PERMANENTKY</th>
                                    <th class="text-center">štandardný</th>
                                    <th class="text-center">študent/dôchodca</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1 mesiac</td>
                                    <td class="text-center">30.00 &euro;</td>
                                    <td class="text-center">25.00 &euro;</td>
                                </tr>
                                <tr>
                                    <td>3 mesiace</td>
                                    <td class="text-center">85.00 &euro;</td>
                                    <td class="text-center">70.00 &euro;</td>
                                </tr>
                                <tr>
                                    <td>6 mesiacov</td>
                                    <td class="text-center">150.00 &euro;</td>
                                    <td class="text-center">135.00 &euro;</td>
                                </tr>
                                <tr>
                                    <td>12 mesiacov</td>
                                    <td class="text-center">300.00 &euro;</td>
                                    <td class="text-center">260.00 &euro;</td>
                                </tr>
                                <tr>
                                    <td>10 vstupov</td>
                                    <td class="text-center">33.00 &euro;</td>
                                    <td class="text-center">23.00 &euro;</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container" id="kontakt">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="pt-5 pb-2 mt-5" id="o_nas">Kontakt</h2>
                <p id="o_nas_text" style="font-family: PlayFairDisplay-Regular">V prípade akýchkoľvek otázok nás neváhajte kontaktovať. Radi sa s vami stretneme
                    osobne na uvedenej adrese. Môžete nás kontaktovať aj prostredníctvom kontaktného formulára,
                    emailom alebo telefonicky. Taktiež kráčame s dobou, preto žijeme aj na najznámejších
                    sociálnych sieťach. Ak ste doteraz váhali v otázke, či zmeniť svoj život k lepšiemu,
                    ste na správnej adrese. Naše fitko je vám plne k dispozícii a ochotné Vás v tejto zmene
                    plne podporovať po každej stránke. </p>
            </div>
        </div>
        <div class="row">
            <div class="col-5 pt-4">
                <h5 class="kontakt">Kontaktné informácie</h5>
                <div class="col-8 ps-5 pt-5" style="margin-left:50px;">
                    <H6 class="kontakt">ZENIT FITNESS</H6>
                    <p style="font-family: PlayFairDisplay-Regular" class="pb-1">Tajovského 30 <br>
                        975 90 Banská Bystrica</p>
                    <img id="social" class="float-start" src="img/social/facebook.png" alt="Facebook" title="Facebook" width="40px" height="40px">
                    <img id="social" class="ms-3" src="img/social/instagram.png" alt="Instagram" title="Instagram" width="40px" height="40px">
                    <img id="social" class="ms-3" src="img/social/twitter.png" alt="Twitter" title="Twitter" width="40px" height="40px">
                    <div class="col-12 mt-4">
                        <img class="ms-1 d-inline" src="img/social/phone.png" alt="Phone" title="Phone" width="30px" height="30px">
                        <p class="ms-3 d-inline" style="font-family: PlayFairDisplay-Regular;">+421 911 235 237</p>
                    </div>
                    <div class="col-12">
                        <img class="d-inline mt-1 ms-1" src="img/social/email.png" alt="Email" title="Email" width="30px" height="30px">
                        <p class="d-inline mt-1 ms-3 pb-5" style="font-family: PlayFairDisplay-Regular;">zenit.fitness@gmail.com</p>
                    </div>
                </div>
            </div>
            <div class="col-7 pt-4">
                <h5 class="kontakt">Kontaktný formulár</h5>
                <form id="form_kontakt">
                    <div class="mb-3">
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Meno a priezvisko">
                    </div>
                    <div class="mb-3">
                        <input type="email" class="form-control" id="exampleInputPassword1" placeholder="Váš email">
                    </div>
                    <div class="mb-3">
                        <textarea style="resize: none;" class="form-control" id="exampleFormControlTextarea1" rows="5" placeholder="Text správy"></textarea>
                    </div>
                    <button type="submit" class="btn float-end mb-4" id="odoslat">Odoslať správu</button>
                </form>
            </div>
        </div>
    </div>

    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <h6>ZENIT 2021, Web Developer</h6>
                </div>
                <div class="col-6 text-center">
                    <h6>© Matej Bendík</h6>
                    <h6>Hviezdoslavova 6, 9999, 052 01, Spišská Nová Ves</h6>
                </div>
            </div>
        </div>
    </footer>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="js/index.js"></script>

</body>

</html>