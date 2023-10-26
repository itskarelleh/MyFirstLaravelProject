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
    <div class="text-xs group flex flex-evenly transition-all ease-in-out">
        <div class="translate-x-8 delay-100 group-hover:translate-x-0 transition-all ease-in-out">
            @if($isEditing)
                <select wire:model="priority">
                    @foreach($priorities as $value => $label)
                        <option value="{{ $value }}">{{ $label }}</option>
                    @endforeach
                </select>
            @else
                @php
                    $priorityLabel = $priorities[$todo->priority];
                    $priorityColor = '';
                    switch ($todo->priority) {
                        case 0:
                            $priorityColor = 'bg-green-500 text-white';
                            break;
                        case 1:
                            $priorityColor = 'bg-yellow-500 text-gray-900';
                            break;
                        case 2:
                            $priorityColor = 'bg-red-500 text-white';
                            break;
                    }
                @endphp
                <span class="{{ $priorityColor }} w-18 py-2 px-4 rounded-full">{{ $priorityLabel }}</span>
            @endif
        </div>
        <div class="group">
            <div class="delay-200 scale-0 group-hover:scale-100 ml-4 transition-all ease-in-out">
                <button wire:click="{{ $isEditing ? 'saveEdit' : 'toggleEdit'}}"
                        class="transition-all ease-in-out {{ $isEditing ? 'iconoir-check' : 'iconoir-edit-pencil'}}">
                </button>
                <button class="transition-all ease-in-out iconoir-chat-bubble-empty">
                </button>
            </div>
        </div>
    </div>
</div>
