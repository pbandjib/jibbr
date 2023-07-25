<?php

namespace App\Http\Livewire;

use App\Models\Community;
use Livewire\Component;

class CommunityAdminPanel extends Component
{
    public $community;

    public $active='community-admin-dashboard';

    protected $listeners = ['showDashboard' => 'changeActiveComponent'];

    public function mount(Community $community)
    {
        $this->community = $community;
    }

    public function changeActiveComponent($component)
    {
        $this->active = $component;
    }

    public function render()
    {
        return view('livewire.community-admin-panel');
    }
}
