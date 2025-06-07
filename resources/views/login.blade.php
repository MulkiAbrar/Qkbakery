<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Qkbakery</title>
    <link href="{{asset ("img/favicon.ico") }}" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="{{asset ("https://fonts.googleapis.com") }}">
    <link rel="preconnect" href="{{asset ("https://fonts.gstatic.com") }}" crossorigin>
    <link href="{{asset ("https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&family=Playfair+Display:wght@600;700&display=swap") }}" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="{{asset ("https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css") }}" rel="stylesheet">
    <link href="{{asset ("https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css") }}" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{asset ("lib/animate/animate.min.css") }}" rel="stylesheet">
    <link href="{{asset ("lib/owlcarousel/assets/owl.carousel.min.css") }}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{asset ("css/bootstrap.min.css") }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{asset ("css/style.css") }}" rel="stylesheet">
</head>
<body>
    <style>
        body {
            background-color: var(--light);
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .login-container {
            max-width: 400px;
            margin: 6rem auto;
            position: relative;
            padding: 2rem;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 15px rgba(0,0,0,0.1);
        }

        .login-container h2 {
            margin-bottom: 1.5rem;
            color: var(--dark);
            text-align: center;
        }

        .form-group {
            margin-bottom: 1.2rem;
        }

        .form-group label {
            font-weight: 600;
            color: var(--secondary);
        }

        .form-group input {
            width: 100%;
            padding: 0.75rem;
            border: 1px solid #ccc;
            border-radius: 6px;
            outline: none;
            transition: 0.3s;
        }

        .form-group input:focus {
            border-color: var(--primary);
        }

        .btn-login {
            background-color: var(--primary);
            color: white;
            padding: 0.75rem;
            width: 100%;
            border: none;
            border-radius: 6px;
            font-weight: 600;
            cursor: pointer;
            transition: 0.3s;
        }

        .btn-login:hover {
            background-color: var(--dark);
        }

        .error-message {
            color: red;
            margin-top: 10px;
            text-align: center;
        }

    </style>

    <div class="login-container">
        <a href="{{ url('home') }}">
            <img src="{{ asset('img/reply.png') }}" alt="back" width="30" style="padding-left: 1px; padding-top: 1px;">
        </a>
        <h2>Admin</h2>
        <form method="POST" action="{{ route('admin.login.submit') }}">
            @csrf
            <div class="form-group">
                <label for="username">{{ __('messages.username') }}</label>
                <input type="text" name="username" id="username" required autofocus>
            </div>
            <div class="form-group">
                <label for="password">{{ __('messages.password') }}</label>
                <input type="password" name="password" id="password" required>
            </div>
            <button type="submit" class="btn btn-login">{{ __('messages.login') }}</button>

            @if ($errors->has('login'))
                <div class="error-message">{{ $errors->first('login') }}</div>
            @endif
        </form>
    </div>

</body>
</html>
