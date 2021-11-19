<?php 
require ('dashboard/includes/_base.php'); 
require ('dashboard/includes/_functions.php'); 
include("includes/headercat.php"); 
?>


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
                             FROM produits INNER JOIN categorie ON produits.idcategorie=categorie.id
                             WHERE categorie.id=19
                              ORDER BY id DESC limit 16 ");
                            $myqwery->execute();
                            foreach($myqwery->fetchAll(PDO::FETCH_OBJ) as $token): 
                        ?>
                        <a href="shop-details.php?icValue=<?=$token->id;?>"><div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="product__item">
                             <div class="product__item__pic set-bg" data-setbg="dashboard/images/<?= $token->image;?>">
                                  
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