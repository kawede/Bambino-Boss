<section class="latest-product spad" style="margin-top:-60px;">
        <div class="container"style="background-color:rgb(255,255,255); border-radius:5px;">
            <div class="row" style="background-color:pink;">
                <div class="col-lg-4 col-md-5">
                    <div class="filter__sort">
                        <span style="margin-top:10px;color:black; font-weight:bold;"> categories</span>
                     </div>
                </div>
            </div>
            <div class="filter__item">            

                    
                    <div class="row">
                        <?php
                          $dolalrd="$";
                            $myqwery=$db->prepare("SELECT produits.id, produits.designation, produits.prix,produits.image,
                            produits.description, produits.devise, produits.date, produits.adresse,
                             categorie.designation as desig
                             FROM produits INNER JOIN categorie ON
                             produits.idcategorie=categorie.id  ORDER BY id DESC limit 12 ");
                            $myqwery->execute();
                            foreach($myqwery->fetchAll(PDO::FETCH_OBJ) as $token):
                        ?>
                        <a href="shop-details.php?icValue=<?=$token->id;?>"><div class="col-lg-2 col-md-6 col-sm-6">
                            <div class="product__item" >
                             <div class="product__item__pic set-bg" data-setbg="./dashboard/images/<?= $token->image;?>"style="height:150px;width:150px;margin-top:-40px;font-size:10px;">

                                </div>
                                <a href="shop-details.php?icValue=<?=$token->id;?>"><div class="product__item__text" style="background-color:rgb(237,237,237);border-radius:5px;height:120px;width:150px;margin-top:-45px;"></a>
                                    <a href="shop-details.php?icValue=<?=$token->id;?>"> <h6 style="font-family:candara;margin-top:30px;"><a href="#"><?=$token->designation;?></a></h6>
                                    <a href="shop-details.php?icValue=<?=$token->id;?>"style="color:black;"><h6 style="font-family:candara;font-weight:bold;margin-top:-5px;"><?=$token->prix;?> <?=$token->devise;?></a></h6>
                                    <a href="shop-details.php?icValue=<?=$token->id;?>"style="color:red;"><h6 style="font-family:candara;font-weight:bold;text-decoration:line-through;"><?=$token->prix;?> <?=$token->devise;?></a></h6> 
                                </div></a>
                            </div>
                        </div> </a>
                        <?php endforeach ?>
                   </div>
                <p>
                    <a class="btn btn-white btn-lg btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample"
                     style=" color:black;font-family:candara;font-size:20px;font-weight:bold; color:blue;">
                     Plus +
                    </a>
                </p>
                <div class="collapse" id="collapseExample">
                    <div class="card card-body">
                       <ul>
                            
                    <div class="row">
                        <?php
                          $dolalrd="$";
                            $myqwery=$db->prepare("SELECT produits.id, produits.designation, produits.prix,produits.image,
                            produits.description, produits.devise, produits.date, produits.adresse,
                             categorie.designation as desig
                             FROM produits INNER JOIN categorie ON
                             produits.idcategorie=categorie.id  ORDER BY id DESC limit 12 ");
                            $myqwery->execute();
                            foreach($myqwery->fetchAll(PDO::FETCH_OBJ) as $token):
                        ?>
                        <a href="shop-details.php?icValue=<?=$token->id;?>"><div class="col-lg-2 col-md-6 col-sm-6">
                            <div class="product__item" >
                             <div class="product__item__pic set-bg" data-setbg="./dashboard/images/<?= $token->image;?>"style="height:150px;width:150px;margin-top:-40px;font-size:10px;">

                                </div>
                                <a href="shop-details.php?icValue=<?=$token->id;?>"><div class="product__item__text" style="background-color:rgb(237,237,237);border-radius:5px;height:120px;width:150px;margin-top:-45px;"></a>
                                    <a href="shop-details.php?icValue=<?=$token->id;?>"> <h6 style="font-family:candara;margin-top:30px;"><a href="#"><?=$token->designation;?></a></h6>
                                    <a href="shop-details.php?icValue=<?=$token->id;?>"style="color:black;"><h6 style="font-family:candara;font-weight:bold;margin-top:-5px;"><?=$token->prix;?> <?=$token->devise;?></a></h6>
                                    <a href="shop-details.php?icValue=<?=$token->id;?>"style="color:red;"><h6 style="font-family:candara;font-weight:bold;text-decoration:line-through;"><?=$token->prix;?> <?=$token->devise;?></a></h6> 
                                </div></a>
                            </div>
                        </div> </a>
                        <?php endforeach ?>
                   </div>
                </div>
                
            </div>
        </div>
                   
    </section>  