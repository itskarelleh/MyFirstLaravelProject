<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Todo;

class TodoList extends Component
{
    public $todos;

    public $showForm;
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

    public function toggleForm() {
        $this->showForm = !$this->showForm;
    }

    public function updateTodoOrder($todos)
    {
        foreach ($todos as $index => $todoId) {
            $todo = Todo::find($todoId);
            $todo->update(['position' => $index + 1]);
        }

        $this->todos = Todo::orderBy('position')->get();
    }

}
