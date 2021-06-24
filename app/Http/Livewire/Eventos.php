<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Eventos extends Component
{
    public function render()
    {
        $año= date('Y');
        $mes = date('m');
        $url = "https://apitransporte.buenosaires.gob.ar/transito/v1/eventos?month=$año-$mes&provider=1&client_id=23efff5d6de847d697d6b20c73d2bf78&client_secret=781D9ca8c0354108B50715170Ba77663";
        $json = file_get_contents($url);
        $datos = json_decode($json,true);
        $eventos = $datos['list'];

        return view('livewire.eventos',compact('eventos'));
    }
}
