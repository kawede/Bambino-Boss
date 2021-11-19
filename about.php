
<?php 
require ('./dashboard/includes/_base.php'); 
require ('./dashboard/includes/_functions.php');    

?>
          
<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ogani Template">
    <meta name="keywords" content="Ogani, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bambino Boss</title>

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

<body style="background-image:url(img/Photoback.png);">
    <!-- Page Preloder -->
    

    <!-- Humberger Begin -->
    <div class="humberger__menu__overlay"></div>
    <div class="humberger__menu__wrapper" >
        <div class="humberger__menu__logo">
             <a href=""><img src="img/BossBoss1.png" alt=""></a>
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
                <li class="active"><a href="./index.html">Home</a></li>
                <li><a href="./shop-grid.html">Shop</a></li>
                <li><a href="#">Pages</a>
                    <ul class="header__menu__dropdown">
                        <li><a href="./shop-details.html">Shop Details</a></li>
                        <li><a href="./shoping-cart.html">Shoping Cart</a></li>
                        <li><a href="./checkout.html">Check Out</a></li>
                        <li><a href="./blog-details.html">Blog Details</a></li>
                    </ul>
                </li>
                <li><a href="./blog.html">Blog</a></li>
                <li><a href="./contact.html">Contact</a></li>
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
                
            <li style="font-family:candara;color:black;">Bambino Boss est pour le bien etre de l'enfant</li>
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
                              
                               <marquee direction="left"> <li style="font-family:candara;color:black;">Bambino Boss est pour le bien etre de l'enfant</li></marquee>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
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
                                <a href="#" style="font-family:candara;color:rgb(13,146,191); font-weight:bold;"><i class="fa fa-user"></i> Rester sur Bambino Boss</a>
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
                    <a href=""><img src="img/BossBoss1.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <nav class="header__menu">
                        <ul>
                            <li style="font-family:candara;" class="active"><a href="">accueil</a></li>
                            <li style="font-family:candara; "><a href="collection_products">Collections</a></li>
                            <li style="font-family:candara;"><a href="Blog">Blog</a></li>
                            <!-- <li style="font-family:candara;"><a href="./contact.html">Contact</a></li> -->
                            <li style="font-family:candara;"><a href="about">About us</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-3">
                    <div class="header__cart">
                        <ul>
                        <li ><a href="#"><i class="fa fa-shopping-bag" ></i> <span style="background-color:rgb(240,125,0)"><?php echo(comptarticle($db)) ?></span></a></li>
                            <li ><a href="#"><i class="fa fa-users" ></i> <span style="background-color:rgb(240,125,0)"><?php echo(comptUtiLISATEUR($db)) ?></span></a></li>
                        </ul>
                        <div class="header__cart__price">Produits: <span><?php echo(comptParticipant($db)) ?></span></div>
                    </div>
                </div>
            </div>
            <div class="humberger__open">
                <i class="fa fa-bars"></i>
            </div>
        </div>
    </header>
    <!-- Header Section End -->
    <section class="hero hero-normal">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                <div class="hero__categories"style="background-color:rgb(255,255,255);border-radius:10px;">
                        <div class="hero__categories__all" style="background-color:rgb(240,125,0)">
                            <i class="fa fa-bars"></i>
                            <span>Categories</span>
                        </div>
                        <ul>
                            <li style="font-family:candara;"><a href="#">accessoires</a></li>
                            <li style="font-family:candara;"><a href="#">lotion</a></li>
                            <li style="font-family:candara;"><a href="#">lotion & Nut Gifts</a></li>
                            <li style="font-family:candara;"><a href="#">Savons</a></li>
                            <li style="font-family:candara;"><a href="#">Berceau</a></li>
                            <li style="font-family:candara;"><a href="#">Hygiene Santé</a></li>
                            <li style="font-family:candara;"><a href="#">jeux </a></li>
                            <li style="font-family:candara;"><a href="#">Nourriture</a></li>
                            <li style="font-family:candara;"><a href="#">Voyage et Transport</a></li>
                            <li style="font-family:candara;"><a href="#">Textiles</a></li>
                            <li style="font-family:candara;"><a href="#">Maternité</a></li>
                            <li style="font-family:candara;"><a href="#">Surveillance et Protection</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-9">
                <div class="hero__search">
                        <div class="hero__search__form">
                            <form action="#">
                                <!-- <div class="hero__search__categories">
                                    All Categories
                                    <span class="arrow_carrot-down"></span>
                                </div> -->
                                <input type="text" placeholder="Que voulez-vous?">
                                <button type="submit" class="site-btn" style="background-color:rgb(240,125,0)"> rechercher</button>
                            </form>
                        </div>
                        <div class="hero__search__phone">
                            <div class="hero__search__phone__icon"style="font-family:candara;color:rgb(240,125,0)">
                                <i class="fa fa-phone"></i>
                            </div>
                            <div class="hero__search__phone__text" >
                                <h5 style="color:black;font-family:candara;">+243 977743843</h5>
                                <span style="color:rgb(13,146,191);font-family:candara;">support 24 heures/24 </span>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="hero__item set-bg" data-setbg="img/hero/BambinoVrai.jpg" style="">
                        <div class="hero__text">
                            <span>FRUIT FRESH</span>
                            <h2>Vegetable <br />100% Organic</h2>
                            <p>Free Pickup and Delivery Available</p>
                            <a href="#" class="primary-btn">SHOP NOW</a>
                        </div> -->
                    </div> 
                </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Checkout Section Begin -->
    <section class="checkout spad">
        <div class="container">
          
            <div class="checkout__form" style="background-color:white;border-radius:5px; margin-top:-60px;">
                <h4 style="font-family:candara;">A propos de BambinoBoss</h4>
                <form action="#">
                    <div class="row"> 
                        <div class="col-lg-8 col-md-6">
                           <span style="font-family:candara;font-size:17px; text-align:justify;">Bambino est une plate-forme web et physique qui propose des produits et services de meilleures qualités à un prix très abordable
                            pouvant améliorer le bien être des enfants et femmes enceintes en procurant ainsi à toute la famille un bonheur partagé,
                            La plate-forme se présente comme un grand supermarché qui permet aux parents de faire des achats de tous les nécessaires depuis le confort de leur salon ou bureau sans bousculade et attendre
                                paisiblement de se faire livré par  nos équipes dans les heures qui suivrons la passassions de la commande.</span><br> <br>
                               
                               <span style="font-family:candara;font-size:17px; text-align:justify;">. BambinoBoss permet de 
                               référencer en un seul endroit plusieurs produits pour bébé.</span> <br><br>
                               <span style="font-family:candara;font-size:17px; text-align:justify;">. BambinoBoss Permet aux futurs parents et parents de préparer
                                la maternité de leurs enfants.</span> <br><br>
                                <span style="font-family:candara;font-size:17px; text-align:justify;">. BambinoBoss permet les fabricants locaux, 
                                et fait la promotion et la vente de leurs produits sur notre plate-forme en ligne.</span> <br><br>
                                <span style="font-family:candara;font-size:17px; text-align:justify;">. BambinoBoss aux parents des conseils pédiatrique et 
                                ceux relatifs à la puériculture.</span><br><br>
                                <span style="font-family:candara;font-size:17px; text-align:justify;">. BambinoBoss dispose d’un guide d’achat pour les clients qui ont des difficultés des choix et pour les
                                 nouveaux parents qui ne savent pas acheté des produits par nécessité.</span><br><br>
                                 <span style="font-family:candara;font-size:17px; text-align:justify;">. La joie et le bien être
                                  de l’Enfant au cœur de chaque famille reste notre vision</span><br><br>
                                  <span style="font-family:candara;font-size:17px; text-align:justify;font-weight:bold;">Nos mission</span><br><br>
                                  <span style="font-family:candara;font-size:17px; text-align:justify;">Rassembler les meilleurs de produits pour enfants;</span><br><br>
                                  <span style="font-family:candara;font-size:17px; text-align:justify;">Exposer ces derniers en ligne sur le site web BambinoBoss.com;</span><br>
                                  <span style="font-family:candara;font-size:17px; text-align:justify;">Vendre et distribuer ces produits à nos clients….;</span><br><br>
                                  <span style="font-family:candara;font-size:20px; text-align:justify;font-weight:bold;">Nos valeurs</span><br>
                                  <span style="font-family:candara;font-size:17px; text-align:justify;">L’intègrité;</span><br>
                                  <span style="font-family:candara;font-size:17px; text-align:justify;">L’anticipation;</span><br>
                                  <span style="font-family:candara;font-size:17px; text-align:justify;">La flexibilité;</span><br>
                                  <span style="font-family:candara;font-size:17px;; text-align:justify;">Et l’accessibilité...</span><br>
                                  <span style="font-family:candara;font-size:20px; text-align:justify;font-weight:bold;">Notre idéal</span><br>
                                  <span style="font-family:candara;font-size:17px; text-align:justify;">Devenir la start-up de référence dans la vente et la distribution
                                   des produits pour enfants en Afrique...</span><br>
                                  
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="checkout__order">
                                <h4 style="font-family:candara;">Produits Bambino</h4>
                                <div class="checkout__order__products" style="font-family:candara;">Products </div>
                                <ul>
                                    <li style="color:black;font-family:candara;">Commande recues <span style="color:red"><?php echo(countcommande_ord($db))?></span></li>
                                    <li style="color:black;font-family:candara;">Produits en stock <span style="color:red"><?php echo(comptParticipant($db))?></span></li>
                                    <li style="color:black;font-family:candara;">Pays disponible <span style="color:red"><?php echo(countpays($db))?></span></li>
                                    <li style="color:black;font-family:candara;">Articles en similaires <span style="color:red"><?php echo(comptarticle($db))?></span></li>
                                </ul>
                                
                                <button type="submit" class="site-btn1" style="font-family:candara;font-size:10">Politique de confidentialité</button>
                            </div><br>
                            <div class="checkout__order1">
                                <div class="banner__pic">
                                    <img src="img/banner/bel.jpg" alt="" style="width:300px;">
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- Checkout Section End -->
    <!-- Footer Section Begin -->
    <?php include("includes/footer.php") ?>