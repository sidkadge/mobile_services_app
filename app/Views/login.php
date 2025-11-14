<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Login Page</title>
  <!-- base:css -->
  <link rel="stylesheet" href="public/assets/vendors/typicons/typicons.css">
  <link rel="stylesheet" href="public/assets/vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="public/assets/css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="public/uploads/images/webicon.png" />
  <style>
    .brand-logo h2{color: #844fc1; font-weight: bold;}
  </style>
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-start py-5 px-4 px-sm-5">
              <div class="brand-logo">
                <img src="public/assets/images/logo-dark.svg" alt="logo" style="display: none;">
                <h2>Aarya Mobile Services</h2>
              </div>
              <h4>Hello! let's get started</h4>
              <h6 class="fw-light">Sign in to continue.</h6>
<form class="pt-3" action="<?= base_url('login-check'); ?>" method="post">
    <div class="form-group">
        <input type="email" class="form-control form-control-lg" name="email" placeholder="Username" required>
    </div>
    <div class="form-group">
        <input type="password" class="form-control form-control-lg" name="password" placeholder="Password" required>
    </div>
    <div class="mt-3 d-grid gap-2">
        <button type="submit" class="btn btn-block btn-primary btn-lg fw-medium auth-form-btn">
            SIGN IN
        </button>
    </div>
</form>

            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- base:js -->
  <script src="public/assets/vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- inject:js -->
  <script src="public/assets/js/off-canvas.js"></script>
  <script src="public/assets/js/hoverable-collapse.js"></script>
  <script src="public/assets/js/template.js"></script>
  <script src="public/assets/js/settings.js"></script>
  <script src="public/assets/js/todolist.js"></script>
  <!-- endinject -->
</body>

</html>
