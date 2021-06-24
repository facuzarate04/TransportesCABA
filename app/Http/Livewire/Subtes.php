<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Subtes extends Component
{
    public $unidadselected;
    public $unidads;

    public function render()
    {
        $url = "https://apitransporte.buenosaires.gob.ar/subtes/forecastGTFS?client_id=23efff5d6de847d697d6b20c73d2bf78&client_secret=781D9ca8c0354108B50715170Ba77663";
        $json = file_get_contents($url);
        $datos = json_decode($json,true);
        $fecha = date('d/m/Y H:i',$datos['Header']['timestamp']);
        $unidades = $datos['Entity'];

        if($this->unidadselected != null){
            
            $this->unidads = json_decode($this->unidadselected,true);
        }

        return view('livewire.subtes', compact('unidades','fecha'));
    }
}
