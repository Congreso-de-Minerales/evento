<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Subir Trabajos - {{ config('app.name', 'Congreso') }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>
<body class="bg-black text-[#1b1b18] min-h-screen flex flex-col">
    <header class="fixed top-0 inset-x-0 z-50 bg-black/80 backdrop-blur-md border-b border-white/10 shadow-lg shadow-black/50 not-has-[nav]:hidden">
        <livewire:menu />
    </header>

    <div class="flex flex-col items-center w-full px-4 lg:p-8 mt-24 min-h-[70vh]">
        <div class="max-w-6xl w-full bg-white rounded-2xl shadow-2xl p-8 lg:p-12 text-black">
            <div class="flex flex-col lg:flex-row gap-8 justify-between items-start mb-8 border-b pb-8 border-gray-200">
                <div class="flex-1">
                    <h1 class="text-3xl lg:text-4xl font-bold mb-4 uppercase text-gray-900">Registro de Trabajos Técnicos</h1>
                    <p class="font-bold text-lg text-gray-800">Al participar con un trabajo técnico, su cuota de inscripción será gratuita.</p>
                </div>
                
                <div class="w-full lg:w-1/3 bg-gray-100 border border-gray-300 rounded-xl p-6 shadow-md text-center">
                    <h3 class="font-bold text-gray-800 mb-4 uppercase">Registra tu trabajo técnico:</h3>
                    <a href="https://docs.google.com/forms/d/e/1FAIpQLSeq4WTnkL_YrM1WsQloNtGtp6enFA8STGqLt7eJwg0THKAQxQ/viewform?usp=dialog" target="_blank" rel="noopener noreferrer" class="inline-block px-4 py-3 bg-blue-600 hover:bg-blue-500 text-white rounded-lg font-bold transition-transform duration-300 hover:scale-105 shadow-lg w-full text-sm break-words">
                        Ir al formulario de Google
                    </a>
                </div>
            </div>

            <div class="space-y-8 text-gray-800">
                <div>
                    <h2 class="text-xl font-bold mb-4">Trabajos técnicos</h2>
                    <ul class="list-disc pl-6 space-y-2">
                        <li>Enviar título del trabajo, autores y un resumen de máximo 300 palabras a más tardar el <strong>20 de julio del 2026.</strong></li>
                        <li>Los trabajos serán evaluados por el comité organizador y la aceptación se dará a conocer a más tardar el <strong>07 de agosto del 2026.</strong></li>
                        <li>Los <strong>trabajos en extenso</strong> para ser publicados en las memorias deberán ser revisados por el comité editorial cumpliendo con <strong>el formato</strong> que se puede bajar en: 
                            <a href="https://docs.google.com/document/d/1vbmqYP6MSZ-6aWotO7LlXSpRhGECf1GA/edit?usp=sharing" target="_blank" class="text-blue-600 underline hover:text-blue-800 break-all">https://docs.google.com/document/d/1vbmqYP6MSZ-6aWotO7LlXSpRhGECf1GA</a>
                            <br><span class="text-sm text-gray-600">(Se abre en Google docs, descargar el formato en el menú file o archivo).</span>
                        </li>
                        <li><strong>Deberán ser enviados a más tardar el 11 de septiembre del 2026</strong></li>
                    </ul>
                </div>

                <div>
                    <h2 class="text-xl font-bold mb-4">Sesión de pósters (Estudiantes)</h2>
                    <ul class="list-disc pl-6 space-y-2">
                        <li>Al participar con tu póster tendrás oportunidad de exponer su trabajo a profesionales del ramo y a una enriquecedora retroalimentación.</li>
                        <li>El póster puede ser presentado hasta por dos estudiantes.</li>
                        <li>Se premiará a los mejores posters de cada nivel de estudios (licenciatura, maestría y doctorado).</li>
                        <li>El póster será <strong>de 0.9 m de ancho x 1.2 m de alto.</strong></li>
                        <li>Los trabajos a presentarse en póster deberán enviar el título del trabajo y un resumen de máximo 300 palabras a más tardar <strong>el 20 de julio del 2026.</strong></li>
                        <li>Aquellos autores que deseen que el trabajo sea considerado para las memorias del encuentro deberán de seguir las <strong>instrucciones, formatos y fechas arriba mencionadas.</strong></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <livewire:footer />
    @livewireScripts
</body>
</html>
