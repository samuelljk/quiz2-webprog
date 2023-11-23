<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/Register.css">
    <title>Register | ETS Web Programming</title>
</head>
<body>
    <div class="container-1">
        <div class="rectangle-1">
            <div class="left-container">
                <div class="register-container">
                    <h1 class="register-class">Register</h1>
                </div>
                <form class="details-container" action="\register" method="post">
                    @csrf
                    <div class="details-border">
                        <input
                        class="details-text"
                        type="text"
                        name="name"
                        id = "name"
                        placeholder="Full Name"
                        autofocus
                        />
                    </div>
                    <div class="details-border">
                        <input
                        class="details-text"
                        type="email"
                        name="email"
                        id="email"
                        placeholder="Email"
                        onChange={handleChangeEmail}
                        />
                    </div>
                    <div class="details-border">
                        <input
                        class="details-text"
                        type="password"
                        name="password"
                        id="password"
                        placeholder="Password"
                        onChange={handleChangePass}
                        />
                    </div>
                    <div class="button-container">
                        <button class="button-container-2" type="submit" >Register</button>
                    </div>
                </form>
                <div class="login-container">
                    <p>Already have an account?</p>
                    {{-- <Link class="login-button" to={"/login"}><p>Login</p></Link> --}}
                    <a class="login-button" href="/login">Login</a>
                </div>
            </div>
          <img class="img-container-2" src="assets/log-in-page-img.png" alt="" />
        </div>
    </div>
</body>
</html>