
<?php 
require ('./dashboard/includes/_base.php'); 
require ('./dashboard/includes/_functions.php'); 
if(isset($_GET['icValueBlog']) and !empty($_GET['icValueBlog'])):
    $icValueBlog=htmlspecialchars($_GET['icValueBlog']);
    $myqwery=$db->prepare("SELECT * FROM articl5 ");
    $myqwery->execute(array(
    'id'=>$icValueBlog
    ));
  if ($myqwery):
    $data=$myqwery->fetchAll(PDO::FETCH_OBJ);
    // var_dump($data);
    if (!empty($data)):
   

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

<body style="background-color:rgb(237,237,237);">
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

    <section class="blog-details spad">
        <div class="container">
            <div class="row"style="background-color:rgb(255,255,255);border-radius:5px;margin-top:-100px;">
                <div class="col-lg-4 col-md-5 order-md-1 order-2" >
                    <div class="blog__sidebar">
                        <div class="blog__sidebar__item">
                            <h4 style="font-family:candara;">des nouvelles recentes</h4>
                            <?php 
                                $dolalrd="$";
                                    $myqwery=$db->prepare("SELECT * FROM articl5 ORDER BY id ASC limit 3 ");
                                    $myqwery->execute();
                                    foreach($myqwery->fetchAll(PDO::FETCH_OBJ) as $token): 
                                ?>
                            <div class="blog__sidebar__recent">
                                <a href="#" class="blog__sidebar__recent__item"> 
                              
                                   <div class="blog__sidebar__recent__item__pic">
                                        <img src="./dashboard/images/<?= $token->image;?>" style="width:80px;height:80px;">
                                    </div>
                                    <div class="blog__sidebar__recent__item__text">
                                   <h6 style="font-family:candara;font-weight:bold"><?=$token->titre;?></h6>
                                        <span style="color:red;"><?=$token->date;?></span>
                                    </div>
                                </a>
                            </div>
                            <?php endforeach ?> 
                        </div>
                        <div class="blog__sidebar__item">
                            <h4 style="font-family:candara;">Laisser un commentaire</h4>
                            <div class="blog__sidebar__item__tags">
                            <form action="" method="POST">
                                <div class="form-group row">
                                    <div class="col-sm-12 mb-3 mb-sm-0">
                                        <input type="text" class="form-control " style="color:black;font-family:candara; font-weight:bold;" name="nom"  id="exampleFirstName" placeholder="Nom Complet" >
                                    </div> 
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-12 mb-3 mb-sm-0">
                                    <textarea  style="color:black;font-family:candara; font-weight:bold;" class="form-control" required="" rows="5" name="description" placeholder="commentaire" ></textarea>
                                    </div> 
                                </div>
                                <button class="btn btn-primary" type="button" data-dismiss="modal"style="font-family:candara;">poster</button>
                            </form>    
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-md-7 ">
                    <div class="blog__details__text">
                        <p style="width:300px;"><img src="./dashboard/images/<?=$data[0]->image?>"></p>
                        <h3 style="color:black; font-family:candara;font-weight:bold;"><?=$data[0]->titre?></h3>
                        <p style="text-align:justify; color:black; font-family:candara;"><?=$data[0]->detail?></p>
                    </div>
                    <div class="blog__details__content">
                        <div class="row">
                       
                            <div class="col-lg-6">
                                <p>Sare on</p>
                                <div class="hero__search__phone">
                                    <div class="hero__search__phone__icon"style="font-family:candara;color:rgb(240,125,0)">
                                        <a href=""><i class="fa fa-instagram"></i></a>
                                    </div>
                                </div>
                                <div class="hero__search__phone">
                                    <div class="hero__search__phone__icon"style="font-family:candara;color:rgb(240,125,0)">
                                    <a href=""><i class="fa fa-linkedin"></i></a>
                                    </div>
                                </div>
                                <div class="hero__search__phone">
                                    <div class="hero__search__phone__icon"style="font-family:candara;color:rgb(240,125,0)">
                                    <a href=""><i class="fa fa-twitter"></i></a>
                                    </div>
                                </div>
                                <div class="hero__search__phone">
                                    <div class="hero__search__phone__icon"style="font-family:candara;color:rgb(240,125,0)">
                                    <a href=""><i class="fa fa-facebook"></i></a>
                                    </div>
                                </div>
                                <!-- <div class="blog__details__widget">
                                   
                                    <div class="blog__details__social">
                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                        <a href="#"><i class="fa fa-google-plus"></i></a>
                                        <a href="#"><i class="fa fa-linkedin"></i></a>
                                        <a href="#"><i class="fa fa-envelope"></i></a>
                                    </div>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php include("includes/footer.php") ?>
    <?php endif;?>
    <?php endif;?>
    <?php endif;?>
  