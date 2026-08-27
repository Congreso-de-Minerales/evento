<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Patrocinadores - {{ config('app.name', 'Congreso') }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>
<body class="bg-black text-[#1b1b18] min-h-screen flex flex-col">
    <header class="fixed top-0 inset-x-0 z-50 bg-black/80 backdrop-blur-md border-b border-white/10 shadow-lg shadow-black/50 not-has-[nav]:hidden">
        <livewire:menu />
    </header>

    <div class="flex flex-col items-center justify-center w-full px-4 lg:p-8 mt-24 min-h-[70vh]">
        <div class="max-w-5xl w-full">
            <h1 class="text-4xl font-bold text-white mb-8 text-center">Nuestros Patrocinadores</h1>
            
            <div class="relative group w-full overflow-hidden rounded-2xl shadow-2xl shadow-orange-500/10 border border-white/5 bg-white p-8 transition-all duration-500 hover:-translate-y-1 hover:shadow-orange-500/20">
                <img src="{{ asset('assets/patrocinadores.jpeg') }}" alt="Patrocinadores" class="w-full h-auto object-contain transition-transform duration-700 group-hover:scale-105">
            </div>
        </div>
    </div>

    <livewire:footer />
    @livewireScripts
</body>
</html>
