<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hoteles - {{ config('app.name', 'Congreso') }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>
<body class="bg-black text-[#1b1b18] min-h-screen flex flex-col">
    <header class="fixed top-0 inset-x-0 z-50 bg-black/80 backdrop-blur-md border-b border-white/10 shadow-lg shadow-black/50 not-has-[nav]:hidden">
        <livewire:menu />
    </header>

    <div class="flex flex-col items-center w-full px-4 lg:p-8 mt-24 min-h-[70vh]">
        <div class="max-w-5xl w-full">
            <h1 class="text-4xl font-bold text-white mb-8 text-center">Hoteles Recomendados</h1>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Hotel 1 -->
                <div class="relative flex flex-col group overflow-hidden rounded-2xl shadow-2xl shadow-orange-500/10 border border-white/5 bg-[#111] transition-all duration-500 hover:-translate-y-1 hover:shadow-orange-500/20 p-6">
                    <h2 class="text-2xl font-bold text-orange-500 mb-2">Hotel Fiesta Inn</h2>
                    <p class="text-gray-400 text-sm mb-4">Av. Salvador Nava Martínez, San Luis Potosí</p>
                    <p class="text-gray-300">Ofrece tarifas preferenciales para asistentes al congreso. Cuenta con alberca, gimnasio y centro de negocios.</p>
                </div>

                <!-- Hotel 2 -->
                <div class="relative flex flex-col group overflow-hidden rounded-2xl shadow-2xl shadow-orange-500/10 border border-white/5 bg-[#111] transition-all duration-500 hover:-translate-y-1 hover:shadow-orange-500/20 p-6">
                    <h2 class="text-2xl font-bold text-orange-500 mb-2">Hotel Real Inn</h2>
                    <p class="text-gray-400 text-sm mb-4">Carr. 57, San Luis Potosí</p>
                    <p class="text-gray-300">Ubicado cerca de los principales accesos viales. Excelentes habitaciones y restaurante de cocina internacional.</p>
                </div>

                <!-- Hotel 3 -->
                <div class="relative flex flex-col group overflow-hidden rounded-2xl shadow-2xl shadow-orange-500/10 border border-white/5 bg-[#111] transition-all duration-500 hover:-translate-y-1 hover:shadow-orange-500/20 p-6">
                    <h2 class="text-2xl font-bold text-orange-500 mb-2">Hotel Courtyard by Marriott</h2>
                    <p class="text-gray-400 text-sm mb-4">Zona Centro, San Luis Potosí</p>
                    <p class="text-gray-300">Comodidad y tecnología en el corazón de la ciudad. Ideal para descansar después de un día de conferencias.</p>
                </div>
            </div>
        </div>
    </div>

    <livewire:footer />
    @livewireScripts
</body>
</html>
