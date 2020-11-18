<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Pago as Pagos;


class Pago extends Component
{

    public $pagos,$usermanage,$mygroups,$blockedflag;


    public function render()
    {
        // show all payments 

        // $this->pagos = $Pagos::all();
        $this->blockedflag = 0;

        return view('livewire.pago');
    }




    
}
