<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DevCorp</title>
    <link rel="stylesheet" type="text/css" href="/css/landstyle.css" />
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <link href="/css/animate.css" rel="stylesheet" />
    <link href="/css/waypoints.css" rel="stylesheet" />
    <link href="/css/formpop.css" rel="stylesheet">
    <script src="/js/jquery.waypoints.min.js" type="text/javascript"></script>
    <script src="/js/waypoints.js" type="text/javascript"></script>

    <style>
        /* ------Google Btn------ */

.google-btn {
  width: 184px;
  height: 42px;
  background-color: #222222;
  border-radius: 10px;
  box-shadow: 0 3px 4px 0 rgba(0,0,0,.25);
}
  .google-icon-wrapper {
    position: absolute;
    margin-top: 1px;
    margin-left: 1px;
    width: 40px;
    height: 40px;
    border-radius: 10px 2px 2px 10px;
    background-color: #fff;
  }
  .google-icon {
    position: absolute;
    margin-top: 11px;
    margin-left: 11px;
    width: 18px;
    height: 18px;
  }
  .btn-text {
    float: right;
    margin: 11px 11px 0 0;
    color: #fff;
    font-size: 14px;
    letter-spacing: 0.2px;
    font-family: "Roboto";
  }
  .google-btn:hover {
    box-shadow: 0 0 6px ;
    background: #1669F2;
  }
}
    </style>
</head>

<body>
    {{-- --------------------------Focus Section------------------------ --}}
    <section class="intro">
        <div class="inner">
            <div class="content">
                <section class="os-animation" data-os-animation="bounceInUp" data-os-animation-delay="0s">
                    <h1>DevCorp</h1>
                    <p>The perfect hub for devs like you</p>
                </section>
                <section class="os-animation" data-os-animation="bounceInUp" data-os-animation-delay=".1s">
                    <a href="#sign" class="btn" id="show-login-two">SIGN UP</a>
                    <a href="#log" class="btn" id="show-login">LOG IN</a>
                </section>
            </div>
        </div>
    </section>
    {{-- -------------X------------Focus Section-----------X------------ --}}


    {{-- ---------------------Login Form----------------------- --}}
    <section>
        <div class="popup">
            <div class="close-btn">&times;</div>
            <div class="form">
                <form action="login" method="POST">
                    @csrf
                    <h2>Log in</h2>
                    <div class="form-element username">
                        <label for="usern">Username</label><br>
                        <span style="color:rgb(235, 52, 52)">
                            @if (Session::get('faillog'))
                                {{ Session::get('faillog') }}
                            @endif
                        </span>
                        <div style="color:rgb(235, 52, 52)">
                            @error('usernam')
                                {{ $message }}
                            @enderror
                        </div>
                        <input type="text" id="usern" name="usernam" placeholder="dev_newbie_john">
                        <div class="error error-txt">Wait! you need a username</div>
                    </div>
                    <div class="form-element password">
                        <label for="password">Password</label>
                        <div style="color:rgb(235, 52, 52)">
                            @error('pw')
                                {{ $message }}
                            @enderror
                        </div>
                        <input type="password" id="password" name="pw" placeholder="password">
                        <div class="error error-txt">Wait! you need a password</div>
                    </div>
                    <div class="form-element">
                        <button type="submit">SIGN IN</button>
                    </div>
                    <div class="form-element">
                        <button type="reset">RESET</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
    {{-- -----------X----------Login Form-----------X------------ --}}

    {{-- ----------------------Sign Up Form---------------------- --}}
    <section>
        <div class="popup-two">
            <div class="close-btn-two">&times;</div>
            <div class="form">
                <form action="signup" class="form_bd" method="POST">
                    @csrf
                    <h2>Sign up</h2>
                    <div class="form-element fullname">
                        <label for="nam">Full Name</label>
                        <div style="color:rgb(235, 52, 52)">
                            @error('name')
                                {{ $message }}
                            @enderror
                        </div>
                        <input type="text" id="nam" name="name" placeholder="John Doe">
                        <div class="error error-txt">Wait! your name can't be blank</div>
                    </div>
                    <div class="form-element username_two">
                        <label for="user">Username</label><br>
                        <span style="color:rgb(235, 52, 52)">
                            @if (Session::get('failuser'))
                                {{ Session::get('failuser') }}
                            @endif
                        </span>
                        <div style="color:rgb(235, 52, 52)">
                            @error('username')
                                {{ $message }}
                            @enderror
                        </div>
                        <input type="text" id="user" name="username" placeholder="dev_newbie_john">
                        <div class="error error-txt">Wait! your username can't be blank</div>
                    </div>
                    <div class="form-element email">
                        <label for="mail">Email</label><br>
                        <span style="color:rgb(235, 52, 52)">
                            @if (Session::get('failemail'))
                                {{ Session::get('failemail') }}
                            @endif
                        </span>
                        <div style="color:rgb(235, 52, 52)">
                            @error('email')
                                {{ $message }}
                            @enderror
                        </div>
                        <input type="email" id="mail" name="email" placeholder="johndoe@gmail.com">
                        <div class="error error-txt">Wait! your email can't be blank</div>
                    </div>
                    <div class="form-element password_two">
                        <label for="password">Password</label>
                        <div style="color:rgb(235, 52, 52)">
                            @error('password')
                                {{ $message }}
                            @enderror
                        </div>
                        <input type="password" id="password" name="password" placeholder="password">
                        <div class="error error-txt">Wait! your password can't be blank</div>
                    </div>
                    <div class="form-element">
                        <label for="">Upload Profile Image</label>
                        <input type="file" name="img">
                    </div>
                    <div class="form-element">
                        <button type="submit">REGISTER</button>
                    </div>
                    <div class="form-element">
                        <button type="reset">RESET</button>
                    </div>
                    {{-- ------Google Btn------- --}}
                    <div class="google-btn">
                      <a class="google-icon-wrapper" href="#">
                        <img class="google-icon" src="https://upload.wikimedia.org/wikipedia/commons/5/53/Google_%22G%22_Logo.svg"/>
                      </a>
                      <a href="#">
                          <p class="btn-text">Sign in with google</p>
                      </a>
                    </div>
                </form>
            </div>
        </div>
    </section>
    {{-- ---------X------------Sign Up Form----------X----------- --}}

    {{-- ----------Popup Js-------- --}}
    <script src="/js/formpop.js" type="text/javascript"></script>
    <script src="/js/formpop2.js" type="text/javascript"></script>

    {{-- ----------Forms Validation -------- --}}
    {{-- <script src="/js/validate.js"></script> --}}
    {{-- <script src="/js/validatetwo.js"></script> --}}

    {{-- --------Footer-------- --}}
    @include('footer')

</body>

</html>
