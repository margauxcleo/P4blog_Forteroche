<?php ob_start(); ?>

<section class="bloc_page2 container-fluid">
	
	<div class="row">
      
	    <?php require("backAside.php") ?>

	    <div class="admin col-xs-12 col-sm-12 col-md-8  col-lg-9 col-xl-10">

	      	<div class="row">
        		<div class="col-12 text-center">
  		          	<h2>Tous les chapitres</h2>
	    		</div>
    		</div>
  			<div>
  				<table class="table table-light table-bordered table-hover table-responsive-lg">
  					<caption>
  						Chapitres existants
  					</caption>
  					<thead class="thead-light">
  						<tr>
  							<th>Titre du chapitre</th>
  							<th class="publication_date">Date de publication</th>
  							<th>Voir le chapitre</th>
  							<th>Modifier</th>
  							<th>Supprimer</th>
  						</tr>
  					</thead>
  					<tbody>
  						<?php 
  						while ($data = $posts->fetch())
							{
							?>
							<tr>
  								<th>
  									<i class="fas fa-bookmark"></i>
  									<?php echo htmlspecialchars($data['title']); ?>
  								</th>
  								<th class="publication_date publication_date_fr">
  									le <?php echo htmlspecialchars($data['publication_date_fr']); ?>
  										
								  </th>
  								<th>
  									<a href="index.php?action=post&amp;id=<?= $data['id'] ?>" class="btn btn-outline-primary btn-post" role="button"> 	<i class="fas fa-book-reader"></i>
									</a>
  								</th>
  								<th>
  									<a href="index.php?action=updateAPost&amp;id=<?= $data['id'] ?>" class="btn btn-outline-primary btn-post" role="button">
  										<i class="fas fa-edit"></i>
									</a>
  								</th>
  								<th>
                    <a href="index.php?action=deleteAPost&amp;id=<?= $data['id'] ?>" class="btn btn-outline-primary btn-post" role="button">
                      <i class="fas fa-trash-alt"></i>
                    </a>        
                  </th>
  							</tr>	
						<?php 
						}   
						$posts->closeCursor();
						?>
  							
  					</tbody>
  				</table>
  			</div>
	  		
		</div>
	</div>
</section>

<?php $content = ob_get_clean(); ?>

<?php require('backTemplate.php'); ?>