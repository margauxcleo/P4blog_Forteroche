<?php ob_start(); ?>

<section class="bloc_page container-fluid">

	<div class="offset-xs-1 col-xs-10 offset-sm-1 col-sm-10 offset-md-1 col-md-10 offset-xl-2 col-xl-8 signin_form">

	<form action="index.php?action=contactMe" method="post">
		<h3> Me contacter </h3>
		<p> Vous avez une question, des suggestions ? Vous pouvez alors me contacter via le formulaire ci-dessous !</p>

		<div class="form-group">
	        <label for="email">
	    		Votre adresse mail
	    	</label>
	        <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="adressemail@mail.com">
		</div>
		<div class="form-group">
			<label for="subject">
				Objet de votre message
			</label>
			<input type="subject" name="subject" id="subject" class="form-control" placeholder="" value="" />
			<small id="titleHelp" class="form-text text-muted">Maximum 25 caractères.</small>
		</div>
		<div class="form-group">
			<label for="resume">
				Votre message
			</label>
			<textarea type="resume" name="resume" id="resume" class="form-control" placeholder="" rows="4">
			</textarea>
		</div>		
	      
		<br/>
		<button type="submit" class="btn btn-primary btn-submit" name="logIn">
			<i class="fas fa-envelope"></i>
			Envoyer !
		</button>
	</form>

  </div>
</section>


<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>