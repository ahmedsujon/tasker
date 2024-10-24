<?php

namespace App\Livewire\Admin\CaseStudy;

use Livewire\Component;
use App\Models\CaseStudy;
use Livewire\WithPagination;
use Livewire\WithFileUploads;

class AddCaseStudyComponent extends Component
{
    use WithPagination, WithFileUploads;

    public $title, $thumb, $status, $bg_image, $card_thumb, $card_title, $card_heading, $public;

    public function updated($fields)
    {
        $this->validateOnly($fields, [
            'title' => 'required',
            'thumb' => 'required|file|mimes:jpg,png,jpeg',
        ]);
    }

    public function storeData()
    {
        $this->validate([
            'title' => 'required',
            'card_title' => 'required',
            'thumb' => 'required|file|mimes:jpg,png,jpeg',
        ]);

        $caseStudy = new CaseStudy();
        $caseStudy->title = $this->title;

        $caseStudy->card_title = $this->card_title;
        $caseStudy->card_heading = $this->card_heading;

        if ($this->thumb) {
            $file = uploadFile('image', 40, 'case-study/', 'admin', $this->thumb);
            $caseStudy->thumb = $file;
        }
        if ($this->card_thumb) {
            $file = uploadFile('image', 40, 'case-study/', 'admin', $this->card_thumb);
            $caseStudy->card_thumb = $file;
        }
        if ($this->bg_image) {
            $file = uploadFile('image', 40, 'case-study/', 'admin', $this->bg_image);
            $caseStudy->bg_image = $file;
        }

        dd($caseStudy);

        $caseStudy->save();
        $this->dispatch('success', ['message' => 'Case study added successfully']);
    }

    function render()
    {
        return view('livewire.admin.case-study.add-case-study-component')->layout('livewire.admin.layouts.base');
    }
}
