<?php ob_start(); ?>

<section class="bloc_page2 container-fluid">
	
	<div class="row">
      
	    <?php require("backAside.php") ?>

	    <div class="admin col-xs-12 col-sm-12 col-md-8  col-lg-9 col-xl-10">

	      	<div class="row">
        		<div class="col-12 text-center">
  		          	<h2>Bienvenue dans l'espace administrateur <b><?php echo htmlspecialchars($_SESSION['userID']); ?></b> </h2>
	    		</div>

	    		<div class="col-12 stats">
	    			A date, voici le contenu de votre site:

	    			<ul>
    					<?php 
						while ($data = $totalPosts->fetch())
						{
						?>
	    				<li> <b><?php echo htmlspecialchars($data['totalPosts']); ?></b> chapitres ont été publiés. 
	    				</li>
						<?php 
						}   
						$totalPosts->closeCursor();
						?>

						<?php 
						while ($data = $totalComments->fetch())
						{
						?>
	    				<li> <b><?php echo htmlspecialchars($data['totalComments']); ?></b> commentaires ont été publiés.  
	    				</li>
						<?php 
						}   
						$totalComments->closeCursor();
						?>

						<?php 
						while ($data = $totalSignaledComments->fetch())
						{
						?>
	    				<li>Attention, <b><?php echo htmlspecialchars($data['totalSignaledComments']); ?></b> commentaire(s) signalé(s) requière(nt) votre attention.
	    				</li>
	    				<?php 
						}   
						$totalSignaledComments->closeCursor();
						?>

	    			</ul>
	    		</div> 

	  		</div>
		</div>
	</div>
</section>

<?php $content = ob_get_clean(); ?>

<?php require('backTemplate.php'); ?>