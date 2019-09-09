<?php ob_start(); ?>

<section class="bloc_page container-fluid" id="top">  
    <div class="row">

		<div class="website_infos offset-xs-1 col-xs-10 offset-sm-1 col-sm-10 offset-md-1 col-md-10 offset-xl-2 col-xl-8">
          	<h2 class="text-center">Cookies</h2>
		
			<p> Si vous déposez un commentaire sur notre site, il vous sera proposé d’enregistrer votre nom, adresse de messagerie et site web dans des cookies. C’est uniquement pour votre confort afin de ne pas avoir à saisir ces informations si vous déposez un autre commentaire plus tard. Ces cookies expirent au bout d’un an.
			</p>
			<p>
			Si vous avez un compte et que vous vous connectez sur ce site, un cookie temporaire sera créé afin de déterminer si votre navigateur accepte les cookies. Il ne contient pas de données personnelles et sera supprimé automatiquement à la fermeture de votre navigateur.
			</p>
			<p>
			Lorsque vous vous connecterez, nous mettrons en place un certain nombre de cookies pour enregistrer vos informations de connexion et vos préférences d’écran. La durée de vie d’un cookie de connexion est de deux jours, celle d’un cookie d’option d’écran est d’un an. Si vous cochez « Se souvenir de moi », votre cookie de connexion sera conservé pendant deux semaines. Si vous vous déconnectez de votre compte, le cookie de connexion sera effacé.
			</p>
			<p>
			En modifiant ou en publiant une publication, un cookie supplémentaire sera enregistré dans votre navigateur. Ce cookie ne comprend aucune donnée personnelle. Il indique simplement l’ID de la publication que vous venez de modifier. Il expire au bout d’un jour. 
			</p>	    				
		</div>

	</div>
</section>


<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>