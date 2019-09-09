<?php ob_start(); ?>

<!-- AR quand passage par routeur ok:
- liens vers page accueil dans NAV 

  -->


<!-- create an account form -->

<section class="bloc_page container-fluid">

  <div class="offset-xs-1 col-xs-10 offset-sm-1 col-sm-10 offset-md-1 col-md-10 offset-xl-2 col-xl-8 register_form">
    <form action="" method="post">
      <h3> Créer un compte </h3>
      <div class="form-group">
        <label for="login"> Pseudo </label>   
        <input type="text" class="form-control" id="login" name="login" value="<?php if(isset($login)) { echo $login; } ?> "required/>
        <small id="loginHelp" class="form-text text-muted"> Doit commencer par une majuscule, puis peut contenir les caractères suivants: de a à z, de 0 à 9, - _ ! .</small>
      </div>

      <div class="form-group">
        <label for="exampleInputEmail1">Adresse mail</label>
        <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="adressemail@mail.com" value="<?php if(isset($email)) { echo $email; } ?> " required />
      </div>

      <div class="form-group">
        <label for="password">Mot de passe</label>
        <input type="password" class="form-control" id="password" placeholder="" required>
      </div>

      <div class="form-group">
        <label for="password_confirm">Confirmation du mot de passe</label>
        <input type="password" class="form-control" id="password_confirm" placeholder="" required>
        <small id="password_confirm_Help" class="form-text text-muted">Doit être identique au mot de passe indiqué ci-dessus.</small>
      </div>
      
      <button type="submit" name="registration" class="btn btn-primary btn-submit">Créer mon compte</button>
    </form>

    <?php
    if (isset($erreurMessage2))
    {
        echo $errorMessage2;
    }
    ?>

    <p class="sign_form">
      <span> Déjà inscrit ? C'est par ici ! </span> 
      <br/>
      <a class="btn btn-primary btn-post" href="signInView.php">Se connecter</a>
    </p>

  </div>
</section>

<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>