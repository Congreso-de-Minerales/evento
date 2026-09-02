<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cursos - {{ config('app.name', 'Congreso') }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>
<body class="bg-black text-[#1b1b18] min-h-screen flex flex-col">
    <header class="fixed top-0 inset-x-0 z-50 bg-black/80 backdrop-blur-md border-b border-white/10 shadow-lg shadow-black/50 not-has-[nav]:hidden">
        <livewire:menu />
    </header>

    <div class="flex flex-col items-center w-full px-4 lg:p-8 mt-24 flex-1">
        <div class="w-full h-[80vh] max-w-7xl relative group overflow-hidden rounded-2xl shadow-2xl shadow-orange-500/10 border border-white/5 bg-[#111] transition-all duration-500 hover:shadow-orange-500/20 p-2 flex flex-col items-center">
            <div class="w-full flex justify-between items-center mb-6 px-4">
                <h1 class="text-4xl font-bold text-white flex-1 text-left">Cursos</h1>
                <a href="https://docs.google.com/forms/d/e/1FAIpQLSc2yueTUc_QPjH_F6GJvOK_e90O7Zije3OgS5dcCKpC0tRxSg/viewform?usp=dialog" target="_blank" class="bg-orange-500 hover:bg-orange-600 text-white font-bold py-2 px-6 rounded-lg transition-colors shadow-lg">
                    Link de registro
                </a>
            </div>
            <iframe src="{{ asset('assets/CURSOS XXII 2026.pdf') }}" class="w-full flex-1 rounded-xl border-none"></iframe>
        </div>
    </div>

    <livewire:footer />
    @livewireScripts
</body>
</html>
