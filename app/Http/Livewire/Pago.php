<?php

namespace App\Http\Livewire;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use App\Models\Pago as Pagos;
use App\Models\Team;


class Pago extends Component
{

    public $pagos,$usermanage,$mygroups,$blockedflag,$paycheck,$isowner;


    public function render()
    {
    
        $userlogged = Auth::User();
        $mygroups = $userlogged->currentTeam()->get("id");
        $team = Team::find($mygroups[0]->id);
        
        $owneruser = $team->owner;
        if($userlogged->id == $owneruser->id){
            $this->isowner = 1;
        }else{  
            $this->isowner = 0;
        }



        $cantusers = $team->allUsers()->count();

        // all users are owned for a default to one team
        if($cantusers >=2){
            $this->blockedflag = 1;
        }else{
            $this->blockedflag = 0;
        }

        
        $this->paycheck = 1;


        return view('livewire.pago');




    }




    
}
