<?php ob_start(); ?>

<section class="bloc_page2 container-fluid">
    
    <div class="row">
      
        <?php require("backAside.php") ?>

        <div class="admin col-xs-12 col-sm-12 col-md-8  col-lg-9 col-xl-10">

            <div class="row">
                <div class="col-12 text-center">
                    <h2>Créer un nouveau chapitre</h2>
                </div>
            </div>

            <form action="index.php?action=createNewPost" method="post" class="back-form" name="createNewPostForm">
                <div class="form-group">
                    <label for="title">
                        <i class="fas fa-heading"></i>
                        Titre du chapitre
                    </label>
                    <input type="text" name="title" id="title" class="form-control"/>
                    <small id="titleHelp" class="form-text text-muted">Maximum 25 caractères.</small>
                </div>
                <div class="form-group">
                    <label for="resume">
                        <i class="fas fa-glasses"></i>
                        Résumé du chapitre
                    </label>
                    <textarea id="mytextarea"type="text" name="resume" id="resume" class="form-control" rows="4" required>
                    </textarea>
                </div>
                <div class="form-group">
                    <label for="content">
                        <i class="fas fa-bookmark"></i>
                        Contenu
                    </label>
                    <textarea type="text" name="content" id="content" class="form-control" rows="10" required>
                    </textarea>
                </div>
                <div>
                    <button type="submit" class="btn btn-primary btn-submit" name="publier"> Publier 
                    </button>
                </div>
                
            </form>
            
        </div>
    </div>
</section>

<?php $content = ob_get_clean(); ?>

<?php require('backTemplate.php'); ?>