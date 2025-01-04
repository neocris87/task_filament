<?php

namespace App\Livewire\Task;

use App\Models\Task;
use Livewire\Component;

class Index extends Component
{

    public $tasks;

    public function mount()
    {
        $this->authorize('viewAny', Task::class);

        $this->tasks = Task::with('user')->get();
    }

    public function render()
    {
        return view('livewire.task.index');
    }

    public function delete($id)
    {

        $this->authorize('delete', Task::find($id));

        Task::destroy($id);
        $this->tasks = Task::with('user')->get();
    }
}
