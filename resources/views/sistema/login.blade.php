<div class="mb-5">
    <h3 class="text-center mt-3 animate-slide-left mb-4">¡Bienvenido al servidor Haters del Verguer S.A. de C.V.!</h3>
    <div class="transparent-background card card0 border-0">
        <div class="row d-flex">
            <div class="col-lg-6 animate-slide">
                <div class="card1">
                    <div class="row">
                        <img src="{{ asset('img/command_block-removebg-preview.png') }}" class="logo">
                    </div>
                </div>
            </div>
            <div class="col-lg-6 animate-slide-left">
                <div class="card2 card border-0 px-4 py-5 me-5">
                    <form action="{{ route('index') }}" method="POST">
                        @csrf
                        <div class="row px-3">
                            <label class="mb-1"><h6 class="mb-0 text-sm">Nombre de Usuario:</h6></label>
                            <input class="mb-4" type="text" name="nombre" placeholder="Escribe tu nombre de usuario">
                        </div>
                        <div class="row px-3">
                            <label class="mb-1"><h6 class="mb-0 text-sm">Contraseña</h6></label>
                            <input type="password" name="contrasena" placeholder="Escribe tu contraseña">
                        </div>
                        <div class="row px-3 mb-4 mt-2">
                            <a href="#" class="ml-auto mb-0 text-sm text-end">¿Olvidaste tu contraseña?</a>
                        </div>
                        <div class="row mb-3 px-3">
                            <button type="submit" class="btn btn-success text-center">Iniciar</button>
                        </div>
                    </form>
                    <div class="row mb-4 px-3">
                        <small class="font-weight-bold">Si no tienes una cuaenta, registrate  <a class="text-danger" href="/login">aqui</a></small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    /* Estilo inicial del elemento */
    .animate-slide {
        position: relative;
        animation: slideRight 1s ease-in-out forwards; /* Duración ajustada y función de temporización suave */
    }

    /* Definición de la animación */
    @keyframes slideRight {
        from {
            transform: translateX(-100%); /* Comienza fuera de la pantalla a la izquierda */
            opacity: 0; /* Opcional: comienza invisible */
        }
        to {
            transform: translateX(0); /* Termina en la posición original */
            opacity: 1; /* Opcional: termina visible */
        }
    }

    /* Estilo inicial del elemento */
    .animate-slide-left {
        position: relative;
        animation: slideLeft 2s ease-in-out forwards; /* Duración y suavidad ajustadas */
    }

    /* Definición de la animación */
    @keyframes slideLeft {
        from {
            transform: translateX(100%); /* Comienza fuera de la pantalla a la derecha */
            opacity: 0; /* Opcional: comienza invisible */
        }
        to {
            transform: translateX(0); /* Termina en la posición original */
            opacity: 1; /* Opcional: termina visible */
        }
    }

    .transparent-background {
        background-color: transparent; !important
    }
</style>