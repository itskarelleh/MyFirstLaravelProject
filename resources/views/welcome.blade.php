<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Tripit</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Sora:wght@100;200;300;400;500;600;700;800&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/iconoir-icons/iconoir@main/css/iconoir.css">
        @livewireStyles
        @vite('resources/css/app.css')
    </head>
    <body class="antialiased bg-neutral-100 min-h-screen">
        <div class="grid grid-cols-12">
            @include('components.navigation')
            <main class="text-2xl col-span-12 md:col-span-10 grid grid-cols-12 gap-4 p-4 w-full">
                <header class="col-span-12 grid grid-cols-12 gap-4 w- full">
                    <div class="col-span-8">
                        @include('components.search-bar')
                    </div>
                    <div class="col-span-4 flex flex-row justify-end items-center space-x-4 p-2 border-b border-neutral-300 ">
                        <img src="/flag-uk.png" class="w-4 h-4 overflow-hidden" alt="UK flag" />
                        <div class="relative w-6 h-6">
                            <div class="w-2 h-2 rounded-full bg-red-500 absolute top-0 right-1 z-10"></div>
                            <i class="iconoir-bell"></i>
                        </div>
                        <div class="flex flex-row items-center justify-evenly space-x-4">
                            <p class="text-xs font-bold">Nick McMilan</p>
                            <figure class="w-8 h-8 rounded-full overflow-hidden">
                                <img src="/nick-mcmilan.png" alt="Nick McMilan - Current User" />
                            </figure>
                        </div>
                    </div>
                </header>
                <section class="col-span-8 space-y-4">
                    <header class="grid grid-cols-12">
                        @livewire('city-carousel')
                        @include('components.expense-bubble-chart')
                    </header>
                    <section class="col-span-12 grid grid-cols-12 gap-4">

                        @include('components.card', [
                        'title' => 'Travel Date',
                        'mainContent' => '5 Days',
                        'subContent' => '<p class="text-xxs font-semibold">
                        01.09.2023 <i class="iconoir-data-transfer-both rotate-90 text-xxs text-blue-600 mr-1"></i> 05.09.2023
                        </p>',
                        'additionalClasses' => 'col-span-4'
                    ])
                        @include('components.card', [
                         'title' => 'Travel Date',
                         'mainContent' => '2 <small class="text-xs">/adults</small>',
                         'subContent' => '<div class="flex flex-row">
                             <div class="flex flex-row justify-evenly items-center w-full">
                                 <div class="relative flex flex-row">
                                    <img class="w-6 h-6 border-white border-2 rounded-full relative" src="https://images.pexels.com/photos/698532/pexels-photo-698532.jpeg?auto=compress&cs=tinysrgb&w=400" alt="" />
                                    <img class="w-6 h-6 border-white border-2 rounded-full relative right-2" src="https://images.pexels.com/photos/1520760/pexels-photo-1520760.jpeg?auto=compress&cs=tinysrgb&w=400" alt="" />
                                 </div>
                                 <div class="text-xxs font-semibold">Martha, Ashley</div>
                             </div>
                                 <button class>
                                     <i class="iconoir-plus"></i>
                                 </button>
                         </div>',
                         'additionalClasses' => 'col-span-4'
                     ])
                        @include('components.card', [
                        'title' => 'Travel Date',
                        'mainContent' => '5 Days',
                        'subContent' => '<div class="flex flex-row justify-between items-center w-full">
                            <p class="text-xxs font-semibold">
                                Poland <i class="iconoir-data-transfer-both rotate-90 text-xs text-neutral-500"></i> Italy
                            </p>
                            <p class="text-xxs font-semibold">
                                <i class="iconoir-airplane"></i> 2 h 25 min flight
                            </p>
                        </div>',
                        'additionalClasses' => 'col-span-4'
                    ])

                    </section>
                    <section class="h-56 col-span-12 grid grid-cols-12">
                        <!-- map and todo -->
                        @include('components.travel-map')
                        @livewire('todo-list')
                    </section>
                </section>
                <section class="grid grid-rows-6 col-span-4 p-4">
                    @include('components.september-calendar')
                </section>
            </main>
        </div>
    @livewireScripts
    </body>
</html>
