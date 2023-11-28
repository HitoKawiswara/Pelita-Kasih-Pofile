<x-app-layout>
    <x-title-image :src="asset('storage/assets/Carousel1.png')">
        {{ __('EKSTRAKURIKULER') }}
    </x-title-image>

    {{-- Loop Start --}}
    @foreach ($ekskul as $kelari)
        <div class="py-10 @if($loop->iteration % 2 == 0) bg-primary-500 text-white @endif"
             id="{{ strtolower($kelari->nama) }}">
            @if($loop->iteration % 2 == 0)
                <x-title-lg>
                    {{ '' }}
                    <x-slot name='slot2'>{{ $kelari->nama }}</x-slot>
                </x-title-lg>
            @else
                <x-title-lg>
                    {{ $kelari->nama }}
                    <x-slot name='slot2'></x-slot>
                </x-title-lg>
            @endif

            <div class="flex justify-between items-center px-32 gap-10 @if($loop->iteration % 2 == 0) text-white @endif">
                <p class="text-justify text-lg leading-6 tracking-wide">
                    {{ $kelari->description }}
                </p>
                <div class="mt-4">
                    {{-- Check if image_path is set --}}
                    @if(isset($kelari->image_path) && is_array($kelari->image_path) && count($kelari->image_path) > 0)
                        {{-- Create an image slider using the Carousel component --}}
                        <div id="carousel-{{ $loop->index }}" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                @foreach ($kelari->image_path as $index => $image)
                                    <div class="carousel-item @if($index === 0) active @endif">
                                        <img class="d-block w-100 aspect-video h-72 rounded-lg" src="{{ asset('storage/' . $image) }}" alt="">
                                    </div>
                                @endforeach
                            </div>
                            <a class="carousel-control-prev" href="#carousel-{{ $loop->index }}" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carousel-{{ $loop->index }}" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    @else
                        {{-- Display a default image or placeholder --}}
                        <img class="aspect-video h-72 rounded-lg" src="{{ asset('storage/assets/Carousel1.png') }}" alt="">
                    @endif
                </div>
            </div>
        </div>
    @endforeach
    {{-- Loop End --}}
</x-app-layout>
