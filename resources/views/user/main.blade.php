<x-app-layout>
    {{-- carousel start --}}
    <div class="swiper swiper1">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <x-title-with-subtitle-image :src="asset('storage/assets/Carousel1.png')">
                    <x-slot name="header">
                        {{ __('Example Slide 1') }}
                    </x-slot>
                    <x-slot name="desc">
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Accusantium voluptatem repellendus ipsa illo quibusdam, eaque ullam alias sint sunt atque perferendis, rem culpa. Qui explicabo, magnam, molestiae sapiente, at quas omnis fugiat placeat pariatur vel eos? Pariatur molestias vel sint dolores, enim soluta placeat cumque doloremque est. Sapiente, voluptates numquam! Itaque culpa deserunt sapiente aspernatur vero nisi ut amet voluptatem reiciendis qui, ipsam ullam incidunt esse. Ipsa commodi sequi fugiat earum, architecto minima exercitationem animi blanditiis ducimus velit doloremque tempore facilis eum quos vero eius, illum ut iste cumque. Nisi exercitationem vel assumenda quam? Voluptatum numquam adipisci blanditiis et dolorum?
                    </x-slot>
                 </x-title-with-subtitle-image>
            </div>
            <div class="swiper-slide">
                <x-title-with-subtitle-image :src="asset('storage/assets/Carousel1.png')">
                    <x-slot name="header">
                        {{ __('Example Slide 1') }}
                    </x-slot>
                    <x-slot name="desc">
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Accusantium voluptatem repellendus ipsa illo quibusdam, eaque ullam alias sint sunt atque perferendis, rem culpa. Qui explicabo, magnam, molestiae sapiente, at quas omnis fugiat placeat pariatur vel eos? Pariatur molestias vel sint dolores, enim soluta placeat cumque doloremque est. Sapiente, voluptates numquam! Itaque culpa deserunt sapiente aspernatur vero nisi ut amet voluptatem reiciendis qui, ipsam ullam incidunt esse. Ipsa commodi sequi fugiat earum, architecto minima exercitationem animi blanditiis ducimus velit doloremque tempore facilis eum quos vero eius, illum ut iste cumque. Nisi exercitationem vel assumenda quam? Voluptatum numquam adipisci blanditiis et dolorum?
                    </x-slot>
                 </x-title-with-subtitle-image>
            </div>
        </div>

        <!-- pagination -->
        <div class="swiper-pagination swiper-pagination1"></div>

        <!-- navigation buttons -->
        <div class="swiper-button-prev swiper-button-prev1"></div>
        <div class="swiper-button-next swiper-button-next1"></div>
    </div>
    {{-- carousel end --}}

    <!-- Service Start -->
    <div class="flex py-10 justify-center gap-20 bg-primary-500">
        <div
            class="px-5 py-14 w-60 text-xl text-white text-center rounded-lg bg-primary-500 hover:text-primary-500 hover:bg-white hover:scale-110   transition-all  ease-in-out duration-300 cursor-default">
            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-book h-16 mx-auto mb-5"
                viewBox="0 0 16 16">
                <path
                    d="M1 2.828c.885-.37 2.154-.769 3.388-.893 1.33-.134 2.458.063 3.112.752v9.746c-.935-.53-2.12-.603-3.213-.493-1.18.12-2.37.461-3.287.811V2.828zm7.5-.141c.654-.689 1.782-.886 3.112-.752 1.234.124 2.503.523 3.388.893v9.923c-.918-.35-2.107-.692-3.287-.81-1.094-.111-2.278-.039-3.213.492V2.687zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783z" />
            </svg>
            <h1 class="mb-3 font-semibold">Akreditasi A</h1>
            <p class="font-light">Sekolah Terakreditasi Unggul</p>
        </div>
        <div
            class="px-5 py-14 w-60 text-xl text-center rounded-lg bg-primary-500 text-white hover:text-primary-500 hover:bg-white transition-all  ease-in-out duration-300 hover:scale-110 cursor-default">
            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                class="bi bi-building-fill-check h-16 mx-auto mb-5" viewBox="0 0 16 16">
                <path
                    d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7Zm1.679-4.493-1.335 2.226a.75.75 0 0 1-1.174.144l-.774-.773a.5.5 0 0 1 .708-.708l.547.548 1.17-1.951a.5.5 0 1 1 .858.514Z" />
                <path
                    d="M2 1a1 1 0 0 1 1-1h10a1 1 0 0 1 1 1v7.256A4.493 4.493 0 0 0 12.5 8a4.493 4.493 0 0 0-3.59 1.787A.498.498 0 0 0 9 9.5v-1a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .39-.187A4.476 4.476 0 0 0 8.027 12H6.5a.5.5 0 0 0-.5.5V16H3a1 1 0 0 1-1-1V1Zm2 1.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5Zm3 0v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5Zm3.5-.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1ZM4 5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5ZM7.5 5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1Zm2.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5ZM4.5 8a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1Z" />
            </svg>
            <h1 class="mb-3 font-semibold">Fasilitas</h1>
            <p class="font-light">Fasilitas yang Lengkap dan Memadai</p>
        </div>
        <div
            class="px-5 py-14 w-60 text-xl text-center rounded-lg bg-primary-500 text-white hover:text-primary-500 hover:bg-white transition-all  ease-in-out duration-300 hover:scale-110 cursor-default">
            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-mortarboard-fill h-16 mx-auto mb-5"
                viewBox="0 0 16 16">
                <path
                    d="M8.211 2.047a.5.5 0 0 0-.422 0l-7.5 3.5a.5.5 0 0 0 .025.917l7.5 3a.5.5 0 0 0 .372 0L14 7.14V13a1 1 0 0 0-1 1v2h3v-2a1 1 0 0 0-1-1V6.739l.686-.275a.5.5 0 0 0 .025-.917l-7.5-3.5Z" />
                <path
                    d="M4.176 9.032a.5.5 0 0 0-.656.327l-.5 1.7a.5.5 0 0 0 .294.605l4.5 1.8a.5.5 0 0 0 .372 0l4.5-1.8a.5.5 0 0 0 .294-.605l-.5-1.7a.5.5 0 0 0-.656-.327L8 10.466 4.176 9.032Z" />
            </svg>
            <h1 class="mb-3 font-semibold">Generasi Unggul</h1>
            <p class="font-light">Menghasilkan Generasi Unggul</p>
        </div>
    </div>
    <!-- Service End -->

    {{-- berita start --}}
    <div class="py-10" data-aos="fade-right">
        <x-title-lg>
            Berita
            <x-slot name="slot2">
                Terkini
            </x-slot>
        </x-title-lg>
        <div class="swiper swiper2">
            <div class="swiper-wrapper">
                
                {{-- slide start --}}
                @foreach ($newsList as $news)
                <x-news-card :src="$news->thumbnail" alt="news-cover">
                    <x-slot name="header">
                        {{ $news->title }}
                    </x-slot>
                    <x-slot name="content">
                       {{ $news->content }}
                    </x-slot>
                </x-news-card>
                @endforeach
                {{-- slide end --}}
    
            </div>

            <!-- pagination -->
            <div class="swiper-pagination swiper-pagination2"></div>

            <!-- navigation buttons -->
            <div class="swiper-button-prev swiper-button-prev2"></div>
            <div class="swiper-button-next swiper-button-next2"></div>
        </div>
    </div>
    {{-- berita end --}}
</x-app-layout>
