<?php
$title = 'Details';
include('includes/header.php');
include('includes/nav_header.php');
//include('includes/modal_actions.php');
?>
<!-- ACTIONS -->
<section id="actions" class="py-4 mb-4 bg-light">
  <div class="container">
    <div class="row">
      <div class="col-md-3">
        <a href="index.php" class="btn btn-dark btn-block">
          <i class="fas fa-arrow-left"></i> Back To Dashboard
        </a>
      </div>
      <div class="col-md-3">
        <a href="index.php" class="btn btn-dark btn-block">
          <i class="fas fa-check"></i> Save Changes
        </a>
      </div>
      <div class="col-md-3">
        <a href="index.php" class="btn btn-dark btn-block">
          <i class="fas fa-trash"></i> Delete Post
        </a>
      </div>
    </div>
  </div>
</section>

<!-- DETAILS -->
<section id="details">
  <div class="container">
    <div class="row">
      <div class="col">
        <div class="card">
          <div class="card-header">
            <h4>Edit Post</h4>
          </div>
          <div class="card-body">
            <form>
              <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" value="Post One">
              </div>
              <div class="form-group">
                <label for="category">Category</label>
                <select class="form-control">
                  <option value="" selected>Web Development</option>
                  <option value="">Tech Gadgets</option>
                  <option value="">Business</option>
                  <option value="">Health & Wellness</option>
                </select>
              </div>
              <div class="form-group">
                <label for="image">Upload Image</label>
                <div class="custom-file">
                  <input type="file" class="custom-file-input" id="image">
                  <label for="image" class="custom-file-label">Choose File</label>
                </div>
                <small class="form-text text-muted">Max Size 3mb</small>
              </div>
              <div class="form-group">
                <label for="body">Body</label>
                <textarea name="editor1" class="form-control">Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat culpa nam cumque voluptatum. Possimus recusandae porro architecto officiis illo dignissimos ratione aut officia reprehenderit! Iure cum numquam fugit doloremque quis ullam illo odit, odio voluptates non quisquam laboriosam consectetur quasi perspiciatis! Sapiente minus aperiam nobis molestias autem ut praesentium laudantium?</textarea>
              </div>
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