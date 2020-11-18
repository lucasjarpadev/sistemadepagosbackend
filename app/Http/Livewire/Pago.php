<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Pago as Pagos;


class Pago extends Component
{

    public $pagos;


    public function render()
    {

        $this->pagos = $Pagos::all();

        return view('livewire.pago');
    }
}
