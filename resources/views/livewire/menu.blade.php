<div class="w-full max-w-7xl px-2 sm:px-4 mx-auto lg:px-8">
    <div class="flex flex-col lg:flex-row lg:items-center py-2 lg:py-3 gap-2 lg:gap-0">
        <!-- Logo -->
        <a href="{{ route('evento.home') }}" class="flex-shrink-0 flex items-center justify-center lg:justify-start lg:mr-8">
            <img src="{{ asset('assets/logo.png') }}" alt="Logo" class="h-12 lg:h-14 w-auto object-contain">
        </a>

        <!-- Navegación scrollable -->
        <nav class="flex items-center gap-1 overflow-x-auto whitespace-nowrap scrollbar-hide w-full pb-1 lg:pb-0">
            <a href="{{ route('evento.home') }}" class="inline-flex items-center gap-2 px-3 py-2 rounded-lg text-white/90 hover:text-white hover:bg-white/10 transition-all duration-300 font-medium">
                <x-icon name="home" class="w-5 h-5" />
                <span>Inicio</span>
            </a>
        <a href="{{ route('evento.patrocinadores.index') }}"
            class="inline-flex items-center gap-2 px-3 py-2 rounded-lg text-white/90 hover:text-white hover:bg-white/10 transition-all duration-300 font-medium">
            <x-icon name="users" class="w-5 h-5" />
            <span>Patrocinadores</span>
        </a>
        <a href="{{ route('evento.trabajos.index') }}"
            class="inline-flex items-center gap-2 px-3 py-2 rounded-lg text-white/90 hover:text-white hover:bg-white/10 transition-all duration-300 font-medium">
            <x-icon name="tag" class="w-5 h-5" />
            <span>Trabajos</span>
        </a>
        <a href="{{ route('evento.hoteles.index') }}"
            class="inline-flex items-center gap-2 px-3 py-2 rounded-lg text-white/90 hover:text-white hover:bg-white/10 transition-all duration-300 font-medium">
            <x-icon name="home" class="w-5 h-5" />
            <span>Hoteles</span>
        </a>
        <a href="{{ route('evento.fechas.index') }}"
            class="inline-flex items-center gap-2 px-3 py-2 rounded-lg text-white/90 hover:text-white hover:bg-white/10 transition-all duration-300 font-medium">
            <x-icon name="calendar" class="w-5 h-5" />
            <span>Fechas</span>
        </a>
        <a href="{{ route('evento.programa.index') }}"
            class="inline-flex items-center gap-2 px-3 py-2 rounded-lg text-white/90 hover:text-white hover:bg-white/10 transition-all duration-300 font-medium">
            <x-icon name="document-text" class="w-5 h-5" />
            <span>Programa</span>
        </a>
        <a href="{{ route('evento.cuotas.index') }}"
            class="inline-flex items-center gap-2 px-3 py-2 rounded-lg text-white/90 hover:text-white hover:bg-white/10 transition-all duration-300 font-medium">
            <x-icon name="gift" class="w-5 h-5" />
            <span>Registro y Cuotas</span>
        </a>

        </div>
    </nav>
    </div>
</div>
