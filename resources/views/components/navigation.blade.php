<nav class="bg-white col-span-12 md:col-span-2 h-16 md:h-full flex flex-row items-center justify-center">
    <div class="fixed p-4 top-0 h-full grid grid-cols-12 md:grid-cols-none grid-rows-none md:grid-rows-12">
        <div class="col-span-10 h-16 w-full flex flex-row items-center justify-center">
            <a href="/" class="block w-[50%]">
                <img src={{url('/logo.png')}} width="" height="" alt="Tripit Logo"/>
            </a>
        </div>
        <div class="col-span-2 flex flex-row md:flex-col justify-between">
            <button class="block md:hidden w-full rounded-md p-2">
                <i class="iconoir-menu"></i>
            </button>
            <div>
                <div class="hidden md:block">
                    <button class="bg-blue-500 hover:bg-blue-600 transition-all ease-in-out text-white w-full rounded-md p-2 flex flex-row items-center justify-center">
                        New trip <i class="iconoir-plus text-xl"></i>
                    </button>
                    <ul class="flex flex-col space-y-2">
                        <x-link-with-icon iconClass="iconoir-home" label="Home" url="/" />
                        <x-link-with-icon iconClass="iconoir-bus" label="All trips" url="/" />
                        <x-link-with-icon iconClass="iconoir-airplane" label="Travels" url="/" />
                        <x-link-with-icon iconClass="iconoir-car" label="Transport" url="/" />
                        <x-link-with-icon iconClass="iconoir-building" label="Attractions" url="/" />
                    </ul>
                </div>
                <div class="hidden md:block">
                    <div class="bg-slate-200 p-4 rounded-md">
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
                        <div></div>
                    </div>
                    <button>
                        <i class=""></i>
                        <span>Support</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</nav>
