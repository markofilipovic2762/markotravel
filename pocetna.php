<?php
//entry.php  
session_start();
if (!isset($_SESSION["username"])) {
    header("location:login.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Početna</title>

    <!-- swiper css link  -->
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="css/bootstrap.min.css" rel="stylesheet" >
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
       
        <?php
        echo '<div class="d-flex justify-content-between alert alert-success" role="alert"><h1>Dobrodošli - ' . $_SESSION["username"] .'</h1><a type="button" href="logout.php" class="btn btn-secondary ">Izlogujte se</a></div>';
        ?>

    <section class="home">

        <div class="swiper home-slider">

            <div class="swiper-wrapper">

                <div class="swiper-slide slide" style="background:url(slike/home-slide-1.jpg) no-repeat">
                    <div class="content">
                        <span>istraži, otkrij, putuj</span>
                        <h3>putuj širom sveta</h3>
                        <a href="aranzman.php" class="btn">istraži više</a>
                    </div>
                </div>

                <div class="swiper-slide slide" style="background:url(slike/home-slide-2.jpg) no-repeat">
                    <div class="content">
                        <span>istraži, otkrij, putuj</span>
                        <h3>otkrij nova mesta</h3>
                        <a href="aranzman.php" class="btn">istraži više</a>
                    </div>
                </div>

                <div class="swiper-slide slide" style="background:url(slike/home-slide-3.jpg) no-repeat">
                    <div class="content">
                        <span>istraži, otkrij, putuj</span>
                        <h3>doživi nezaboravno iskustvo</h3>
                        <a href="aranzman.php" class="btn">istraži više</a>
                    </div>
                </div>

            </div>

            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>

        </div>

    </section>
    <section class="services">

        <h1 class="heading-title"> naše usluge </h1>

        <div class="box-container">

            <div class="box">
                <img src="slike/icon-1.png" alt="">
                <h3>avantura</h3>
            </div>

            <div class="box">
                <img src="slike/icon-2.png" alt="">
                <h3>vodjene ture</h3>
            </div>

            <div class="box">
                <img src="slike/icon-3.png" alt="">
                <h3>planinarenje</h3>
            </div>

            <div class="box">
                <img src="slike/icon-4.png" alt="">
                <h3>kampovi</h3>
            </div>

            <div class="box">
                <img src="slike/icon-5.png" alt="">
                <h3>of roud</h3>
            </div>

            <div class="box">
                <img src="slike/icon-6.png" alt="">
                <h3>kampovanje</h3>
            </div>

        </div>

    </section>

    <section class="home-about">

        <div class="image">
            <img src="slike/about-img.jpg" alt="">
        </div>

        <div class="content">
            <h3>O nama</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita et, recusandae nobis fugit modi quibusdam ea assumenda, nulla quisquam repellat rem aliquid sequi maxime sapiente autem ipsum? Nobis, provident voluptate?</p>
            <a href="o_nama.php" class="btn">pročitajte više</a>
        </div>

    </section>


    <section class="home-packages">

        <h1 class="heading-title"> naši aranžmani </h1>

        <div class="box-container">

            <div class="box">
                <div class="image">
                    <img src="slike/img-1.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Spomenici kulture</h3>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eos, sint!</p>
                    <a href="bukiranje.php" class="btn">bukirajte odmah</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="slike/img-2.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Letovanje</h3>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eos, sint!</p>
                    <a href="bukiranje.php" class="btn">bukirajte odmah</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="slike/img-3.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Prirodne lepote</h3>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eos, sint!</p>
                    <a href="bukiranje.php" class="btn">bukirajte odmah</a>
                </div>
            </div>

        </div>

        <div class="load-more"> <a href="aranzman.php" class="btn">učitaj više</a> </div>

    </section>


    <section class="home-offer">
        <div class="content">
            <h3>do 50% popusta</h3>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Iure tempora assumenda, debitis aliquid nesciunt maiores quas! Magni cumque quaerat saepe!</p>
            <a href="bukiranje.php" class="btn">bukirajte odmah</a>
        </div>
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <!-- swiper js link  -->
    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
    <script src="js/script.js"></script>

</body>

</html>