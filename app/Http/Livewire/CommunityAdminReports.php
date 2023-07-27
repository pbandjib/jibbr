<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\PostReport;

class CommunityAdminReports extends Component
{
    public $postReports = [];

    public function mount(PostReport $postReports)
    {
        dd(request()->route());
        foreach ($postReports as $postReport) {
            array_push($this->postReports, $postReport);
            var_dump($postReport);
        }
    }

    public function render()
    {
        return view('livewire.community-admin-reports');
    }
}
