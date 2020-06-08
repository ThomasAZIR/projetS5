<?php
session_start();

include "connexion.php";
$identifiantErr = $passwordErr = "";
$identifiant = $password = "";
$testIdentifiant = $testPassword = false;

    $statut = $_GET['statut'];
    echo $statut;

//bouton pour se connecter
if (!empty($_POST["validate"])) {

    //On verifie que les champs sont remplis correctement sinon avertissement
    if (empty($_POST["ide"])) {
        $identifiantErr = "Champ obligatoire";
    } else {
        $identifiant = $_POST["ide"]; // erreur ?
        $testIdentifiant = true;
    }
    if (empty($_POST["pass"])) {
        $passwordErr = "Champ obligatoire";
    } else {
        $password = $_POST["pass"];
        $testPassword = true;
    }

    //si Les champs sont remplis, on fait une requète pour recupere les coordonnées de l'utilisateur

    //producteur

    if ($statut == "Producteur") {
        if ($testIdentifiant && $testPassword) {
            $testExist = $objPdo->prepare('SELECT * FROM Producteur WHERE mail_prod = ?');
            $testExist->bindValue(1, utf8_decode($identifiant));
            $testExist->execute();

            $resIdentifiant = NULL;

            while ($row = $testExist->fetch()) {
                $resIdentifiant = $row["id_prod"];
                $resNom = utf8_encode($row["nom_prod"]);
                $resPrenom = utf8_encode($row["prenom_prod"]);
                $resAdd = utf8_encode($row["adresse_prod"]);
                $resEmail = utf8_encode($row["mail_prod"]);
                $resMdp = utf8_encode($row["mdp_prod"]);
            }
            $testExist->closeCursor();
//            var_dump($resIdentifiant);
//            var_dump($resMdp);
//            var_dump($password);
//            var_dump($resEmail);

            //Si la requete marche pas c'est que l'identifiant est invalide ! donc on l'affiche, sinon on créé la session si le mdp est valide
            if ($resIdentifiant == NULL) {
                $identifiantErr = "Identifiant invalide";
            } else {
                if ($resMdp == $password) {
                    $_SESSION['logged'] = true;
                    $_SESSION['motDePasse'] = $resMdp;
                    $_SESSION["email"] = $resEmail;
                    $_SESSION["id_prod"] = $resIdentifiant;
                    $_SESSION["nom"] = $resNom;
                    $_SESSION["prenom"] = $resPrenom;
                    $_SESSION["statut"] = $statut;

                    header('location:index.php');
                } else {
                    $passwordErr = "Mot de passe invalide";
                }
            }
        }
    }


    //Client
    if ($statut == "Client") {
        if ($testIdentifiant && $testPassword) {
            $testExist = $objPdo->prepare('SELECT * FROM Client WHERE mail_client = ?');
            $testExist->bindValue(1, utf8_decode($identifiant));
            $testExist->execute();

            $resIdentifiant = NULL;

            while ($row = $testExist->fetch()) {
                $resIdentifiant = $row["id_client"];
                $resNom = utf8_encode($row["nom_client"]);
                $resPrenom = utf8_encode($row["prenom_client"]);
                $resAdd = utf8_encode($row["adresse_client"]);
                $resEmail = utf8_encode($row["mail_client"]);
                $resMdp = utf8_encode($row["mdp_client"]);
            }
            $testExist->closeCursor();
//                var_dump($resIdentifiant);
//                var_dump($password);

            //Si la requete marche pas c'est que l'identifiant est invalide ! donc on l'affiche, sinon on créé la session si le mdp est valide
            if ($resIdentifiant == NULL) {
                $identifiantErr = "Identifiant invalide";
            } else {
                if ($resMdp == $password) {
                    $_SESSION['logged'] = true;
                    $_SESSION['motDePasse'] = $resMdp;
                    $_SESSION["email"] = $resEmail;
                    $_SESSION["id_client"] = $resIdentifiant;
                    $_SESSION["nom"] = $resNom;
                    $_SESSION["prenom"] = $resPrenom;
                    $_SESSION["statut"] = $statut;
                    header('location:index.php');
                } else {
                    $passwordErr = "Mot de passe invalide";
                }
            }
        }
    }
}
?>

