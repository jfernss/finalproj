<!DOCTYPE html>
<html>
<head>
	<title>Sign In</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
   <style>
		/* .container {
			background-color: white;
		}
      .panel {
			background-color: #f4f4f4;
			padding: 10px;
		} */
      .login-container {
        background-color: #e9ecef;
        border-radius: 10px;
        padding: 30px;
        margin-top: 50px;
      }
	</style>
</head>
<body>
<!Sign In-->
<!-- 	<div class="form-floating mb-3">
  <label for="firstName" style="padding-bottom: 10px;">First Name</label>
  <input
    type="text"
    class="form-control"
    id="firstName"
    placeholder="Enter your first name"
    required
  />
</div>
<div class="form-floating mb-3">
  <label for="lastName" style="padding-bottom: 10px;">Last Name</label>
  <input
    type="text"
    class="form-control"
    id="lastName"
    placeholder="Enter your last name"
    required
  />
</div>
<div class="form-floating mb-3">
  <label for="email" style="padding-bottom: 10px;">Email address</label>
  <input
    type="email"
    class="form-control"
    id="email"
    placeholder="Enter your email"
    required
  />
</div>
<div class="form-floating mb-3">
  <label for="password" style="padding-bottom: 10px;">Password</label>
  <input
    type="password"
    class="form-control"
    id="password"
    placeholder="Enter your password"
    required
  />
</div>
<div class="form-floating mb-3">
  <label for="confirmPassword" style="padding-bottom: 10px;">Confirm Password</label>
  <input
    type="password"
    class="form-control"
    id="confirmPassword"
    placeholder="Confirm your password"
    required
  />
</div> -->

  <div class="container">
      <div class="row">
        <div class="col-md-4 mx-auto">
          <div class="signup-container d-flex justify-content-center">
            <div class="card">
              <div class="card-body d-flex justify-content-center">
                <h5 class="card-title mb-4">Sign Up</h5>
                <form>
                  <div class="form-floating mb-3">
                    <label for="firstName">First Name</label>
                    <input
                      type="text"
                      class="form-control"
                      id="firstName"
                      placeholder="Enter your first name"
                      required
                    />
                  </div>
                  <div class="form-floating mb-3">
                    <label for="lastName">Last Name</label>
                    <input
                      type="text"
                      class="form-control"
                      id="lastName"
                      placeholder="Enter your last name"
                      required
                    />
                  </div>
                  <div class="form-floating mb-3">
                    <label for="email">Email address</label>
                    <input
                      type="email"
                      class="form-control"
                      id="email"
                      placeholder="Enter your email"
                      required
                    />
                  </div>
                  <div class="form-floating mb-3">
                    <label for="password">Password</label>
                    <input
                      type="password"
                      class="form-control"
                      id="password"
                      placeholder="Enter your password"
                      required
                    />
                  </div>
                  <div class="form-floating mb-3">
                    <label for="confirmPassword">Confirm Password</label>
                    <input
                      type="password"
                      class="form-control"
                      id="confirmPassword"
                      placeholder="Confirm your password"
                      required
                    />
                  </div>
                  <div class="d-grid gap-2">
                    <button type="submit" class="btn btn-primary mb-3">
                      Sign Up
                    </button>
                  </div>
                </form>
                <p class="card-text">
                  Already have an account?
                  <a href="login.html">Log in</a>
                </p>
               </div>
        </div>
      </div>
    </div>
  </div>
</div>

</body>
</html>
