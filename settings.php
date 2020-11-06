<?php
$title = 'Settings';
include('includes/header.php');
include('includes/nav_header.php');
include('includes/modal_actions.php');
?>

<!-- SETTINGS -->
<section id="settings">
  <div class="container">
    <div class="row">
      <div class="col">
        <div class="card">
          <div class="card-header">
            <h4>Edit Settings</h4>
          </div>
          <div class="card-body">
            <form>
              <fieldset class="form-group">
                <legend>Allow User Registration</legend>
                <div class="form-check">
                  <label class="form-check-label">
                    <input type="radio" class="form-check-input" value="Yes" checked> Yes
                  </label>
                </div>
                <div class="form-check">
                  <label class="form-check-label">
                    <input type="radio" class="form-check-input" value="No"> No
                  </label>
                </div>
              </fieldset>

              <fieldset class="form-group">
                <legend>Homepage Format</legend>
                <div class="form-check">
                  <label class="form-check-label">
                    <input type="radio" class="form-check-input" value="posts" checked> Blog Page
                  </label>
                </div>
                <div class="form-check">
                  <label class="form-check-label">
                    <input type="radio" class="form-check-input" value="page"> Homepage
                  </label>
                </div>
              </fieldset>
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