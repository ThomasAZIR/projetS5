<?php session_start();
include "connexion.php";
if (isset($_GET['id'])) {
    $id = $_GET['id'];
}

//Ajout d'un élément au panier

$produitPanier = array();

function ajout($select)
{
    array_push($_SESSION['panier']['id_pdt'], $select['id_pdt']);
    array_push($_SESSION['panier']['id_prod'], $select['id_prod']);
    array_push($_SESSION['panier']['qte'], $select['qte']);
    array_push($_SESSION['panier']['prix'], $select['prix']);
}

if (isset($_GET['idPdt'])) {
    $idPdt = $_GET['idPdt'];
    $rechercheProduit = $objPdo->query('SELECT * FROM Propose WHERE id_pdt=' . $idPdt . ' AND id_prod =' . $id);
    while ($row = $rechercheProduit->fetch()) {
        $produitPanier['id_pdt'] = $idPdt;
        $produitPanier['id_prod'] = $id;
        $produitPanier['qte'] = 1;
        $produitPanier['prix'] = $row['prix_pdt'];
        ajout($produitPanier);
    }
}
//if (isset($_SESSION['panier'])) {
//    var_dump($_SESSION['panier']);
//}
?>
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
                            <li class="active"><a href="./shop-grid.php">Magasin</a></li>
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
                            <input type="text" placeholder="De quoi avez vous besoin?">
                            <button type="submit" class="site-btn">RECHERCHER</button>
                        </form>
                    </div>
                    <div class="hero__search__phone">
                        <div class="hero__search__phone__icon">
                            <a href="panier.php">
                                <img src="img/panier.png">
                            </a>
                        </div>
                        <div class="hero__search__phone__text">
                            <a href="panier.php">
                                <h5>Votre panier</h5>
                            </a>
                        </div>
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
                        <a href="./index.php">Accueil</a>
                        <span>Shop</span>
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
                        <h4>Department</h4>
                        <ul>
                            <li><a href="#">céréales</a></li>
                            <li><a href="#">Produits laitiers</a></li>
                            <li><a href="#">viandes</a></li>
                            <li><a href="#">fruits</a></li>
                            <li><a href="#">légumes</a></li>
                        </ul>
                    </div>
                    <div class="sidebar__item">
                        <h4>Price</h4>
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
                        <h2>Les catégories</h2>
                    </div>
                    <div class="row">
                        <div class="product__discount__slider owl-carousel">
                            <div class="col-lg-4">
                                <div class="product__discount__item">
                                    <div class="product__discount__item__pic set-bg"
                                         data-setbg="img/product/product-1.jpg">
                                    </div>
                                    <div class="product__discount__item__text">
                                        <h5><a href="#">Les viandes</a></h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="product__discount__item">
                                    <div class="product__discount__item__pic set-bg"
                                         data-setbg="img/product/discount/pd-2.jpg">
                                    </div>
                                    <div class="product__discount__item__text">
                                        <h5><a href="#">Les légumes</a></h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="product__discount__item">
                                    <div class="product__discount__item__pic set-bg"
                                         data-setbg="img/product/product-14.jpg">
                                    </div>
                                    <div class="product__discount__item__text">
                                        <h5><a href="#">Les céréales</a></h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="product__discount__item">
                                    <div class="product__discount__item__pic set-bg"
                                         data-setbg="img/product/discount/pd-4.jpg">
                                    </div>
                                    <div class="product__discount__item__text">
                                        <h5><a href="#">Les fruits</a></h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="product__discount__item">
                                    <div class="product__discount__item__pic set-bg"
                                         data-setbg="img/product/product-13.jpg">
                                    </div>
                                    <div class="product__discount__item__text">
                                        <h5><a href="#">Les produits laitiers</a></h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="product__discount__item">
                                    <div class="product__discount__item__pic set-bg"
                                         data-setbg="img/product/discount/pd-6.jpg">
                                    </div>
                                    <div class="product__discount__item__text">
                                        <h5><a href="#">Les fruits</a></h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end section principale -->


                <!-- choix par producteurs -->
                <div class="col-lg-9 col-md-7">
                    <div class="product__discount">
                        <div class="section-title product__discount__title">
                            <p>Bienvenue dans la partie shopping d'Agreen, ici vous pourrez, en fonction de vos besoins
                                et
                                de vos envies, constituer votre panier avec tous les produits proposés par les
                                producteurs.</p>
                            <h2>Choisissez un producteur</h2>
                        </div>
                        <div>
                            <p>Dans cette section, vous pouvez choisir le producteur a qui vous voulez acheter vos
                                produits.</p>

                            <?php
                            if (isset($_GET['id'])) {
                                $prod = $objPdo->query('SELECT * FROM Producteur p, Boutique b WHERE p.id_prod = b.id_proprio AND id_proprio = ' . $id);
                                while ($row = $prod->fetch()) {
                                    echo "<div> Voici la liste des produits du producteur " . $row['nom_prod'] . ", propriétaire de la boutique : " . $row['nom_boutique'] . "</div>";
                                }
                                $prod->closeCursor();
                                $pdts = $objPdo->query('SELECT * FROM Propose o, Produit u WHERE o.id_pdt = u.id_pdt AND o.id_prod =' . $id);
                                while ($row = $pdts->fetch()) {
                                    $idPdtTemp = $row['id_pdt'];
                                    echo "<div>" . utf8_encode($row['lib_pdt']) . ", prix: " . $row['prix_pdt'] . " € unité.<a href='shop-grid.php?id=$id&idPdt=$idPdtTemp'> Rajouter au panier</a> </div>";
                                }
                                $pdts->closeCursor();
                            }
                            ?>

                            <?php
                            $listeProds = $objPdo->query('SELECT  *  FROM Producteur');
                            while ($row = $listeProds->fetch()) {
                                $id = $row['id_prod'];
                                echo "<div class='section-title product__discount__title'> <h2>" . $row['nom_prod'] . " </h2><br><br><a href=\"shop-grid.php?id=$id\">Voir ce producteur</a> <p> </p></div>";
                            }
                            $listeProds->closeCursor();
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