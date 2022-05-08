<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/newUser.css">
    <title>ZENIT bazár | Nový užívateľ</title>
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
                                    <a href="#" id="newUser">Nový užívateľ</a>
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

    <!-- Nadpis novy uzivatel -->

    <section class="newUser">
        <div class="container">
            <h2 class="newUserH2">Nový užívateľ</h2>
            <div class="row">
                <div class="col-9" id="form">

                    <!-- Formular pre registraciu uzivatela -->

                    <form>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Meno:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="input" name="name" required placeholder="meno | povinné pole">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Priezvisko:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="input" name="lastname" required placeholder="priezvisko | povinné pole">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Email:</label>
                            <div class="col-sm-10">
                                <input type="email" class="form-control" id="input" name="email" required placeholder="email | povinné pole">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Login:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="input" name="login" required placeholder="login | povinné pole">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Heslo:</label>
                            <div class="col-sm-10">
                                <input type="password" class="form-control" id="input" name="password" required placeholder="heslo | povinné pole">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Potvrďte heslo:</label>
                            <div class="col-sm-10">
                                <input type="password" class="form-control" id="input" name="repeat_password" required placeholder="potvrďte heslo | povinné pole">
                                <button type="submit" class="btn " id="createUserBtn">Vytvoriť užívateľa</button>
                            </div>
                        </div>
                    </form>
                </div>
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