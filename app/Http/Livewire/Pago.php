<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Pago as Pagos;


class Pago extends Component
{

    public $pagos;


    public function render()
    {
        // show all payments 

        $this->pagos = $Pagos::all();

        return view('livewire.pago');
    }




    
}
