<aside class="col-xs-0 col-sm-0 col-md-4 col-lg-3 col-xl-2" id="back-aside-section" id="back-aside">

  <nav class="navbar navbar-dark bg-dark navbar-expand-md">

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarAdmin" aria-controls="navbarAdmin" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarAdmin">
      <ul class="navbar-nav flex-column adminMenu" id="adminMenu">
        <li class="nav-item">
          <a class="nav-link active" href="index.php?action=admin"> 
            <i class="fas fa-home"></i>
            Accueil 
            <span class="sr-only">(current)</span>
          </a>
        </li>

        <li class="nav-item">
          <h3 class="dropdown-header">Chapitres</h3> 
          <a class="nav-link active" href="index.php?action=tablePosts">
            <i class="fas fa-book-reader"></i>
            Voir tous les chapitres 
          </a>
          <a class="nav-link active" href="index.php?action=newPostPage">
            <i class="fas fa-pen"></i>
            Créer un chapitre 
          </a>
          <a class="nav-link active" href="index.php?action=tableUpdate"> 
            <i class="fas fa-edit"></i>
            Modifier un chapitre 
          </a>
          <a class="nav-link active" href="index.php?action=tableDelete"> 
            <i class="fas fa-trash-alt"></i>
            Supprimer un chapitre 
          </a>
        </li>

        <li class="nav-item">
          <h3 class="dropdown-header">Commentaires</h3> 
          <a class="nav-link active" href="index.php?action=tableComments">
            <i class="fas fa-chalkboard-teacher"></i>
            Gérer les commentaires
          </a>  
        </li>


        <div class="dropdown-divider"></div>
        <li class="nav-item">
          <a class="nav-link active" href="index.php?action=logOutRequest"> 
            <i class="fas fa-power-off"></i>
            Déconnexion 
          </a>
        </li>
      </ul>
    </div>
  </nav>
</aside>