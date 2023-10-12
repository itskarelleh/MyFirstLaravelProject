<div>
    <div>
        <input type="text" wire:model="newTodo" placeholder="Add a new todo" />
        <button wire:click="addTodo">Add</button>
    </div>
        @if ($todos->count() > 0)
        <ul>
            @foreach ($todos as $todo)
                <li>
                    <x-todo-item :todo="$todo" :key="$todo->id" />
                </li>
            @endforeach
        </ul>
    @else
        <p>No items added yet.</p>
    @endif

</div>
