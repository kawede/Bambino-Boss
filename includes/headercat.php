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
    <style>
        .dropdown {
          position: relative;
          display: inline-block;
        }

        .dropdown-content {
          display: none;
          position: absolute;
          background-color: #f9f9f9;
          width: 300px;
          
          
          box-shadow: 0px 18px 16px 0px rgba(0,0,0,0.2);
          padding: 12px 16px;
          z-index: 1;
          left: 260px;
          top: -0px;
          transition: width 5s;
        }
       
       

        .dropdown:hover .dropdown-content {
          display: block;
        }
        </style>
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

<body style="background-color:rgb(245,245,245)">
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
    <header class="header" >
        <div class="header__top"style="background-color:rgb(231,233,235)">
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
                    <a href=""><img src="img/BossBoss1.png" ></a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <nav class="header__menu">
                        <ul>
                            <li style="font-family:candara;" class="active"><a href="index">accueil</a></li>
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

    <!-- Hero Section Begin -->
    <section class="hero hero-normal">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="hero__categories"style="background-color:rgb(255,255,255);border-radius:10px;">
                        <div class="hero__categories__all" style="background-color:rgb(240,125,0)">
                            <i class="fa fa-bars"></i>
                            <span style="font-family:candara;">tous les departements</span>
                        </div>
                        <ul>
                            <!-- <span style="font-family:candara;"> accessoires</span> -->
                            <li style="font-family:candara;" class="dropdown w-100">
                              <a href="" class="pl-3">
                                <i class="fa fa-tty pr-2" aria-hidden="true" style="color:black;"></i>
                                Soins et bien etre de bébé
                                <div class="dropdown-content border-0">  
                                    <!-- <div class="w-100">
                                      <span style="font-weight:bold;"> Soins et bien etre de bébé</span><hr>
                                    </div>         -->
                                    <div class="row">
                                      <div class="col-lg-12 dropc ">
                                        <ul class="border-0"style="">
                                          <a href=""><li style="">Thérmometre</li></a>
                                          <a href=""><li>Dents de bébé</li></a>
                                          <a href=""><li>Gant de toilette & Serviettes</li></a>
                                          <a href=""><li>Aspirateurs naseaux</li></a>
                                          <a href=""><li>Bains</li></a>
                                        </ul>
                                      </div> 
                                    </div> 
                                </div>
                              </a>
                            </li>
                            <li style="font-family:candara;" class="dropdown w-100"><a href="baby_lotion" class="pl-3"><i class="fa fa-heart pr-2" aria-hidden="true" style="color:black;"></i>
                              Couches
                              <div class="dropdown-content border-0 ">          
                                    <div class="row">
                                      <div class="col-lg-12" >
                                        <ul class="border-0">
                                        <a href=""><li>Sac à langer</li></a>
                                        <a href=""><li>Lingettes</li></a>
                                        <a href=""><li>Gant de toilette & Serviettes</li></a> 
                                        </ul>
                                      </div> 
                                    </div> 
                                </div>
                            </a>
                            <li style="font-family:candara;" class="dropdown w-100">
                              <a href="accessoires" class="pl-3">
                                <i class="fa fa-tty pr-2" aria-hidden="true" style="color:black;"></i>
                                Soins et bien etre de bébé
                                <div class="dropdown-content border-0 ">          
                                    <div class="row">
                                      <div class="col-lg-12" >
                                        <ul class="border-0">
                                        <a href=""><li>Bains</li></a>
                                        <a href=""><li>Gant de toilettes & serviettes</li></a>
                                        <a href=""><li>Soins de la peau</li></a>
                                        </ul>
                                      </div> 
                                    </div> 
                                </div>
                              </a>
                            </li>
                            <li style="font-family:candara;" class="dropdown w-100">
                              <a href="accessoires" class="pl-3">
                                <i class="fa fa-home pr-2" aria-hidden="true" style="color:black;"></i>
                                Chambre pour Bébé
                                <div class="dropdown-content border-0 ">          
                                    <div class="row">
                                      <div class="col-lg-12" >
                                        <ul class="border-0">
                                        <a href=""><li>Lit bébé & Berceau</li></a>
                                        <a href=""><li>Décor de crèche</li></a>
                                        <a href=""><li>Veilleuse</li> </a>
                                        </ul>
                                      </div> 
                                    </div> 
                                </div>
                              </a>
                            </li>
                            

                            <li style="font-family:candara;" class="dropdown w-100">
                              <a href="accessoires" class="pl-3">
                                <i class="fa fa-tty pr-2" aria-hidden="true" style="color:black;"></i>
                                Alimentation
                                <div class="dropdown-content border-0 ">          
                                    <div class="row">
                                      <div class="col-lg-12" >
                                        <ul class="border-0">
                                          <a href=""><li>Nouritures pour bébés</li></a>
                                          <a href=""><li>Allaitement maternelle</li></a>
                                          <a href=""><li>Alimentation solide</li></a>
                                          <a href=""><li>Biberon</li></a>
                                          <a href="accessoires"><li>Succettes et accessibles </li></a> 
                                        </ul>
                                      </div> 
                                    </div> 
                                </div>
                              </a>
                            </li>
                            <li style="font-family:candara;" class="dropdown w-100">
                              <a href="accessoires" class="pl-3">
                                <i class="fa fa-tty pr-2" aria-hidden="true" style="color:black;"></i>
                                Poussettes et accessoires
                                <div class="dropdown-content border-0 ">          
                                    <div class="row">
                                      <div class="col-lg-12" >
                                        <ul class="border-0">
                                          <a href=""><li>Poussettes</li></a>
                                          <a href=""><li>Jouets bébé</li></a>
                                          <a href=""><li>Siège solide</li></a>
                                          <a href=""><li>Porte bébé</li></a> 
                                        </ul>
                                      </div> 
                                    </div> 
                                </div>
                              </a>
                            </li>
                            <li style="font-family:candara;" class="dropdown w-100">
                              <a href="accessoires" class="pl-3">
                                <i class="fa fa-tty pr-2" aria-hidden="true" style="color:black;"></i>
                                Vetements & accessoires
                                <div class="dropdown-content border-0 ">          
                                    <div class="row">
                                      <div class="col-lg-12" >
                                        <ul class="border-0">
                                          <a href=""><li>Bébé garcons</li></a>
                                          <a href=""><li>Bébé filles</li></a>
                                        </ul>
                                      </div> 
                                    </div> 
                                </div>
                              </a>
                            </li>
                            <li style="font-family:candara;" class="dropdown w-100">
                              <a href="accessoires" class="pl-3">
                                <i class="fa fa-tty pr-2" aria-hidden="true" style="color:black;"></i>
                                Top marques
                                <div class="dropdown-content border-0 ">          
                                    <div class="row">
                                      <div class="col-lg-12" >
                                        <ul class="border-0">
                                          <a href=""><li>Gucci</li></a>
                                          <a href=""><li>WeBaby</li></a>
                                          <a href=""><li>Versace</li></a>
                                          <a href=""><li>Avent</li></a>
                                          <a href=""><li>Chicco</li></a>
                                        </ul>
                                      </div> 
                                    </div> 
                                </div>
                              </a>
                            </li>
                            <li style="font-family:candara;" class="dropdown w-100">
                              <a href="accessoires" class="pl-3">
                                <i class="fa fa-tty pr-2" aria-hidden="true" style="color:black;"></i>
                                Maternité
                                <div class="dropdown-content border-0 ">          
                                    <!-- <div class="row">
                                      <div class="col-lg-12" >
                                        <ul class="border-0">
                                          <li>Gucci</li>
                                          <li>WeBaby</li>
                                          <li>Versace</li>
                                          <li>Avent</li>
                                          <li>Chicco</li>
                                        </ul>
                                      </div> 
                                    </div>  -->
                                </div>
                              </a>
                            </li>
                             <!-- <li style="font-family:candara;" class="dropdown w-100">
                              <a href="accessoires" class="pl-3">
                                <i class="fa fa-tty pr-2" aria-hidden="true" style="color:black;"></i>
                                Maternité  -->
                                <!--<div class="dropdown-content border-0">
                                    <div class="w-100">
                                      <h4>My Title</h4>
                                      <p>sub title goes here</p>
                                    </div>
                                    <div class="row">
                                      <div class="col-lg-3">
                                        <ul class="border-0">
                                          <li>home gander</li>
                                          <li>home gander</li>
                                          <li>home gander</li>
                                          <li>home gander</li>
                                          <li>home gander</li>
                                        </ul>
                                      </div>
                                      <div class="col-lg-3 border-left">
                                        <ul class="border-0">
                                          <li>home gander</li>
                                          <li>home gander</li>
                                          <li>home gander</li>
                                          <li>home gander</li>
                                          <li>home gander</li>
                                        </ul>
                                      </div>
                                      <div class="col-lg-3 border-left">
                                        <ul class="border-0">
                                          <li>home gander</li>
                                          <li>home gander</li>
                                          <li>home gander</li>
                                          <li>home gander</li>
                                          <li>home gander</li>
                                        </ul>
                                      </div>
                                      <div class="col-lg-3 border-left">
                                        <ul class="border-0">
                                          <li>home gander</li>
                                          <li>home gander</li>
                                          <li>home gander</li>
                                          <li>home gander</li>
                                          <li>home gander</li>
                                        </ul>
                                      </div>
                                    </div>
                                </div>
                              </a>
                            </li> -->

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
                                <h5 style="color:black;font-family:candara;">+243 998957572</h5>
                                <span style="color:rgb(13,146,191);font-family:candara;">support 24 heures/24 </span>
                            </div>
                        </div>

                    </div>
                    <!-- <div class="hero__item set-bg " data-setbg="img/hero/DESS.jpg" style="">
                        <div class="hero__text">
                             <span>FRUIT FRESH</span> 
                            <span style="color:black;font-family:candara;font-size:20px; margin-left:-10px;margin-top:40px;">La joie et le bien être<br/> de l’Enfant au cœur de<br/> chaque famille.</span>
                            <p style="color:rgb(13,146,191);font-weight:bold;font-family:candara;font-size:20px;">Faites des economies en
                            <span style="color:orange;font-weight:bold;font-family:candara;font-size:20px;"> achetant le meilleur produit</span></p>
                            <a href="collection_products" class="primary-btn" style="background-color:rgb(240,125,0); border-radius:5px; border:3px solid white;">ACHETEZ MAINTENANT</a>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
    </section>
    
