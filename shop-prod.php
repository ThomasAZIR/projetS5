<?php session_start();
include "connexion.php" ?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ogani Template">
    <meta name="keywords" content="Ogani, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> AGREEN</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>

<body>
<!-- Page Preloder -->
<div id="preloder">
    <div class="loader"></div>
</div>

<!-- Humberger Begin -->
<div class="humberger__menu__overlay"></div>
<div class="humberger__menu__wrapper">
    <div class="humberger__menu__logo">
        <a href="#"><img src="img/logo.png" alt=""></a>
    </div>
    <div class="humberger__menu__cart">
        <ul>
            <li><a href="#"><i class="fa fa-heart"></i> <span>1</span></a></li>
            <li><a href="#"><i class="fa fa-shopping-bag"></i> <span>3</span></a></li>
        </ul>
        <div class="header__cart__price">item: <span>$150.00</span></div>
    </div>
    <div class="humberger__menu__widget">
        <div class="header__top__right__language">
            <img src="img/language.png" alt="">
            <div>English</div>
            <span class="arrow_carrot-down"></span>
            <ul>
                <li><a href="#">Spanis</a></li>
                <li><a href="#">English</a></li>
            </ul>
        </div>
        <div class="header__top__right__auth">
            <a href="#"><i class="fa fa-user"></i> Login</a>
        </div>
    </div>
    <nav class="humberger__menu__nav mobile-menu">
        <ul>
            <li class="active"><a href="./index.php">Home</a></li>
            <li><a href="./shop-grid.php">Shop</a></li>
            <li><a href="#">Pages</a>
                <ul class="header__menu__dropdown">
                    <li><a href="./shop-details.php">Shop Details</a></li>
                    <li><a href="./shoping-cart.php">Shoping Cart</a></li>
                    <li><a href="./checkout.php">Check Out</a></li>
                    <li><a href="./blog-details.php">Blog Details</a></li>
                </ul>
            </li>
            <li><a href="./blog.php">Blog</a></li>
            <li><a href="./contact.php">Contact</a></li>
        </ul>
    </nav>
    <div id="mobile-menu-wrap"></div>
    <div class="header__top__right__social">
        <a href="#"><i class="fa fa-facebook"></i></a>
        <a href="#"><i class="fa fa-twitter"></i></a>
        <a href="#"><i class="fa fa-linkedin"></i></a>
        <a href="#"><i class="fa fa-pinterest-p"></i></a>
    </div>
    <div class="humberger__menu__contact">
        <ul>
            <li><i class="fa fa-envelope"></i> hello@colorlib.com</li>
            <li>Free Shipping for all Order of $99</li>
        </ul>
    </div>
</div>
<!-- Humberger End -->

<!-- Header Section Begin -->
<header class="header">
    <header class="header">
        <div class="header__top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="header__top__left">
                            <ul>
                                <li><i> <!-- class="fa fa-envelope"> --> Université de lorraine, IUT de metz </i></li>
                                <li>
                                    <div class="header__top__right__auth">
                                        <?php
                                        if (!isset($_SESSION['email'])) {
                                            echo "qui êtes vous ? :  <input type=\"submit\" value=\"Client\" onclick=\"window . location . href = 'login.php?statut=Client'; \"  />  
                           <input type=\"submit\" value=\"Producteur\" onclick=\"window . location . href = 'login.php?statut=Producteur';\"/>";
                                        } else {
                                            echo "Bienvenue " . "<input type=\"submit\" value=\"Deconnexion\" onclick=\"window . location . href = 'logout.php';\"/>";
                                        }
                                        ?>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="header__top__right">
                            <div class="header__top__right__social">
                                <a href="https://fr-fr.facebook.com/IUT.metz.officiel/"><i
                                            class="fa fa-facebook"></i></a>
                                <a href="https://twitter.com/univ_lorraine?lang=fr"><i class="fa fa-twitter"></i></a>
                                <a href="https://www.instagram.com/iutmetz/"><i class="fa fa-instagram"></i></a>

                            </div>
                            <div class="header__top__right__language">
                                <img src="img/drapeaufr.png" alt="">
                                <div>Français</div>
                                <span class="arrow_carrot-down"></span>
                                <ul>
                                    <li><a href="#">French</a></li>
                                    <li><a href="#">English</a></li>
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="header__logo">
                        <a href="./index.php"><img src="img/logo.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <nav class="header__menu">
                        <ul>
                            <li><a href="./index.php">Accueil</a></li>
                            <li class="active"><a href="./shop-prod.php">Magasin</a></li>
                            <li><a href="./blog.php">Blog</a></li>
                            <li><a href="./contact.php">Contact</a></li>
                            <?php
                            if (!isset($_SESSION['email'])) {
                                echo "
                             <li><a href=\"#\">S'identifier</a>
                                <ul class=\"header__menu__dropdown\">
                                    <li><a href=\"./login.php?statut=Client\">Client</a></li>
                                    <li><a href=\"./login.php?statut=Producteur\">Producteur</a></li>
                                </ul>
                            </li>";
                            }
                            ?>
                        </ul>
                    </nav>
                </div>
            </div>
    </header>
