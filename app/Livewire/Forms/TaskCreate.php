<?php

namespace App\Livewire\Forms;

use App\Models\Task;
use Livewire\Attributes\Validate;
use Livewire\Form;

class TaskCreate extends Form
{
    #[Validate('required|min:3')]
    public $title;

    #[Validate('required')]
    public $description;

    #[Validate('required' , message:"El campo usuario es obligatorio")]
    public $user_id;

    #[Validate('required')]
    public $completed = false;

    public function store(){
        $this->validate();
        // dd($this->all());
        Task::create($this->all());
        // $this->reset();

    }
}
