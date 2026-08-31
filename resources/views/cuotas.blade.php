<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cuotas - {{ config('app.name', 'Congreso') }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>
<body class="bg-black text-[#1b1b18] min-h-screen flex flex-col">
    <header class="fixed top-0 inset-x-0 z-50 bg-black/80 backdrop-blur-md border-b border-white/10 shadow-lg shadow-black/50 not-has-[nav]:hidden">
        <livewire:menu />
    </header>

    <div class="flex flex-col items-center w-full px-4 lg:p-8 mt-24 min-h-[70vh]">
        <div class="max-w-7xl w-full">
            <h1 class="text-4xl font-bold text-white mb-10 text-center lg:text-left">Cuotas y registro:</h1>
            
            <div class="flex flex-col lg:flex-row gap-8 items-center lg:items-stretch">
                <!-- Texto -->
                <div class="w-full lg:w-1/2 relative overflow-hidden rounded-2xl shadow-2xl shadow-orange-500/10 border border-white/5 bg-white p-8 text-black">
                    <h2 class="text-xl font-bold mb-4">¡Participa en nuestro evento 2026!</h2>
                    <p class="mb-4">Te invitamos a ser parte de nuestro evento, que se llevará a cabo en San Luis Potosí del 6 al 9 de octubre de 2026.</p>
                    
                    <h3 class="font-bold underline mb-1">Cuotas de inscripción</h3>
                    <h4 class="font-bold mb-1">Hasta el 31 de agosto:</h4>
                    <ul class="mb-4">
                        <li>Alumnos: $500</li>
                        <li>Alumnos Socios AIMMGM: $300</li>
                        <li>Socios AIMMGM: $600</li>
                        <li>Público en general: $1,000</li>
                    </ul>

                    <h4 class="font-bold mb-1">Después del 31 de agosto:</h4>
                    <ul class="mb-4">
                        <li>Alumnos: $800</li>
                        <li>Alumnos Socios AIMMGM: $600</li>
                        <li>Socios AIMMGM: $1,000</li>
                        <li>Público en general: $1,500</li>
                    </ul>

                    <p class="mb-4">Tu registro fortalece las iniciativas de la UASLP para la difusión del conocimiento, la responsabilidad ambiental y la formación de especialistas para una minería sostenible en México.</p>
                    <p class="font-bold mb-8">¡Gracias por hacer la diferencia!</p>

                    <h3 class="font-bold text-lg mb-4 text-center sm:text-left border-t pt-6 border-gray-200">Selecciona tu cuota para registrarte:</h3>
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <a href="https://docs.google.com/forms/d/e/1FAIpQLSejAayaiYIFf6DLsFJBTgnqZGxWiqxDcnvas0CtzlG9gcVN2g/viewform?usp=header" target="_blank" class="px-4 py-3 bg-orange-600 hover:bg-orange-500 text-white rounded-xl font-bold transition-transform duration-300 hover:scale-105 text-center shadow-lg shadow-orange-500/20">Registro Alumnos</a>
                        <a href="https://docs.google.com/forms/d/e/1FAIpQLSejAayaiYIFf6DLsFJBTgnqZGxWiqxDcnvas0CtzlG9gcVN2g/viewform?usp=header" target="_blank" class="px-4 py-3 bg-orange-600 hover:bg-orange-500 text-white rounded-xl font-bold transition-transform duration-300 hover:scale-105 text-center shadow-lg shadow-orange-500/20">Registro Alumnos Socios</a>
                        <a href="https://docs.google.com/forms/d/e/1FAIpQLSejAayaiYIFf6DLsFJBTgnqZGxWiqxDcnvas0CtzlG9gcVN2g/viewform?usp=header" target="_blank" class="px-4 py-3 bg-[#111] hover:bg-black text-white rounded-xl font-bold transition-transform duration-300 hover:scale-105 text-center shadow-lg">Registro Socios AIMMGM</a>
                        <a href="https://docs.google.com/forms/d/e/1FAIpQLSejAayaiYIFf6DLsFJBTgnqZGxWiqxDcnvas0CtzlG9gcVN2g/viewform?usp=header" target="_blank" class="px-4 py-3 bg-[#111] hover:bg-black text-white rounded-xl font-bold transition-transform duration-300 hover:scale-105 text-center shadow-lg">Registro Público General</a>
                    </div>
                </div>

                <!-- Imagen 4.png -->
                <div class="w-full lg:w-1/2 relative group overflow-hidden rounded-2xl shadow-2xl shadow-orange-500/10 border border-white/5 bg-[#111] transition-all duration-500 hover:-translate-y-1 hover:shadow-orange-500/20 p-2 flex flex-col justify-center">
                    <img src="{{ asset('assets/4.png') }}" alt="Cuotas de inscripción" class="w-full h-auto object-contain rounded-xl">
                </div>
            </div>
        </div>
    </div>

    <livewire:footer />
    @livewireScripts
</body>
</html>
