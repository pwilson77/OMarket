<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login | Tranz</title>
    <link href="https://fonts.googleapis.com/css?family=Titillium+Web" rel="stylesheet" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
      integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous" />
  
    <link rel="stylesheet" type="text/css" media="screen" href="assets/css/framework.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="assets/css/main.css" />

</head>
<body>
    <div class="col-xl-12 flex center login-container">
            <div class="sign_in log_in col-xl-3 flex-wrap center">
                <h2 class="col-xl-11">Log In</h2>
                <div class="inputs col-xl-11">
                <form action="{{ route('login') }}" method="POST">
                    <p><input id="email" type="email" class="col-xl-12" name="email" value="{{ old('email') }}" required></p>
                    <p><input id="email" type="password" class="col-xl-12" name=password" required></p>
                    <div class="col-xl-12 flex center">
                    <input type="submit" name="" id="" value="Log In" class="btn btn-green2 col-xl-6">
                    </div>
                </form>
                </div>
                <div class="forgot">
                <a href="#">Forgot password ?</a>
                <a href="#" class="sign">Sign-Up</a>
                </div>
            </div>
            </div>
</body>
</html>