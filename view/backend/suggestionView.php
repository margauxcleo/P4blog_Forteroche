<?php ob_start(); ?>

<section class="bloc_page2 container-fluid">
	
	<div class="row">
      
	    <?php require("backAside.php") ?>

	    <div class="admin col-xs-12 col-sm-12 col-md-8  col-lg-9 col-xl-10">

	      	<div class="row">
        		<div class="col-12 text-center">
  		          	<h2>Suggestions d'améliorations</h2>
	    		</div>

	    		<div class="col-12 support">
	    			<p> Je suis à l'écoute de vos suggestions et vous invite à remplir le formulaire ci-dessous si vous avez une suggestion d'amélioration. </p>

	    			<form action="" method="post" class="back-form" name="suggestionsForm">
	    				<div class="form-group">
	    					<label for="object">
	    						<i class="fas fa-pen-alt"></i>
	    					Object de la suggestion
	    					</label>
	    					<input type="text" name="object" id="object" class="form-control"/>
	    					<small id="objectHelp" class="form-text text-muted">Maximum 25 caractères.</small>
	    				</div>
	    				<div class="form-group">
	    					<label for="suggestion">
	    						<i class="fas fa-lightbulb"></i>
	    					Votre suggestion
	    					</label>
	    					<textarea type="text" name="suggestion" id="suggestion" class="form-control" rows="4" required>
	    					</textarea>
	    				</div>
						<div>
	                		<button type="submit" class="btn btn-primary btn-submit" name="envoyer">
	                			<i class="fas fa-envelope"></i>
	                			Envoyer 
	                		</button>
	    				</div>	
	    			</form>
    			</div> 
	  		</div>
		</div>
	</div>
</section>

<?php $content = ob_get_clean(); ?>

<?php require('backTemplate.php'); ?>