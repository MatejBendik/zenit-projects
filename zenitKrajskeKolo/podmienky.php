<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/index.css">
    <title>ZENIT bazár | Podmienky použitia</title>
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

    <!-- Nadpis podmienky -->

    <section class="podmienky">
        <div class="container">
            <h2 class="podmienkyHeading">Podmienky využívania služieb inzertného portálu</h2>
            <div class="row">
                <div class="col-7">
                    <h4 class="podmienkyBasic">Všeobecné podmienky</h4>
                    <ol>
                        <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                        <li>Fusce suscipit velit in libero ultrices molestie.</li>
                        <li>Donec commodo odio ut tincidunt maximus.</li>
                        <li>Donec ac odio non purus eleifend aliquet quis ac nunc.</li>
                        <li>Aliquam vehicula nibh a purus suscipit, eu accumsan nibh luctus.</li>
                        <li>Pellentesque vitae magna pretium, mattis odio in, aliquam ligula.</li>
                        <li>Donec quis ante ornare, ultricies velit at, euismod sem.</li>
                        <li>Nullam semper augue dapibus laoreet ullamcorper.</li>
                        <li>Praesent congue eros at molestie varius.</li>
                        <li>Nullam laoreet neque eget facilisis interdum.</li>
                        <li>Vestibulum vulputate tortor sed est condimentum, sit amet elementum orci pretium.</li>
                    </ol>
                    <h4 class="podmienkyBasic">Spracovanie osobných údajov</h4>
                    <ol>
                        <li>Praesent congue eros at molestie varius.</li>
                        <li>Nullam laoreet neque eget facilisis interdum.</li>
                        <li>Vestibulum vulputate tortor sed est condimentum, sit amet elementum orci pretium.</li>
                        <li>Mauris ultrices nisl et faucibus gravida.</li>
                        <li>Donec ac odio non purus eleifend aliquet quis ac nunc.</li>
                        <li>Aliquam vehicula nibh a purus suscipit, eu accumsan nibh luctus.</li>
                        <li>Pellentesque vitae magna pretium, mattis odio in, aliquam ligula.</li>
                    </ol>
                </div>
                <div id="podmienkyLast"></div>
            </div>
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