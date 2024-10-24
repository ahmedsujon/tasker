<?php

namespace App\Livewire\Admin\CaseStudy;

use App\Models\CaseStudy;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\WithFileUploads;

class CaseStudyComponent extends Component
{
    use WithPagination, WithFileUploads;
    public $searchTerm, $sortingValue = 10, $delete_id, $edit_id, $roles;
    public $name, $email, $phone, $password, $role, $avatar, $uploadedAvatar;

    //Update Admin Status
    public function changeStatus($id, $status)
    {
        CaseStudy::where('id', $id)->update(['status' => ($status == 1 ? 0 : 1)]);
        $this->dispatch('success', ['message' => 'Status updated successfully.']);
    }

    //Delete Admin
    public function deleteConfirmation($id)
    {
        $this->delete_id = $id;
        $this->dispatch('show_delete_confirmation');
    }

    public function deleteData()
    {
        $caseStudy = CaseStudy::where('id', $this->delete_id)->first();
        $caseStudy->delete();

        $this->dispatch('case_study_deleted');
        $this->delete_id = '';
    }

    public function render()
    {
        $caseStudies = CaseStudy::where('status', 1)->orderBy('id', 'DESC')->paginate($this->sortingValue);
        $this->dispatch('reload_scripts');
        return view('livewire.admin.case-study.case-study-component', ['caseStudies' => $caseStudies])->layout('livewire.admin.layouts.base');
    }
}
