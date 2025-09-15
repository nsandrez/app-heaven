@extends('app')

@section('title', 'Heaven Tienda Oficial')

@section('contenido')

    {{-- BANNER --}}
    <section class="relative h-screen w-full">
        <video class="w-full h-full object-cover object-center absolute inset-0" autoplay loop muted playsinline>
            <source src="{{ asset('video/banner2.mp4') }}" type="video/mp4">
            Tu navegador no soporta videos HTML5.
        </video>

        <div class="absolute inset-0 bg-black/40"></div>

        <div class="relative z-10 flex h-full flex-col justify-end p-8 md:p-12 text-white">
            <div class="flex items-end justify-between">
                <div>
                    <div class="flex items-center gap-4">
                        <div class="h-px w-10 bg-white"></div>
                        <div class="h-px w-16 bg-white"></div>
                    </div>
                    <h1 class="mt-4 text-4xl md:text-6xl font-anton uppercase tracking-[0.05em]">
                        ONLY ABOUT THE HEAVEN
                    </h1>
                    <p class="mt-2 text-sm md:text-base font-mono">"Since 2002"</p>
                </div>
            </div>
        </div>
    </section>

    {{-- GRILLA DE PRODUCTOS --}}
    @include('inicio.grillaProductos')

    {{-- COMUNIDAD HEAVEN --}}
    @include('inicio.comunidad')

    {{-- TIPO DE ROPA --}}
    <section id="colecciones" class="bg-black py-16 md:py-24">
        <div class="container mx-auto px-4 mb-12 text-center">
            <!-- Título -->
            <h2 class="text-3xl md:text-4xl font-anton uppercase text-white tracking-[0.05em]">
                Explora las Colecciones
            </h2>
            <!-- Subtítulo -->
            <p class="text-white mt-4 max-w-2xl mx-auto text-sm md:text-base font-mono">
                Descubre prendas seleccionadas para destacar. Tu próximo favorito te está esperando.
            </p>
        </div>

        <div class="flex flex-wrap justify-center gap-6 px-4">
            <!-- Hoodie -->
            <a href="/coleccion/hoodies"
                class="group relative w-[80vw] sm:w-[45vw] md:w-[30vw] lg:w-[20vw] aspect-[3/4] overflow-hidden rounded-lg">
                <div class="relative w-full h-full">
                    <img src="{{ asset('img/hoodies.png') }}" alt="Ver Hoodies"
                        class="object-cover object-center w-full h-full transition-transform duration-500 ease-in-out group-hover:scale-110" />
                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent transition-all duration-300">
                    </div>
                    <div class="absolute inset-0 flex flex-col items-start justify-end p-6">
                        <h3 class="text-2xl font-anton uppercase text-white tracking-widest">Hoodies</h3>
                        <div
                            class="mt-2 flex items-center text-white text-sm font-semibold opacity-0 -translate-y-2 group-hover:opacity-100 group-hover:translate-y-0 transition-all duration-300">
                            Ver colección <span class="ml-2">→</span>
                        </div>
                    </div>
                </div>
            </a>

            <!-- Pantalones -->
            <a href="/coleccion/pantalones"
                class="group relative w-[80vw] sm:w-[45vw] md:w-[30vw] lg:w-[20vw] aspect-[3/4] overflow-hidden rounded-lg">
                <div class="relative w-full h-full">
                    <img src="{{ asset('img/cat4.png') }}" alt="Ver Pantalones"
                        class="object-cover object-center w-full h-full transition-transform duration-500 ease-in-out group-hover:scale-110" />
                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent transition-all duration-300">
                    </div>
                    <div class="absolute inset-0 flex flex-col items-start justify-end p-6">
                        <h3 class="text-2xl font-anton uppercase text-white tracking-widest">Pantalones</h3>
                        <div
                            class="mt-2 flex items-center text-white text-sm font-semibold opacity-0 -translate-y-2 group-hover:opacity-100 group-hover:translate-y-0 transition-all duration-300">
                            Ver colección <span class="ml-2">→</span>
                        </div>
                    </div>
                </div>
            </a>

            <!-- Poleras -->
            <a href="/coleccion/poleras"
                class="group relative w-[80vw] sm:w-[45vw] md:w-[30vw] lg:w-[20vw] aspect-[3/4] overflow-hidden rounded-lg">
                <div class="relative w-full h-full">
                    <img src="{{ asset('img/cat3.png') }}" alt="Ver Poleras"
                        class="object-cover object-center w-full h-full transition-transform duration-500 ease-in-out group-hover:scale-110" />
                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent transition-all duration-300">
                    </div>
                    <div class="absolute inset-0 flex flex-col items-start justify-end p-6">
                        <h3 class="text-2xl font-anton uppercase text-white tracking-widest">Poleras</h3>
                        <div
                            class="mt-2 flex items-center text-white text-sm font-semibold opacity-0 -translate-y-2 group-hover:opacity-100 group-hover:translate-y-0 transition-all duration-300">
                            Ver colección <span class="ml-2">→</span>
                        </div>
                    </div>
                </div>
            </a>
        </div>
    </section>

@endsection
