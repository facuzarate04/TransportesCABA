<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Transporte-BsAs</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="https://unpkg.com/tailwindcss/dist/tailwind.min.css" />
</head>

<body class="bg-gray-200">

    <section class="mx-auto max-w-6xl py-12">
        <div class="flex flex-col">
            <div class="flex flex-col md:flex-row justify-center items-center">
                <div class="transition-all ease-in-out duration-1000 flex flex-col justify-center"></div>
                <div class="transition-all ease-in-out duration-1000 flex flex-col justify-center"></div>
                <div class="transition-all ease-in-out duration-1000 flex flex-col justify-center"></div>
            </div>
            <div class="flex flex-col md:flex-row justify-center items-center bg-blue-200 py-10">
                <div class="transition-all ease-in-out duration-1000 flex flex-col justify-center">
                    <div slot="middle-left" class="max-w-2xl">                        
                            <div
                                class="w-full p-5 text-teal-100  h-48 text-3xl font-black uppercase">
                                <h1>Transporte público Buenos Aires</h1>
                                <h1 class="uppercase text-xs mt-2 text-gray-600">dev: facundo zarate</h1>
                            </div>                        
                    </div>
                </div>
                <div class="transition-all ease-in-out duration-1000 flex flex-col justify-center"></div>
                <div class="transition-all ease-in-out duration-1000 flex flex-col justify-center">
                    <div slot="middle-right" class="max-w-xs">
                        <div class="flex flex-col justify-center h-48 p-3">
                            <div class="text-xl font-black text-teal-700">Visualización de medios y estados de
                                transporte</div>
                            <div class="text-sm my-3">
                                En esta web vas a poder visualizar de forma dinámica, los medios de transporte de la
                                provincia de Buenos Aires, República Argentina. <br>
                                Además vas a poder consultar estados, tiempos y recorridos de cada uno de ellos
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="flex flex-col md:flex-row justify-center items-center">

                <x-evento/>
                <x-subte/>
                <x-eco-bici/>

            </div>
        </div>
    </section>

    <section>
        <div id="evento" class="link hidden">
            @livewire('eventos')
        </div>
        <div id="ecobici" class="link hidden">
            @livewire('eco-bicis')
        </div>
        <div id="subte" class="link hidden">
            @livewire('subtes')
        </div>
    </section>


    

</body>

@livewireScripts
<script src="{{ asset('js/scrolly.js') }}"></script>
<script src="{{ asset('js/close-section.js') }}"></script>
</html>
