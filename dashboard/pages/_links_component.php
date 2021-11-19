
<div class="bg-white py-2 collapse-inner rounded">
     <h6 class="collapse-header"><i class="fas fa-home" style=" font-family:  candara; color:  black; font-weight:bold;"></i>  Menu principal</h6>
        	<?php 
          		if(isset($_SESSION['user']['niveau'])){
          			if($_SESSION['user']['niveau'] === '1'){ 
			?>
			<a class="collapse-item" href="_new_user"style=" font-family:  candara; color:  black; font-weight:bold;" disabled><i class="fa fa-user" aria-hidden="true"></i>  Nouveau Utilisateur</a>
			
             <!-- <a class="collapse-item" href="_organisateur" style="color:black; font-weight: bold;"><i class="fa fa-home" aria-hidden="true"></i>  Organisateurs</a> -->
			 <a class="collapse-item" href="categorie"style=" font-family:  candara; color:  black; font-weight:bold;"><i class="fa fa-users" aria-hidden="true"></i> Nouvelle Categorie</a>
			 <?php
          				
          			}
          		}
          	?>
            <a class="collapse-item" href="produit" style=" font-family:  candara; color:  black; font-weight:bold;"><i class="fa fa-calendar" aria-hidden="true"></i> Nouveau Produit</a>
			<a class="collapse-item" href="publicite"style=" font-family:  candara; color:  black; font-weight:bold;"><i class="fa fa-list-ol" aria-hidden="true"></i> photo publicité</a>
            <a class="collapse-item" href="_listeventesandParticipants"style=" font-family:  candara; color:  black; font-weight:bold;"><i class="fa fa-list-ol" aria-hidden="true"></i> Articles</a>
<!--             <a class="collapse-item" href="_new_categorie"> Nouvelle Categori       e</a>
            <a class="collapse-item" href="_add_classe"> Nouvelle Classe</a>
            <a class="collapse-item" href="_forum"> Envoie message</a> -->
             
          </div>