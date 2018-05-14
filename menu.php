<div class="content" id="menu">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="/">
            <img src="images/logo.JPG" width="150" />
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item ">
                <a class="nav-link" href="/biographie.php">Biographie</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/concert.php">Concerts</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/photos.php">Photos / clips</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/forum.php">Forum</a>
            </li>
          </ul>
        </div>
        
        <div class="mt-2 mt-md-0 white">
            <?php if(isset($_SESSION['pseudo'])){ echo "Bonjour ".$_SESSION['pseudo']; ?> 
                <a class="btn btn-primary" href="/forum.php?deco" role="button">Déconnexion</a>
            <?php } ?>
        </div>
        
      </nav>
</div>