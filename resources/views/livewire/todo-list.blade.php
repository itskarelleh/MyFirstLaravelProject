<div class="col-span-12 md:col-span-8">
    <div class="w-full flex flex-row justify-between">
        <h2>To do’s</h2>
        <button class="text-xs font-semibold">Sort <i class="iconoir-data-transfer-both"></i></button>
    </div>
    <div>
            <ul class="space-y-2" wire:sortable="updateTodoOrder" id="todo-container">
                @foreach ($todos as $todo)
                    <li draggable="true" wire:sortable.item="{{ $todo['id'] }}" wire:key="{{ $todo->id }}"
                        class="todo-container flex flex-row">
                        <button wire:sortable.handle
                              class="text-sm material-symbols-outlined drag-handle cursor-move">
                            drag_indicator
                        </button>
                        <livewire:todo-item :todo="$todo" :key="$todo->id" />
                    </li>
                @endforeach
            </ul>
    </div>
    <!-- Button to toggle the form -->
    <button wire:click="toggleForm" class="text-xs font-semibold mt-2 w-full p-2 border border-neutral-800">Add new task +</button>

    <!-- Form to add new tasks -->
    @if ($showForm)
       <div class="bg-blue-900/30 fixed top-0 left-0 w-screen h-screen flex flex-col items-center justify-center">
           <div class="bg-white rounded-lg shadow-blue-950 p-8">
               <div class="flex flex-row justify-end">
                   <button wire:click="toggleForm">
                       <i class="iconoir-cancel"></i>
                   </button>
               </div>
               <form wire:submit.prevent="addTodo" class="mt-2">
                   <input type="text" wire:model="newTodo" placeholder="Add a new todo"/>
                   <button type="submit">Add</button>
               </form>
           </div>
       </div>
    @endif
</div>

@push('scripts')
    <script>
        // Initialize Dragula on the container
        var todoContainer = document.getElementById('todo-container');
        var drake = dragula([todoContainer]);

        // Listen for drag-and-drop events
        drake.on('drop', function (el, target, source, sibling) {
            // Livewire action to update the order
            var todoIds = Array.from(todoContainer.children).map(function (li) {
                return li.getAttribute('wire:key');
            });

        @this.updateTodoOrder(todoIds);
        });
    </script>
@endpush
