<?php require_once('includes/_headersec.php');?>

<?php 
if(isset($_GET['delete']) and !empty($_GET['delete'])){
  $delete=htmlspecialchars($_GET['delete']);
  $myqwery=$db->prepare("DELETE FROM admin where id=:id");
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
                <div class="card-header"style="color:black; font-family:candara; font-weight:   bold;">
                   Nouveau Utilisateur 
                </div>
                <div class="card-body">
                <div class="alert alert-danger text-center" style="display:none;" id="err">
                    <strong style="color:black; font-family:candara;" id="errmessage">     
                     <?php
                 //exit(var_dump(isset($_POST['btninscrit'])));
                if (isset($_POST['btninscrit'])) {
                 $nom = $_POST['nom'];
                 $email = $_POST['email'];
                 $motpasse = sha1($_POST['motpasse']);
                 $role = $_POST['role'];
                
                 if ($nom&&$email&&$motpasse) {
                 $myqwery=$db->prepare("INSERT INTO admin (nom,email,motpasse,role) VALUES(:nom, :email, :motpasse,:role)");
                 $myqwery->execute(array(
                  'nom'=> $nom,
                  'email'=> $email,
                  'motpasse'=> $motpasse,
                  'role'=>$role
                
                 ));
                 
                 if ($myqwery){
                 echo '<b class="text-danger text-center alert alert-success"><i class="fa fa-check" aria-hidden="true"></i>  Enregistrement reusi </b>';
                 }  
                
                 else {
                   echo'érreur';
                 }
                }
                 else{
                 echo '<br><br/><br/><br/><br/><h3 style="color:red;">Veuillez remplir tous les champs.</h3>';
                  }
                 } 
              
               ?>
               </strong>
                </div>
                  <form action="" method="POST">
                    <div class="form-group row">
                      <div class="col-sm-6 mb-3 mb-sm-0">
                        <input type="text" class="form-control " style="color:black;font-family:candara; font-weight:bold;" name="nom"  id="exampleFirstName" placeholder="Entrer le nom d'utilisateur" >
                      </div>
                      <div class="col-sm-6">
                        <input type="text" class="form-control " name="email"  id="exampleSecondName" style="color:black;font-family:candara; font-weight:bold;" placeholder="email" pattern="(^[a-z 0-9]+)@([a-z0-9])+(\.)([a-z]{2,4})">
                      </div>
                    </div>
                    <div class="form-group row">
                      
                      <div class="col-sm-12">
                        <input type="password" class="form-control" style="color:black;font-family:candara; font-weight:bold;" name="motpasse" id="exampleLastName" placeholder="mot de passe">
                      </div>
                    </div> 
                    <div class="form-group row">
                      <div class="col-sm-12">
                        <label style="font-weight: bold; color: black;">Role</label>
                              <select  class="form-control" required="" rows="9" name="role" style="color:black;font-family:candara; font-weight:bold;" >
                                <?php $select=$db->query("SELECT * FROM role ORDER BY id DESC limit 7");
                          while ($s = $select->fetch(PDO::FETCH_OBJ)) {
                            ?>
                            <option value="<?php echo $s->id; ?>"><?php echo $s->nom; ?></option>
                            <?php
                            }
                          ?> 
                        </select>  
                      </div>
                    </div>
                    <button class="btn btn-primary " name="btninscrit">
                    Ajouter
                </button>
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
    <h7></h7>
  </div>
  <div class="card-body">
  <div class="table-responsive">
          <table class="table">
              <thead>
              <th scope="col" style="color:black;font-family:candara; font-weight:bold;" >#</th>
              <th scope="col" style="color:black;font-family:candara; font-weight:bold;" >nom</th>
              <th scope="col" style="color:black;font-family:candara; font-weight:bold;" >email</th>
              <th scope="col" style="color:black;font-family:candara; font-weight:bold;" >Role</th>
              <th scope="col" style="color:black;font-family:candara; font-weight:bold;" >Action</th>
              </thead>
              <tbody>
              <?php 
              $myqwery=$db->prepare("SELECT admin.id, admin.nom as nomadmin,admin.email,role.nom FROM admin INNER JOIN role ON admin.role=role.id ORDER BY id DESC limit 6 ");
              $myqwery->execute();
              foreach($myqwery->fetchAll(PDO::FETCH_OBJ) as $token): 
              ?>
                      <tr>
                          <th scope="row" style="color:black;font-family:candara; font-weight:bold;" ><?=$token->id;?></th>
                          <td style="color:black;font-family:candara; font-weight:bold;" ><?=$token->nomadmin;?></td>
                          <td style="color:black;font-family:candara; font-weight:bold;" ><?=$token->email;?></td>
                          <td style="color:black;font-family:candara; font-weight:bold;" ><?=$token->nom;?></td>
                     
                          <td>
                              <a href="?delete=<?=$token->id;?>"class="btn btn-primary" ><i class="fas fa-trash"  title="Voulz-vous vraiment supprimez un utilisateur?"></i></a>
                              <!-- <a href=" " class="btn btn-success" ><i class='bx bx-image-add' ></i></a> -->
                              <a href="" class="btn btn-danger" ><i class="fas fa-edit" title="Voulez-vous vraiment modifiez un utilisateur?"></i></a>
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
            <span style="color:black; font-family:candara; font-weight:bold;">Copyright &copy; Kevent 2020</span>
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
