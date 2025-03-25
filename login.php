<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Scoops & Smiles - Ice Cream Parlor Login</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/ice-cream-favicon.png" rel="icon">
  
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Cherry+Cream+Soda&family=Comic+Neue:wght@300;400;700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">

  <style>
    :root {
      --primary-color: #FF99CC;
      --secondary-color: #99FFCC;
      --accent-color: #FFCC99;
    }
    
    body {
      background: linear-gradient(135deg, #FFB3D9 0%, #B3E5FC 100%);
      font-family: 'Comic Neue', cursive;
    }
    
    .icecream-card {
      border-radius: 20px;
      border: 3px solid var(--primary-color);
      background: rgba(255, 255, 255, 0.9);
      box-shadow: 0 8px 32px rgba(0, 0, 0, 0.1);
    }
    
    .icecream-title {
      font-family: 'Cherry Cream Soda', cursive;
      color: #FF6699;
      text-shadow: 2px 2px 0px #FFFFFF;
    }
    
    .btn-primary {
      background: var(--primary-color);
      border: none;
      border-radius: 15px;
      padding: 12px;
      font-weight: bold;
      color: #fff;
    }
    
    .btn-primary:hover {
      background: #FF66B2;
    }
    
    .form-control {
      border-radius: 10px;
      border: 2px solid var(--accent-color);
    }
    
    .form-control:focus {
      box-shadow: 0 0 8px var(--primary-color);
    }
  </style>
</head>
<?php session_start(); ?>
<body>
  <main>
    <div class="container">
      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">
              <div class="icecream-icon">
                <i class="bi bi-ice-cream"></i>
              </div>
              <div class="card mb-3 icecream-card">
                <div class="card-body">
                  <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4 icecream-title">Welcome to Scoops & Smiles!</h5>
                    <p class="text-center small">Enter your details to sweeten your day!</p>
                  </div>

                  <form method="POST" action="./controller/loginProcess.php" class="row g-3 needs-validation" novalidate>
                    <div class="col-12">
                      <label for="yourUsername" class="form-label">🍦 Email Address</label>
                      <input type="text" name="email" class="form-control" id="yourUsername" required>
                      <div class="invalid-feedback">Please enter your email address!</div>
                    </div>
                    <div class="col-12">
                      <label for="yourPassword" class="form-label">🔑 Password</label>
                      <input type="password" name="password" class="form-control" id="yourPassword" required>
                      <div class="invalid-feedback">Please enter your password!</div>
                    </div>
                    <div class="col-12">
                      <button class="btn btn-primary w-100" type="submit" name="login">Scoop Me In!</button>
                    </div>  
                    <div class="col-12">
                      <p class="small mb-0">No account yet? <a href="registration.php" style="color: var(--primary-color);">Create a sweet account!</a></p>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
  </main>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <?php
  if(isset($_SESSION['message']) && $_SESSION['code'] !='') {
    ?>
    <script>
      const Toast = Swal.mixin({
        toast: true,
        position: "top-end",
        showConfirmationButton: false,
        timer: 3000,
        timerProgressBar: true,
        didOpen: (toast) => {
          toast.onmouseenter = Swal.stopTimer;
          toast.mouseonleave = Swal.resumeTimer;
        }
      });
      Toast.fire({
        icon: "<?php echo $_SESSION['code']; ?>",
        title: "<?php echo $_SESSION['message']; ?>"
      });
    </script>
    <?php
    unset($_SESSION['message']);
    unset($_SESSION['code']);
  }
?>
</body>

</html>