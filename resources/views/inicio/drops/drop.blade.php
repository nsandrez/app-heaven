@extends('app')

@section('title', ($drop->nombre ?? 'Productos') . ' | Heaven')

@section('contenido')
    <div class="bg-black min-h-screen relative z-0">
        <main class="pt-52 px-4 md:px-8 relative">
            <!-- HEADER -->
            <header
                class="flex flex-col md:flex-row justify-between items-start md:items-center mb-8 space-y-4 md:space-y-0 z-10">
                <h1 class="text-6xl font-extrabold tracking-widest uppercase font-[impact] text-white">
                    {{ strtoupper($drop->nombre) }}
                </h1>

                <!-- contador productos -->
                <div class="flex-grow flex justify-center items-baseline text-sm font-mono uppercase text-white">
                    <span>{{ $productos->count() }}</span>
                    <span class="mx-2">//</span>
                    <span>Productos</span>
                </div>

                <!-- FILTROS -->
                <div class="flex items-center gap-4 text-xs font-mono uppercase relative z-50 text-white">
                    <!-- Tallas -->
                    <div x-data="{ open: false }" class="relative">
                        <button @click="open = !open" class="hover:underline">
                            TALLA + // SELECCIONAR
                        </button>
                        <div x-show="open" x-transition @click.away="open = false"
                            class="absolute left-0 mt-2 w-[200px] bg-black text-white p-4 shadow-lg z-50">
                            @foreach (['S', 'M', 'L', 'XL'] as $talla)
                                <label class="flex items-center gap-2 mb-2 cursor-pointer">
                                    <input type="checkbox" class="accent-white">
                                    <span>{{ $talla }}</span>
                                </label>
                            @endforeach
                        </div>
                    </div>

                    <!-- Orden -->
                    <div x-data="{ open: false, seleccionado: 'LOS MÁS VENDIDOS' }" class="relative">
                        <button @click="open = !open" class="hover:underline text-red-300">
                            ORDENAR POR - // <span x-text="seleccionado"></span>
                        </button>
                        <div x-show="open" x-transition @click.away="open = false"
                            class="absolute right-0 mt-2 w-[300px] bg-black text-white p-4 shadow-lg z-50">
                            @foreach (['LOS MÁS VENDIDOS', 'MENOR PRECIO', 'MAYOR PRECIO', 'NUEVOS'] as $opcion)
                                <label class="flex items-center gap-2 mb-2 cursor-pointer">
                                    <input type="radio" name="orden"
                                        @change="seleccionado = '{{ $opcion }}'; open = false" class="accent-white">
                                    <span>{{ $opcion }}</span>
                                </label>
                            @endforeach
                        </div>
                    </div>
                </div>
            </header>

            <!-- LISTADO DE PRODUCTOS -->
            <section class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">
                @forelse ($productos as $producto)
                    <div class="bg-neutral-900 p-4 rounded-lg shadow-lg text-center hover:scale-105 transition-transform">
                        <img src="{{ asset('img/productos/' . $producto->imagen) }}" alt="{{ $producto->nombre }}"
                            class="w-full h-80 object-cover mb-4 rounded-md">
                        <h3 class="text-white font-bold text-lg">{{ $producto->nombre }}</h3>
                        <p class="text-neutral-400 text-sm">
                            {{ number_format($producto->precio, 0, ',', '.') }} CLP
                        </p>
                    </div>
                @empty
                    <div class="col-span-full text-center py-16">
                        <h3 class="font-anton text-white text-3xl tracking-widest uppercase animate-pulse">
                            🚧 Trabajando...
                        </h3>
                        <p class="text-gray-400 text-lg mt-3 font-mono">Pronto habrá nuevas prendas disponibles.</p>
                    </div>
                @endforelse
            </section>
        </main>
    </div>
@endsection
