<x-app-layout>
    <x-title-image :src="asset('storage/assets/Carousel1.png')">
        {{ __('EKSTRAKURIKULER') }}
    </x-title-image>

    {{-- basket start --}}
    <div class="py-10" id="basket">
        <x-title-lg>
            {{ __('Basket') }}
            <x-slot name='slot2'></x-slot>
        </x-title-lg>
        <div class="flex justify-between items-center px-32 gap-10">
            <p class="text-justify text-lg leading-6 tracking-wide">
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Non maiores voluptates exercitationem repellat placeat est vitae, voluptatibus fugit asperiores pariatur dolore sunt neque deleniti officiis corporis aliquam voluptatem eaque nam praesentium cumque inventore aspernatur iure consequatur! Commodi mollitia maiores debitis, velit, fugiat quis optio ipsa quia dignissimos porro nam at?
            </p>
            <img class=" aspect-video h-72 rounded-lg" src="{{ asset('storage/assets/Carousel1.png') }}" alt="">
        </div>
    </div>
    {{-- basket end --}}
    
    {{-- sepak bola start --}}
    <div class="py-10 bg-primary-500" id="sepakbola">
        <x-title-lg>
            {{ __('') }}
            <x-slot name='slot2'>{{ __('Sepak Bola') }}</x-slot>
        </x-title-lg>
        <div class="flex justify-between items-center px-32 gap-10 text-white">
            <p class="text-justify text-lg leading-6 tracking-wide">
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Non maiores voluptates exercitationem repellat placeat est vitae, voluptatibus fugit asperiores pariatur dolore sunt neque deleniti officiis corporis aliquam voluptatem eaque nam praesentium cumque inventore aspernatur iure consequatur! Commodi mollitia maiores debitis, velit, fugiat quis optio ipsa quia dignissimos porro nam at?
            </p>
            <img class=" aspect-video h-72 rounded-lg" src="{{ asset('storage/assets/Carousel1.png') }}" alt="">
        </div>
    </div>
    {{-- sepak bola end --}}
    
    {{-- bulu tangkis start --}}
    <div class="py-10" id="bulutangkis">
        <x-title-lg>
            {{ __('Bulu Tangkis') }}
            <x-slot name='slot2'></x-slot>
        </x-title-lg>
        <div class="flex justify-between items-center px-32 gap-10">
            <p class="text-justify text-lg leading-6 tracking-wide">
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Non maiores voluptates exercitationem repellat placeat est vitae, voluptatibus fugit asperiores pariatur dolore sunt neque deleniti officiis corporis aliquam voluptatem eaque nam praesentium cumque inventore aspernatur iure consequatur! Commodi mollitia maiores debitis, velit, fugiat quis optio ipsa quia dignissimos porro nam at?
            </p>
            <img class=" aspect-video h-72 rounded-lg" src="{{ asset('storage/assets/Carousel1.png') }}" alt="">
        </div>
    </div>
    {{-- bulu tangkis end --}}

    {{-- voli start --}}
    <div class="py-10 bg-primary-500" id="voli">
        <x-title-lg>
            {{ __('') }}
            <x-slot name='slot2'>{{ __('Voli') }}</x-slot>
        </x-title-lg>
        <div class="flex justify-between items-center px-32 gap-10 text-white">
            <p class="text-justify text-lg leading-6 tracking-wide">
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Non maiores voluptates exercitationem repellat placeat est vitae, voluptatibus fugit asperiores pariatur dolore sunt neque deleniti officiis corporis aliquam voluptatem eaque nam praesentium cumque inventore aspernatur iure consequatur! Commodi mollitia maiores debitis, velit, fugiat quis optio ipsa quia dignissimos porro nam at?
            </p>
            <img class=" aspect-video h-72 rounded-lg" src="{{ asset('storage/assets/Carousel1.png') }}" alt="">
        </div>
    </div>
    {{-- voli end --}}
</x-app-layout>