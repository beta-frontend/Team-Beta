<?php
switch ($title) {
  case "Dashboard":
    $dashboard = "active";
    break;
  case "Posts":
    $posts = "active";
    break;
  case "Catagories":
    $catagories = "active";
    break;
  case "Users":
    $users = "active";
    break;
  case "Profile":
    $profile = "active";
    break;
  case "Settings":
    $settings = "active";
    break;
  case "Login":
    $login = "active";
    break;
}
?>
<nav class="navbar navbar-expand-sm navbar-dark bg-dark p-0">
  <div class="container">
    <a href="index.php" class="navbar-brand">Team Beta</a>
    <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav">
        <li class="nav-item px-2">
          <a href="index.php" class="nav-link <?php echo $dashboard; ?>">Dashboard</a>
        </li>
        <li class="nav-item px-2">
          <a href="posts.php" class="nav-link <?php echo $posts; ?>">Posts</a>
        </li>
        <li class="nav-item px-2">
          <a href="catagories.php" class="nav-link <?php echo $catagories; ?>">Categories</a>
        </li>
        <li class="nav-item px-2">
          <a href="users.php" class="nav-link <?php echo $users; ?>">Users</a>
        </li>
      </ul>

      <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown mr-3">
          <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
            <i class="fas fa-user"></i> Welcome Admin
          </a>
          <div class="dropdown-menu">
            <a href="profile.php" class="dropdown-item <?php echo $profile; ?>">
              <i class="fas fa-user-circle"></i> Profile
            </a>
            <a href="settings.php" class="dropdown-item <?php echo $settings; ?>">
              <i class="fas fa-cog"></i> Settings
            </a>
          </div>
        </li>
        <li class="nav-item">
          <a href="login.php" class="nav-link <?php echo $login; ?>">
            <i class="fas fa-user-times"></i> Login
          </a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<!-- HEADER -->
<header id="main-header" class="py-2 bg-dark text-white">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <h1>
          <i class="fas fa-cog"></i> <?php echo $title; ?></h1>
      </div>
    </div>
  </div>
</header>