</header>
<!-- Header Section End -->

<!-- Hero Section Begin -->
<section class="hero hero-normal">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="hero__categories">
                    <div class="hero__categories__all">
                        <i class="fa fa-bars"></i>
                        <span>Tous les produits</span>
                    </div>
                    <ul>
                        <li><a href="#">Céréales</a></li>
                        <li><a href="#">Produits laitiers</a></li>
                        <li><a href="#">Viandes</a></li>
                        <li><a href="#">Fruits</a></li>
                        <li><a href="#">Légumes</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="hero__search">
                    <div class="hero__search__form">
                        <form action="#">
                            <div class="hero__search__categories">
                                Toutes les catégories
                                <span class="arrow_carrot-down"></span>
                            </div>
                            <input type="text" placeholder="De quoi avez vous besoin ?">
                            <button type="submit" class="site-btn">RECHERCHER</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Hero Section End -->

<!-- Breadcrumb Section Begin -->
<section class="breadcrumb-section set-bg" data-setbg="img/breadcrumb.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="breadcrumb__text">
                    <h2>Magasin</h2>
                    <div class="breadcrumb__option">
                        <a href="./index.php">Accueil </a>
                        <span>Magasin</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Breadcrumb Section End -->

<!-- Product Section Begin -->
<section class="product spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-5">
                <div class="sidebar">
                    <div class="sidebar__item">
                        <h4>Catégories</h4>
                        <ul>
                            <li><a href="#">céréales</a></li>
                            <li><a href="#">Produits laitiers</a></li>
                            <li><a href="#">viandes</a></li>
                            <li><a href="#">fruits</a></li>
                            <li><a href="#">légumes</a></li>
                        </ul>
                    </div>
                    <div class="sidebar__item">
                        <h4>Prix</h4>
                        <div class="price-range-wrap">
                            <div class="price-range ui-slider ui-corner-all ui-slider-horizontal ui-widget ui-widget-content"
                                 data-min="10" data-max="540">
                                <div class="ui-slider-range ui-corner-all ui-widget-header"></div>
                                <span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default"></span>
                                <span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default"></span>
                            </div>
                            <div class="range-slider">
                                <div class="price-input">
                                    <input type="text" id="minamount">
                                    <input type="text" id="maxamount">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <!-- Section principale -->
            <div class="col-lg-9 col-md-7">
                <div class="product__discount">
                    <div class="section-title product__discount__title">
                        <h2>Rajoutez un article</h2>
                    </div>
                    <div class="row">
                        <div class="col-lg-9 col-md-7">
                            <form method="post">
                                <input type="submit" value="légumes" name="legumes"/>
                                <input type="submit" value="fruits" name="fruits"/>
                                <input type="submit" value="viande" name="viande"/>
                                <input type="submit" value="céréales" name="cereales"/>
                                <input type="submit" value="produits laitiers" name="prodLait"/>
                                <!--                         <input type="submit" value="Ajoutez cet article" name="posterSujet"/>-->
                            </form>
                        </div>
                        <br>
                        <div class="col-lg-9 col-md-7">
                            <?php
                            if (isset($_POST["legumes"])) {
                                echo "<input type=\"submit\" value=\"haricots\" name=\"fruits\"/>
                            <input type=\"submit\" value=\"Poireau\" name=\"poireau\"/>
                            <input type=\"submit\" value=\"Carotte\" name=\"carotte\"/>
                            <input type=\"submit\" value=\"haricots vert bio\" name=\"haricotVertBio\"/>";
                            }
                            elseif (isset($_POST['fruits'])){
                                echo "<input type=\"submit\" value=\"Pomme\" name=\"pomme\"/>
                                      <input type=\"submit\" value=\"Pomme bio\" name=\"pommeBio\"/>
                                      <input type=\"submit\" value=\"Poire\" name=\"poire\"/>
                                      <input type=\"submit\" value=\"Poire bio\" name=\"poireBio\"/>
                                      <input type=\"submit\" value=\"Banane bio\" name=\"bananeBio\"/>
                                      <input type=\"submit\" value=\"Mirabelle\" name=\"mirabelle\"/>
                                      <input type=\"submit\" value=\"Mirabelle bio\" name=\"mirabelleBio\"/>
                                      <input type=\"submit\" value=\"Fraise\" name=\"fraise\"/>
                                      <input type=\"submit\" value=\"Fraise bio\" name=\"fraiseBio\"/>
                                      <input type=\"submit\" value=\"Framboise\" name=\"framboise\"/>
                                      <input type=\"submit\" value=\"Framboise bio\" name=\"framboisebio\"/>
                                      <input type=\"submit\" value=\"Pêche\" name=\"peche\"/>
                                      <input type=\"submit\" value=\"Pêche bio\" name=\"pecheBio\"/>
                                      <input type=\"submit\" value=\"Abricot\" name=\"abricot\"/>
                                      <input type=\"submit\" value=\"Abricot bio\" name=\"abricotBio\"/>
                                      <input type=\"submit\" value=\"Mûre\" name=\"mure\"/>
                                      <input type=\"submit\" value=\"Mûre bio\" name=\"mureBio\"/>";
                            }
                            elseif (isset($_POST['viande'])){
                                echo "<input type=\"submit\" value=\"Poulet bio\" name=\"pouletBio\"/>";
                            }
                            elseif (isset($_POST['cereales'])){
                                echo "<input type=\"submit\" value=\"Blé bio\" name=\"bleBio\"/>
                                      <input type=\"submit\" value=\"Soja bio\" name=\"sojaBio\"/>
                                      <input type=\"submit\" value=\"Maïs\" name=\"mais\"/>
                                      <input type=\"submit\" value=\"Blé\" name=\"ble\"/>";
                            }
                            elseif (isset($_POST['prodLait'])){
                                echo "<input type=\"submit\" value=\"Lait\" name=\"lait\"/>";
                            }
                            ;
                            ?></div>


                    </div>
                </div>
                <!-- end section principale -->

                <!-- Les catégories -->
                <div class="col-lg-9 col-md-7">
                    <div class="product__discount">
                        <div class="section-title product__discount__title">
                            <h2>Vos produits</h2>
                        </div>
                        <div>
                            <?php
