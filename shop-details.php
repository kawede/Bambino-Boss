
<?php 
require ('./dashboard/includes/_base.php'); 
require ('./dashboard/includes/_functions.php'); 
            if(isset($_GET['icValue']) and !empty($_GET['icValue'])):
            $icValue=htmlspecialchars($_GET['icValue']);
            $myqwery=$db->prepare("SELECT * FROM produits ");
            $myqwery->execute(array(
            'id'=>$icValue
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

    <?php 
            if(isset($_GET['icValue']) and !empty($_GET['icValue'])):
            $icValue=htmlspecialchars($_GET['icValue']);
            $myqwery=$db->prepare("SELECT produits.id, produits.designation, produits.prix,produits.image, produits.description, produits.devise, produits.date, produits.adresse, categorie.designation as desig FROM produits INNER JOIN 
            categorie ON produits.idcategorie=categorie.id 
                     WHERE produits.id=:id

              ");
            $myqwery->execute(array(
            'id'=>$icValue
            ));
          if ($myqwery):
            $data=$myqwery->fetchAll(PDO::FETCH_OBJ);
            // var_dump($data);
            if (!empty($data)):
             ?>
    <section class="product-details spad" style="margin-top:-75px;">
        <div class="container">
            <div class="row"style="background-color:rgb(255,255,255);border-radius:5px;">
                <div class="col-lg-6 col-md-6">
                <div class="alert alert-danger text-center" style="display:none;" >
                <strong style="color:black; font-family:candara;" id="errmessage">
                <?php
                 //exit(var_dump(isset($_POST['btninscrit'])));
                if (isset($_POST['btninscrit'])) {
                 $nomcomple = $_POST['nomcomple'];
                 $email = $_POST['email'];
                 $telephone = $_POST['telephone'];
                 $residence = $_POST['residence'];
                 $adressePhysique =$_POST['adressePhysique']; 
                 $id_produit=$_POST['id_produit'];        
                    if ($nomcomple && $email && $telephone && $residence &&$adressePhysique &&$id_produit) 
                    {
                      $myqwery=$db->prepare("INSERT INTO commande_ord (nomcomple, email,telephone,residence,adressePhysique,id_produit) VALUES(:nomcomple, :email,:telephone,:residence,:adressePhysique,:id_produit)");
                      $myqwery->execute(array(
                        'nomcomple'=> $nomcomple,
                        'email'=> $email,
                        'telephone'=> $telephone,
                        'residence'=> $residence,
                        'adressePhysique'=>$adressePhysique,
                        'id_produit'=>$id_produit             
                      ));
                      if ($myqwery)
                      {
                        echo '<b class="text-danger text-center alert alert-success"><i class="fa fa-check" aria-hidden="true"></i>  Vous avez validé votre commande avec succees </b>';
                      }  
                      else
                      {
                       echo'érreur';
                      }
                }
                 else{
                 echo '<b class="text-danger text-center alert alert-danger"><i class="fa fa-check" aria-hidden="true"></i>  Veuiller remplir tout les champs </b>';
                  }
                  
              }
               ?>
                </strong>
              </div>
               
                    <div class="product__details__pic"style="border-radius:5px;">
                        <div class="product__details__pic__item">
                            <img class="product__details__pic__item--large"
                                src="./dashboard/images/<?=$data[0]->image?>" style="width:50px;" alt="">
                        </div>
                        <div class="product__details__pic__slider owl-carousel">
                              
                            <img data-imgbigurl="img/product/details/product-details-2.jpg"
                                src="img/product/details/thumb-1.jpg" alt="">
                                
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6" style="margin-top:30px;">
                    <div class="product__details__text">
                        <h3 style="font-family:candara;"><?=$data[0]->desig?></h3>
                        <div class="product__details__rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-half-o"></i>
                            <span style="font-family:candara;">( reviews)</span>
                        </div>
                        <div class="product__details__price"style="font-family:candara;"><?=$data[0]->devise?> <?=$data[0]->prix?></div>
                        <p style="font-family:candara; color:black; font-size:17px;"><?=$data[0]->description?></p>
                       
                        <a href="#"data-toggle="modal" data-target="#logoutModal"  class="primary-btn"style="background-color:rgb(240,125,0);">COMMANDER MAINTENANT</a>
                        
                        <ul>
                            <li><b style="font-family:candara;font-weight:bold;">Disponible en stock</b> <span><?php echo(comptParticipant($db)) ?></span></li>
                            <li><b style="font-family:candara;font-weight:bold;">Date de publication</b> <span> <samp><?=$data[0]->date?></samp></span></li>
                            <li><b style="font-family:candara;font-weight:bold;">Categorie</b> <span><?=$data[0]->desig?></span></li>
                            <li><b style="font-family:candara;font-weight:bold;font-size:17px;">Partager maintenant</b>
                                <div class="share">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-instagram"></i></a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <?php endif;?>
          <?php endif;?>
          <?php endif;?>
          <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel"style="font-family:candara;font-weight:bold;">Valider votre commande</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
          
        </div>
        <div class="modal-body">
            <div class="well" style="font-family:candara; ">
                <div class="span5">
					<address>
						<strong style="font-family:candara;color:black;">Categorie:</strong> <span><?=$data[0]->desig?></span><br>
						<strong>Product Code:</strong> <span><?=$data[0]->designation?></span><br>
						<strong>Numbero en stock:</strong> <span><?=$data[0]->id?></span><br>
						<strong>Date de publication:</strong> <span><?=$data[0]->date?></span><br>								
					</address>									
					<h4><strong>Price: <?=$data[0]->prix?> <?=$data[0]->devise?></strong></h4>          
				</div>
			</div>
            <hr>
            <form action="" method="POST">
                    <div class="form-group row">
                      <div class="col-sm-6 mb-3 mb-sm-0">
                        <input type="text" class="form-control " style="color:black;font-family:candara; font-weight:bold;" name="nomcomple"  id="exampleFirstName" placeholder="Nom Complet" >
                      </div>
                      <div class="col-sm-6">
                        <input type="email" class="form-control " name="email"  id="exampleSecondName" style="color:black;font-family:candara; font-weight:bold;" placeholder="email" pattern="(^[a-z 0-9]+)@([a-z0-9])+(\.)([a-z]{2,4})">
                      </div>
                    </div>
                    <div class="form-group row">
                      <div class="col-sm-6 mb-3 mb-sm-0">
                        <input type="phone" class="form-control " style="color:black;font-family:candara; font-weight:bold;" name="telephone"  id="exampleFirstName" placeholder="Numero de telephone" >
                      </div>
                      <div class="col-sm-6">
                        <input type="text" class="form-control " name="residence"  id="exampleSecondName" style="color:black;font-family:candara; font-weight:bold;" placeholder="Residence" >
                      </div>
                    </div>                  
                   
                    <div class="form-group row">          
                      <div class="col-sm-12">
                        <input type="text" class="form-control" style="color:black;font-family:candara; font-weight:bold;" name="adressePhysique" id="exampleLastName" placeholder="Adresse physique">
                      </div>
                    </div>
                    <div class="form-group row">          
                      <div class="col-sm-12">
                        <input type="text" value="<?= $_GET['icValue'] ?>" class="form-control" style="color:black;font-family:candara; font-weight:bold; display:none;" name="id_produit"readonly="readonly" id="exampleLastName" placeholder="Adresse physique">
                      </div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-danger" type="button" data-dismiss="modal"style="font-family:candara;">Annuler</button>
                        <button class="btn btn-primary" style="font-family: candara;font-weight:bold;"name="btninscrit"  >
                         Valider la commande
                         </button>
                      
                         <div class="footer__copyright__payment" ><img src="img/payment-item.png" alt=""></div>
                  
              </form></div>
                
                </div>
      </div>
    </div>
  </div>
    </section>
    <!-- Product Details Section End -->

    <?php include("includes/footer.php") ?>
    <?php endif;?>
    <?php endif;?>
    <?php endif;?>