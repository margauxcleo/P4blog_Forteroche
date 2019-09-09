<?php ob_start(); ?>

<section class="bloc_page container-fluid" id="top">  
    <div class="row">

    	<?php require("aside.php") ?>

    	<div class="posts col-xs-12 offset-sm-1 col-sm-10 offset-md-0 col-md-7 offset-lg-0 col-lg-7 col-xl-8">

    		<p class="alert alert-success" role="alert"> Le commentaire a été signalé avec succès !        
            </p>

		</div>

	</div>
</section>


<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>