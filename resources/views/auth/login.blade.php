@extends('layouts.app')

@section('content')
    <!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="theme-color" content="#515151">
    <title>Inloggen · SpectrumCRM</title>

    <!-- Bootstrap  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha256-YLGeXaapI0/5IgZopewRJcFXomhRMlYYjugPLSyNjTY=" crossorigin="anonymous"/>
    <!-- Google fonts  -->
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <!-- Font Awesome  -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">

    <style>

        html,
        body {
            height: 100%;
        }

        body {
            display: -ms-flexbox;
            display: flex;
            -ms-flex-align: center;
            align-items: center;
            padding-top: 40px;
            padding-bottom: 40px;
            background: gray url('data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAWCAYAAADafVyIAAABhGlDQ1BJQ0MgcHJvZmlsZQAAKJF9kT1Iw0AcxV9TpaIVBwt+DhmqkwVREUetQhEqhFqhVQeT6yc0aUhSXBwF14KDH4tVBxdnXR1cBUHwA8TJ0UnRRUr8X1JoEePBcT/e3XvcvQOEWompZts4oGqWkYhFxVR6VQy8IoABdKEPQzIz9TlJisNzfN3Dx9e7CM/yPvfn6M5kTQb4ROJZphsW8Qbx9Kalc94nDrGCnCE+Jx4z6ILEj1xXXH7jnHdY4JkhI5mYJw4Ri/kWVlqYFQyVeIo4nFE1yhdSLmc4b3FWSxXWuCd/YTCrrSxzneYwYljEEiSIUFBBESVYiNCqkWIiQftRD/+g45fIpZCrCEaOBZShQnb84H/wu1szNznhJgWjQPuLbX+MAIFdoF617e9j266fAP5n4Epr+ss1YOaT9GpTCx8BPdvAxXVTU/aAyx2g/0mXDdmR/DSFXA54P6NvSgO9t0DnmttbYx+nD0CSuorfAAeHwGiestc93t3R2tu/Zxr9/QBSsHKaqMZPwwAAAAZiS0dEAP8A/wD/oL2nkwAAAAlwSFlzAAALEwAACxMBAJqcGAAAAAd0SU1FB+QHGQ02IGSaFd8AAACNSURBVEjH7dQhDgIxEIXhn8lIyIotCk6whmtxFhSHhDV0RRc8qLpJyiSDIX1mzFf1mrc5X67vsmSGMbE/HGnlcb/h8VKWDEC9rXi9DGMCoN5WvF5P00TabcnPF3NZmw+8XueyfgVrvF4jC7W8RBZqeYks1PIaWajlNbJQyws/jkb8lD4VfSr6VPz7VHwA/uO+/7EsPJgAAAAASUVORK5CYII=') repeat 0 0;
            color: whitesmoke;
        }

        form#login {
            width: 100%;
            max-width: 330px;
            padding: 15px;
            margin: auto;
        }

        form#login .form-control {
            position: relative;
            box-sizing: border-box;
            height: auto;
            padding: 10px;
            font-size: 16px;
        }

        form#login .form-control:focus {
            z-index: 2;
        }

        form#login input[type="email"] {
            margin-bottom: -1px;
            border-bottom-right-radius: 0;
            border-bottom-left-radius: 0;
        }

        form#login input[type="password"] {
            margin-bottom: 10px;
            border-top-left-radius: 0;
            border-top-right-radius: 0;
        }

    </style>
    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="css/spectrum-crm_styles.css"/>
</head>
<body class="text-center">
<form id="login" action="{{ route('login') }}" method="post" name="Login_Form" autocomplete="off">
    @csrf
    <img class="mb-4" src="./img/logo_light_lg.png" width="300"
         alt="SpectrumGoals Leerdoelen Monitor">

    @error('username')
    <span class="invalid-feedback" style="display:block !important;" role="alert">
        <strong>{{ $message }}</strong>
    </span>
    @enderror
    @error('password')
    <span class="invalid-feedback" style="display:block !important;" role="alert">
        <strong>{{ $message }}</strong>
    </span>
    @enderror
    <label for="username" class="sr-only">{{ __('Gebruikersnaam') }}</label>
    <input id="username" type="text" name="username" class="form-control shadow @error('username') is-invalid @enderror"
           placeholder="{{ __('Gebruikersnaam') }}" 
           autocomplete="new-username" 
           value="{{ old('username') }}" 
           required autofocus>
    <label for="password" class="sr-only">{{ __('Wachtwoord') }}</label>
    <input id="password" type="password" name="password"
           class="form-control shadow @error('password') is-invalid @enderror" placeholder="{{ __('Wachtwoord') }}"
           autocomplete="new-password" 
           required>

    <div class="custom-control custom-checkbox  mb-3">
        <input type="checkbox" class="custom-control-input" id="remember">
        <label class="custom-control-label" for="remember">Onthoud mijn gegevens</label>
    </div>

    <button id="login-button" class="btn btn-lg btn-primary btn-yellow btn-block" type="submit">Inloggen</button>
    @if (Route::has('password.request'))
        <a class="btn btn-link" href="{{ route('password.request') }}">
            {{ __('Forgot Your Password?') }}
        </a>
    @endif
</form>
<!-- jquery -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.min.js"
        integrity="sha384-ZvpUoO/+PpLXR1lu4jmpXWu80pZlYUAfxl5NsBMWOEPSjUn/6Z/hRTt8+pR6L4N2"
        crossorigin="anonymous"></script>
<!-- bootstrap -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
<!-- popper -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.15.0/umd/popper.min.js"
        integrity="sha384-L2pyEeut/H3mtgCBaUNw7KWzp5n9+4pDQiExs933/5QfaTh8YStYFFkOzSoXjlTb"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js"
        integrity="sha256-1A78rJEdiWTzco6qdn3igTBv9VupN3Q1ozZNTR4WE/Y=" crossorigin="anonymous"></script>
<script>
    $(document).ready(function () {
        window.location.hash = '';
        const remember = $.cookie('spectrum-goals-remember');
        if (remember && remember !== 'null') {
            const username = $.cookie('spectrum-goals-username'),
                  password = $.cookie('spectrum-goals-password');
            // autofill the fields
            username === 'null' ? username = undefined : username = username;
            password === 'null' ? password = undefined : password = password;
            if (username) $('#username').val(username);
            if (password) $('#password').val(password);
            $('#remember').prop('checked', true);
            //$("#login").submit();
        }

        $("#login").submit(function () {
            if ($('#remember').is(':checked')) {
                const username = $('#username').val();
                const password = $('#password').val();

                // set cookies to expire in 14 days
                $.cookie('spectrum-goals-username', username, {expires: 14});
                $.cookie('spectrum-goals-password', password, {expires: 14});
                $.cookie('spectrum-goals-remember', true, {expires: 14});
            } else {
                // reset cookies
                $.cookie('spectrum-goals-username', null);
                $.cookie('spectrum-goals-password', null);
                $.cookie('spectrum-goals-remember', null);
            }
        });
    });
</script>
</body>
</html>

@endsection
