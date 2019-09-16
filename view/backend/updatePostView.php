<?php ob_start(); ?>

<section class="bloc_page2 container-fluid">
	
	<div class="row">
      
	    <?php require("backAside.php") ?>

	    <div class="admin col-xs-12 col-sm-12 col-md-8  col-lg-9 col-xl-10">

	      	<div class="row">
        		<div class="col-12 text-center">
  		          	<h2>Modifier un chapitre</h2>
	    		</div>
    		</div>

    		<div>
    			<h3>
                    <i class="fas fa-bookmark"></i>
                    <?php echo htmlspecialchars($post['title']); ?>
                </h3>

	    		<form action="index.php?action=saveUpdatedPost&amp;id=<?= $post['id'] ?>" method="post" class="back-form" name="saveUpdatedPost">
	    			<div class="form-group">
	    				<label for="title">
	    					<i class="fas fa-heading"></i>
	    					Titre du chapitre
	    				</label>
	    				<input type="title" name="title" id="title" class="form-control" placeholder="" value="<?php echo nl2br(htmlspecialchars($post['title'])); ?>" />
	    				<small id="titleHelp" class="form-text text-muted">Maximum 25 caractères.</small>
	    			</div>
	    			<div class="form-group">
	    				<label for="resume">
	    					<i class="fas fa-glasses"></i>
	    					Résumé du chapitre
	    				</label>
	    				<textarea type="resume" name="resume" id="resume" class="form-control mytinytextarea" placeholder="" rows="4">
	    					<?php echo ($post['resume']); ?>
	    				</textarea>
	    			</div>
	    			<div class="form-group">
	    				<label for="content">
	    					<i class="fas fa-bookmark"></i>
	    					Contenu
	    				</label>
	    				<textarea type="content" name="content" id="content" class="form-control mytinytextarea" placeholder="" rows="10">
	    					<?php echo ($post['content']); ?>
	    				</textarea>
					</div>
					<div>
	                	<button type="submit" class="btn btn-primary btn-submit" name="submit" value="Mettre à jour"> Mettre à jour 
	                	</button>
	    			</div>
    			</form>

	      </div>

    		
	  		
		</div>
	</div>
</section>

<?php $content = ob_get_clean(); ?>

<?php require('backTemplate.php'); ?>