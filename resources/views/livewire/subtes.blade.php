<div class="text-center p-10 ">

<div class="flex justify-end bg-gray-400 p-2">
    <button onclick="closeSection('subte')" class="p-1 bg-red-700 rounded-xl" >Cerrar</button>
</div>

<div class=" w-full text-white bg-gray-800 h-auto py-10 ">

    <div class=" text-center ">
        <h1 class=" md:text-4xl sm:text-2xl text-xl mb-2"> Subtes </h1>
        <h3 class="text-center text-xl my-2"> {{$fecha}} </h3>
        <div class="flex px-20 bg-gray-700">
            <h3 class="text-center text-md m-auto my-2">Selecciona una Linea de Subte </h3>
            <select wire:model="unidadselected" class="text-black m-auto" name="unidad" id="">
            @foreach ($unidades as $unidad)
                <option value="{{json_encode($unidad,true)}}">{{ $unidad['ID'] }} </option>
            @endforeach
            </select>
        </div>
        
        <hr class="W-1/4 mx-auto mb-5 shadow-4xl">
        
    </div>
        <div class="sm:w-full w-3/4  my-2 lg:mx-2">       
            <section>
                @if ($unidads != null)  
                        
                    <div class="container">
                        <h3 class="text-center text-md m-auto my-2 font-bold">{{$unidads['ID']}} </h3>
                        <b class="font-semibold">Hora de inicio del recorrido: </b>
                        <b class="text-center text-md m-auto my-2 font-bold"> {{$unidads['Linea']['start_time']}} hs</b>
                        <table class="text-left md:w-2/3 text-center m-auto">
                            <thead class="bg-black flex text-white w-full">
                                <tr class="flex w-full mb-2">
                                    <th class="p-4 w-1/4">ID Estacion</th>
                                    <th class="p-4 w-1/4">Nombre Estacion</th>
                                    <th class="p-4 w-1/4">Llegada</th>
                                    <th class="p-4 w-1/4">Demora (Minutos)</th>
                                </tr>
                            </thead>    
                            <tbody class="bg-gray-300 text-black flex flex-col items-center justify-between overflow-y-scroll w-full" style="height: 50vh;">
                                @foreach ($unidads['Linea']['Estaciones'] as $estacion)
                                <tr class="flex w-full ">
                                    <td class="p-4 w-1/4">{{$estacion['stop_id']}}</td>
                                    <td class="p-4 w-1/4">{{$estacion['stop_name']}}</td>
                                    <td class="p-4 w-1/4">{{date('H:i',$estacion['arrival']['time'])}} hs</td>
                                    <td class="p-4 w-1/4">{{date('i:s',$estacion['arrival']['delay'])}}</td>				
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
        
                @endif
                
            </section>

        </div>      

</div>     

</div>



