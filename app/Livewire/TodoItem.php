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

    public function render()
    {
        return view('livewire.todo-item');
    }

    public function toggleComplete()
    {
        $this->todo->update([
            'is_complete' => !$this->todo->is_complete
        ]);
//        $this->todo->save();
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
        if ($this->newTodoName !== $this->todo->name || $this->newTodoName->length >= 1) {
            $this->todo->update([
                'name' => $this->newTodoName,
            ]);
        }

        // Exit editing mode.
        $this->isEditing = false;
    }

}
