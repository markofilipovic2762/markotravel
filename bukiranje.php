<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>bukirajte</title>

    <!-- swiper css link  -->
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">

</head>

<body>


    <section class="header">

        <a class="logo" href="pocetna.php"><img src="slike/logo.PNG" height="74px" width="280px"></a></div>

        <nav class="navbar">
            <a href="pocetna.php">Početna</a>
            <a href="o_nama.php">O nama</a>
            <a href="aranzman.php">Aranžmani</a>
            <a href="bukiranje.php">Bukirajte</a>
            <a href="#kontakt">Kontakt</a>
        </nav>

        <div id="menu-btn" class="fas fa-bars"></div>

    </section>


    <div class="heading" style="background:url(slike/header-bg-3.png) no-repeat">
        <h1>bukirajte odmah</h1>
    </div>
    <section class="booking">

        <h1 class="heading-title">bukiraj svoje putovanje!</h1>

        <form action="bukiranje_forma.php" method="post" class="book-form">

            <div class="flex">
                <div class="inputBox">
                    <span>ime :</span>
                    <input type="text" placeholder="unesite svoje ime" name="ime">
                </div>
                <div class="inputBox">
                    <span>email :</span>
                    <input type="email" placeholder="unesite svoje email" name="email">
                </div>
                <div class="inputBox">
                    <span>broj telefona :</span>
                    <input type="number" placeholder="unesite svoj broj telefona" name="telefon">
                </div>
                <div class="inputBox">
                    <span>adresa :</span>
                    <input type="text" placeholder="unesite svoju adresu" name="adresa">
                </div>
                <div class="inputBox">
                    <span>kuda :</span>
                    <input type="text" placeholder="mesto koje želite da posetite" name="mesto">
                </div>
                <div class="inputBox">
                    <span>koliko :</span>
                    <input type="number" placeholder="broj gostiju" name="broj_gostiju">
                </div>
                <div class="inputBox">
                    <span>dolazak :</span>
                    <input type="date" name="dolazak">
                </div>
                <div class="inputBox">
                    <span>odlazak :</span>
                    <input type="date" name="odlazak">
                </div>
            </div>

            <input type="submit" value="Posalji" class="btn" name="posalji">

        </form>

    </section>




    <section class="footer">

        <div class="box-container">

            <div class="box">
                <h3>brzi linkovi</h3>
                <a href="pocetna.php"> <i class="fas fa-angle-right"></i> početna</a>
                <a href="o_nama.php"> <i class="fas fa-angle-right"></i> o nama</a>
                <a href="aranzman.php"> <i class="fas fa-angle-right"></i> aranžmani</a>
                <a href="bukiranje.php"> <i class="fas fa-angle-right"></i> bukirajte</a>
            </div>

            <div class="box">
                <h3>dodatni linkovi</h3>
                <a href="#"> <i class="fas fa-angle-right"></i> pitajte nas</a>
                <a href="#"> <i class="fas fa-angle-right"></i> o nama</a>
                <a href="#"> <i class="fas fa-angle-right"></i> politika privatnosti</a>
                <a href="#"> <i class="fas fa-angle-right"></i> uslovi korišćenja</a>
            </div>

            <div class="box" id="kontakt">
                <h3>kontakt informacije</h3>
                <a href="#"> <i class="fas fa-phone"></i> +123-456-7890 </a>
                <a href="#"> <i class="fas fa-phone"></i> +111-222-3333 </a>
                <a href="#"> <i class="fas fa-envelope"></i> marko@travel.com </a>
                <a href="#"> <i class="fas fa-map"></i> Belgrade, Serbia - 11300 </a>
            </div>

            <div class="box">
                <h3>pratite nas</h3>
                <a href="#"> <i class="fab fa-facebook-f"></i> facebook </a>
                <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
                <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
                <a href="#"> <i class="fab fa-linkedin"></i> linkedin </a>
            </div>

        </div>

        <div class="credit"> Napravio <span>Marko Filipović</span> | sva prava zadržana! </div>

    </section>


    <!-- swiper js link  -->
    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
    <script src="js/script.js"></script>

</body>

</html>