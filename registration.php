<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Scoops & Smiles - Sweet Registration</title>
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
      font-size: 2rem;
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
    
    .form-control, .form-select {
      border-radius: 10px;
      border: 2px solid var(--accent-color);
    }
    
    .form-control:focus, .form-select:focus {
      box-shadow: 0 0 8px var(--primary-color);
    }
    
    .sprinkles {
      background-image: radial-gradient(circle at 10px 10px, #FF99CC 2%, transparent 0),
                        radial-gradient(circle at 30px 30px, #99FFCC 2%, transparent 0),
                        radial-gradient(circle at 50px 10px, #FFCC99 2%, transparent 0);
      background-size: 60px 60px;
      height: 100%;
      position: fixed;
      width: 100%;
      z-index: -1;
    }
    
    .icecream-icon {
      font-size: 3rem;
      color: #FF6699;
      margin-bottom: 1rem;
    }
    
    .flavor-option {
      padding-left: 40px;
      background-repeat: no-repeat;
      background-size: 30px;
    }
  </style>
</head>
<?php session_start(); ?>
<body>
  <div class="sprinkles"></div>
  <main>
    <div class="container">
      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-6 col-md-8 d-flex flex-column align-items-center justify-content-center">
              <div class="icecream-icon">
                <i class="bi bi-ice-cream"></i>
                <i class="bi bi-cup-straw"></i>
              </div>
              <div class="card mb-3 icecream-card">
                <div class="card-body">
                  <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4 icecream-title">Create Your Sweet Account!</h5>
                    <p class="text-center small">Let's mix up something delicious!</p>
                  </div>

                  <form class="row g-3 needs-validation" action="./controller/createAccount.php" method="POST" novalidate>
                    <div class="col-md-6">
                      <label for="firstname" class="form-label">🍦 First Name</label>
                      <input type="text" name="firstname" class="form-control" id="firstname" required>
                      <div class="invalid-feedback">Please enter your first name!</div>
                    </div>

                    <div class="col-md-6">
                      <label for="lastname" class="form-label">🍨 Last Name</label>
                      <input type="text" name="lastname" class="form-control" id="lastname" required>
                      <div class="invalid-feedback">Please enter your last name!</div>
                    </div>

                    <div class="col-12">
                      <label for="yourEmail" class="form-label">📧 Email Address</label>
                      <input type="email" name="email" class="form-control" id="yourEmail" required>
                      <div class="invalid-feedback">Please enter a valid email address!</div>
                    </div>
                    
                    <div class="col-md-6">
                      <label for="yourPassword" class="form-label">🔑 Password</label>
                      <input type="password" name="password" class="form-control" id="yourPassword" required>
                      <div class="invalid-feedback">Please enter your password!</div>
                    </div>

                    <div class="col-md-6">
                      <label for="cpassword" class="form-label">✅ Confirm Password</label>
                      <input type="password" name="cpassword" class="form-control" id="cpassword" required>
                      <div class="invalid-feedback">Passwords must match!</div>
                    </div>

                    <div class="col-12">
                      <label for="phoneNumber" class="form-label">📱 Phone Number</label>
                      <input type="tel" name="phoneNumber" class="form-control" id="phoneNumber" required>
                      <div class="invalid-feedback">Please enter your phone number!</div>
                    </div>

                    <div class="col-md-6">
                      <label class="form-label">🚻 Gender</label>
                      <select name="gender" id="gender" class="form-select" required>
                        <option selected>Select Flavor...</option>
                        <option value="1">🍦 Male</option>
                        <option value="2">🌸 Female</option>
                      </select>
                    </div>

                    <div class="col-md-6">
                      <label for="inputDate" class="form-label">🎂 Birthday</label>
                      <input type="date" name="birthday" class="form-control" required>
                    </div>

                    <div class="col-12 mt-4">
                      <div class="form-check">
                        <input class="form-check-input" name="terms" type="checkbox" value="" id="acceptTerms" required>
                        <label class="form-check-label" for="acceptTerms">I agree to the <a href="#" style="color: var(--primary-color);">Sweet Terms & Conditions</a></label>
                        <div class="invalid-feedback">You must agree to continue!</div>
                      </div>
                    </div>
                    <div class="col-12">
                      <button class="btn btn-primary w-100" type="submit" name="register">Create Sweet Account!</button>
                    </div>
                    <div class="col-12">
                      <p class="small mb-0 text-center">Already have an account? <a href="login.php" style="color: var(--primary-color);">Let's Scoop In!</a></p>
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
  <?php
  if(isset($_SESSION['status']) && $_SESSION['status_code'] != ''){
        ?>
        <script>
        const Toast = Swal.mixin({
          toast: true,
          position: "top-end",
          showConfirmButton: false,
          timer: 3000,
          timerProgressBar: true,
          didOpen: (toast) => {
            toast.onmouseenter = Swal.stopTimer;
            toast.onmouseleave = Swal.resumeTimer;
          }
        });
        Toast.fire({
          icon: "success",
          title: "Account created successfully! Time for treats! 🍦"
        });
        </script>
        <?php
        unset($_SESSION['status_code']);
        unset($_SESSION['status']);
            }
        ?>
  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
</body>
</html>