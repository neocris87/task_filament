<?php

namespace App\Livewire\Task;

use App\Livewire\Forms\TaskCreate;
use App\Models\Task;
use App\Models\User;
use Livewire\Component;

class Create extends Component
{

    public $users;
    public TaskCreate $form;

    // public $title;
    // public $description;
    // public $user_id;
    // public $completed;

    public function mount(){
        $this->users = User::all();
    }

    public function render()
    {
        return view('livewire.task.create');
    }

    public function store(){
        $this->form->store();
        $this->redirect('/tasks');
    }


}
