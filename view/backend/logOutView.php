<?php ob_start(); ?>

<section class="bloc_page2 container-fluid">
	
	<div class="row">
      
	    <?php require("backAside.php") ?>

	    <div class="admin col-xs-12 col-sm-12 col-md-8  col-lg-9 col-xl-10">

	      	<div class="row">
        		<div class="col-12 text-center">
  		          	<h2>Se déconnecter</h2>
	    		</div>
    		</div>

    		<p class="alert alert-danger" role="alert"> Etes-vous sûr(e) de vouloir vous déconnecter ?       
        	</p>

        	<div class="btn-group" role="group">
	            <form action="index.php?action=logOut" method="post" class="logOut" name="saveDelete">
	            	<button type="submit" class="btn btn-outline-primary btn-submit" name="submit" value="Oui"> 
	            		<i class="fas fa-sign-out-alt"></i>
	            		Oui
	            	</button>
	            	<small id="titleHelp" class="form-text text-muted">Cette action vous dirigera vers la page d'accueil du site.
	            	</small>
	            </form>

            <!-- non = lien vers page d'accueil -->
	  		
		  		<div>
		  			<a href="index.php?action=admin" class="btn btn-outline-primary btn-submit" role="button">
		  				<i class="fas fa-backspace"></i>
		  				Non 
					</a>
				</div>
			</div>
		</div>
	</div>
</section>

<?php $content = ob_get_clean(); ?>

<?php require('backTemplate.php'); ?>