<div class="text-center p-10">
    
    <div class="flex justify-end bg-gray-400 p-2">
        <button onclick="closeSection('evento')" class="p-1 bg-red-700 rounded-xl" >Cerrar</button>
    </div>

    <div class=" w-full text-white bg-gray-800 h-auto py-10">
        
        <div class=" text-center ">
            <h1 class=" md:text-4xl sm:text-2xl text-xl mb-2"> Eventos en la vía pública </h1>
            <h3 class="text-center text-xl my-2">{{date('M - Y')}}</h3>
                        
            <hr class="W-1/4 mx-auto mb-2 shadow-4xl">            
        </div>        

        <div class="sm:w-full w-3/4  lg:mx-2">           
            <div class="grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-3 gap-1 sm:gap-5 p-10">
                @foreach ($eventos as $evento)
                <a href="https://maps.google.com/?q={{$evento['fromLat']}},{{$evento['fromLon']}}">
                <div class="bg-blue-200 bg-opacity-40 shadow-xl gap-5 px-6 py-2 rounded-lg ring-2 ring-offset-2 ring-offset-blue-800 ring-cyan-700 mt-5 cursor-pointer hover:bg-blue-900 hover:bg-opacity-100 transition h-64" >                    
                    <div class="text-center">
                        <div class="flex mb-2">
                            <span class="uppercase m-auto">{{$evento['type']}}</span>
                            <span class="text-xs text-blue-300 m-auto">{{$evento['status']}}</span>
                        </div> 
                        <div class="bg-gray-300 p-2 overflow-y-scroll h-40 rounded-lg">
                            <span class="text-sm text-black"><b>Título:</b>{{$evento['description']}}</span> <br>
                            <span class="text-sm text-black"><b>Ubicación:</b> {{$evento['networkPointFromName']}}</span> <br>
                            <span class="text-sm text-black"><b>Impacto:</b> {{$evento['impact']}}</span>
                        </div>
                        <div class="mt-2 flex justify-center">
                            <span class="text-sm mx-2 m-auto">Click para ir a la ubicación</span>
                            <span class="mx-2"><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                              </svg>
                            </span>                            
                        </div>                        
                    </div>                   
                </div>
                </a>
                @endforeach    
            </div>
        </div>
            
        
                
    
    </div>      
    
    
    
  
</div>



