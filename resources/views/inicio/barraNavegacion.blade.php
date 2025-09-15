<!-- NAVBAR -->
<header id="navbar" class="fixed top-0 left-0 w-full z-50 transition-colors duration-300 bg-black"
    x-data="{ open: false }">
    <!-- Barra superior -->
    <div class="text-center py-2 px-4 text-xs tracking-[0.2em] text-white bg-black font-urbanist">
        ENVÍO GRATIS SOBRE $200
    </div>

    <!-- Contenedor -->
    <div class="relative px-6 py-4">
        <div class="flex items-center justify-between lg:hidden">
            <!-- Logo móvil -->
            <a href="/">
                <img src="{{ asset('img/heavenLogo.png') }}" alt="Logo HeavenCL" class="h-auto w-[60px] logo-rojo">
            </a>

            <!-- Botón hamburguesa -->
            <button @click="open = !open" class="text-red-600 focus:outline-none">
                <i :class="open ? 'fa-solid fa-xmark' : 'fa-solid fa-bars'" class="text-2xl"></i>
            </button>
        </div>

        <!-- Menú móvil -->
        <nav x-show="open" x-transition
            class="lg:hidden mt-4 flex flex-col gap-4 text-red-600 font-anton font-bold uppercase tracking-[0.2em] text-sm">

            <a href="/" class="hover:text-red-500">Tienda</a>

            <!-- Categorías -->
            <div x-data="{ sub: false }">
                <button @click="sub = !sub"
                    class="flex justify-between items-center hover:text-red-500 w-full font-anton">
                    Categorías <span x-text="sub ? '-' : '+'"></span>
                </button>
                <div x-show="sub" x-transition class="ml-4 mt-2 flex flex-col gap-2 text-white text-xs font-anton">
                    @foreach ($categorias as $index => $categoria)
                        <a href="{{ route('categorias', $categoria->id) }}"
                            class="text-3xl font-anton uppercase hover:text-red-700">
                            {{ $categoria->nombre }}
                        </a>
                    @endforeach
                </div>
            </div>

            <!-- Drop -->
            <div x-data="{ sub: false }">
                <button @click="sub = !sub"
                    class="flex justify-between items-center hover:text-red-500 w-full font-anton">
                    Drop <span x-text="sub ? '-' : '+'"></span>
                </button>
                <div x-show="sub" x-transition class="ml-4 mt-2 flex flex-col gap-2 text-white text-xs font-anton">
                    @foreach ($drops as $index => $drop)
                        <a href="{{ route('drops', $drop->id) }}"
                            class="text-3xl font-anton uppercase hover:text-red-700">
                            {{ $drop->nombre }}
                        </a>
                    @endforeach
                </div>
            </div>

            <!-- Enlaces finales -->
            <a href="{{ route('iniciarSesion') }}" class="hover:text-red-500 flex items-center gap-2 font-anton">
                <i class="fa-solid fa-user"></i> Cuenta
            </a>
            <a href="/carrito" class="hover:text-red-500 flex items-center gap-2 font-anton">
                <i class="fa-solid fa-bag-shopping"></i> Carrito
            </a>
        </nav>

        <!-- Menú Desktop -->
        <nav class="hidden lg:flex h-20 items-center justify-between">
            <!-- Menú izquierdo -->
            <div class="flex flex-1 items-center gap-8">
                <a href="/" class="text-xs tracking-[0.2em] font-bold uppercase text-red-600 hover:text-red-500">
                    Tienda
                </a>

                <!-- Categorías -->
                <div x-data="{ open: false, timeout: null }" class="relative" @mouseenter="clearTimeout(timeout); open = true"
                    @mouseleave="timeout = setTimeout(() => open = false, 200)">
                    <button
                        class="flex items-center text-xs tracking-[0.2em] font-bold uppercase text-red-600 hover:text-red-500">
                        Categorías
                        <span x-text="open ? '-' : '+'" class="ml-1"></span>
                    </button>
                    <div x-show="open" x-transition class="fixed left-0 right-0 top-[150px] bg-black text-white z-40">
                        <div class="flex justify-center gap-32 py-16">
                            @foreach ($categorias as $index => $categoria)
                                <a href="{{ route('categorias', $categoria->id) }}"
                                    class="text-3xl font-anton uppercase hover:text-red-700">
                                    {{ $categoria->nombre }}
                                </a>
                            @endforeach
                        </div>
                    </div>
                </div>

                <!-- Drop -->
                <div x-data="{ open: false, timeout: null }" class="relative" @mouseenter="clearTimeout(timeout); open = true"
                    @mouseleave="timeout = setTimeout(() => open = false, 200)">
                    <button
                        class="flex items-center text-xs tracking-[0.2em] font-bold uppercase text-red-600 hover:text-red-500">
                        Drop
                        <span x-text="open ? '-' : '+'" class="ml-1"></span>
                    </button>
                    <div x-show="open" x-transition class="fixed left-0 right-0 top-[150px] bg-black text-white z-40">
                        <div class="flex justify-center gap-32 py-16">
                            @foreach ($drops as $index => $drop)
                                <a href="{{ route('drops', $drop->id) }}"
                                    class="text-3xl font-anton uppercase hover:text-red-700">
                                    {{ $drop->nombre }}
                                </a>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>

            <!-- Logo centrado -->
            <div class="absolute left-1/2 -translate-x-1/2">
                <a href="/">
                    <img src="{{ asset('img/heavenLogo.png') }}" alt="Logo HeavenCL" class="h-auto w-[75px] logo-rojo">
                </a>
            </div>

            <!-- Menú derecho -->
            <div class="flex flex-1 justify-end items-center gap-6">
                <a href="{{ route('iniciarSesion') }}" class="text-red-600 hover:text-red-500">
                    <i class="fa-solid fa-user text-lg"></i>
                </a>
                <button class="relative text-red-600 hover:text-red-500">
                    <i class="fa-solid fa-bag-shopping text-lg"></i>
                </button>
            </div>
        </nav>
    </div>
</header>
