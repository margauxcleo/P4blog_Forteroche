<?php ob_start(); ?>

<section class="bloc_page2 container-fluid">
	
	<div class="row">
      
	    <?php require("backAside.php") ?>

	    <div class="admin col-xs-12 col-sm-12 col-md-8  col-lg-9 col-xl-10">

	      	<div class="row">
        		<div class="col-12 text-center">
  		          	<h2>Contacter le support</h2>
	    		</div>

	    		<div class="col-12 support">
	    			<p> Je suis joignable 7/7 jours à l'adresse mail suivante: <span>support@gmail.com</span>. N'hésitez pas à me contacter si vous avez la moindre question. </p>
	    			<p> Je suis également joignable du lundi au samedi au numéro suivant: <span>06 01 02 03 04 05</span>. </p>	
	    		</div> 
	  		</div>
		</div>
	</div>
</section>

<?php $content = ob_get_clean(); ?>

<?php require('backTemplate.php'); ?>