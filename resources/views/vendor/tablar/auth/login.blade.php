@extends('tablar::auth.layout')
@section('title', 'Login')
@section('content')
    <div class="container container-tight py-4">
        <div class="text-center mb-1 mt-5">
            <a href="" class="navbar-brand navbar-brand-autodark">
                <img src="{{asset(config('tablar.auth_logo.img.path','assets/logo.svg'))}}" height="36"
                     alt=""></a>
        </div>


        
        <style>
        .card-md {
            background: linear-gradient(45deg, #007bff, #00c49d);
            background-size: 200% 200%;
            animation: gradientAnimation 3s ease infinite;
        }

        @keyframes gradientAnimation {
            0% {
                background-position: 0% 50%;
            }
            50% {
                background-position: 100% 50%;
            }
            100% {
                background-position: 0% 50%;
            }
        }
    </style>
        <div class="card card-md">
            <div class="card-body">
            <style>
  .h2 {
    text-align: center;
    margin-bottom: 4px;
    font-weight: bold; /* Hace que las letras sean más gruesas */
    font-size: 28px; /* Aumenta el tamaño del texto */
    background-image: linear-gradient(45deg, #ffcc00, #ff6600); /* Aplica un fondo de gradiente animado */
    background-clip: text;
    -webkit-background-clip: text;
    color: transparent;
    animation: blink 1s infinite, gradientAnimation 2s infinite; /* Aplica ambas animaciones infinitamente */
  }

  @keyframes blink {
    0% {
      opacity: 1; /* Visible al inicio de la animación */
    }
    50% {
      opacity: 0; /* Invisible a la mitad de la animación */
    }
    100% {
      opacity: 1; /* Visible al final de la animación */
    }
  }

  @keyframes gradientAnimation {
    0% {
      background-position: 0% 50%;
    }
    100% {
      background-position: 100% 50%;
    }
  }
</style>
                <h2 class="h2 text-center mb-4">Tienda “Buena Salud”</h2>
               
               
                <form action="{{route('login')}}" method="post" autocomplete="off" novalidate>
                    @csrf
                    <div class="mb-3">
                    <style>
  /* Estilos para la etiqueta */
  .form-label {
    font-size: 18px;
    color: #333; /* Color de texto */
    font-weight: bold;
  }
</style>

<label class="form-label">Email </label>

                        <input type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                               placeholder="your@email.com"
                               autocomplete="off">
                        @error('email')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-2">
                        <label class="form-label">
                            Password
                            <span class="form-label-description">
                    <a href="{{route('password.request')}}"></a>
                  </span>
                        </label>
                        <div class="input-group input-group-flat">
                            <input type="password" name="password"
                                   class="form-control @error('password') is-invalid @enderror"
                                   placeholder="Your password"
                                   autocomplete="off">
                            <span class="input-group-text">
                    <a href="#" class="link-secondary" title="Show password" data-bs-toggle="tooltip"><!-- Download SVG icon from http://tabler-icons.io/i/eye -->
                      <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24"
                           stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                           stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><circle cx="12"
                                                                                                              cy="12"
                                                                                                              r="2"/><path
                              d="M22 12c-2.667 4.667 -6 7 -10 7s-7.333 -2.333 -10 -7c2.667 -4.667 6 -7 10 -7s7.333 2.333 10 7"/></svg>
                    </a>
                  </span>
                            @error('password')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-2">
                      
                    </div>
                    <style>
  .form-footer {
    text-align: center;
  }

  .btn {
    position: relative;
    overflow: hidden;
    border: 2px solid transparent;
    border-image: linear-gradient(to right, red, blue) 1;
    border-image-slice: 1;
    padding: 10px 20px;
    font-size: 18px;
    background: linear-gradient(to right, red, blue); /* Fondo de gradiente animado */
    background-size: 200% 100%;
    background-position: 100% 0;
    transition: background-position 1s;
  }

  .btn:hover {
    background-position: 0 0;
  }

  @keyframes moveBorder {
    0% {
      width: 0;
    }
    100% {
      width: 100%;
    }
  }
</style>



  
</head>
<body>
    <div class="form-footer">
        <button type="submit" class="btn btn-primary w-100">Sign in</button>
    </div>

            </form>
            </div>
            <div class="hr-text"></div>
            <div class="card-body">
                <div class="row">
                    
                            
                        </a></div>
                   
                         
                        </a></div>
                </div>
            </div>
        </div>
        <div class="text-center text-muted mt-3">
            Aun no tienes una cuenta? <a href="{{route('register')}}" tabindex="-1">Registrarse</a>
        </div>
    </div>
@endsection
