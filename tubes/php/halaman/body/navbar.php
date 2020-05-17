<header>
  <nav class="navbar navbar-expand-lg navbar-dark " style="background: rgba(0, 0, 0, 0.3)">
    <div class="container d-flex justify-content-between">
      <a class="navbar-brand logo" href="./">
        <img src="./assets/icon/logo.ico" width="40" height="40" class="d-inline-block align-top" alt="">
        Penemuan
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample07" aria-controls="navbarsExample07" aria-expanded="true" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="show collapse navbar-collapse justify-content-md-center" id="navbarsExample07">
        <div class="">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="./">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#elektro">Elektronik</a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" href="#">Tips & Trik</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle disabled" href="#" id="dropdown07" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Kegunaan Barang</a>
              <div class="dropdown-menu" aria-labelledby="dropdown07">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <a class="dropdown-item" href="#">Something else here</a>
              </div>
            </li>
          </ul>
        </div>
        <!-- <a href="#" class="btn btn-outline-light">Login <i class="fas fa-sign-in-alt"></i></a> -->
      </div>
      <?php
      if (isset($_SESSION['username'])) {
        echo '
          <div class="dropdown">
            <a class="btn btn-outline-light dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-user-circle"></i> ' . $_SESSION['username'] . '
            </a>

            <div class="dropdown-menu">
              <a class="dropdown-item" href="php/admin/">Admin <i class="fas fa-tachometer-alt"></i></a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="php/logout.php">Logout <i class="fas fa-sign-out-alt"></i></a>
            </div>
          </div>
          ';
      } else {
        echo '<a href="php/login.php" class="btn btn-outline-light">Login <i class="fas fa-sign-in-alt"></i></a>';
      }

      ?>
      <!-- <a href="php/login.php" class="btn btn-outline-light">Login <i class="fas fa-sign-in-alt"></i></a> -->
    </div>
  </nav>
</header>