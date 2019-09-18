<?php ob_start(); ?>

<section class="bloc_page container-fluid">

  <div class="offset-xs-1 col-xs-10 offset-sm-1 col-sm-10 offset-md-1 col-md-10 offset-xl-2 col-xl-8 signin_form">

    <form action="index.php?action=login" method="post">
      <h3> Se connecter </h3>

      <div class="form-group">
        <label for="email">Votre adresse mail</label>
        <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="adressemail@mail.com">
      </div>
      <div class="form-group">
        <label for="password">Votre mot de passe</label>
        <input type="password" name="password" class="form-control" id="password" placeholder="">
      </div>
      <br/>

      <button type="submit" class="btn btn-primary btn-submit" name="logIn">Se connecter</button>
    </form>

    <p class="register_form">
      <span> Pas encore inscrit ? C'est par ici ! </span> 
      <br/>
      <a class="btn btn-primary btn-post" href="index.php?action=signInPage">Créer un compte</a>
    </p>

  </div>
</section>


<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>