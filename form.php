<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/fontawesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Pacifico">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/css/materialize.min.css">
    <link rel="stylesheet" href="./style.css" type="text/css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/js/materialize.min.js"></script>
    <title>Form Page</title>
</head>
<body class="login-body log_in_page ">
<div class="row">
    <div class="input-cart col s12 m10 push-m1 z-depth-2 grey lighten-5">
        <div class="col s12 m5 login">
            <h4 class="center">Log in</h4>
            <br>
            <form action="login.php" method="post" autocomplete="off">
                <div class="row">
                    <div class="input-field">
                        <input type="text" id="user" name="username" class="validate" required="required" placeholder="Username">
                        <label for="user">
                            <i class="material-icons">person</i>                </label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field">
                        <input type="password" id="pass" name="password" class="validate" required="required" placeholder="Password">
                        <label for="pass">
                            <i class="material-icons">lock</i>
                        </label>
                    </div>
                </div>
                <div class="row">
                    <div class="switch col s6">
                        <label>
                            <input type="checkbox">
                            <span class="lever"></span>
                            Remember Me
                        </label>
                    </div>
                    <div class="col s6">
                        <button type="submit" name="login " class="btn waves-effect waves-light blue right">Log in</button>
                    </div>
                </div>
            </form>
        </div>
        <!-- Signup form -->
        <div class="col s12 m7 signup">
            <div class="signupForm">
                <div class="clear_signup" style="position: relative; ">
                    <i class="material-icons " id="cancel_signup" style="position: absolute; right: 0px; cursor: pointer;">cancel</i>
                </div>
                <h4 class="center">Sign up</h4>
                <br>
                <form action="register.php" name="signup" method="post" autocomplete="off">
                    <div class="row">
                        <div class="input-field col s12 m6">
                            <input type="text" id="name-picked" name="namepicked" class="validate" required="required" placeholder="Enter a username">
                            <label for="name-picked">
                                <i class="material-icons">person_add</i>
                            </label>
                        </div>
                        <div class="input-field col s12 m6">
                            <input type="password" id="pass-picked" name="passpicked" class="validate" required="required" placeholder="Password">
                            <label for="pass-picked">
                                <i class="material-icons">lock</i>                    </label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field email">
                            <div class="col s12">
                                <input type="email" id="email" name="email" class="validate" required="required" placeholder="Enter your email">
                                <label for="email">
                                    <i class="material-icons">mail</i>
                                </label>
                            </div>
                        </div>
                    </div>
                <div class="row">
                    <button type="submit" name="submit" class="btn blue right waves-effect waves-light">Sign Up</button>
                </div>
                </form>
            </div>
            <div class="signup-toggle center" >
                <h4 class="center">Have No Account ? <a href="#!">Sign Up</a></h4>
            </div>
        </div>
        <div class="col s12">
            <br>
            <div class="legal center">
            </div>
            <div class="legal center">
                <div class="col s12 m7 right">
                    <p class="grey-text policy center">By signing up, you agree on our <a href="#!">Privacy Policy</a> and  <a href="#!">Terms of Use</a> including <a href="#!">Cookie Use</a>.</p>
                </div>
                <div class="col s12 m5">
                    <p class="center grey-text" style="font-size: 14px;">Coding : <a  class="main-title red-text" target="_blank">Hamza Javed</a></p>
                </div>
            </div>

        </div>
    </div>
</div>
<div class="fixed-action-btn toolbar">
    <a class="btn-floating btn-large amber black-text">
        Login
    </a>
    <ul>
        <li><a class="indigo center" href="#!">Login with FB</a></li>
        <li><a class="blue center" href="#!">Login with Twitter</a></li>
        <li><a class="red center" href="#!">Login with Google +</a></li>
    </ul>
</div>
<script>
    $(document).ready(function($){
        $(".dropdown-button").dropdown();
        $('.modal').modal();
        $(".signup-toggle").click(function(){
            $(this).hide();
            $(".signupForm").show(300);
            $(".policy").css("visibility","visible");
        });
        $("#cancel_signup").click(function (){
            $(".signupForm").hide();
            $(".signup-toggle").fadeIn();
            $(".policy").css("visibility","hidden");
        });
    });
</script>

</body>
</html>