<?php

namespace App\View\Components;

use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class TodoItem extends Component
{
    public $todo;
//
//    public function __construct($todo, $isComplete)
//    {
//        $this->todo = $todo;
//        $this->isComplete = $isComplete;
//    }

    public function toggleComplete()
    {
        $this->todo->update([
            'is_complete' => !$this->todo->is_complete,
        ]);
    }

    public function render()
    {
        return view('components.todo-item');
    }



}
