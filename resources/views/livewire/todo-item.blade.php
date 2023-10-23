@props(['todo'])

<div
    class="flex items-center justify-between space-x-2 w-full group hover:bg-white rounded-lg p-4 {{ $isEditing ? 'bg-white' : '' }}">
    <div class="flex flex-row">
        <input class="opacity-0 group-hover:opacity-100" type="checkbox"
               wire:click="toggleComplete" {{ $todo->is_complete ? 'checked' : '' }} />
        <input onchange="if (this.value !== '{{ $todo->name }}') { saveTodoName(this.value); }"
               {{ $isEditing ? '' : 'readonly' }}  class="text-sm bg-transparent text-slate-900 placeholder:text-slate-900 {{ $todo->is_complete ? 'line-through' : '' }}"
               value="{{ $todo->name }}"/>
    </div>
    <div>{{ $todo->assignees }}</div>
    <div class="text-xs group">
        <div class="hidden group-hover:block">
            <button wire:click="{{ $isEditing ? 'saveEdit' : 'toggleEdit'}}"
                    class="{{ $isEditing ? 'iconoir-check' : 'iconoir-edit-pencil'}}">
            </button>
            <button class="iconoir-chat-bubble-empty">
            </button>
        </div>
        <div class="block group-hover:hidden">
            @if ($todo->priority === 0)
                <span class="bg-green-500 text-white p-2 rounded-full">Low</span>
            @elseif ($todo->priority === 1)
                <span class="bg-yellow-500 text-gray-900 p-2 rounded-full">Medium</span>
            @else
                <span class="bg-red-500 text-white p-2 rounded-full">High</span>
            @endif
        </div>
    </div>
</div>
