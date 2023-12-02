<x-app-layout>
    <x-title-image :src="asset('storage/assets/Carousel1.png')">
        {{ __('EKSTRAKURIKULER') }}
    </x-title-image>

    {{-- Loop Start --}}
    @foreach ($ekskul as $item)
        <div class="py-10 @if($loop->iteration % 2 == 0) bg-primary-500 text-white @endif"
             id="{{ strtolower($item->name) }}">
            @if($loop->iteration % 2 == 0)
                <x-title-lg>
                    {{ '' }}
                    <x-slot name='slot2'>{{ $item->name }}</x-slot>
                </x-title-lg>
            @else
                <x-title-lg>
                    {{ $item->name }}
                    <x-slot name='slot2'></x-slot>
                </x-title-lg>
            @endif

            <div class="flex justify-between items-center px-32 gap-10 @if($loop->iteration % 2 == 0) text-white @endif">
                <p class="text-justify text-lg leading-6 tracking-wide mr-10">
                    {{ $item->description }}
                </p>
                <div class="mt-4">
                        <div class="swiper swiper5 max-w-[400px]">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide rounded-lg">
                                    <img src="{{ asset('storage/images/ekstra/' . $item->img) }}" class="rounded-lg">
                                </div>
                                <div class="swiper-slide rounded-lg">
                                    <img src="{{ asset('storage/images/ekstra/' . $item->img1) }}" class="rounded-lg">
                                </div>
                                <div class="swiper-slide rounded-lg">
                                    <img src="{{ asset('storage/images/ekstra/' . $item->img2) }}" class="rounded-lg">
                                </div>
                            </div>
                            {{-- pagination --}}
                            <div class="swiper-pagination swiper-pagination5 scale-75"></div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
    {{-- Loop End --}}
</x-app-layout>
