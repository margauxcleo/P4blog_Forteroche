<?php ob_start(); ?>

<section class="bloc_page container-fluid" id="top">  
    <div class="row">

        <?php require("aside.php") ?>  

        <div class="posts col-xs-12 offset-sm-1 col-sm-10 offset-md-0 col-md-7 offset-lg-0 col-lg-7 col-xl-8">

            <br/>
            <p class="text-left">
                <a class="btn btn-primary btn-back" href="index.php" role="button">
                  <i class="fas fa-angle-up"></i>
                  Retour à la page d'accueil
                </a>
              </p>

            <article> 
                <h3>
                    <i class="fas fa-bookmark"></i>
                    <?php echo htmlspecialchars($post['title']); ?>
                </h3>
                <p class="publication_date_fr">
                    <i class="far fa-calendar"></i>
                    Publié le <?php echo htmlspecialchars($post['publication_date_fr']); ?>
                </p>
                <a href="#comments" class="btn btn-outline-primary btn-post" role="button"> 
                <i class="fas fa-comments"></i>
                Voir les commentaires 
                </a>
                
                <p class="content">
                <?php
                echo nl2br(htmlspecialchars($post['content']));
                ?>
                </p>

            </article> 

            <p class="text-right" id="comments">
                <a class="btn btn-primary btn-top" href="#top" role="button">
                  <i class="fas fa-angle-up"></i>
                  Retour en haut de page
                </a>
            </p>
            
            <div class="comments-section border-bottom-0" id="comments-section">
                <h2> 
                    <i class="fas fa-comments"></i>
                    Commentaires 
                </h2>

                <div class="comments">
                    <?php
                    while ($comment = $comments->fetch())
                    {
                    ?>
                    <div class="comment">
                        <p>
                        <strong> <?php echo htmlspecialchars($comment['author']) ?> </strong>
                        <span class="publication_date_fr">
                            <i class="far fa-calendar"></i>
                            le <?php echo htmlspecialchars($comment['comment_date_fr']) ?>
                        </span>           
                        </p>
                        <p> <?php echo htmlspecialchars($comment['comment']) ?> 
                        </p>

                        <div class="text-right" role="group">
                            <form action="index.php?action=signaledAComment&amp;id=<?= $comment['id']; ?>" method="post" class="" name="signaledComment">
                                <button type="submit" class="btn btn-outline-danger warning-btn" name="submit" value="Signaler ce commentaire !"> 
                                    <i class="fas fa-exclamation-triangle"></i>
                                    Signaler ce commentaire !
                                </button>
                            </form>
                        </div>
                    </div> 

                    <?php 
                    }   
                    $comments->closeCursor();
                    ?>
                </div>
                
                <form action="index.php?action=addComment&amp;id=<?= $post['id'] ?>" method="post" name="addComment" id="addCommentForm">
                    <h3> 
                        <i class="fas fa-plus-square"></i>
                        Ajouter un commentaire 
                    </h3>
                    <div class="form-group">
                        <label for="author"> Auteur </label> 
                        <input type="text" class="form-control" id="author" name="author" />
                    </div>
                    <div class="form-group">
                        <label for="comment"> Commentaire </label>
                        <textarea class="form-control" id="comment" name="comment" rows="3"></textarea>
                    </div>
                    <div>
                        <input type="submit" class="btn btn-primary btn-submit" name="envoyer">
                    </div>
                </form>

                <br/>
                <p class="text-right">
                    <a class="btn btn-primary btn-top" href="#top" role="button">
                      <i class="fas fa-angle-up"></i>
                      Retour en haut de page
                    </a>
                </p>
            </div>
        </div>       
    </div>
</section>

<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>