<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ogani Template">
    <meta name="keywords" content="Ogani, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ogani | Template</title>

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
    <div class="header__top">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="header__top__left">
                        <ul>
                            <li><i class="fa fa-envelope"></i> hello@colorlib.com</li>
                            <li>Free Shipping for all Order of $99</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="header__top__right">
                        <div class="header__top__right__social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-linkedin"></i></a>
                            <a href="#"><i class="fa fa-pinterest-p"></i></a>
                        </div>
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
                        <li><a href="./index.php">Home</a></li>
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
                        <li class="active"><a href="./contact.php">Contact</a></li>
                    </ul>
                </nav>
            </div>
            <div class="col-lg-3">
                <div class="header__cart">
                    <ul>
                        <li><a href="#"><i class="fa fa-heart"></i> <span>1</span></a></li>
                        <li><a href="#"><i class="fa fa-shopping-bag"></i> <span>3</span></a></li>
                    </ul>
                    <div class="header__cart__price">item: <span>$150.00</span></div>
                </div>
            </div>
        </div>
        <div class="humberger__open">
            <i class="fa fa-bars"></i>
        </div>
    </div>
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
                        <span>All departments</span>
                    </div>
                    <ul>
                        <li><a href="#">Fresh Meat</a></li>
                        <li><a href="#">Vegetables</a></li>
                        <li><a href="#">Fruit & Nut Gifts</a></li>
                        <li><a href="#">Fresh Berries</a></li>
                        <li><a href="#">Ocean Foods</a></li>
                        <li><a href="#">Butter & Eggs</a></li>
                        <li><a href="#">Fastfood</a></li>
                        <li><a href="#">Fresh Onion</a></li>
                        <li><a href="#">Papayaya & Crisps</a></li>
                        <li><a href="#">Oatmeal</a></li>
                        <li><a href="#">Fresh Bananas</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="hero__search">
                    <div class="hero__search__form">
                        <form action="#">
                            <div class="hero__search__categories">
                                All Categories
                                <span class="arrow_carrot-down"></span>
                            </div>
                            <input type="text" placeholder="What do yo u need?">
                            <button type="submit" class="site-btn">SEARCH</button>
                        </form>
                    </div>
                    <div class="hero__search__phone">
                        <div class="hero__search__phone__icon">
                            <i class="fa fa-phone"></i>
                        </div>
                        <div class="hero__search__phone__text">
                            <h5>+65 11.188.888</h5>
                            <span>support 24/7 time</span>
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
                    <h2>S'inscire</h2>
                    <div class="breadcrumb__option">
                        <input type="button" value="Accueil" onclick="window.location.href='index.php';"/>
                        <input type="button" value="Inscription" onclick="window.location.href='inscription.php';"/>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Breadcrumb Section End -->

<!-- Contact Section Begin -->
<section class="contact spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-6 text-center">
                <div class="contact__widget">

                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 text-center">
                <div class="contact__widget">

                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 text-center">
                <div class="contact__widget">

                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 text-center">
                <div class="contact__widget">

                </div>
            </div>
        </div>
    </div>
</section>
<!-- Contact Section End -->

<!-- Map Begin -->

<!-- Map End -->

<!-- Contact Form Begin -->
<section class="Inscription">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-6 text-center">
                <div class="contact__widget">
                    <form id=formConnexion method="post">
                        <table>
                            <tr>
                                <td>
                                    <?php
                                    echo $statut; ?>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Email:
                                </td>
                                <td>
                                    <input type="text" name="ide" placeholder="saisissez votre adresse mail" size="18"
                                           value="<?php echo isset($_POST['ide']) ? $_POST['ide'] : '' ?>"><br><span
                                            class="error"> <?php echo $identifiantErr; ?></span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    mdp:
                                </td>
                                <td>
                                    <input type="password" name="pass" size="18"
                                           value="<?php echo isset($_POST['pass']) ? $_POST['pass'] : '' ?>"><br><span
                                            class="error"> <?php echo $passwordErr; ?></span>
                                </td>
                            </tr>
                        </table>
                        <br>
                        <div><input type="submit" value="Connexion" name="validate"/> <input type="reset"
                                                                                             value="Effacer"/></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Contact Form End -->

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
                        <li>Address: 60-49 Road 11378 New York</li>
                        <li>Phone: +65 11.188.888</li>
                        <li>Email: hello@colorlib.com</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 offset-lg-1">
                <div class="footer__widget">
                    <h6>Useful Links</h6>
                    <ul>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">About Our Shop</a></li>
                        <li><a href="#">Secure Shopping</a></li>
                        <li><a href="#">Delivery infomation</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Our Sitemap</a></li>
                    </ul>
                    <ul>
                        <li><a href="#">Who We Are</a></li>
                        <li><a href="#">Our Services</a></li>
                        <li><a href="#">Projects</a></li>
                        <li><a href="#">Contact</a></li>
                        <li><a href="#">Innovation</a></li>
                        <li><a href="#">Testimonials</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-md-12">
                <div class="footer__widget">
                    <h6>Join Our Newsletter Now</h6>
                    <p>Get E-mail updates about our latest shop and special offers.</p>
                    <form action="#">
                        <input type="text" placeholder="Enter your mail">
                        <button type="submit" class="site-btn">Subscribe</button>
                    </form>
                    <div class="footer__widget__social">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-instagram"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-pinterest"></i></a>
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