//                                var_dump($_SESSION['email']);
                                $produit = $objPdo->prepare('SELECT * FROM Propose o, Produit p, Producteur pro WHERE p.id_pdt = o.id_pdt AND pro.id_prod = o.id_prod AND mail_prod = ?');
                                $produit->bindValue(1,$_SESSION['email']);
                                $produit->execute();
                                while($row = $produit->fetch()) {
                                    echo "<div>" . $row['lib_pdt'] . "</div>";
                                }
                                $produit->closeCursor();
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Product Section End -->

<!-- Footer Section Begin -->
<footer class="footer spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="footer__about">
                    <div class="footer__about__logo">
                        <a href="./index.php"><img src="img/logo.png" alt=""></a>
                    </div>
                    <ul>

                        <li>Numéro: 03 72 74 84 00</li>
                        <li>Adresse : Ile du Saulcy. 57045 Metz</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 offset-lg-1">
                <div class="footer__widget">
                    <h6>Liens utiles</h6>
                    <ul>
                        <li><a href="#">A propos de nous</a></li>
                        <li><a href="#">A propos de notre site</a></li>
                        <li><a href="#">Site Sécurisé</a></li>
                        <li><a href="#">Information de livraison</a></li>
                        <li><a href="#">Politique de confidentialité</a></li>

                    </ul>
                    <ul>
                        <li><a href="#">Qui sommes nous</a></li>
                        <li><a href="#">Nos Services</a></li>
                        <li><a href="#">Projets</a></li>
                        <li><a href="#">Contact</a></li>
                        <li><a href="#">Innovation</a></li>

                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-md-12">
                <div class="footer__widget">
                    <h6>Si vous voulez nous contacter</h6>
                    <p>Rejoignez nous sur la page <a href="contact.php">Contact</a></p>

                    <div class="footer__widget__social">
                        <a href="https://fr-fr.facebook.com/IUT.metz.officiel/"><i class="fa fa-facebook"></i></a>
                        <a href="https://www.instagram.com/iutmetz/"><i class="fa fa-instagram"></i></a>
                        <a href="https://twitter.com/univ_lorraine?lang=fr"><i class="fa fa-twitter"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="footer__copyright">
                    <div class="footer__copyright__text">
                        <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            Copyright &copy;<script>document.write(new Date().getFullYear());</script>
                            All rights reserved | This template is made with <i class="fa fa-heart"
                                                                                aria-hidden="true"></i> by <a
                                    href="https://colorlib.com" target="_blank">Colorlib</a>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                    </div>
                    <div class="footer__copyright__payment"><img src="img/payment-item.png" alt=""></div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Footer Section End -->

<!-- Js Plugins -->
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.nice-select.min.js"></script>
<script src="js/jquery-ui.min.js"></script>
<script src="js/jquery.slicknav.js"></script>
<script src="js/mixitup.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/main.js"></script>


</body>

</html>