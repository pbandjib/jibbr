<?php

namespace App\Http\Livewire;

use Livewire\Component;

class CommunityAdminMenu extends Component
{

    protected $listeners = ['updateComponent'];

    public function updateComponent($component)
    {
        $this->emitUp('showDashboard', $component);
    }

    public function render()
    {
        return view('livewire.community-admin-menu');
    }
}
