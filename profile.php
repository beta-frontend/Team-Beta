<?php
$title = 'Profile';
include('includes/header.php');
include('includes/nav_header.php');
include('includes/modal_actions.php');
?>

<!-- PROFILE -->
<section id="profile">
  <div class="container">
    <div class="row">
      <div class="col-md-9">
        <div class="card">
          <div class="card-header">
            <h4>Edit Profile</h4>
          </div>
          <div class="card-body">
            <form>
              <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" value="">
              </div>
              <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" value="">
              </div>
              <div class="form-group">
                <label for="bio">Bio</label>
                <textarea class="form-control" name="editor1">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid unde at fugiat explicabo temporibus, tempora animi sunt iusto quod beatae optio veritatis velit natus odit error! Possimus esse quisquam quibusdam eveniet autem! Minus dolore quisquam nemo similique doloribus perspiciatis tempore.</textarea>
              </div>
            </form>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <h3>Your Avatar</h3>
        <img src="img/avatar.png" alt="" class="d-block img-fluid mb-3">
        <button class="btn btn-dark btn-block">Edit Image</button>
        <button class="btn btn-dark btn-block">Delete Image</button>
      </div>
    </div>
  </div>
</section>

<?php
include('includes/nav_footer.php');
include('includes/modals.php');
include('includes/footer.php');
?>