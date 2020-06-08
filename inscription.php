<?php include 'connexion.php';
session_start();

$nomErr = $prenomErr = $emailErr = $adresseErr = $mdpErr = $statutErr = "";
$nom = $prenom = $email = $adresse = $mdp = $statut = "";
$testNom = $testPrenom = $testEmail = $testadresse = $testMdp = $testStatut = false;
$testAdresseMailDisponible = false;

if (isset($_POST["validate"])) {
    $ajoute = true;

    //On gère les erreurs sur les champs vides


    $statut = $_POST["statut"];
    $testStatut = true;

    if (empty($_POST["nom"])) {
        $nomErr = "Champ obligatoire";
    } else {
        $nom = $_POST["nom"];
        $testNom = true;
    }

    if (empty($_POST["prenom"])) {
        $prenomErr = "Champ obligatoire";
    } else {
        $prenom = $_POST["prenom"];
        $testPrenom = true;
    }

    if (empty($_POST["adresse"])) {
        $pseudoErr = "Champ obligatoire";
    } else {
        $adresse = $_POST["adresse"];
        $testAdresse = true;
    }

    if (empty($_POST["email"])) {
        $emailErr = "Champ obligatoire";
    } else {
        $email = $_POST["email"];
        $testEmail = true;
    }

    if (empty($_POST["mdp"])) {
        $mdpErr = "Champ obligatoire";
    } else {
        $mdp = $_POST["mdp"];
        $testMdp = true;
    }

    if ($testPrenom && $testNom && $testAdresse && $testEmail && $testMdp) {

        //On teste si l'adresse mail est disponible
        $resIdentifiant = "";
        $resIdentifiant2 = "";

        $testExistPseudo = $objPdo->prepare('SELECT id_client FROM Client WHERE mail_client = ?');
        $testExistPseudo->bindValue(1, $_POST["email"]);
        $testExistPseudo->execute();
        while ($row = $testExistPseudo->fetch()) {
            $resIdentifiant = $row["id_client"];
        }
        $testExistPseudo->closeCursor();

        $testExistMail = $objPdo->prepare('SELECT id_producteur FROM Producteur WHERE mail_producteur = ?');
        $testExistMail->bindValue(1, $_POST["email"]);
        $testExistMail->execute();
        while ($row = $testExistMail->fetch()) {
            $resIdentifiant2 = $row["idproducteur"];
        }
        $testExistMail->closeCursor();

        if (($resIdentifiant == null) && ($resIdentifiant2 == null)) {
            //La requète ne s'execute pas si des champs sont vide car la base est protégé sur phpmyadmin
            if ($statut == "client") {
                $addclient = $objPdo->prepare('INSERT INTO Client ( nom_client, prenom_client, adresse_client, mail_client, mdp_client) VALUES (?,?,?,?,?)');
                $addclient->bindValue(1, utf8_decode($nom), PDO::PARAM_STR);
                $addclient->bindValue(2, utf8_decode($prenom), PDO::PARAM_STR);
                $addclient->bindValue(5, utf8_decode($adresse), PDO::PARAM_STR);
                $addclient->bindValue(3, utf8_decode($email), PDO::PARAM_STR);
                $addclient->bindValue(4, utf8_decode($mdp), PDO::PARAM_STR);
                $addclient->execute();
                $addclient->closeCursor();
                header("location:login.php?statut=Client");
            } else if ($statut == "producteur"){
                $addprod = $objPdo->prepare('INSERT INTO Producteur ( nom_prod, prenom_prod, adresse_prod, mail_prod, mdp_prod) VALUES (?,?,?,?,?)');

                $addprod->bindValue(1, utf8_decode($nom), PDO::PARAM_STR);
                $addprod->bindValue(2, utf8_decode($prenom), PDO::PARAM_STR);
                $addprod->bindValue(5, utf8_decode($adresse), PDO::PARAM_STR);
                $addprod->bindValue(3, utf8_decode($email), PDO::PARAM_STR);
                $addprod->bindValue(4, utf8_decode($mdp), PDO::PARAM_STR);
                $addprod->execute();
                $addprod->closeCursor();
                header("location:login.php?statut=Producteur");
            }
        } else {
            $emailErr = 'Adresse Mail déja utilisée';
        }
    }
} else {
    $ajoute = false;
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
                        <a href="./index.php">Accueil</a>
                        <span>S'inscrire</span>
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
                    <form onsubmit="return valider();" name="Formu" method="POST">
                        <table>
                            <tr>
                                <td> statut:
                                </td>
                                <td>
                                    <select size='20' name="statut" placeholder="client">
                                        <option selected> client</option>
                                        <option> producteur</option>
                                    </select> <? //php echo $statutErr; ?>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Nom :
                                </td>
                                <td>
                                    <input required type='text' size='20' name='nom'
                                           placeholder="Saissez votre Nom"> <?php echo $nomErr; ?>
                                </td>
                            </tr>
                            <tr>
                                <td>

                                    Prénom :
                                </td>
                                <td>
                                    <input required type='text' size='20' name='prenom'
                                           placeholder="Saissez votre prénom"><?php echo $prenomErr; ?>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Adresse
                                </td>
                                <td>
                                    <input required type='text' size='20' name='adresse'
                                           placeholder="Saissez votre adresse"><?php echo $adresseErr; ?>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    E-mail:
                                </td>
                                <td>
                                    <input required type='email' size='20' name='email'
                                           placeholder="Saissez votre e-mail"><?php echo $emailErr; ?>
                                </td>
                            </tr>
                            <tr>
                                <td>

                                    Mot de passe :
                                </td>
                                <td>
                                    <input required type='password' size='20' name='mdp'
                                           placeholder="Saissez votre mot de passe"><?php echo $mdpErr; ?>
                                </td>
                            </tr>
                        </table>
                        <br>
                        <div><input type="submit" value="Valider" name="validate"/> <input type="reset"
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