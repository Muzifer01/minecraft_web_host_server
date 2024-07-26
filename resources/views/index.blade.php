<button class="btn btn-success p-5 m-5" id="btn_iniciar_servidor_real">
    <i class="bi bi-joystick pe-1"></i>
    Iniciar servidor
</button>

<form action="{{ route('iniciar_servidor') }}" method="POST" hidden>
    @csrf
    <input type="hidden" name="action" value="button_pressed">
    <button type="submit" name="iniciar_servidor" value="pressed" id="btn_iniciar_servidor_fake">
        <i class="bi bi-joystick pe-1"></i>
        Iniciar servidor
    </button>
</form>
<script>
    // Función para simular un clic en otro botón
    function simulateClick() {
        // Obtener el botón objetivo por su ID
        var targetButton = document.getElementById('btn_iniciar_servidor_fake');
        if (targetButton) {
            targetButton.click(); // Disparar el clic en el botón objetivo
        }
    }

    // Asignar la función al botón de origen cuando el DOM esté listo
    document.addEventListener('DOMContentLoaded', function() {
        var sourceButton = document.getElementById('btn_iniciar_servidor_real');
        if (sourceButton) {
            sourceButton.addEventListener('click', simulateClick);
        }
    });
</script>
