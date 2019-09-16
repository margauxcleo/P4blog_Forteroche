<!DOCTYPE html>
<html lang="fr">

  <head>

    <meta charset="utf-8"> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Billet simple pour l'Alaska</title>
    <meta name="description" content="Le site du nouveau roman de Jean Forteroche">

     
    <!-- CDN Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- CDC de fontawesome -->
    <script src="https://kit.fontawesome.com/d9b0e2adfb.js"></script>
    <link href='http://fonts.googleapis.com/css?family=Bitter' rel='stylesheet' type='text/css'>
    <!-- CDC de Tiny -->
    <script src="https://cdn.tiny.cloud/1/rk8qwx3pxyug2vnw0uple2n405a8mfwx2fjvyzpy7lvdketk/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
    tinymce.init({
        selector: '.mytinytextarea'
    });
    </script>
    <!-- feuille de style perso -->
    <link rel="stylesheet" href="public/css/style.css"/>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

  </head>

  <header>

    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
      <a class="navbar-brand" href="index.php?action=admin">Un billet simple pour l'Alaska</a>
    </nav>
  </header>


  <body id="back_template">

    <?php echo $content ?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
      
  </body>

  <footer class="row">
        
    <ul class="col-xs-12 offset-sm-1 col-sm-5 offset-md-1 col-md-5 offset-lg-2 col-lg-4 offset-xl-3 col-xl-3 btn-group-vertical" id="reseaux_sociaux" role="group">
      <h3> Support </h3>
      <li> 
        <a class="btn btn-primary btn-footer"
            href="index.php?action=tools" type="button"> 
          <i class="fas fa-cog"></i>
                Outils
        </a>
      </li>
      <li>
        <a class="btn btn-primary btn-footer" href="index.php?action=contactSupport" type="button">
          <i class="fas fa-tools"></i>
                Nous contacter
        </a>
      </li>
      <li> 
        <a class="btn btn-primary btn-footer" href="index.php?action=suggestion" type="button">
          <i class="fas fa-lightbulb"></i>
                Suggestions d'améliorations
        </a>
      </li>
    </ul>

    <ul class="col-xs-12 col-sm-5 col-md-5 col-lg-4 col-xl-3 btn-group-vertical" role="group">
        <h3> Plus d'informations </h3>
        <li> 
            <a class="btn btn-primary btn-footer" href="index.php?action=cgu" type="button">

                <i class="fas fa-thumbtack"></i>
                Conditions d'utilisations
            </a> 
        </li>
        <li>
            <a class="btn btn-primary btn-footer" href="index.php?action=legalNotice" type="button">
                <i class="fas fa-landmark"></i>
                Mentions Légales
            </a>
        </li>
        <li> 
            <a class="btn btn-primary btn-footer" href="index.php?action=cookies" type="button">
                <i class="fas fa-eye"></i>
                Cookies 
            </a>
        </li>
    </ul>

    <p class="copyright offset-xs-2 col-xs-8 offset-sm-4 offset-lg-4 offset-lg-5"> 
        <i class="fas fa-copyright"></i>
        2019 - Site crée par Margaux.Vitez </p>
    </footer>

</html>