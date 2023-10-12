<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Todo;

class TodoList extends Component
{
    public $todos;
    public $newTodo = '';

    public function mount()
    {
        $this->todos = Todo::all();
    }

    public function render()
    {
        return view('livewire.todo-list');
    }

    public function addTodo()
    {
        if ($this->newTodo) {
            Todo::create(['name' => $this->newTodo]);
            $this->newTodo = '';
            $this->todos = Todo::all();
        }
    }
}
