<?php

namespace App\Livewire\Admin\CaseStudy;

use Livewire\Component;

class EditCaseStudyComponent extends Component
{
    public function render()
    {
        return view('livewire.admin.case-study.edit-case-study-component')->layout('livewire.admin.layouts.base');
    }
}
