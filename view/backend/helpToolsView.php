<?php ob_start(); ?>

<section class="bloc_page2 container-fluid">
	
	<div class="row">
      
	    <?php require("backAside.php") ?>

	    <div class="admin col-xs-12 col-sm-12 col-md-8  col-lg-9 col-xl-10">

	      	<div class="row">
        		<div class="col-12 text-center">
  		          	<h2>Outils</h2>
	    		</div>

	    		<div class="col-12 support">
	    			<p> En cours...J'adapterai les procédures en fonction de vos besoins. </p>
	    				
	    		</div> 
	  		</div>
		</div>
	</div>
</section>

<?php $content = ob_get_clean(); ?>

<?php require('backTemplate.php'); ?>