<div x-data="{ loading: true }" x-init="setTimeout(() => loading = false, 1000)" x-show="loading"
    class="fixed inset-0 flex items-center justify-center z-[9999] bg-black overflow-hidden"
    x-transition:leave="transition ease-in-out duration-700" x-transition:leave-start="opacity-100 scale-100"
    x-transition:leave-end="opacity-0 scale-105">

    <!-- Fondo repetitivo con ángeles rojos -->
    <div class="absolute inset-0 z-0 opacity-40"
        style="background-image: url('{{ asset('img/angel.png') }}');
               background-repeat: repeat;
               background-size: 180px 180px;
               background-position: center;
               filter: brightness(0) saturate(100%) invert(21%) sepia(100%) saturate(7482%) hue-rotate(357deg) brightness(93%) contrast(119%);">
    </div>

    <!-- Logo rojo centrado con efecto 3D giratorio -->
    <img src="{{ asset('img/heavenLogo.png') }}" alt="Logo HeavenCL" class="h-auto w-32 md:w-40 animate-spin3d"
        style="filter: brightness(0) saturate(100%) invert(21%) sepia(100%) saturate(7482%) hue-rotate(357deg) brightness(93%) contrast(119%);">
</div>

<!-- Estilos para animación 3D -->
<style>
    @keyframes spin3d {
        0% {
            transform: rotateY(0deg) rotateX(0deg);
        }

        50% {
            transform: rotateY(180deg) rotateX(10deg);
        }

        100% {
            transform: rotateY(360deg) rotateX(0deg);
        }
    }

    .animate-spin3d {
        animation: spin3d 3s linear infinite;
        transform-style: preserve-3d;
    }
</style>
