<nav class="navbar navbar-expand-lg navbar-light bg-light mb-4">
      <div class="container-fluid">
        <a class="navbar-brand" href="index.php">Home</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item"><?php
                  if(isset($_SESSION['User_id'])){?>
                 <a href="logout.php" class="btn btn-outline-danger btn-sm">Logout</a>
                <?php
                  }?></li>
          </ul>
        </div>
      </div>
    </nav>