<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <title>Register | Hyper - Responsive Bootstrap 5 Admin Dashboard</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
  <meta content="Coderthemes" name="author" />
  <!-- App favicon -->
  <link rel="shortcut icon" href="../assets/images/favicon.ico" />

  <!-- App css -->
  <link href="../assets/css/icons.min.css" rel="stylesheet" type="text/css" />
  <link href="../assets/css/app.min.css" rel="stylesheet" type="text/css" id="light-style" />
  <link href="../assets/css/app-dark.min.css" rel="stylesheet" type="text/css" id="dark-style" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.slim.min.js" integrity="sha512-6ORWJX/LrnSjBzwefdNUyLCMTIsGoNP6NftMy2UAm1JBm6PRZCO1d7OHBStWpVFZLO+RerTvqX/Z9mBFfCJZ4A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <link rel="stylesheet" href="../assets/css/sweetalert2.min.css">
  <script src="../assets/js/sweetalert2.min.js"></script>
</head>

<body class="loading authentication-bg" data-layout-config='{"leftSideBarTheme":"dark","layoutBoxed":false, "leftSidebarCondensed":false, "leftSidebarScrollable":false,"darkMode":false, "showRightSidebarOnStart": true}'>

  <?php if (isset($_SESSION['status'])) {
    $status = $_SESSION['status'];
    echo "<span>$status</span>";
  } ?>

  <div class="account-pages pt-2 pt-sm-5 pb-4 pb-sm-5">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-xxl-4 col-lg-5">
          <div class="card">

            <!-- Logo-->
            <div class="card-header pt-4 pb-4 text-center bg-primary">
              <a href="index.html">
                <span><img src="../assets/images/logo.png" alt="" height="18" /></span>
              </a>
            </div>

            <div class="card-body p-4">
              <div class="text-center w-75 m-auto">
                <h4 class="text-dark-50 text-center mt-0 fw-bold">
                  Sign Up
                </h4>
                <p class="text-muted mb-4">
                  Don't have an account? Create your account, it takes less
                  than a minute
                </p>
              </div>

              <form action="../controllers/signup.ctrls.php" method="post">
                <div class="mb-3">
                  <label for="firstname" class="form-label">First Name</label>
                  <input class="form-control" type="text" id="firstname" placeholder="Enter your first name" name="firstname" required />
                </div>
                <div class="mb-3">
                  <label for="lastname" class="form-label">Last Name</label>
                  <input class="form-control" type="text" id="lastname" placeholder="Enter your last name" name="lastname" required />
                </div>
                <div class="mb-3">
                  <label for="username" class="form-label">UserName</label>
                  <input class="form-control" type="text" id="username" placeholder="Enter your username" name="username" required />
                </div>

                <div class="mb-3">
                  <label for="emailaddress" class="form-label">Email address</label>
                  <input class="form-control" type="email" id="emailaddress" placeholder="Enter your email" name="email" required />
                </div>

                <div class="mb-3">
                  <label for="password" class="form-label">Password</label>
                  <div class="input-group input-group-merge">
                    <input type="password" id="password" class="form-control" placeholder="Enter your password" name="password" required />
                    <div class="input-group-text" data-password="false">
                      <span class="password-eye"></span>
                    </div>
                  </div>
                </div>
                <div class="mb-3">
                  <label for="repeat_password" class="form-label">Repeat Password</label>
                  <div class="input-group input-group-merge">
                    <input type="password" id="repeat_password" class="form-control" placeholder="Repeat Password" name="repeat_password" required />
                    <div class="input-group-text" data-password="false">
                      <span class="password-eye"></span>
                    </div>
                  </div>
                </div>

                <div class="mb-3">
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="checkbox-signup" required />
                    <label class="form-check-label" for="checkbox-signup">I accept
                      <a href="#" class="text-muted">Terms and Conditions</a></label>
                  </div>
                </div>

                <div class="mb-3 text-center">
                  <button class="btn btn-primary" type="submit" name="submit">
                    Sign Up
                  </button>
                </div>

              </form>
            </div>
            <!-- end card-body -->
          </div>
          <!-- end card -->

          <div class="row mt-3">
            <div class="col-12 text-center">
              <p class="text-muted">
                Already have account?
                <a href="pages-login.php" class="text-muted ms-1"><b>Log In</b></a>
              </p>
            </div>
            <!-- end col-->
          </div>
          <!-- end row -->
        </div>
        <!-- end col -->
      </div>
      <!-- end row -->
    </div>
    <!-- end container -->
  </div>
  <!-- end page -->



  <!-- bundle -->
  <script src="../assets/js/vendor.min.js"></script>
  <script src="../assets/js/app.min.js"></script>
  <!-- end demo js-->
</body>

</html>
<?php unset($_SESSION['status']); ?>