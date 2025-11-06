<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Register Page</title>
  <!-- base:css -->
  <link rel="stylesheet" href="<?= base_url('public/assets/vendors/typicons/typicons.css'); ?>">
  <link rel="stylesheet" href="<?= base_url('public/assets/vendors/css/vendor.bundle.base.css'); ?>">
  <!-- inject:css -->
  <link rel="stylesheet" href="<?= base_url('public/assets/css/style.css'); ?>">
  <!-- endinject -->
  <link rel="shortcut icon" href="<?= base_url('public/assets/images/favicon.ico'); ?>" />
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
                <img src="<?= base_url('public/assets/images/logo-dark.svg'); ?>" alt="logo" style="display: none;">
                <h2>Aarya Mobile Services</h2>
              </div>

              <h4>Create a new account</h4>
              <h6 class="fw-light">Fill the details below to sign up</h6>

              <!-- ✅ Registration Form Starts -->
              <form class="pt-3" action="<?= base_url('store-user'); ?>" method="post">

                <div class="form-group">
                  <input type="text" name="first_name" class="form-control form-control-lg"
                    placeholder="First Name" required>
                </div>

                <div class="form-group">
                  <input type="text" name="last_name" class="form-control form-control-lg"
                    placeholder="Last Name" required>
                </div>

                <div class="form-group">
                  <input type="text" name="mobile_no" class="form-control form-control-lg"
                    placeholder="Mobile Number" required>
                </div>

                <div class="form-group">
                  <input type="email" name="email" class="form-control form-control-lg"
                    placeholder="Email" required>
                </div>

                <div class="form-group">
                  <input type="password" name="password" class="form-control form-control-lg"
                    placeholder="Password" required>
                </div>

                <div class="mb-4">
                  <div class="form-check">
                    <label class="form-check-label text-muted">
                      <input type="checkbox" class="form-check-input" required>
                      I agree to all Terms & Conditions
                    </label>
                  </div>
                </div>

                <div class="mt-3 d-grid gap-2">
                  <button type="submit" class="btn btn-block btn-primary btn-lg fw-medium auth-form-btn">
                    SIGN UP
                  </button>
                </div>

                <div class="text-center mt-4 fw-light">
                  Already have an account?
                  <a href="<?= base_url('login'); ?>" class="text-primary">Login</a>
                </div>

              </form>
              <!-- ✅ Registration Form Ends -->

            </div>
          </div>
        </div>
      </div>

    </div>
  </div>

  <!-- base:js -->
  <script src="<?= base_url('public/assets/vendors/js/vendor.bundle.base.js'); ?>"></script>

  <!-- inject:js -->
  <script src="<?= base_url('public/assets/js/off-canvas.js'); ?>"></script>
  <script src="<?= base_url('public/assets/js/hoverable-collapse.js'); ?>"></script>
  <script src="<?= base_url('public/assets/js/template.js'); ?>"></script>
  <script src="<?= base_url('public/assets/js/settings.js'); ?>"></script>
  <script src="<?= base_url('public/assets/js/todolist.js'); ?>"></script>
</body>

</html>
