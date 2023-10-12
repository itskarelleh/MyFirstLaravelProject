@props(['todo'])

<div class="flex items-center space-x-2 w-full ">
    <input type="checkbox" wire:click="toggleComplete" {{ $todo->is_complete ? 'checked' : '' }}>
    <input type="text" readonly wire:model="todo.name" class="bg-transparent text-slate-900 placeholder:text-slate-900 {{ $todo->is_complete ? 'line-through' : '' }}">
    <button wire:click="delete" class="text-red-500">Delete</button>
</div>
