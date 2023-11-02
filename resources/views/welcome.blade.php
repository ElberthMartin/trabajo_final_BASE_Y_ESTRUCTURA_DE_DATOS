<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Inicio</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }

        .container {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background-color: #f7fafc;
        }

        .header {
            text-align: center;
            font-size: 24px;
            color: #333;
            margin-bottom: 20px;
        }

        .links {
            display: flex;
            justify-content: center;
        }

        .links a {
            text-decoration: none;
            padding: 10px 20px;
            margin: 0 10px;
            border: 1px solid #333;
            border-radius: 5px;
            color: #333;
        }

        .links a:hover {
            background-color: #333;
            color: #fff;
        }
    </style>
</head>
<body class="antialiased">
    <div class="container">
        <div class="header">
            <h1>Bienvenido a mi sitio</h1>
        </div>
        <div class="links">
            @if (Route::has('login'))
                @auth
                    <a href="{{ url('/home') }}">Home</a>
                @else
                    <a href="{{ route('login') }}">Iniciar Sesión</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}">Registro</a>
                    @endif
                @endif
            @endif
        </div>
    </div>
</body>
</html>
