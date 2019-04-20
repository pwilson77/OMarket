<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up | Tranz</title>
    <link href="https://fonts.googleapis.com/css?family=Titillium+Web" rel="stylesheet" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
      integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous" />
  
    <link rel="stylesheet" type="text/css" media="screen" href="assets/css/framework.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="assets/css/main.css" />
  
</head>
<body>
    <div class="col-xl-12 flex center login-container">
            <div class="sign_up log_in  col-xl-3 flex-wrap center">
                <h2 class="col-xl-11">Sign Up</h2>
                <div class="inputs col-xl-11">
                <form action="{{ route('signup') }}" method="POST">
                    <p><input id="email" type="text" class="col-xl-12" name="name" value="{{ old('name') }}" required></p>
                    <p><input id="email" type="email" class="col-xl-12" name="email" value="{{ old('email') }}" required autocomplete="email"></p>
                    <p><input id="email" type="password" class="col-xl-12" name="password" required autocomplete="password"></p>
                    <div class="col-xl-12 flex center">
                    <input type="submit" name="" id="" value="Sign Up" class="btn btn-green2 col-xl-6">
                    </div>
                </form>
                </div>
                <div class="forgot">
                <a href="#">Already a member?</a>
                </div>
            </div>
            </div>
</body>
</html>

