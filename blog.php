<?php session_start();
include "connexion.php";
?>
<?php
if(isset($_POST["titre"]) && isset($_POST["texte"])){
    $ajouterSujet = $objPdo->prepare('INSERT INTO Message(id_auteur, titre_message, message, date_message) VALUES (?,?,?,?)');
    $ajouterSujet->bindValue(1,(int) $_SESSION['id_prod']);
    $ajouterSujet->bindValue(2, utf8_decode($_POST['titre']));
    $ajouterSujet->bindValue(3, utf8_decode($_POST['texte']));
    $date = date('Y-m-d', time());
    $ajouterSujet->bindValue(4,$date );
    $ajouterSujet->execute();
    $ajouterSujet->closeCursor();
    var_dump($_SESSION['id_prod'],utf8_decode($_POST['titre']),utf8_decode($_POST['texte']),$date);
    header('location:blog.php');
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
                <div class="col-lg-6 col-md-6">
                    <div class="header__top__left">
                        <ul>
                            <li>  <i> <!-- class="fa fa-envelope"> --> Université de lorraine, IUT de metz </i>  </li>
                            <li>                            <div class="header__top__right__auth">
                                    <?php
                                    if (!isset($_SESSION['email'])) {
                                        echo "qui êtes vous ? :  <input type=\"submit\" value=\"Client\" onclick=\"window . location . href = 'login.php?statut=Client'; \"  />  
                           <input type=\"submit\" value=\"Producteur\" onclick=\"window . location . href = 'login.php?statut=Producteur';\"/>";
                                    } else {
                                        echo "Welcome " . "<input type=\"submit\" value=\"Deconnexion\" onclick=\"window . location . href = 'logout.php';\"/>";
                                    }
                                    ?>
                                </div></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="header__top__right">
                        <div class="header__top__right__social">
                            <a href="https://fr-fr.facebook.com/IUT.metz.officiel/"><i class="fa fa-facebook"></i></a>
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
                        <li><a href="./index.php">Home</a></li>
                        <li><a href="./shop-grid.php">Shop</a></li>
                        <li class="active"><a href="./blog.php">Blog</a></li>
                        <li><a href="./contact.php">Contact</a></li>
                        <?php
                        if (!isset($_SESSION['email'])) {
                            echo "
                             <li><a href=\"#\">S'identifier</a>
                                <ul class=\"header__menu__dropdown\">
                                    <li><a href=\"./login.php?statut=Client\">Client</a></li>
                                    <li><a href=\"./login.php?statut=Producteur\">Producteur</a></li>
                                </ul>
                            </li>";}

                        ?>
                    </ul>
                </nav>
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
                    <h2>Blog</h2>
                    <div class="breadcrumb__option">
                        <a href="./index.php">Home</a>
                        <span>Blog</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Breadcrumb Section End -->

<!-- Blog Section Begin -->
<section class="blog spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-5">
                <div class="blog__sidebar">
                    <div class="blog__sidebar__search">
                        <form action="#">
                            <input type="text" placeholder="Search...">
                            <button type="submit"><span class="icon_search"></span></button>
                        </form>
                    </div>
                    <div class="blog__sidebar__item">
                        <h4>Categories</h4>
                        <ul>
                            <li><a href="#">All</a></li>
                            <li><a href="#">Beauty (20)</a></li>
                            <li><a href="#">Food (5)</a></li>
                            <li><a href="#">Life Style (9)</a></li>
                            <li><a href="#">Travel (10)</a></li>
                        </ul>
                    </div>
                    <div class="blog__sidebar__item">
                        <h4>Recent News</h4>
                        <div class="blog__sidebar__recent">
                            <a href="#" class="blog__sidebar__recent__item">
                                <div class="blog__sidebar__recent__item__pic">
                                    <img src="img/blog/sidebar/sr-1.jpg" alt="">
                                </div>
                                <div class="blog__sidebar__recent__item__text">
                                    <h6>09 Kinds Of Vegetables<br /> Protect The Liver</h6>
                                    <span>MAR 05, 2019</span>
                                </div>
                            </a>
                            <a href="#" class="blog__sidebar__recent__item">
                                <div class="blog__sidebar__recent__item__pic">
                                    <img src="img/blog/sidebar/sr-2.jpg" alt="">
                                </div>
                                <div class="blog__sidebar__recent__item__text">
                                    <h6>Tips You To Balance<br /> Nutrition Meal Day</h6>
                                    <span>MAR 05, 2019</span>
                                </div>
                            </a>
                            <a href="#" class="blog__sidebar__recent__item">
                                <div class="blog__sidebar__recent__item__pic">
                                    <img src="img/blog/sidebar/sr-3.jpg" alt="">
                                </div>
                                <div class="blog__sidebar__recent__item__text">
                                    <h6>4 Principles Help You Lose <br />Weight With Vegetables</h6>
                                    <span>MAR 05, 2019</span>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="blog__sidebar__item">
                        <h4>Search By</h4>
                        <div class="blog__sidebar__item__tags">
                            <a href="#">Apple</a>
                            <a href="#">Beauty</a>
                            <a href="#">Vegetables</a>
                            <a href="#">Fruit</a>
                            <a href="#">Healthy Food</a>
                            <a href="#">Lifestyle</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-8 col-md-7">
                <div class="col-lg-12">
                    <form action="blog.php" method="post">
                        <p>Titre du message :<br>
                            <input type="text" name="titre"><br><br>
                           Message : <textarea cols="80" rows="5" name="texte"></textarea><br></p>
                        <input type="submit" value="Poster" name="poster"/>
                    </form>

                </div>
                <div class="row">

                        <?php
                        $test = $objPdo->prepare('SELECT titre_message,message,date_message, nom_prod,mail_prod,prenom_prod
                                    FROM Message, Producteur WHERE id_prod=id_auteur');
                        $test->execute();
                        while ($row = $test->fetch()) {
                            echo '<div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="blog__item">
                                    <div class="blog__item__text">
                                    <ul>
                                        <li><i class="fa fa-calendar-o"></i>';
                            echo utf8_encode($row["date_message"]).'</li>';
                            echo '<li><i class="fa fa-comment-o"></i>';
                            echo utf8_encode($row["nom_prod"]).' '.utf8_encode($row["prenom_prod"]).'</li></ul><h5><b>';
                            echo utf8_encode($row["titre_message"]).' </b></h5><p>';
                            echo utf8_encode($row["message"]).' </p>
                            </div></div></div>';
                        }
                        $test->closeCursor();
                        ?>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Blog Section End -->

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

                        <li>Numéro:  03 72 74 84 00</li>
                        <li>Adresse : Ile du Saulcy. 57045 Metz </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 offset-lg-1">
                <div class="footer__widget">
                    <h6>Useful Links</h6>
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