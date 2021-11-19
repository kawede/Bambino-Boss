<?php 
require_once('includes/_headersec.php');
 include('./pages/_barleft.php'); 
include('./pages/_content_values.php') ;
require_once  ('Images.php');
?>

<?php 
$idsession = (isset($_SESSION['user']['user_id'])) ? $_SESSION['user']['user_id'] : 1;
    $userrole = (isset($_SESSION['user']['niveau'])) ? $_SESSION['user']['niveau'] : 1;
    $userrole = (int) $userrole;
    $idsession = (int) $idsession;
    
if(isset($_GET['delete']) and !empty($_GET['delete'])){
  $delete=htmlspecialchars($_GET['delete']);
  $myqwery=$db->prepare("DELETE FROM produits where id=:id");
  $myqwery->execute(array(
    'id'=>$delete
  ));
}
?>   
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-12">
              <!-- Default Card Example -->
              <div class="card mb-4">
                <div class="card-header"style="color:black; font-family: candara; font-weight: bold;">
                Nouveau Produit
                </div>
                <?php
                 //exit(var_dump(isset($_POST['btninscrit'])));
                 if (isset($_POST['btninscrit12'])) {
                    $designation=$_POST['designation'];
                    $prix = $_POST['prix']; 
                    $prix1 = $_POST['prix1'];   
                    $image=Image_Compreser::Compreser(300);
                    $description = $_POST['description'];
                    $adresse = $_POST['adresse'];
                    $idcategorie = $_POST['idcategorie'];
                    $devise = $_POST['devise'];
                   if ($image) {
                     # code...
                      if ($designation && $prix && $prix1 && $description && $adresse && $idcategorie && $devise) 
                      {
                        $myqwery=$db->prepare("INSERT INTO produit1(designation,prix,prix1,image,description,adresse,idcategorie,devise) VALUES(:designation,:prix,:prix1,:image,:description,:adresse,:idcategorie,:devise)");
                        $myqwery->execute(array(
                          'designation'=> $designation,
                          'prix'=> $prix,
                          'prix1'=> $prix1,
                          'image'=> $image,
                          'description'=> $description,
                          'adresse'=> $adresse,
                          'idcategorie'=> $idcategorie,
                          'devise'=> $devise
                        ));
                   
                        if ($myqwery)
                        {
                          echo '<b class="text-danger text-center alert alert-success"><i class="fa fa-check" aria-hidden="true"></i>  Produit Ajouté avec succès </b>';
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
                }
              
               ?>
                <div class="card-body">
                  <form action="" method="post" enctype="multipart/form-data">
                    <div class="form-group row">
                      <div class="col-sm-6 mb-3 mb-sm-0">
                        <input type="text"style="color:black;font-family:candara; font-weight:bold;" class="form-control" required="" name="designation"  id="exampleFirstName" placeholder="Designation" >
                      </div>
                      <div class="col-sm-6">
                        <input type="number" style="color:black;font-family:candara; font-weight:bold;" class="form-control" required="" name="prix"  id="exampleSecondName" placeholder="Prix" >
                      </div>
                    </div>
                    <div class="form-group row">
                      <div class="col-sm-12">
                        <input type="number" style="color:black; font-family: candara;font-weight:bold;" class="form-control" required="" rows="9" name="prix1" placeholder="prix promotionnel" >
                      </div>
                    </div>
                    <div class="form-group row">
                      <div class="col-sm-12">
                        <input type="file" style="color:black; font-family: candara;" class="form-control" required="" rows="9" name="image" placeholder="" >
                      </div>
                    </div>
                  <div class="form-group row">
                      <div class="col-sm-12">
                        <textarea  style="color:black;font-family:candara;  font-weight:bold;" name="description" class="form-control" required="" rows="9"  placeholder="Description" ></textarea>
                      </div>
                    </div>
                   
                      <div class="form-group row">
                      <div class="col-sm-12">
                        <input type="text" style="color:black;font-family:candara; font-weight:bold;" class="form-control" required="" rows="9" name="adresse" placeholder="Adresse" >
                      </div>
                    </div>
                    
                      <div class="form-group row">
                      <div class="col-sm-12">
                              <select  class="form-control" required="" style="color:black;font-family:candara; font-weight:bold;" rows="9" name="idcategorie" style="color:black;" >
                                <?php $select=$db->query("SELECT * FROM categorie ORDER BY id DESC limit 20");
                          while ($s = $select->fetch(PDO::FETCH_OBJ)) {
                            ?>
                            <option value="<?php echo $s->id; ?>"><?php echo $s->designation; ?></option>
                            <?php
                            }
                          ?>  
                        </select>  
                      </div>
                    </div>
                     <div class="form-group">
                      <select class="form-control m-bot15" name="devise" required="" style="color:black; font-family: candara; font-weight: bold;">  
                        <option value="fc">Fc</option>
                        <option value="usd">Usd</option>
                      </select> 
                    </div> 
                       <!-- <div class="form-group row">
                      <div class="col-sm-12">
                        <input type="number" style="color:black; font-family: candara;" class="form-control" rows="9" name="PrixProm" placeholder="prix promotionnel" >
                      </div>
                    </div>  -->
                  
                    <button class="btn btn-primary" style="font-family: candara;font-weight:bold;" name="btninscrit12" >
                  ajouter un produit
                </button>
                <hr>
              </form>
                             
                  </form> 
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /.container-fluid -->
      </div>
      
        <div class="card shadow mb-4">
  <div class="card-header py-3">
   
  </div>
  <div class="card-body">
    <div class="table-responsive">
    <table class="table">
              <thead>
              <th scope="col" style="color:black;font-family:candara; font-weight:bold;" >#</th>
              <th scope="col" style="color:black;font-family:candara; font-weight:bold;" >image</th>
              <th scope="col" style="color:black;font-family:candara; font-weight:bold;" >Designation</th>
              <th scope="col" style="color:black;font-family:candara; font-weight:bold;" >Prix</th>
              <th scope="col" style="color:black;font-family:candara; font-weight:bold;" >Prix promotionnel</th>
              <th scope="col" style="color:black;font-family:candara; font-weight:bold;" >Description</th>
              <th scope="col" style="color:black;font-family:candara; font-weight:bold;" >adresse</th>
              <th scope="col" style="color:black;font-family:candara; font-weight:bold;" >Categorie</th>
              <th scope="col" style="color:black;font-family:candara; font-weight:bold;" >Action</th>
              </thead>
              <tbody>
              <?php 
              $myqwery=$db->prepare("SELECT produit1.id, produit1.designation,produit1.prix1, produit1.prix,produit1.image, 
              produit1.description, produit1.adresse, categorie.designation
               as desig FROM produit1 INNER JOIN categorie ON produit1.idcategorie=categorie.id ORDER BY id DESC limit 20 ");
              $myqwery->execute();
              foreach($myqwery->fetchAll(PDO::FETCH_OBJ) as $token): 
              ?>
                      <tr>
                          <th scope="row" style="color:black;font-family:candara; font-weight:bold;" ><?=$token->id;?></th>
                          <td style="color:black; font-family: candara;"><img src="images/<?= $token->image;?>" width="25%"></td>
                          <td style="color:black;font-family:candara; font-weight:bold;" ><?=$token->designation;?></td>
                          <td style="color:black;font-family:candara; font-weight:bold;" ><?=$token->prix;?></td>
                          <td style="color:black;font-family:candara; font-weight:bold;" ><?=$token->prix1;?></td>
                          <td style="color:black;font-family:candara; font-weight:bold;" ><?=$token->description;?></td>
                          <td style="color:black;font-family:candara; font-weight:bold;" ><?=$token->adresse;?></td>
                          <td style="color:black;font-family:candara; font-weight:bold;" ><?=$token->desig;?></td>
                          <td>
                              <a href="?delete=<?=$token->id;?>" class="btn btn-primary" ><i class="fas fa-trash"  title="Voulz-vous vraiment supprimez un utilisateur?"></i></a>
                              <!-- <a href=" " class="btn btn-success" ><i class='bx bx-image-add' ></i></a> -->
                              <a href="updateProduit.php?Edit=<?=$token->id;?>" class="btn btn-danger" ><i class="fas fa-edit" title="Voulez-vous vraiment modifiez un utilisateur?"></i></a>
                          </td>
                      </tr>
                <?php endforeach ?>
              </tbody>
          </table>
    </div>
  </div>
</div>

      <!-- End of Main Content -->
      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span style="color:black; font-family:candara; font-weight:bold;">Copyright &copy; BambinoBoss 2021</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->
    </div>
  <!-- End of Content Wrapper -->
  </div>
  <!-- End of Page Wrapper -->
  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>
  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="_login.php">se deconnecter</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

</body>

</html>
