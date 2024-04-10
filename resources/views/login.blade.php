<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'AvellanedaGo.com') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <!-- Jquery -->
    <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>

    <!--Plugin CSS file with desired skin-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ion-rangeslider/2.3.1/css/ion.rangeSlider.min.css"/>
    
    <!--Plugin JavaScript file-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ion-rangeslider/2.3.1/js/ion.rangeSlider.min.js"></script>


    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>
<body>

    <main>
        
        <section class="login-form">

            <div class="login-bg">

                <div class="login-bg-text">
                    <div class="login-bg-logo">
                        <img src="{{ asset('images/app/avellanedago.com.png') }}" alt="">
                    </div>
                    <h3>Encontrá toda la moda en un solo lugar</h3>
                </div>

                <img src="{{ asset('images/app/login/login-bg.jpg') }}" alt="" class="login-bg-img">

            </div>

            <div  class="login-container">

                <div class="extra-container">

                    <div class="logo">
                        <img src="{{ asset('images/app/avellanedago.png') }}" alt="">
                    </div>
    
                    <div class="welcome">
                        <span class="tagname">
                            ¡Que gusto verte!
                        </span>
                        <h2>Iniciar Sesión</h2>
                    </div>
    
                    <div class="form-buttons login-alternatives">
    
                        <button class="btn-login-alternatives btn-primary">
                            @php
                                echo file_get_contents('images/app/login/facebook.svg');
                            @endphp
                            <span>
                                Ingresar con Facebook
                            </span>
                        </button>
    
                        <button class="btn-login-alternatives btn-primary">
                            @php
                                echo file_get_contents('images/app/login/google.svg');
                            @endphp
                            <span>
                                Ingresar con Google
                            </span>
                        </button>
    
                    </div>

                    <div class="or-divider">
                        <span>O</span>
                    </div>
    
                    <div class="login-form-container">
    
                        <form action="">
    
                            <div class="form-box">
    
                                <label for="email">email</label>
                                <input type="email" name="" id="email" placeholder="lucius.rios@gmail.com">
    
                            </div>
    
                            <div class="form-box">
    
                                <label for="password">contraseña</label>
                                <input type="password" name="" id="password" placeholder="******">
    
                            </div>
    
                            <div class="form-box">
    
                                <label for="pass-confirm">repetir contraseña</label>
                                <input type="password" name="" id="pass-confirm">
    
                            </div>
    
                        </form>
    
                        <div class="form-buttons submit-form">
     
                            <button class="btn-primary">
                                Iniciar Sesión
                            </button>
    
                            <button class="btn-primary">
                                ¿Olvidaste tu contraseña?
                            </button>
    
                        </div>
    
                    </div>
    
                    <div class="register">
    
                        <span class="register-text">
                            ¿No tenés cuenta?
                        </span>
                        <button class="btn-simple">
                            Regístrate
                        </button>
    
                    </div>

                </div>

            </div>

        </section>

    </main>

</body>
</html>
