<?php

namespace App\Http\Livewire;

use Livewire\Component;

class CommunityAdminPanel extends Component
{
    public $community;
    public $postReports;

    public $active='community-admin-dashboard';

    protected $listeners = ['showDashboard' => 'changeActiveComponent'];

    public function mount($community, $postReports)
    {
        $this->community = $community;
        $this->postReports = $postReports;
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
