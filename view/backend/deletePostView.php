<?php ob_start(); ?>

<section class="bloc_page2 container-fluid">
	
	<div class="row">
      
	    <?php require("backAside.php") ?>

	    <div class="admin col-xs-12 col-sm-12 col-md-8  col-lg-9 col-xl-10">

	      	<div class="row">
        		<div class="col-12 text-center">
  		          	<h2>Supprimer un chapitre</h2>
	    		</div>
    		</div>

    		<p class="alert alert-danger" role="alert"> Etes-vous sûr(e) de vouloir supprimer le chapitre <b>"<?php echo htmlspecialchars($post['title']); ?>"</b> ?       
            </p>

            <!-- oui = lien vers save delete -->

            <div class="btn-group" role="group">
	            <form action="index.php?action=saveDelete&amp;id=<?= $post['id'] ?>" method="post" class="" name="saveDelete">
	            	<button type="submit" class="btn btn-primary btn-submit" name="submit" value="Oui"> 
	            		<i class="fas fa-trash-alt"></i>
	            		Oui
	            	</button>
	            	<small id="titleHelp" class="form-text text-muted">Attention, cette action est irréversible.
	            	</small>
	            </form>

	            <!-- non = lien vers page d'avant -->
		  		
		  		<div>
		  			<a href="index.php?action=tableDelete" class="btn btn-outline-primary btn-post" role="button">
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