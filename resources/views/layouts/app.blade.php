<!DOCTYPE html>
<html lang="en">

<head>
    <title>Tempest Gudang</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="assets/hyperspace/assets/css/style.css" />
    <link rel="shortcut icon" href="assets/hyperspace/assets/css/images/icon_home.jpg" type="image/x-icon">
    <!-- CSS only -->

</head>

<body>
    <div class="container">
        <div class="forms-container">
            <div class="signin-signup">
                <form action="{{ route('login') }}" class="sign-in-form" method="POST">
                    @csrf


                    @if (Session::has('message'))
                        <div style="color: green" class="alert" role="alert">

                            <p style="text-align: center">
                                <i class="fa fa-check-circle-o"></i>
                            </p>

                            <strong>{{ Session::get('message') }} </strong>

                        </div>
                    @endif


                    <h2 class="title">Login</h2>
                    @error('email')
                        <div class="text-danger" style="color: red">{{ $message }}</div>
                    @enderror
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="email" placeholder="Email" name="email" />
                    </div>
                    @error('password')
                        <div class="text-danger" style="color: red">{{ $message }}</div>
                    @enderror
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" placeholder="Password" name="password" />
                    </div>
                    <input type="submit" value="Login" class="btn solid" />
                    <p class="social-text">Or Sign in with social platforms</p>
                    <div class="social-media">
                        <a href="#" class="social-icon">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-google"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                    </div>
                </form>
                <form action="/fungsiRegister" class="sign-up-form" method="post">
                    @csrf
                    <h2 class="title">Daftar</h2>
                    @error('name')
                        <div class="text-danger" style="color: red">{{ $message }}</div>
                    @enderror
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" placeholder="Username" name="name" />
                    </div>
                    @error('email')
                        <div class="text-danger" style="color: red">{{ $message }}</div>
                    @enderror
                    <div class="input-field">
                        <i class="fas fa-envelope"></i>
                        <input type="email" placeholder="Email" name="email" />
                    </div>
                    @error('password')
                        <div class="text-danger" style="color: red">{{ $message }}</div>
                    @enderror
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" placeholder="Password" name="password" />
                    </div>
                    <input type="submit" class="btn" value="Daftar" />
                    <p class="social-text">Or Sign up with social platforms</p>
                    <div class="social-media">
                        <a href="#" class="social-icon">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-google"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                    </div>
                </form>
            </div>
        </div>

        <div class="panels-container">
            <div class="panel left-panel">
                <div class="content">
                    <h3>Belum punya akun?</h3>
                    <p>
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Debitis,
                        ex ratione. Aliquid!
                    </p>
                    <button class="btn transparent" id="sign-up-btn">
                        Daftar
                    </button>
                </div>
                <img src="assets/hyperspace/assets/css/images/log.svg" class="image" alt="" />
            </div>
            <div class="panel right-panel">
                <div class="content">
                    <h3>Sudah punya akun?</h3>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum
                        laboriosam ad deleniti.
                    </p>
                    <button class="btn transparent" id="sign-in-btn">
                        Login
                    </button>
                </div>
                <img src="assets/hyperspace/assets/css/images/register.svg" class="image" alt="" />
            </div>
        </div>
    </div>

    <script src="assets/hyperspace/assets/js/script.js"></script>
    <!-- JavaScript Bundle with Popper -->
</body>

</html>
