@extends('app')

@section('title', 'Iniciar Sesión | Heaven')

@section('contenido')
    <div class="flex items-center justify-center py-12 px-4 relative z-10 overflow-hidden min-h-screen bg-black">
        <div class="absolute inset-0 z-0 opacity-40"
            style="background-image: url('{{ asset('img/angel.png') }}');
                   background-repeat: repeat;
                   background-size: 180px 180px;
                   background-position: center;
                   filter: invert(1) brightness(2) contrast(1.5);">
        </div>

        <div
            class="w-full max-w-md space-y-8 border border-neutral-900 bg-black/70 backdrop-blur-lg p-8 rounded-xl shadow-2xl shadow-red-900/30 relative z-10">

            <div class="text-center">
                <h1 class="text-3xl font-bold uppercase tracking-wider text-white">Bienvenido</h1>
                <p class="mt-2 text-sm text-neutral-400">Ingresa a tu cuenta para continuar.</p>
            </div>

            <div class="space-y-4">
                <button
                    class="w-full bg-white text-black font-bold text-sm uppercase tracking-widest py-3 rounded 
                        transition-colors duration-300 hover:bg-black hover:text-red-600">
                    <i class="fa-brands fa-google text-lg"></i>
                    Continuar con Google
                </button>
            </div>

            <!-- Separador -->
            <div class="relative">
                <div class="absolute inset-0 flex items-center">
                    <span class="w-full border-t border-neutral-700"></span>
                </div>
                <div class="relative flex justify-center text-xs uppercase">
                    <span class="bg-black px-2 text-neutral-500">O continuar con</span>
                </div>
            </div>

            <!-- Formulario -->
            <form method="POST" action="{{ route('iniciarSesion.post') }}" class="space-y-6">
                @csrf

                <div class="relative mb-2">
                    <i class="fa-regular fa-envelope absolute left-3 top-1/2 -translate-y-1/2 text-red-500"></i>
                    <input id="correo_electronico" name="correo_electronico" type="email" placeholder="Email"
                        value="{{ old('correo_electronico') }}"
                        class="pl-10 h-12 w-full rounded-md bg-neutral-900/70 border border-neutral-700 text-white focus:border-red-500 focus:ring-red-500">

                    @error('correo_electronico')
                        <span
                            class="absolute -bottom-5 left-1 text-xs text-red-500 font-bold uppercase">{{ $message }}</span>
                    @enderror
                </div>

                <div class="relative mb-2">
                    <i class="fa-solid fa-lock absolute left-3 top-1/2 -translate-y-1/2 text-red-500"></i>
                    <input id="password" name="clave" type="password" placeholder="Contraseña"
                        class="pl-10 pr-10 h-12 w-full rounded-md bg-neutral-900/70 border border-neutral-700 text-white focus:border-red-500 focus:ring-red-500">

                    <button type="button" onclick="togglePassword()"
                        class="absolute right-3 top-1/2 -translate-y-1/2 text-red-600 hover:text-red-400">
                        <i id="iconoPassword" class="fa-solid fa-eye"></i>
                    </button>

                    @error('clave')
                        <span
                            class="absolute -bottom-5 left-1 text-xs text-red-500 font-bold uppercase">{{ $message }}</span>
                    @enderror
                </div>

                <div class="flex items-center justify-end">
                    <a href="" class="uppercase tracking-widest text-neutral-400 hover:text-red-600 text-xs">
                        ¿Olvidaste tu contraseña?
                    </a>
                </div>

                <div>
                    <button type="submit"
                        class="w-full bg-white text-black font-bold text-sm uppercase tracking-widest py-3 rounded 
                        transition-colors duration-300 hover:bg-black hover:text-red-600">
                        Iniciar Sesión
                    </button>
                </div>
            </form>

            <div class="text-center">
                <p class="text-sm text-neutral-400">
                    ¿No tienes una cuenta?
                    <a href="" class="uppercase tracking-widest font-bold text-white hover:text-red-500">
                        Registrarse
                    </a>
                </p>
            </div>
        </div>
    </div>

    <script>
        function togglePassword() {
            const input = document.getElementById("password");
            const icono = document.getElementById("iconoPassword");

            if (input.type === "password") {
                input.type = "text";
                icono.classList.remove("fa-eye");
                icono.classList.add("fa-eye-slash");
            } else {
                input.type = "password";
                icono.classList.remove("fa-eye-slash");
                icono.classList.add("fa-eye");
            }
        }
    </script>
@endsection
