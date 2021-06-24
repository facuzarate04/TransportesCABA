
<div class="">
    <div class="text-center p-10">

        <div class="flex justify-end bg-gray-400 p-2">
            <button onclick="closeSection('ecobici')" class="p-1 bg-red-700 rounded-xl" >Cerrar</button>
        </div>

        <div class=" w-full text-white bg-gray-800 h-auto py-10">
        
            <div class=" text-center ">
                <h1 class=" md:text-4xl sm:text-2xl text-xl mb-2"> Eco-Bicis </h1>
                <h3 class="text-center text-xl my-2"> {{$fecha}} </h3>
                <div class="flex px-20 bg-gray-700">
                    <h3 class="text-center text-md m-auto my-2">Selecciona una Estación de Eco-Bici </h3>
                    <select wire:model="estacionselected" class="text-black m-auto" name="unidad" id="">
                    @foreach ($estaciones as $estacion)
                        <option value="{{json_encode($estacion,true)}}">{{ $estacion['name'] }} </option>
                    @endforeach
                    </select>
                </div>
                
                <hr class="W-1/4 mx-auto mb-5 shadow-4xl">
                
            </div>
                <div class="sm:w-full w-3/4  my-2 lg:mx-2">       
                    <section>
                        @if ($station != null)  
                                
                            <div class="container">
                                <h3 class="text-center text-md m-auto my-2 font-bold">{{$station['name']}} </h3>
                            
                                <table class="text-left md:w-2/3 text-center m-auto">
                                    <thead class="bg-black flex text-white w-full">
                                        <tr class="flex w-full mb-2">
                                            <th class="p-4 w-1/4">Barrio</th>
                                            <th class="p-4 w-1/4">Dirección</th>
                                            <th class="p-4 w-1/4">Capacidad</th>
                                            <th class="p-4 w-1/4">Ubicación</th>
                                        </tr>
                                    </thead>    
                                    <tbody class="bg-gray-300 text-black flex flex-col items-center justify-between overflow-y-scroll w-full" >
                                        <tr class="flex w-full ">
                                            @foreach ($station['groups'] as $barrio)
                                            <td class="p-4 w-1/4">{{$barrio}}</td>
                                            @endforeach                                            
                                            <td class="p-4 w-1/4">{{$station['address']}}</td>
                                            <td class="p-4 w-1/4">{{$station['capacity']}}</td>
                                            <td class="p-4 w-1/4"><a href="https://maps.google.com/?q={{$station['lat']}},{{$station['lon']}}"class="text-blue-700 flex">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                                  </svg>Abrir en Maps</a>
                                            </td>				
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                
                        @endif
                        
                    </section>
        
                </div>      
        
        </div>     
        
        </div>
</div>