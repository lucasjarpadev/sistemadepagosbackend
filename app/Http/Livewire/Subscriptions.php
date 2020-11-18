<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\Models\Subscription;
use App\Models\Servicecontract;


class Subscriptions extends Component
{

    public $subscriptions,$servicescontracts;

    public function render()
    {

        $this->subscriptions = Subscription::all();

        $this->servicescontracts = Servicecontract::all();

        return view('livewire.subscriptions');
    }
}
