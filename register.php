<?php
include 'header.php'; ?>
<?php include 'app/controllers/users.php';
// require('app/controllers/users.php');
?>
<section class="vh-100 bg-image"
  style="background-image: url('https://mdbcdn.b-cdn.net/img/Photos/new-templates/search-box/img4.webp');">
  <div class="mask d-flex align-items-center h-100 gradient-custom-3">
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-9 col-lg-7 col-xl-6">
          <div class="card" style="border-radius: 15px;">
            <div class="card-body p-5">
              <h2 class="text-uppercase text-center mb-5">Create an account</h2>

              <form action="register.php" method="post">

                <h2 class="form-title">Register</h2> 
           <?php include 'app/helpers/formErrors.php';?>
                

             

                <div class="form-outline mb-4">
                <label class="form-label" for="form3Example1cg">Username</label>
                  <input type="text" name="username" value="<?php echo $username; ?>" id="form3Example1cg" class="form-control form-control-lg" />
                  <div id="emailHelp" class="form-text">Please enter a unique username.</div>
                </div>

                <div class="form-outline mb-4">
                <label class="form-label" for="form3Example3cg">Your Email</label>
                  <input type="email" name="email" value="<?php echo $email; ?>" id="form3Example3cg" class="form-control form-control-lg" />
                
                  <div id="emailHelp" class="form-text">Please enter your Email ID.</div>
                </div>

                <div class="form-outline mb-4">
                <label class="form-label" for="form3Example4cg">Password</label>

                  <input type="password" name="password" value="<?php echo $password; ?>" id="form3Example4cg" class="form-control form-control-lg" />
                  <div id="emailHelp" class="form-text">  Your password must be 8-20 characters long, contain letters and numbers, and must not contain spaces, special characters, or emoji.</div>
                </div>

                <div class="form-outline mb-4">
                <label class="form-label" for="form3Example4cdg">Conform Password</label>

                  <input type="password" name="passwordconf" value="<?php echo $passwordconf; ?>" id="form3Example4cdg" class="form-control form-control-lg" />
                  <div id="emailHelp" class="form-text">Please re Enter your password </div>
                </div>

                <div class="form-check d-flex justify-content-center mb-5">
                  <input class="form-check-input me-2" type="checkbox" required id="form2Example3cg" />
                  <label class="form-check-label" for="form2Example3g">
                    I agree all statements in <a href="#!" class="text-body"><u>Terms of service</u></a>
                  </label>
                </div>

                <div class="d-flex justify-content-center">
                  <button type="submit" name="register-btn"
                    class="btn btn-success btn-block btn-lg gradient-custom-4 text-body">Register</button>
                </div>

                <p class="text-center text-muted mt-5 mb-0">Have already an account? <a href="login.php"
                    class="fw-bold text-body"><u>Login here</u></a></p>

              </form>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</body>
</html>