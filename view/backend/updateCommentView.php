<?php ob_start(); ?>

<section class="bloc_page2 container-fluid">
	
	<div class="row">
      
	    <?php require("backAside.php") ?>

	    <div class="admin col-xs-12 col-sm-12 col-md-8  col-lg-9 col-xl-10">

	      	<div class="row">
        		<div class="col-12 text-center">
  		          	<h2>Modifier un commentaire</h2>
	    		</div>
    		</div>

    		<div>
    			<h3>
    				<!-- AR -->
                    <i class="fas fa-bookmark"></i>
                    <?php echo htmlspecialchars($comment['title']); ?>
                </h3>

                <!--intégrer dans cette fonction update comment + update du status => pour approuvé par défaut -->
	    		<form action="index.php?action=saveUpdatedComment&amp;id=<?= $comment['id'] ?>" method="post" class="back-form" name="saveUpdatedPost">
	    			<div class="form-group">
	    				<label for="author">
	    					<i class="fas fa-user"></i>
	    					Nom de l'auteur
	    				</label>
	    				<input type="text" name="author" id="author" class="form-control" placeholder="" value="<?php echo nl2br(htmlspecialchars($comment['author'])); ?>" disabled="disabled"/>
	    				<small id="titleHelp" class="form-text text-muted">Ne peut pas être modifié.</small>
	    			</div>
	    			<div class="form-group">
	    				<label for="comment">
	    					<i class="fas fa-comment"></i>
	    					Contenu du commentaire:
	    				</label>
	    				<textarea type="comment" name="comment" id="comment" class="form-control" placeholder="" rows="4"required >
	    					<?php echo nl2br(htmlspecialchars($comment['comment'])); ?>
	    				</textarea>
	    			</div>
					<div>
	                	<button type="submit" class="btn btn-primary btn-submit" name="submit" value="Mettre à jour"> Mettre à jour 
	                	</button>
	    			</div>
    			</form>

    			<form action="index.php?action=deleteAComment&amp;id=<?= $comment['id'] ?>" method="post" class="mt-4" name="saveCommentDelete">
	            	<button type="submit" class="btn btn-primary btn-submit" name="submit" value="Oui"> 
	            		<i class="fas fa-trash-alt"></i>
	            		Supprimer le commentaire
	            	</button>
	            </form>

	      </div>

    		
	  		
		</div>
	</div>
</section>

<?php $content = ob_get_clean(); ?>

<?php require('backTemplate.php'); ?>