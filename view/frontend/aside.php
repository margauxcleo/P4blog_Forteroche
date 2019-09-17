<aside class="col-xs-12 offset-sm-1 col-sm-10 offset-md-1 col-md-3 offset-lg-1 col-lg-3 col-xl-2" id="front-aside">


  <nav class="navbar navbar-light bg-light navbar-expand-md">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#aside-navbar" aria-controls="aside-navbar" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
      <span>Voir tous les chapitres</span>
    </button>

    <div class="collapse navbar-collapse" id="aside-navbar">
      <ul class="navbar-nav flex-column">
        <?php
        while ($data = $aside->fetch()) 
        {
        ?>
          <li class="nav-item">
            <a href="index.php?action=post&amp;id=<?= $data['id'] ?>" class="list-group-item list-group-item-action button btn-primary btn-aside" type="button" >
              <i class="fas fa-bookmark"></i>
              <?php echo htmlspecialchars($data['title']) ?>
            </a>
          </li> 
        <?php
        }
          $aside->closeCursor();
        ?>
      </ul>
    </div>
  </nav>
</aside>
