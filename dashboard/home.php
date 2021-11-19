
<?php require_once('includes/_headersec.php');?>
<?php 
    require('./pages/_barleft.php');
    $idsession = (isset($_SESSION['user']['user_id'])) ? $_SESSION['user']['user_id'] : 2;
    $userrole = (isset($_SESSION['user']['niveau'])) ? $_SESSION['user']['niveau'] : 2;
    $userrole = (int) $userrole;
    $idsession = (int) $idsession;
?>


 <!-- <?php #var_dump($_SESSION); ?> -->
         <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

        
            
            <!-- Nav Item - Alerts -->
            <li class="nav-item dropdown no-arrow mx-1">
          
              </a>
              <!-- Dropdown - Alerts -->
              <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
                <h6 class="dropdown-header">
                  Alerts Center
                </h6>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="mr-3">
                    <div class="icon-circle bg-primary">
                      <i class="fas fa-file-alt text-white"></i>
                    </div>
                  </div>
                  <div>
                    <div class="small text-gray-500">December 12, 2019</div>
                    <span class="font-weight-bold">A new monthly report is ready to download!</span>
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="mr-3">
                    <div class="icon-circle bg-success">
                      <i class="fas fa-donate text-white"></i>
                    </div>
                  </div>
                  <div>
                    <div class="small text-gray-500">December 7, 2019</div>
                    $290.29 has been deposited into your account!
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="mr-3">
                    <div class="icon-circle bg-warning">
                      <i class="fas fa-exclamation-triangle text-white"></i>
                    </div>
                  </div>
                  <div>
                    <div class="small text-gray-500">December 2, 2019</div>
                    Spending Alert: We've noticed unusually high spending for your account.
                  </div>
                </a>
                <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
              </div>
            </li>

            <!-- Nav Item - Messages -->
            <li class="nav-item dropdown no-arrow mx-1">
              <!-- <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-envelope fa-fw"></i>
                <!-- Counter - Messages 
                <span class="badge badge-danger badge-counter">7</span>
              </a> -->
              <!-- Dropdown - Messages -->
              <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="messagesDropdown">
                <h6 class="dropdown-header">
                  Message Center
                </h6>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="https://source.unsplash.com/fn_BT9fwg_E/60x60" alt="">
                    <div class="status-indicator bg-success"></div>
                  </div>
                  <div class="font-weight-bold">
                    <div class="text-truncate">Hi there! I am wondering if you can help me with a problem I've been having.</div>
                    <div class="small text-gray-500">Emily Fowler · 58m</div>
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="https://source.unsplash.com/AU4VPcFN4LE/60x60" alt="">
                    <div class="status-indicator"></div>
                  </div>
                  <div>
                    <div class="text-truncate">I have the photos that you ordered last month, how would you like them sent to you?</div>
                    <div class="small text-gray-500">Jae Chun · 1d</div>
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="https://source.unsplash.com/CS2uCrpNzJY/60x60" alt="">
                    <div class="status-indicator bg-warning"></div>
                  </div>
                  <div>
                    <div class="text-truncate">Last month's report looks great, I am very happy with the progress so far, keep up the good work!</div>
                    <div class="small text-gray-500">Morgan Alvarez · 2d</div>
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="https://source.unsplash.com/Mv9hjnEUHR4/60x60" alt="">
                    <div class="status-indicator bg-success"></div>
                  </div>
                  <div>
                    <div class="text-truncate">Am I a good boy? The reason I ask is because someone told me that people say this to all dogs, even if they aren't good...</div>
                    <div class="small text-gray-500">Chicken the Dog · 2w</div>
                  </div>
                </a>
                <a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
              </div>
            </li>
              <li class="nav-item dropdown no-arrow mx-1">
              <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-envelope fa-fw"></i>
                <!-- Counter - Messages -->
                <span class="badge badge-danger badge-counter" title="Nombre des motivations"><?php //echo(comptEvenemnt($db, $idsession, $userrole)) ?></span>
              </a>
              <!-- Dropdown - Messages -->
    
                  
              <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="messagesDropdown">
                <h6 class="dropdown-header" style="background-color:rgb(46,57,61);">
                  Evennement
                </h6>
                   <?php 
                     // $myqwery=$db->prepare("SELECT * FROM _evenement ORDER BY _id DESC limit 0,3 ");
                      //$myqwery->execute();
                      //foreach($myqwery->fetchAll(PDO::FETCH_OBJ) as $token): 
                     ?>
                <a class="dropdown-item d-flex align-items-center" href="#">

                  <div class="dropdown-list-image mr-3">
                    <img src="" width="90%" alt="">
                    <div class="status-indicator bg-success"></div>
                  </div>
                  <div class="font-weight-bold">
                    <div class="text-truncate"></div>
                    <div class="small " style="color:blue;">></div>
                  </div>
                </a>
                
                <a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
              </div>
            </li>
          

            <div class="topbar-divider d-none d-sm-block" ></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline " style="color:black; font-family:candara; font-weight:bold;"><?php echo   $_SESSION['user']['user_nom']; ?></span>
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-blue-400" style="color:red;"></i>  
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
              <?php 
              $myqwery=$db->prepare("SELECT admin.id, admin.nom as nomadmin,admin.email,role.nom FROM admin INNER JOIN role ON admin.role=role.id ORDER BY id DESC limit 1 ");
              $myqwery->execute();
              foreach($myqwery->fetchAll(PDO::FETCH_OBJ) as $token): 
              ?>
                <a class="dropdown-item" href="_new_user"style="color:red;font-family:candara; font-weight:bold;">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  <td ><?=$token->nom;?></td>
                </a>
                <?php endforeach ?>
                
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal" style="font-weight:bold;color:black;">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 "></i>
                  Se Deconnecter
                </a>
              </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
         

          <!-- Content Row -->
          <div class="row">
          <?php 
          		if(isset($_SESSION['user']['niveau'])){
          			if($_SESSION['user']['niveau'] === '2'){ 
			?>
      
      <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                  
                    <div class="col mr-2">
                      <div  style=" font-family:  candara; color:  black; font-weight:bold;">Utilisateurs</div>
                      <div class="h5 mb-0 font-weight-bold "style=" font-family:  candara; color:  black; font-weight:bold;"><?php echo(comptUtiLISATEUR($db)) ?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-calendar fa-2x text-black-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                    <div style=" font-family:  candara; color:  black; font-weight:bold;">Clients</div>
                      <div class="h5 mb-0 font-weight-bold "style=" font-family:  candara; color:  black; font-weight:bold;"><?php echo(comptParticipant($db)) ?>   </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-users color-black fa-2x text-black-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <?php
                  
                }
              }
            ?>
               <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left shadow h-100 py-2" >
                <div class="card-body" >
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                    <div  style=" font-family:  candara; color:  black; font-weight:bold;">Produits</div>
                      <div class="h5 mb-0 font-weight-bold "style=" font-family:  candara; color:  black; font-weight:bold;"><?php echo(comptParticipant($db)) ?> </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-users color-black fa-2x text-black-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
    
         
            
            
          

       
          </div>

          <div class="row">
          
            <!-- Content Column -->
            <div class="col-lg-12 mb-4">
              
              <!-- Project Card Example -->
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                <a href="produit"><button class="btn btn-danger" style="font-family: candara;font-weight:bold;" >
                  ajouter un produit
                </button></a>
                </div>
                <div class="card-body">
                <table class="table">
              <thead>
              <th scope="col" style="color:black;font-family:candara; font-weight:bold;" >#</th>
              <th scope="col" style="color:black;font-family:candara; font-weight:bold;" >image</th>
              <th scope="col" style="color:black;font-family:candara; font-weight:bold;" >Designation</th>
              <th scope="col" style="color:black;font-family:candara; font-weight:bold;" >Prix</th>
              <th scope="col" style="color:black;font-family:candara; font-weight:bold;" >Description</th>
              <th scope="col" style="color:black;font-family:candara; font-weight:bold;" >adresse</th>
              <th scope="col" style="color:black;font-family:candara; font-weight:bold;" >Categorie</th>
              <th scope="col" style="color:black;font-family:candara; font-weight:bold;" >Action</th>
              </thead>
              <tbody>
              <?php 
              $myqwery=$db->prepare("SELECT produits.id, produits.designation, produits.prix,produits.image, produits.description, produits.adresse, categorie.designation as desig FROM produits INNER JOIN categorie ON produits.idcategorie=categorie.id ORDER BY id DESC limit 6 ");
              $myqwery->execute();
              foreach($myqwery->fetchAll(PDO::FETCH_OBJ) as $token): 
              ?>
                      <tr>
                          <th scope="row" style="color:black;font-family:candara; font-weight:bold;" ><?=$token->id;?></th>
                          <td style="color:black; font-family: candara;"><img src="images/<?= $token->image;?>" width="25%"></td>
                          <td style="color:black;font-family:candara; font-weight:bold;" ><?=$token->designation;?></td>
                          <td style="color:black;font-family:candara; font-weight:bold;" ><?=$token->prix;?></td>
                          <td style="color:black;font-family:candara; font-weight:bold;" ><?=$token->description;?></td>
                          <td style="color:black;font-family:candara; font-weight:bold;" ><?=$token->adresse;?></td>
                          <td style="color:black;font-family:candara; font-weight:bold;" ><?=$token->desig;?></td>
                          
                     
                          <td>
                              <!-- <a href=" " class="btn btn-primary" ><i class="fas fa-trash"  title="Voulz-vous vraiment supprimez un utilisateur?"></i></a> -->
                              <!-- <a href=" " class="btn btn-success" ><i class='bx bx-image-add' ></i></a> -->
                              <a href="updateProduit.php?Edit=<?=$token->id;?>" class="btn btn-danger" ><i class="fas fa-edit" title="Voulez-vous vraiment modifiez un produit?"></i></a>
                          </td>
                      </tr>
                <?php endforeach ?>
              </tbody>
          </table>
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
          <h5 class="modal-title" id="exampleModalLabel" style="color:black;font-family:candara;font-weight:bold;">Se deconnecter?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body"style="color:black;font-family:candara;">Voulez-vous vraiment vous deconnectez??</div>
        <div class="modal-footer">
          <button class="btn btn-danger" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="_login.php">Se deconnecter</a>
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

  <!-- Page level plugins -->
  <script src="vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/chart-area-demo.js"></script>
  <script src="js/demo/chart-pie-demo.js"></script>
 
</body>
</html>
