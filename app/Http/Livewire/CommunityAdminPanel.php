<?php

namespace App\Http\Livewire;

use Livewire\Component;

class CommunityAdminPanel extends Component
{
    public $active='community-admin-dashboard';

    protected $listeners = ['showDashboard' => 'changeActiveComponent'];

    public function changeActiveComponent($component)
    {
        $this->active = $component;
    }

    public function render()
    {
        return view('livewire.community-admin-panel');
    }
}
