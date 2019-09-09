<?php ob_start(); ?>

<section class="bloc_page container-fluid" id="top">  
    <div class="row">

		<div class="website_infos offset-xs-1 col-xs-10 offset-sm-1 col-sm-10 offset-md-1 col-md-10 offset-xl-2 col-xl-8">
          	<h2 class="text-center">Mentions légales du site <span class="site_name">blogjforteroche-vitez.fr</span>
          	</h2>

          	<h3>Mentions légales</h3>
          	<p>
          		<ul>
	          		<li>
	          			Editeur du site : Margaux VITEZ
	          			Mail : margaux.vitez@hotmail.fr
	          		</li>
          			<li>
          				Directeur de la Publication : Margaux VITEZ
          			</li>
          			<li>
          				Le nom de domaine <span class="site_name">blogjforteroche-vitez.fr</span>est la propriété du particulier Margaux VITEZ.
          			</li>
          			<li>
          				Hébergeur : OVH  2 rue Kellermann 59100 Roubaix 1007
      				</li>
      				<li>
      					Création du webdesign : Margaux VITEZ
      				</li>
  				</ul>
    		</p>

    		<h3>Usage général</h3>
    		<p>
    			Le site «blogjforteroche-vitez.fr » (le « Site ») est un site fictif créé dans le cadre d’une formation (OpenClassrooms). Les présentes conditions d'utilisation ont pour objet de vous informer sur les conditions dans lesquelles vous pouvez accéder au Site et, le cas échéant, utiliser les données y figurant. 
    		</p>

    		<h3>Copyright (droit d'auteur)</h3>
    		<p>
    			Tous les droits attachés aux copyrights restent la propriété du titulaire. 
    		</p>

    		<h3>Droit applicable</h3>	
    		<p>
    			Le Site et les présentes conditions d'utilisation sont soumis aux dispositions du droit français.   Tout conflit relatif à l'utilisation du Site sera soumis à la compétence exclusive des tribunaux de Paris.
    		</p>		
		</div>
	</div>
</section>


<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>