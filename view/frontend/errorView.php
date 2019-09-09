<?php ob_start(); ?>


<section class="bloc_page container-fluid">

    <div class="row">
        <div class="error_message offset-xs-1 col-xs-10 offset-sm-1 col-sm-10 offset-md-1 col-md-10 offset-xl-2 col-xl-8">
            <h2>
                <i class="fas fa-minus-circle"></i>
                Attention ! 
            </h2>
            <p class="alert alert-danger" role="alert"> 
                <?php echo htmlspecialchars ($errorMessage) ?> 
            </p>
            
        </div>
    </div>
</section>


<?php $content = ob_get_clean(); ?>

<?php require('template.php'); 