<x-app-layout>
    <x-title-image :src="asset('storage/assets/Carousel1.png' )">
        {{ __('FASILITAS') }}
    </x-title-image>

    {{-- lapangan start --}}
    <div class="mt-10 flex h-96" id="lapangan">
        <div class="my-auto ml-32">
            <x-title-lg2>
                {{ __('Lapangan Olahraga') }}
                <x-slot name='slot2'></x-slot>
            </x-title-lg2>
            <p class="text-lg leading-6 tracking-wide">
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Non maiores voluptates exercitationem repellat placeat est vitae, voluptatibus fugit asperiores pariatur dolore sunt neque deleniti officiis corporis aliquam voluptatem eaque nam praesentium cumque inventore aspernatur iure consequatur! Commodi mollitia maiores debitis, velit, fugiat quis optio ipsa quia dignissimos porro nam at?
            </p>
        </div>
        <img class="aspect-video rounded-bl-full shadow-lg" src="{{ asset('storage/assets/Carousel1.png') }}" alt="">
    </div>
    {{-- lapangan end --}}

    {{-- perpus start --}}
    <div class="mt-10 flex h-96 bg-primary-500 text-white  border-border-red-500" id="perpus">
        <img class=" aspect-video rounded-br-full shadow-lg" src="{{ asset('storage/assets/Carousel1.png') }}" alt="">
        <div class="my-auto mr-32 text-end">
            <x-title-lg2>
                {{ __('') }}
                <x-slot name='slot2'>{{ __('Perpustakaan') }}</x-slot>
            </x-title-lg2>
            <p class="text-lg leading-6 tracking-wide">
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Non maiores voluptates exercitationem repellat placeat est vitae, voluptatibus fugit asperiores pariatur dolore sunt neque deleniti officiis corporis aliquam voluptatem eaque nam praesentium cumque inventore aspernatur iure consequatur! Commodi mollitia maiores debitis, velit, fugiat quis optio ipsa quia dignissimos porro nam at?
            </p>
        </div>
    </div>
    {{-- perpus end --}}

    {{-- lab start --}}
    <div class="mt-10 flex h-96" id="lab">
        <div class="my-auto ml-32">
            <x-title-lg2>
                {{ __('Laboratorium') }}
                <x-slot name='slot2'></x-slot>
            </x-title-lg2>
            <p class="text-lg leading-6 tracking-wide">
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Non maiores voluptates exercitationem repellat placeat est vitae, voluptatibus fugit asperiores pariatur dolore sunt neque deleniti officiis corporis aliquam voluptatem eaque nam praesentium cumque inventore aspernatur iure consequatur! Commodi mollitia maiores debitis, velit, fugiat quis optio ipsa quia dignissimos porro nam at?
            </p>
        </div>
        <img class=" aspect-video rounded-bl-full shadow-lg" src="{{ asset('storage/assets/Carousel1.png') }}" alt="">
    </div>
    {{-- lab end --}}

    {{-- aula start --}}
    <div class="mt-10 flex h-96 bg-primary-500 text-white  border-border-red-500" id="aula">
        <img class=" aspect-video rounded-br-full shadow-lg" src="{{ asset('storage/assets/Carousel1.png') }}" alt="">
        <div class="my-auto mr-32 text-end">
            <x-title-lg2>
                {{ __('') }}
                <x-slot name='slot2'>{{ __('Aula') }}</x-slot>
            </x-title-lg2>
            <p class="text-lg leading-6 tracking-wide">
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Non maiores voluptates exercitationem repellat placeat est vitae, voluptatibus fugit asperiores pariatur dolore sunt neque deleniti officiis corporis aliquam voluptatem eaque nam praesentium cumque inventore aspernatur iure consequatur! Commodi mollitia maiores debitis, velit, fugiat quis optio ipsa quia dignissimos porro nam at?
            </p>
        </div>
    </div>
    {{-- aula end --}}
</x-app-layout>
