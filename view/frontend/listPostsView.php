<?php ob_start(); ?>

<section class="bloc_page container-fluid">
  <div class="row">
      
    <?php require("aside.php") ?>
    
    <div class="posts col-xs-12 offset-sm-1 col-sm-10 offset-md-0 col-md-7 offset-lg-0 col-lg-7 col-xl-8" data-spy="scroll" data-target="#list-posts" data-offset="0"> 

      <h2> Découvrez les résumés des derniers chapitres publiés: </h2>

      <?php
      while ($data = $posts->fetch())
      {
      ?>                          
        <article>
          <h3 id="<?php $data['id']; ?>"> <!-- AR !!!!! -->
            <i class="fas fa-bookmark"></i>
            <?php echo htmlspecialchars($data['title']); ?>
          </h3>
          <p class="resume">
            <?php echo ($data['resume']); ?>
          </p>
          <p class="publication_date_fr">
            <i class="far fa-calendar"></i>
            Publié le <?php echo ($data['publication_date_fr']); ?>
          </p>
          <a href="index.php?action=post&amp;id=<?= $data['id'] ?>" class="btn btn-outline-primary btn-post" role="button"> 
            <i class="fas fa-book-reader"></i>
            Lire le chapitre en entier
          </a>

        </article>
    
      <?php 
      }   
      $posts->closeCursor();
      ?>

      <br/>
      <p class="text-right">
        <a class="btn btn-primary btn-top" href="index.php#top" role="button">
          <i class="fas fa-angle-up"></i>
          Retour en haut de page
        </a>
      </p>

    </div>
  </div> <!--fermeture de la div "row" = de la grille -->
</section> <!--fermeture div bloc_page -->

<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>


