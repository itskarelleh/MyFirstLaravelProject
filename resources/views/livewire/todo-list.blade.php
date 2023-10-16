<div class="col-span-8">
    <div class="w-full flex flex-row justify-between">
        <h2>To do’s</h2>
        <button class="text-xs font-semibold">Sort <i class="iconoir-data-transfer-both"></i></button>
    </div>
    @if ($todos->count() > 0)
        <ul>
            @foreach ($todos as $todo)
                <li>
                    <x-todo-item :todo="$todo" :key="$todo->id"/>
                </li>
            @endforeach
        </ul>
    @else
        <p>No items added yet.</p>
    @endif
    <div>
        <input type="text" wire:model="newTodo" placeholder="Add a new todo"/>
        <button wire:click="addTodo">Add</button>
    </div>

</div>
