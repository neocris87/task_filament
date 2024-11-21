<?php

namespace App\Livewire\Task;

use App\Models\Task;
use Livewire\Component;

class Index extends Component
{

    public $tasks ;

    public function mount(){
        $this->tasks = Task::with('user')->get();
    }

    public function render()
    {
        // dd($this->tasks);
        return view('livewire.task.index');
    }

    public function delete( $id){
        Task::destroy($id);
        $this->tasks = Task::with('user')->get();
    }
}
