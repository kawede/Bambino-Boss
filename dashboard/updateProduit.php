<?php  require_once('includes/_base.php'); ?>
<?php include('./pages/_barleft.php') ?>
<?php include('./pages/_content_values.php') ?>
 <!-- Verification et suppression -->
<?php 
if(isset($_GET['delete']) and !empty($_GET['delete'])){
  $delete=htmlspecialchars($_GET['delete']);
  $myqwery=$db->prepare("DELETE FROM _eleve where _id=:id");
  $myqwery->execute(array(
    'id'=>$delete
  ));
}

?>

        <!-- Begin Page Content -->
        <div class="container-fluid">
        <?php 
        if(isset($_GET['Edit']) and !empty($_GET['Edit'])):
        $Edit=htmlspecialchars($_GET['Edit']);
        $myqwery=$db->prepare("SELECT * FROM produits where id=:id");
        $myqwery->execute(array(
        'id'=>$Edit
        ));
        if ($myqwery):
        $data=$myqwery->fetchAll(PDO::FETCH_OBJ);
        ?>
      
          <div class="row">

            <div class="col-lg-12">
            <form action="" method="POST"> 
              <!-- Default Card Example -->
              <div class="card mb-4">
                <div class="card-header"style="color:black; font-family:candara;">
                  Effectuer une Modification
                </div>
                <?php
                   if(isset($_POST['btninscrit'])){
                    if (isset($_GET['Edit']) and !empty($_GET['Edit'])) {
                      $id = $_GET['Edit'];
                      $designation = $_POST['designation'];
                      $prix = $_POST['prix'];
                      $description = $_POST['description'];
                      $adresse = $_POST['adresse'];
                      $idcategorie = $_POST['idcategorie'];

                    $sql="UPDATE produits SET designation=:designation, prix=:prix,description=:description,adresse=:adresse,idcategorie=:idcategorie
                      WHERE id=:id";
                    $myqwery=$db->prepare($sql);
                     $myqwery->execute(array(
                      'designation'=>$designation,
                      'prix'=>$prix,
                      'description'=>$description,
                      'adresse'=>$adresse,
                      'idcategorie'=>$idcategorie,
                      'id'=>$id

                    ));
                     if ($myqwery) {
                       echo '<b class="text-danger text-center alert alert-success"><i class="fa fa-check" aria-hidden="true"></i> Modification reussie </b>';
                     }
                     else {
                       'data Not updated';
                     }

                   }
                }
                ?>
                   <div class="card-body">
                   <form action="" method="post" enctype="multipart/form-data">

                    <div class="form-group row">
                      <div class="col-sm-6 mb-3 mb-sm-0">
                        <input type="text"style="color:black;font-family:candara; font-weight:bold;" value="<?=$data[0]->designation?>" class="form-control " name="designation"  id="exampleFirstName" placeholder="Designation" >
                      </div>
                      <div class="col-sm-6">
                        <input type="number" style="color:black;font-family:candara; font-weight:bold;"value="<?=$data[0]->prix?>" class="form-control " name="prix"  id="exampleSecondName" placeholder="Prix" >
                      </div>
                    </div>
                    <div class="form-group row">
                      <div class="col-sm-12">
                        <input type="file" value="<?=$data[0]->image?>" style="color:black; font-family: candara;" class="form-control" rows="9" name="image">
                      </div>
                    </div>
                    <div class="form-group row">
                    
                      <div class="col-sm-12">
                          ​<picture style="width:200px; ">
                          <img src="" width="25%"></td> 
                          </picture>
                      </div>
                    </div>
                    <!-- <div class="col-sm-12">
                        ​<picture style="width:200px; ">
                          <img src=" " width="300px"  class="img-fluid img-thumbnail"   alt="...">
                        </picture>
                    </div> -->
                    <div class="form-group row">
                      <div class="col-sm-12">
                        <textarea  style="color:black;font-family:candara; font-weight:bold;" class="form-control" required="" rows="9" name="description" placeholder="Description" ><?=$data[0]->description?></textarea>
                      </div>
                    </div>

                    <div class="form-group row">
                      <div class="col-sm-12">
                        <input type="text" style="color:black;font-family:candara; font-weight:bold;"value="<?=$data[0]->adresse?>" class="form-control" required="" rows="9" name="adresse" placeholder="Adresse" >
                      </div>
                    </div>

                    <div class="form-group row">
                      <div class="col-sm-12">
                              <select  class="form-control" required="" style="color:black;font-family:candara; font-weight:bold;" rows="9" name="idcategorie" style="color:black;" >
                                <?php $select=$db->query("SELECT * FROM categorie ORDER BY id DESC limit 45");
                          while ($s = $select->fetch(PDO::FETCH_OBJ)) {
                            ?>
                            <option value="<?php echo $s->id; ?>"><?php echo $s->designation; ?></option>
                            <?php
                            }
                          ?>  
                        </select>  
                      </div>
                    </div>

                    <button class="btn btn-success" style="font-family: candara;font-weight:bold;"name="btninscrit" >
                    Modifier un produit
                    </button>
                    <hr>
                    </form>
                   
                   
               </div>
               </div>
                <?php endif;?>
                <?php endif;?> 
                </div>
              </div>
            </div>
          </div>
        </div>
       
      </div>
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Your Website 2019</span>
          </div>
        </div>
      </footer>
    
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
          <h5 class="modal-title" id="exampleModalLabel">Voulez-vous vraiment modifié?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
        <?php 
        if(isset($_GET['Edit']) and !empty($_GET['Edit'])):
        $Edit=htmlspecialchars($_GET['Edit']);
        $myqwery=$db->prepare("SELECT * FROM _eleve where _id=:id");
        $myqwery->execute(array(
        'id'=>$Edit
        ));
        if ($myqwery):
        $data=$myqwery->fetchAll(PDO::FETCH_OBJ);
        ?>
          <!-- verification pour remplir les donnees dans le formulaires du modal avant de modifier-->
          <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="text" class="form-control " value="<?=$data[0]->_nom?>" name="_nom" style="color:black" id="exampleFirstName" placeholder="Nom">
                  </div>
                  <div class="col-sm-6">
                    <input type="text" class="form-control " value="<?=$data[0]->_postnom?>" name="_postnom" style="color:black" id="exampleSecondName" placeholder="Postnom">
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="text" class="form-control " value="<?=$data[0]->_prenom?>" name="_prenom" style="color:black" id="exampleFirstName" placeholder="Prenom">
                  </div>
                  <div class="col-sm-6">
                    <input type="text" class="form-control " value="<?=$data[0]->_sexe?>" name="_sexe" style="color:black" id="exampleLastName" placeholder="Sexe">
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="date" class="form-control " value="<?=$data[0]->_datedenaissance?>" name="_datedenaissance" style="color:black" id="exampleFirstName" placeholder="date de naissance">
                  </div>
                  <div class="col-sm-6">
                    <input type="text" class="form-control " value="<?=$data[0]->_adresse?>" name="_adresse" style="color:black" id="exampleLastName" placeholder="Adresse">
                  </div>
                </div>
                <?php endif;?>
                <?php endif;?> 
        </div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Annuler</button>
          <a class="btn btn-primary" href="login.html">Modifier</a>
        </div>
      </div>
    </div>
  </div>
  <div class="container" style="margin-top:50px;">
    <a href="#">
    <div class="modal fade" id="monModal">
      <div class="modal-content">
        <div class="modal-content">
           <div class="modal-header">
           <button type="button" class="close" data-dismiss="modal">X</button>
             <h5 class="modal-title">Voulez-vous vraiment modifie?</h5>
           </div>
           <div class="modal-body">
           <p>Hello</p>
           </div>
           <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
           </div>
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
