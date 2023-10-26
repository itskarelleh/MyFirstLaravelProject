<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Log;
use Livewire\Component;

class TodoItem extends Component
{
    public $todo;
    public bool $isEditing = false;
    public $newTodoName = '';
    public $focusInput = false;
    public $todos; // Add an array to hold the list of todos.

    public $priority;

    public $priorities = [
        0 => 'Low',
        1 => 'Medium',
        2 => 'High'
    ];

    public function updatePriority() {
        if($this->priority) {
            $this->todo->update(['priority' => $this->priority]);
        }
    }

    public function render()
    {
        return view('livewire.todo-item');
    }

    public function toggleComplete()
    {
        $this->todo->update([
            'is_complete' => !$this->todo->is_complete
        ]);
    }

    public function toggleEdit() {
        $this->isEditing = !$this->isEditing;
        if ($this->isEditing) {
            // When editing begins, store the original value in $newTodoName.
            $this->newTodoName = $this->todo->name;
        }
    }

    public function saveEdit() {
        // Update the todo item with the new value if it has changed.
        if ($this->newTodoName !== $this->todo->name) {
            $this->todo->update([
                'name' => $this->newTodoName,
            ]);
        }

        if($this->todo->priority !== $this->priority) $this->updatePriority();

        // Exit editing mode.
        $this->isEditing = false;
    }
}
