<?php

namespace App\Livewire\Client\Jobs;

use Illuminate\Support\Facades\DB;
use Livewire\Component;

class JobsComponent extends Component
{
    public $categories;
    public $title, $skill_search, $skills = [], $selectedItems = [], $list_status = 0;

    public function updatedSkillSearch()
    {
        $this->categories = DB::table('categories')->select('id', 'parent_id', 'name')->where('name', 'like', '%'.$this->skill_search.'%')->get();
    }
    public function closeSuggestion()
    {
        $this->list_status = 0;
    }
    public function showSuggestion()
    {
        $this->categories = DB::table('categories')->select('id', 'parent_id', 'name')->get();
        $this->list_status = 1;
    }
    public function addSkills($id, $name)
    {
        if (($key = array_search($id, $this->skills)) !== false) {
            // If the ID is already in the array, remove it
            unset($this->skills[$key]);
            unset($this->selectedItems[$key]);
        } else {
            // Otherwise, add it to the array
            $this->skills[] = $id;
            $this->selectedItems[] = $name;
        }

        // Re-index the array to maintain proper order (optional)
        $this->skills = array_values($this->skills);
    }

    public function updated($fields)
    {
        $this->validateOnly($fields, [
            'title' => 'required',
            'skills' => 'required'
        ]);
    }

    public function nextStep()
    {
        $this->validate([
            'title' => 'required',
            'skills' => 'required'
        ]);

        $jobData = [
            'title' => $this->title,
            'skills' => $this->skills
        ];

        session()->put('jobData', $jobData);
        return redirect()->route('client.jobPostTwo');
    }

    public function render()
    {
        return view('livewire.client.jobs.jobs-component')->layout('livewire.client.layouts.base');
    }
}
