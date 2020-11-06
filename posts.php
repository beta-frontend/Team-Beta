<?php
$title = 'Posts';
include('includes/header.php');
include('includes/nav_header.php');
?>

<!-- SEARCH -->
<section id="search" class="py-4 mb-4 bg-light">
  <div class="container">
    <div class="row">
      <div class="col-md-6 ml-auto">
        <div class="input-group">
          <input type="text" class="form-control" placeholder="Search Posts...">
          <div class="input-group-append">
            <button class="btn btn-dark">Search</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- POSTS -->
<section id="posts">
  <div class="container">
    <div class="row">
      <div class="col">
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
                  <a href="details.php" class="btn btn-dark">
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
                  <a href="details.php" class="btn btn-dark">
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
                  <a href="details.php" class="btn btn-dark">
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
                  <a href="details.php" class="btn btn-dark">
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
                  <a href="details.php" class="btn btn-dark">
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
                  <a href="details.php" class="btn btn-dark">
                    <i class="fas fa-angle-double-right"></i> Details
                  </a>
                </td>
              </tr>
            </tbody>
          </table>

          <!-- PAGINATION -->
          <nav class="ml-4">
            <ul class="pagination bg-dark">
              <li class="page-item disabled">
                <a href="#" class="page-link bg-dark text-white">Previous</a>
              </li>
              <li class="page-item active">
                <a href="#" class="page-link bg-dark text-white">1</a>
              </li>
              <li class="page-item">
                <a href="#" class="page-link bg-dark text-white">2</a>
              </li>
              <li class="page-item">
                <a href="#" class="page-link bg-dark text-white">3</a>
              </li>
              <li class="page-item">
                <a href="#" class="page-link bg-dark text-white">Next</a>
              </li>
            </ul>
          </nav>
        </div>
      </div>
    </div>
  </div>
</section>

<?php
include('includes/nav_footer.php');
include('includes/footer.php');
?>