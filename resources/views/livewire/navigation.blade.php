<nav class="bg-white shadow-blue-950/10 shadow-sm fixed md:static z-50 top-0 md:m-0 w-full rounded-lg col-span-12 md:col-span-2 h-16 md:h-full flex flex-row items-center justify-center">
    <div class="h-full w-full md:w-auto static md:fixed md:p-4 top-0 flex flex-row md:flex-col">
        <div class="md:row-span-1 col-span-6 p-2 md:p-0 md:col-span-10 h-16 w-full flex flex-row items-center md:justify-center">
            <a href="/" class="block w-[50%]">
                <img src={{url('/logo.png')}} width="" height="" alt="Tripit Logo"/>
            </a>
        </div>
        <div class="md:row-span-5 h-full col-span-6 md:col-span-2 flex flex-row md:flex-col md:justify-between">
            <button class="block md:hidden w-full rounded-md p-2 z-50" wire:click="toggleMenu">
                <i class="iconoir-{{ $isOpen ? 'cancel' : 'menu'}}"></i>
            </button>
            <div class="flex flex-col items-center justify-between {{ $isOpen ? 'fixed md:static top-20 left-0 bg-white h-screen w-screen p-16' : 'hidden md:block' }}">
                <div class="relative top-24">
                    <button  class="relative mb-12 bg-blue-600 hover:bg-slate-900 transition-all ease-in-out text-white w-full rounded-lg font-semibold p-2 flex flex-row items-center justify-center text-sm">
                        New trip <i class="iconoir-plus text-xl"></i>
                    </button>
                    <ul class="flex flex-col space-y-4">
                        <x-link-with-icon iconClass="iconoir-home" label="Home" url="/" />
                        <x-link-with-icon iconClass="iconoir-bus" label="All trips" url="/" />
                        <x-link-with-icon iconClass="iconoir-airplane" label="Travels" url="/" />
                        <x-link-with-icon iconClass="iconoir-car" label="Transport" url="/" />
                        <x-link-with-icon iconClass="iconoir-building" label="Attractions" url="/" />
                    </ul>
                </div>
                <div class="absolute bottom-4 flex flex-col justify-evenly space-y-4">
                    <div class="bg-slate-100 p-4 rounded-md">
                        <div class="grid grid-cols-12">
                            <div class="col-span-4">
                                <img src={{url('/cloudy.png')}} alt="cloudy" />
                            </div>
                            <div class="col-span-7">
                                <h2 class="text-3xl font-bold">30&deg;</h2>
                            </div>
                            <button class="col-span-1">
                                <span class="sr-only">See more options</span>
                                <i class="iconoir-more-vert"></i>
                            </button>
                        </div>
                        <!-- forecast days-->
                        @livewire('forecast')
                    </div>
                    <button class="rounded-lg border p-4 w-full">
                        <i class="iconoir-chat-bubble-question text-xl"></i>
                        <span>Support</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</nav>
