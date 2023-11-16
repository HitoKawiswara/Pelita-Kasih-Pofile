<x-app-layout>
    <x-title-image :src="asset('storage/assets/Carousel1.png' )">
        {{ __('FASILITAS') }}
    </x-title-image>

    {{-- lapangan start --}}
    <div class="mt-10 py-10" id="lapangan">
        <x-title-lg>
            {{ __('Lapangan Olahraga') }}
            <x-slot name='slot2'></x-slot>
        </x-title-lg>
        <div class="flex justify-between items-center px-32 gap-10">
            <p class="text-justify text-lg leading-6 tracking-wide">
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Non maiores voluptates exercitationem repellat placeat est vitae, voluptatibus fugit asperiores pariatur dolore sunt neque deleniti officiis corporis aliquam voluptatem eaque nam praesentium cumque inventore aspernatur iure consequatur! Commodi mollitia maiores debitis, velit, fugiat quis optio ipsa quia dignissimos porro nam at?
            </p>
            <img class=" aspect-video h-64 m-5 rounded-lg" src="{{ asset('storage/assets/Carousel1.png') }}" alt="">
        </div>
    </div>
    {{-- lapangan end --}}

    {{-- perpus start --}}
    <div class="mt-10 bg-primary-500 py-10 text-white" id="perpus">
        <x-title-lg>
            {{ __('') }}
            <x-slot name='slot2'>
                {{ __('Perpustakaan') }}
            </x-slot>
        </x-title-lg>
        <div class="flex justify-between items-center px-32 gap-10">
            <img class=" aspect-video h-64 m-5 rounded-lg" src="{{ asset('storage/assets/Carousel1.png') }}" alt="">
            <p class="text-justify text-lg leading-6 tracking-wide">
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Non maiores voluptates exercitationem repellat placeat est vitae, voluptatibus fugit asperiores pariatur dolore sunt neque deleniti officiis corporis aliquam voluptatem eaque nam praesentium cumque inventore aspernatur iure consequatur! Commodi mollitia maiores debitis, velit, fugiat quis optio ipsa quia dignissimos porro nam at?
            </p>
        </div>
    </div>
    {{-- perpus end --}}

    {{-- lab start --}}
    <div class="mt-10 py-10" id="lab">
        <x-title-lg>
            {{ __('Laboratorium') }}
            <x-slot name='slot2'></x-slot>
        </x-title-lg>
        <div class="flex justify-between items-center px-32 gap-10">
            <p class="text-justify text-lg leading-6 tracking-wide">
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Non maiores voluptates exercitationem repellat placeat est vitae, voluptatibus fugit asperiores pariatur dolore sunt neque deleniti officiis corporis aliquam voluptatem eaque nam praesentium cumque inventore aspernatur iure consequatur! Commodi mollitia maiores debitis, velit, fugiat quis optio ipsa quia dignissimos porro nam at?
            </p>
            <img class=" aspect-video h-64 m-5 rounded-lg" src="{{ asset('storage/assets/Carousel1.png') }}" alt="">
        </div>
    </div>
    {{-- lab end --}}

     {{-- aula start --}}
     <div class="mt-10 bg-primary-500 py-10 text-white" id="aula">
        <x-title-lg>
            {{ __('') }}
            <x-slot name='slot2'>
                {{ __('Aula') }}
            </x-slot>
        </x-title-lg>
        <div class="flex justify-between items-center px-32 gap-10">
            <img class=" aspect-video h-64 m-5 rounded-lg" src="{{ asset('storage/assets/Carousel1.png') }}" alt="">
            <p class="text-justify text-lg leading-6 tracking-wide">
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Non maiores voluptates exercitationem repellat placeat est vitae, voluptatibus fugit asperiores pariatur dolore sunt neque deleniti officiis corporis aliquam voluptatem eaque nam praesentium cumque inventore aspernatur iure consequatur! Commodi mollitia maiores debitis, velit, fugiat quis optio ipsa quia dignissimos porro nam at?
            </p>
        </div>
    </div>
    {{-- aula end --}}
</x-app-layout>
