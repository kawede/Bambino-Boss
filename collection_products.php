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
                            <li style="font-family:candara; "><a href="./shop-grid.html">Collections</a></li>
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
                            <li style="font-family:candara;"><a href="accessoires"><i class="fa fa-tty" aria-hidden="true" style="color:black;"></i> accessoires</a></li>
                            <li style="font-family:candara;"><a href="baby_lotion"><i class="fa fa-heart" aria-hidden="true" style="color:black;"></i> lotion</a></li>
                            <li style="font-family:candara;"><a href="cadeaux"><i class="fa fa-gift" aria-hidden="true"style="color:black;"></i> Cadeaux</a></li>
                            <li style="font-family:candara;"><a href="savons"><i class="fa fa-snapchat-ghost" aria-hidden="true"style="color:black;"></i> Savons</a></li>
                            <li style="font-family:candara;"><a href="Berceaux"><i class="fa fa-bed" aria-hidden="true"style="color:black;"></i> Berceau</a></li>
                            <li style="font-family:candara;"><a href="Hygiene"><i class="fa fa-bath" aria-hidden="true"style="color:black;"></i> Hygiene Santé</a></li>
                            <li style="font-family:candara;"><a href="jeux"><i class="fa fa-shopping-basket" aria-hidden="true"style="color:black;"></i> jeux </a></li>
                            <li style="font-family:candara;"><a href="Nourriture"><i class="fa fa-cutlery" aria-hidden="true"style="color:black;"></i> Nourriture</a></li>
                            <li style="font-family:candara;"><a href="Voyage"><i class="fa fa-truck" aria-hidden="true"style="color:black;"></i>  Voyage et Transport</a></li>
                            <li style="font-family:candara;"><a href="Textiles"><i class="fa fa-life-ring" aria-hidden="true"style="color:black;"></i>  Textiles</a></li>
                            <li style="font-family:candara;"><a href="materinité"><i class="fa fa-heart-o" aria-hidden="true"style="color:black;"></i> Maternité</a></li>
                            <li style="font-family:candara;"><a href="#"><i class="fa fa-hand-rock-o" aria-hidden="true"style="color:black;"></i> Surveillance et Protection</a></li>
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

    <section class="latest-product spad" style="margin-top:-60px;">
        <div class="container"style="background-color:rgb(255,255,255); border-radius:5px;">
        <div class="filter__item">
                        <div class="row">
                            <div class="col-lg-4 col-md-5">
                                <div class="filter__sort">
                                    
                                    <select>
                                        <option value="0">Toutes les Categories</option>
                                    </select>
                                </div>
                            </div>
                            <!-- <div class="col-lg-4 col-md-4">
                                <div class="filter__found">
                                    <h6 style="color:red; font-weight:bold;"><span><?php echo(comptParticipant($db)) ?></span> Products found</h6>
                                </div>
                            </div> -->
                            <!-- <div class="col-lg-4 col-md-3">
                                <div class="filter__option">
                                    <span class="icon_grid-2x2"></span>
                                    <span class="icon_ul"></span>
                                </div>
                            </div> -->
                        </div>
                    </div>
                    <div class="row">
                        <?php 
                          $dolalrd="$";
                            $myqwery=$db->prepare("SELECT produits.id, produits.designation, produits.prix,produits.image, produits.description,
                             produits.devise, produits.date, produits.PrixProm, produits.adresse, categorie.designation as desig
                             FROM produits INNER JOIN categorie ON produits.idcategorie=categorie.id ORDER BY id DESC limit 16 ");
                            $myqwery->execute();
                            foreach($myqwery->fetchAll(PDO::FETCH_OBJ) as $token): 
                        ?>
                        <a href="shop-details.php?icValue=<?=$token->id;?>"><div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="product__item">
                             <div class="product__item__pic set-bg" data-setbg="./dashboard/images/<?= $token->image;?>">
                                  
                                </div>
                                <div class="product__item__text" style="background-color:rgb(237,237,237);border-radius:5px;">
                                    <a href="shop-details.php?icValue=<?=$token->id;?>"> <h6 style="font-family:candara"><a href="#"><?=$token->designation;?></a></h6>
                                    <a href="shop-details.php?icValue=<?=$token->id;?>"style="color:red;"><h5 style="font-family:candara"><?=$token->prix;?> <?=$token->devise;?></a></h5>
                                    <a href="shop-details.php?icValue=<?=$token->id;?>"style="color:rgb(0,154,192);"><h5 style="font-family:candara; text-decoration: line-through;"><?=$token->PrixProm;?> <?=$token->devise;?></a></h5>
                                </div>
                            </div>
                        </div> </a>
                        <?php endforeach ?>    
                   </div>
            </div>            
    </section>
    <?php include("includes/footer.php") ?>