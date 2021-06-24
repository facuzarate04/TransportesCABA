<?php

namespace App\Http\Livewire;

use Livewire\Component;

class EcoBicis extends Component
{
    public $estacionselected;
    public $station;

    public function render()
    {

        $url = "https://apitransporte.buenosaires.gob.ar/ecobici/gbfs/stationInformation?client_id=23efff5d6de847d697d6b20c73d2bf78&client_secret=781D9ca8c0354108B50715170Ba77663";
        $json = file_get_contents($url);
        $datos = json_decode($json,true);
        $fecha = date('d/m/Y H:i',$datos['last_updated']);
        $estaciones = $datos['data']['stations'];

        if($this->estacionselected != null){
            
            $this->station = json_decode($this->estacionselected,true);
        }

        return view('livewire.eco-bicis',compact('fecha','estaciones'));
    }
}
