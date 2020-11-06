<?php
$title = 'Login';
include('includes/header.php');
?>

<body>
  <nav class="navbar navbar-expand-sm navbar-dark bg-dark p-0">
    <div class="container">
      <a href="index.php" class="navbar-brand">Team Beta</a>
    </div>
  </nav>

  <!-- HEADER -->
  <header id="main-header" class="py-2 bg-dark text-white">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <h1>
            <i class="fas fa-user"></i> <?php echo "Admin " . $title; ?></h1>
        </div>
      </div>
    </div>
  </header>

  <!-- ACTIONS -->
  <section id="actions" class="py-4 mb-4 bg-light">
    <div class="container">
      <div class="row">

      </div>
    </div>
  </section>

  <!-- LOGIN -->
  <section id="login">
    <div class="container">
      <div class="row">
        <div class="col-md-6 mx-auto">
          <div class="card">
            <div class="card-header">
              <h4>Account Login</h4>
            </div>
            <!--Form-->
            <div class="card-body">
              <form action="includes/login_handler.php">
                <div class="form-group">
                  <label for="email_address">Email</label>
                  <input type="email" name="email_address" class="form-control">
                </div>
                <div class="form-group">
                  <label for="password">Password</label>
                  <input type="password" name="password1" class="form-control">
                </div>
                <input type="submit" value="Login" class="btn btn-dark btn-block">
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <?php
  include('includes/nav_footer.php');
  include('includes/modals.php');
  include('includes/footer.php');
  ?>