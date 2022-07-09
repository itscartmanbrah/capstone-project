<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <title>Log In | Hyper - Responsive Bootstrap 5 Admin Dashboard</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
  <meta content="Coderthemes" name="author" />
  <!-- App favicon -->
  <link rel="shortcut icon" href="../assets/images/favicon.ico" />

  <!-- App css -->
  <link href="../assets/css/icons.min.css" rel="stylesheet" type="text/css" />
  <link href="../assets/css/app.min.css" rel="stylesheet" type="text/css" id="light-style" />
  <link href="../assets/css/app-dark.min.css" rel="stylesheet" type="text/css" id="dark-style" />
</head>

<body class="loading authentication-bg" data-layout-config='{"leftSideBarTheme":"dark","layoutBoxed":false, "leftSidebarCondensed":false, "leftSidebarScrollable":false,"darkMode":false, "showRightSidebarOnStart": true}'>
  <div class="account-pages pt-2 pt-sm-5 pb-4 pb-sm-5">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-xxl-4 col-lg-5">
          <div class="card">
            <!-- Logo -->
            <div class="card-header pt-4 pb-4 text-center bg-primary">
              <a href="index.html">
                <span><img src="../assets/images/logo.png" alt="" height="18" />
                </span>
              </a>
            </div>

            <div class="card-body p-4">
              <div class="text-center w-75 m-auto">
                <h4 class="text-dark-50 text-center pb-0 fw-bold">Sign In</h4>
                <p class="text-muted mb-4">
                  Enter your email address and password to access admin panel.
                </p>
              </div>

              <form action="../controllers/login.ctrls.php" method="post">
                <div class="mb-3">
                  <label for="emailaddress" class="form-label">Email address</label>
                  <input class="form-control" type="email" id="emailaddress" required="" placeholder="Enter your username or email" name="email" />
                </div>

                <div class="mb-3">
                  <a href="pages-recoverpw.html" class="text-muted float-end"><small>Forgot your password?</small></a>
                  <label for="password" class="form-label">Password</label>
                  <div class="input-group input-group-merge">
                    <input type="password" id="password" class="form-control" placeholder="Enter your password" name="password" />
                    <div class="input-group-text" data-password="false">
                      <span class="password-eye"></span>
                    </div>
                  </div>
                </div>

                <div class="mb-3 mb-0 text-center">
                  <button class="btn btn-primary" type="submit" name="submit">
                    Log In
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
                Don't have an account?
                <a href="pages-register.php" class="text-muted ms-1"><b>Sign Up</b></a>
              </p>
            </div>
            <!-- end col -->
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

  <script src="../assets/js/pages/demo.toastr.js"></script>
  <!-- end demo js-->
  <script>
    $(function(e) {
      var error = `<?= $_GET['error']; ?>`;
      if (error === 'wrongpassword' || error === 'wronglogin') {
        e.NotificationApp.send(
          'Oh snap!',
          'Change a few things up and try submitting again.',
          'top-right',
          'rgba(0,0,0,0.2)',
          'error'
        );
      } else if (error === 'none') {
        e.NotificationApp.send(
          'Well Done!',
          'You successfully read this important alert message',
          'top-right',
          'rgba(0,0,0,0.2)',
          'success'
        );
      }
    });
  </script>
</body>

</html>