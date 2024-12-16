<nav class="navbar navbar-expand navbar-dark bg-dark sticky-top">
  <div class="container-lg">
    <a href="."><img src="Icon/cafetaria white.png" width="120" height="18" /></a>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <?php echo $hasil['username']; ?>
          </a>
          <ul class="dropdown-menu dropdown-menu-end mt-2">
            <li><a class="dropdown-item" href="#"><i class="bi bi-person-square"></i> Profile</a></li>
            <li><a class="dropdown-item" href="#"><i class="bi bi-gear"></i> Settings</a></li>
            <li><a class="dropdown-item" href="logout"><i class="bi bi-box-arrow-left"></i> Sign Out</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>