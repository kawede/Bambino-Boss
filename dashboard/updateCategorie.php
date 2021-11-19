<?php  require_once('includes/_base.php'); ?>
<?php include('./pages/_barleft.php') ?>
<?php include('./pages/_content_values.php') ?>

<?php 
if(isset($_GET['delete']) and !empty($_GET['delete'])){
  $delete=htmlspecialchars($_GET['delete']);
  $myqwery=$db->prepare("DELETE FROM categorie where _id=:id");
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
        $myqwery=$db->prepare("SELECT * FROM categorie  where id=:id");
        $myqwery->execute(array(
        'id'=>$Edit
        ));
        if ($myqwery):
        $data=$myqwery->fetchAll(PDO::FETCH_OBJ);
        ?>

              
    
          <div class="row">

            <div class="col-lg-12">
              <!-- Default Card Example -->
              <div class="card mb-4">
                <div class="card-header" style="color:black; font-weight: bold; font-family:candara;">
                  Modifier la categorie 
                </div>
                <?php
                   if(isset($_POST['btninscrit'])){
                    if (isset($_GET['Edit']) and !empty($_GET['Edit'])) {
                    $id = $_GET['Edit'];
                    $designation = $_POST['designation'];
                    $sql="UPDATE categorie SET designation=:designation
                      WHERE id=:id ";
                    $myqwery=$db->prepare($sql);
                     $myqwery->execute(array(
                      'designation'=>$designation,
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
                  <form action="" method="POST">
                   <div class="form-group row">
                      <div class="col-sm-12 mb-3 mb-sm-0">
                        <input type="text" class="form-control" value="<?=$data[0]->designation?>" name="designation" style="color:black;font-family:candara; font-weight:bold;"  id="exampleFirstName" placeholder="Nouvelle Categorie" >
                      </div>
                    </div>          
                    <button class="btn btn-danger " name="btninscrit" style="font-family:candara; font-weight:bold;">
                  Modifier la Categorie
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
        <!-- /.container-fluid -->
      </div>
      
  
      <!-- End of Main Content -->
      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span style="color:black; font-family:candara; font-weight:bold;">Copyright &copy; Bambino Boss 2021</span>
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
