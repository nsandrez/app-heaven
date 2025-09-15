  <section id="grilla-productos" class="bg-black py-16 md:py-24" x-data="{ activeDrop: 'drop1' }">
      <div class="container mx-auto px-4">

          {{-- Botones de colecciones --}}
          <div class="flex justify-center items-center gap-6 md:gap-8 mb-12">
              <template x-for="drop in ['drop1', 'drop2', 'drop3']" :key="drop">
                  <button @click="activeDrop = drop"
                      class="relative text-sm font-anton uppercase tracking-widest pb-2 hover:text-red-500 after:content-[''] after:absolute after:left-0 after:bottom-0 after:w-full after:h-[2px] after:bg-red-600 after:origin-left after:transition-transform"
                      :class="activeDrop === drop ?
                          'text-white after:scale-x-100' :
                          'text-gray-400 after:scale-x-0'">
                      <span x-text="drop.replace('drop','Drop ')"></span>
                  </button>
              </template>
          </div>

          {{-- Colección 1 --}}
          <div id="coleccion-drop1" x-show="activeDrop === 'drop1'" x-transition.opacity.duration.400ms
              class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-3 gap-x-1.5 gap-y-8 md:gap-x-6 md:gap-y-12">

              <!-- Producto 1 -->
              <div class="group relative overflow-hidden rounded-lg">
                  <!-- Imagen frontal -->
                  <img src="{{ asset('img/Heaven1.png') }}" alt="Producto frontal"
                      class="w-full h-auto object-cover transition duration-500 group-hover:scale-105 group-hover:opacity-0">
                  <!-- Imagen trasera -->
                  <img src="{{ asset('img/Heaven2.png') }}" alt="Producto trasero"
                      class="w-full h-auto object-cover absolute inset-0 opacity-0 transition duration-500 group-hover:scale-105 group-hover:opacity-100">

                  <!-- Overlay con botón -->
                  <div
                      class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition flex items-center justify-center">
                      <a href="/producto/heaven"
                          class="bg-black text-red-600 hover:bg-red-600 hover:text-black text-sm px-5 py-2 uppercase tracking-widest font-semibold">
                          Ver producto
                      </a>
                  </div>

                  <!-- Info producto -->
                  <div class="mt-6 text-center">
                      <!-- Nombre producto más grande -->
                      <h3 class="font-anton uppercase text-white text-2xl tracking-wider">Heaven drop 1</h3>

                      <!-- Subtítulo opcional -->
                      <p class="text-gray-400 text-xs mt-1 tracking-widest">Edición Limitada</p>

                      <!-- Precios -->
                      <div class="mt-3">
                          <span class="text-red-600 font-extrabold text-2xl">$50.000</span>
                      </div>
                  </div>
              </div>


              <!-- Producto 2 -->
              <div class="group relative overflow-hidden rounded-lg">
                  <!-- Imagen frontal -->
                  <img src="{{ asset('img/Heaven1.png') }}" alt="Producto frontal"
                      class="w-full h-auto object-cover transition duration-500 group-hover:scale-105 group-hover:opacity-0">
                  <!-- Imagen trasera -->
                  <img src="{{ asset('img/Heaven2.png') }}" alt="Producto trasero"
                      class="w-full h-auto object-cover absolute inset-0 opacity-0 transition duration-500 group-hover:scale-105 group-hover:opacity-100">

                  <!-- Overlay con botón -->
                  <div
                      class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition flex items-center justify-center">
                      <a href="/producto/heaven"
                          class="bg-black text-red-600 hover:bg-red-600 hover:text-black text-sm px-5 py-2 uppercase tracking-widest font-semibold">
                          Ver producto
                      </a>
                  </div>

                  <!-- Info producto -->
                  <div class="mt-6 text-center">
                      <!-- Nombre producto más grande -->
                      <h3 class="font-anton uppercase text-white text-2xl tracking-wider">Heaven drop 1</h3>

                      <!-- Subtítulo opcional -->
                      <p class="text-gray-400 text-xs mt-1 tracking-widest">Edición Limitada</p>

                      <!-- Precios -->
                      <div class="mt-3">
                          <span class="text-red-600 font-extrabold text-2xl">$50.000</span>
                      </div>
                  </div>
              </div>

              <!-- Producto 3 -->
              <div class="group relative overflow-hidden rounded-lg">
                  <!-- Imagen frontal -->
                  <img src="{{ asset('img/Heaven1.png') }}" alt="Producto frontal"
                      class="w-full h-auto object-cover transition duration-500 group-hover:scale-105 group-hover:opacity-0">
                  <!-- Imagen trasera -->
                  <img src="{{ asset('img/Heaven2.png') }}" alt="Producto trasero"
                      class="w-full h-auto object-cover absolute inset-0 opacity-0 transition duration-500 group-hover:scale-105 group-hover:opacity-100">

                  <!-- Overlay con botón -->
                  <div
                      class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition flex items-center justify-center">
                      <a href="/producto/heaven"
                          class="bg-black text-red-600 hover:bg-red-600 hover:text-black text-sm px-5 py-2 uppercase tracking-widest font-semibold">
                          Ver producto
                      </a>
                  </div>

                  <!-- Info producto -->
                  <div class="mt-6 text-center">
                      <!-- Nombre producto más grande -->
                      <h3 class="font-anton uppercase text-white text-2xl tracking-wider">Heaven drop 1</h3>

                      <!-- Subtítulo opcional -->
                      <p class="text-gray-400 text-xs mt-1 tracking-widest">Edición Limitada</p>

                      <!-- Precios -->
                      <div class="mt-3">
                          <span class="text-red-600 font-extrabold text-2xl">$50.000</span>
                      </div>
                  </div>
              </div>
          </div>

          {{-- Colección 2 --}}
          <div id="coleccion-drop2" x-show="activeDrop === 'drop2'" x-transition.opacity.duration.400ms
              class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-3 gap-x-1.5 gap-y-8 md:gap-x-6 md:gap-y-12">

              <!-- Producto 1 -->
              <div class="group relative overflow-hidden rounded-lg">
                  <!-- Imagen frontal -->
                  <img src="{{ asset('img/Heaven1.png') }}" alt="Producto frontal"
                      class="w-full h-auto object-cover transition duration-500 group-hover:scale-105 group-hover:opacity-0">
                  <!-- Imagen trasera -->
                  <img src="{{ asset('img/Heaven2.png') }}" alt="Producto trasero"
                      class="w-full h-auto object-cover absolute inset-0 opacity-0 transition duration-500 group-hover:scale-105 group-hover:opacity-100">

                  <!-- Overlay con botón -->
                  <div
                      class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition flex items-center justify-center">
                      <a href="/producto/heaven"
                          class="bg-black text-red-600 hover:bg-red-600 hover:text-black text-sm px-5 py-2 uppercase tracking-widest font-semibold">
                          Ver producto
                      </a>
                  </div>

                  <!-- Info producto -->
                  <div class="mt-6 text-center">
                      <!-- Nombre producto más grande -->
                      <h3 class="font-anton uppercase text-white text-2xl tracking-wider">Heaven drop 2</h3>

                      <!-- Subtítulo opcional -->
                      <p class="text-gray-400 text-xs mt-1 tracking-widest">Edición Limitada</p>

                      <!-- Precios -->
                      <div class="mt-3">
                          <span class="text-red-600 font-extrabold text-2xl">$50.000</span>
                      </div>
                  </div>
              </div>

              <!-- Producto de ejemplo Drop 2 -->
              <div class="group relative overflow-hidden rounded-lg">
                  <!-- Imagen frontal -->
                  <img src="{{ asset('img/Heaven1.png') }}" alt="Producto frontal"
                      class="w-full h-auto object-cover transition duration-500 group-hover:scale-105 group-hover:opacity-0">
                  <!-- Imagen trasera -->
                  <img src="{{ asset('img/Heaven2.png') }}" alt="Producto trasero"
                      class="w-full h-auto object-cover absolute inset-0 opacity-0 transition duration-500 group-hover:scale-105 group-hover:opacity-100">

                  <!-- Overlay con botón -->
                  <div
                      class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition flex items-center justify-center">
                      <a href="/producto/heaven"
                          class="bg-black text-red-600 hover:bg-red-600 hover:text-black text-sm px-5 py-2 uppercase tracking-widest font-semibold">
                          Ver producto
                      </a>
                  </div>

                  <!-- Info producto -->
                  <div class="mt-6 text-center">
                      <!-- Nombre producto más grande -->
                      <h3 class="font-anton uppercase text-white text-2xl tracking-wider">Heaven drop 2</h3>

                      <!-- Subtítulo opcional -->
                      <p class="text-gray-400 text-xs mt-1 tracking-widest">Edición Limitada</p>

                      <!-- Precios -->
                      <div class="mt-3">
                          <span class="text-red-600 font-extrabold text-2xl">$50.000</span>
                      </div>
                  </div>
              </div>
          </div>

          {{-- Colección 3 --}}
          <div id="coleccion-drop3" x-show="activeDrop === 'drop3'" x-transition.opacity.duration.400ms
              class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-3 gap-x-1.5 gap-y-8 md:gap-x-6 md:gap-y-12">

              <div class="col-span-2 md:col-span-3 text-center py-12">
                  <h3 class="font-anton text-white text-2xl tracking-widest uppercase">
                      🚧 Trabajando en el próximo drop...
                  </h3>
                  <p class="text-gray-400 text-sm mt-2 font-anton">Pronto habrá nuevas prendas disponibles.</p>
              </div>
          </div>

          {{-- Botón ver todo --}}
          <div class="flex justify-center mt-16">
              <a href="/tienda/todos"
                  class="bg-black text-red-600 hover:bg-red-600 hover:text-black px-6 py-3 text-xs tracking-widest font-semibold ">
                  » VER TODO «
              </a>
          </div>

      </div>
  </section>
