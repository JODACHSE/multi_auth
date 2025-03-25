<x-guest-layout>
    <style>
        .gradient-custom-1 {
            background: linear-gradient(to right, #004080, #0073e6, #3399ff, #66b3ff);
        }

        .gradient-custom-2 {
            background: linear-gradient(to right, #66b3ff, #3399ff, #0073e6, #004080);
        }

        .gradient-form {
            height: 100vh !important;
        }

        .card {
            border: none;
        }

        .btn-primary {
            background-color: #004080;
            border-color: #004080;
        }

        .btn-outline-danger {
            color: #004080;
            border-color: #004080;
        }

        .btn-outline-danger:hover {
            background-color: #004080;
            color: #fff;
        }
    </style>

    <section class="h-100 gradient-form" style="background-color: #eee;">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-xl-10">
                    <div class="card rounded-3 text-black shadow">
                        <div class="row g-0">
                            <div class="col-lg-6">
                                <div class="card-body p-md-5 mx-md-4">

                                    <div class="text-center">
                                        <x-authentication-card-logo />
                                        <h4 class="mt-3 mb-5 pb-1">Bienvenido al Sistema de gestión de vehículos</h4>
                                    </div>

                                    <!-- Mensaje de estado -->
                                    @if (session('status'))
                                    <div class="alert alert-success mb-4">
                                        {{ session('status') }}
                                    </div>
                                    @endif

                                    <!-- Errores de validación -->
                                    <x-validation-errors class="mb-4" />

                                    <form method="POST" action="{{ route('login') }}">
                                        @csrf

                                        <p class="mb-4">Inicia sesión en tu cuenta</p>

                                        <div class="form-outline mb-4">
                                            <input type="email" id="email" name="email" class="form-control"
                                                placeholder="Correo electrónico" value="{{ old('email') }}" required autofocus />
                                        </div>

                                        <div class="form-outline mb-4">
                                            <input type="password" id="password" name="password" class="form-control"
                                                placeholder="Contraseña" required />
                                            @if (Route::has('password.request'))
                                            <div class="d-flex justify-content-end">
                                                <a class="text-muted" href="{{ route('password.request') }}">¿Olvidaste tu contraseña?</a>
                                            </div>
                                            @endif
                                        </div>

                                        <div class="form-check d-flex justify-content-start mb-4">
                                            <input class="form-check-input me-2" type="checkbox" name="remember" id="remember">
                                            <label class="form-check-label" for="remember"> Recordarme </label>
                                        </div>

                                        <div class="text-center pt-1 mb-5 pb-1">
                                            <button class="btn btn-primary btn-block fa-lg mb-3" type="submit">
                                                Iniciar sesión
                                            </button>
                                        </div>

                                        <div class="d-flex align-items-center justify-content-center pb-4">
                                            <p class="mb-0 me-2">¿No tienes cuenta?</p>
                                            <a href="{{ route('register') }}" class="btn btn-outline-primary">Crea una</a>
                                        </div>

                                    </form>

                                </div>
                            </div>
                            <div class="col-lg-6 d-flex align-items-center gradient-custom-2 text-white">
                                <div class="px-3 py-4 p-md-5 mx-md-4">
                                    <h4 class="mb-4">Somos más que una empresa</h4>
                                    <p class="small mb-0">En la Empresa de Servicios Públicos de Cajicá, trabajamos día a día para brindar servicios de calidad que mejoren la vida de nuestra comunidad.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</x-guest-layout>