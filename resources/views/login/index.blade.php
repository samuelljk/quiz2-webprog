<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/Login.css">
    <title>Login | ETS Web Programming</title>
</head>
<body>
    <div class="container-1">
        <div class="rectangle-1">
          <div class="left-container">
            <div class="log-in-container">
              <h1 class="log-in-class">Log In</h1>
            </div>
            <form class="details-container" action="/login" method="post">
              @csrf
              <div class="details-border">
                <input
                  class="details-text"
                  name = "email"
                  id = "email"
                  type = "email"
                  placeholder="Email"
                  autofocus
                  required
                />
              </div>
              <div class="details-border">
                <input
                  class="details-text"
                  type="password"
                  name = "password"
                  id = "password"
                  placeholder="Password"
                  required
                />
              </div>
              <div class="button-container">
                <button class="button-container-2" type="submit">Login</button>
              </div>
            </form>
            <div class="signup-container">
              <p>don't have an account?</p>
              <a class="signup-button" href="/register">
                Sign Up
              </a>
            </div>
          </div>
          <img class="img-container-2" src="assets/log-in-page-img.png" alt="" />
        </div>
      </div>
</body>
</html>