<?php  require_once('includes/_base.php'); ?>
<?php include('./pages/_barleft.php') ?>
<?php include('./pages/_content_values.php') ?>
<?php require_once  ('Images.php');?>

<?php 
    $idsession = (isset($_SESSION['user']['user_id'])) ? $_SESSION['user']['user_id'] : 1;
    $userrole = (isset($_SESSION['user']['niveau'])) ? $_SESSION['user']['niveau'] : 1;
    $userrole = (int) $userrole;
    $idsession = (int) $idsession;
if(isset($_GET['delete']) and !empty($_GET['delete'])){
  $delete=htmlspecialchars($_GET['delete']);
  $myqwery=$db->prepare("DELETE FROM categorie where id=:id");
  $myqwery->execute(array(
    'id'=>$delete
  ));
}

?>
        <!-- Begin Page Content -->
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-12">
              <!-- Default Card Example -->
              <div class="card mb-4">
                <div class="card-header"style="color:black; font-family: candara; font-weight: bold;">
                  Nouvelle photo pour publicité
                </div>
                <?php
                 //exit(var_dump(isset($_POST['btninscrit'])));
                 if (isset($_POST['btninscrit'])) {   
                    $image=Image_Compreser::Compreser(300);
                    $Motif = $_POST['Motif'];
                   if ($image) {
                     # code...
                      if ($Motif) 
                      {
                        $myqwery=$db->prepare("INSERT INTO publiciteproduits (image,Motif) VALUES(:image,:Motif)");
                        $myqwery->execute(array(
                          'image'=> $image,
                          'Motif'=> $Motif
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
                 
                  <form action="" method="POST" enctype="multipart/form-data">
                   <div class="form-group row">
                      <div class="col-sm-12 mb-3 mb-sm-0">
                        <input type="file" class="form-control " name="image"style="color:black;font-family:candara; font-weight:bold;" required=""  id="exampleFirstName"  >
                      </div>
                    </div>
                     <div class="form-group row">
                      <div class="col-sm-12">
                        <input type="text" class="form-control"style="color:black;font-family:candara; font-weight:bold;"  required=""  name="Motif" placeholder="Designation de l'image"  id="exampleSecondName" style="color:red; font-family:candara; font-weight:bold;" >
                      </div>
                    </div>  
                    <button class="btn btn-danger " name="btninscrit" style="font-family:candara; font-weight:bold;">
                  Nouvelle Categorie
                </button>
                <hr>
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
              <th scope="col" style="color:black;font-family:candara; font-weight:bold;" >nom</th>
              <th scope="col" style="color:black;font-family:candara; font-weight:bold;" >jeton</th>
              <th scope="col" style="color:black;font-family:candara; font-weight:bold;" >Action</th>
              </thead>
              <tbody>
              <?php 
              $myqwery=$db->prepare("SELECT * FROM categorie ORDER BY id DESC limit 20 ");
              $myqwery->execute();
              foreach($myqwery->fetchAll(PDO::FETCH_OBJ) as $token): 
              ?>
                      <tr>
                          <th scope="row" style="color:black;font-family:candara; font-weight:bold;" ><?=$token->id;?></th>
                          <td style="color:black;font-family:candara; font-weight:bold;" ><?=$token->designation;?></td>
                          <td style="color:black;font-family:candara; font-weight:bold;" ><?=$token->slag;?></td>
                       
                     
                          <td>
                              <a href="?delete=<?=$token->id;?>" class="btn btn-primary" ><i class="fas fa-trash"  title="Voulz-vous vraiment supprimez un utilisateur?"></i></a>
                              <!-- <a href=" " class="btn btn-success" ><i class='bx bx-image-add' ></i></a> -->
                              <a href="updateCategorie.php?Edit=<?=$token->id;?>" class="btn btn-danger"><i class="fas fa-edit" title="Voulez-vous vraiment modifiez un utilisateur?"></i></a>
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
