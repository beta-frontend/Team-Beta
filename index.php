<?php
$title = 'Dashboard';
include('includes/header.php');
include('includes/nav_header.php');
include('includes/modal_actions.php');
?>

<!-- POSTS -->
<section id="posts">
  <div class="container">
    <div class="row">
      <div class="col-md-9">
        <div class="card">
          <div class="card-header">
            <h4>Latest Posts</h4>
          </div>
          <table class="table table-striped">
            <thead class="thead-dark">
              <tr>
                <th>#</th>
                <th>Title</th>
                <th>Category</th>
                <th>Date</th>
                <th></th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td>Post One</td>
                <td>Web Development</td>
                <td>May 10 2018</td>
                <td>
                  <a href="details.php" class="btn btn-secondary">
                    <i class="fas fa-angle-double-right"></i> Details
                  </a>
                </td>
              </tr>
              <tr>
                <td>2</td>
                <td>Post Two</td>
                <td>Tech Gadgets</td>
                <td>May 11 2018</td>
                <td>
                  <a href="details.php" class="btn btn-secondary">
                    <i class="fas fa-angle-double-right"></i> Details
                  </a>
                </td>
              </tr>
              <tr>
                <td>3</td>
                <td>Post Three</td>
                <td>Web Development</td>
                <td>May 13 2018</td>
                <td>
                  <a href="details.php" class="btn btn-secondary">
                    <i class="fas fa-angle-double-right"></i> Details
                  </a>
                </td>
              </tr>
              <tr>
                <td>4</td>
                <td>Post Four</td>
                <td>Business</td>
                <td>May 15 2018</td>
                <td>
                  <a href="details.php" class="btn btn-secondary">
                    <i class="fas fa-angle-double-right"></i> Details
                  </a>
                </td>
              </tr>
              <tr>
                <td>5</td>
                <td>Post Five</td>
                <td>Web Development</td>
                <td>May 17 2018</td>
                <td>
                  <a href="details.php" class="btn btn-secondary">
                    <i class="fas fa-angle-double-right"></i> Details
                  </a>
                </td>
              </tr>
              <tr>
                <td>6</td>
                <td>Post Six</td>
                <td>Health & Wellness</td>
                <td>May 20 2018</td>
                <td>
                  <a href="details.php" class="btn btn-secondary">
                    <i class="fas fa-angle-double-right"></i> Details
                  </a>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
      <div class="col-md-3">
        <div class="card text-center bg-dark text-white mb-3">
          <div class="card-body">
            <h3>Posts</h3>
            <h4 class="display-4">
              <i class="fas fa-pencil-alt"></i> 6
            </h4>
            <a href="posts.php" class="btn btn-outline-light btn-sm">View</a>
          </div>
        </div>

        <div class="card text-center bg-dark text-white mb-3">
          <div class="card-body">
            <h3>Categories</h3>
            <h4 class="display-4">
              <i class="fas fa-folder"></i> 4
            </h4>
            <a href="categories.php" class="btn btn-outline-light btn-sm">View</a>
          </div>
        </div>

        <div class="card text-center bg-dark text-white mb-3">
          <div class="card-body">
            <h3>Users</h3>
            <h4 class="display-4">
              <i class="fas fa-users"></i> 4
            </h4>
            <a href="users.php" class="btn btn-outline-light btn-sm">View</a>
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