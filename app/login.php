
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="../public/css/login-stype.css">
</head>
<body>
<!--
    you can substitue the span of reauth email for a input with the email and
    include the remember me checkbox
    -->
    <div class="container">
        <div class="card card-container">
            <!-- <img class="profile-img-card" src="//lh3.googleusercontent.com/-6V8xOA6M7BA/AAAAAAAAAAI/AAAAAAAAAAA/rzlHcD0KYwo/photo.jpg?sz=120" alt="" /> -->
            <img id="profile-img" class="profile-img-card" src="//ssl.gstatic.com/accounts/ui/avatar_2x.png" />
            <p id="profile-name" class="profile-name-card"></p>
            <form class="form-signin" method="post" action="login-action.php">
                <span id="reauth-email" class="reauth-email"></span>
                <input name="email" type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
                <input name="password" type="password" id="inputPassword" class="form-control" placeholder="Password" required>
                <div id="remember" class="checkbox">
                    <label>
                        <input type="checkbox" value="remember-me"> Remember me
                    </label>
                </div>
                <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit">Sign in</button>
                </form><!-- /form -->
                <a href="index.php"><button class="btn btn-lg btn-primary btn-block">Trở về</button></a>
            <a href="#" class="forgot-password">
                Forgot the password?
            </a>
        </div><!-- /card-container -->
    </div><!-- /container -->
</body>
</html>



<!-- <!DOCTYPE html>
<html>
<link rel="stylesheet" type="text/css" href="../public/css/login_stype.css">
<body>

 <div id="fullscreen_bg" class="fullscreen_bg"/>

<div class="container">

    <form method="post" action="login-action.php">
        <h1 class="form-signin-heading text-muted">Sign In</h1>
        <input type="text" name="email" class="form-control" placeholder="Email address" required="" autofocus="">
        <input type="password" name="password" class="form-control" placeholder="Password" required="">
        <button class="btn btn-lg btn-primary btn-block" type="submit">
            Sign In
        </button>
    </form>

</div>
</body>
</html> -->