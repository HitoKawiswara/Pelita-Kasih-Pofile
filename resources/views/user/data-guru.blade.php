<x-app-layout>
    <x-title-image :src="asset('storage/assets/Carousel1.png')">
        {{ __('DATA GURU') }}
    </x-title-image>
    <div class="bg-primary-500 py-20">
        <x-title-lg>
            {{ __('') }}
            <x-slot name="slot2">{{ __('Sambutan Kepala Sekolah') }}</x-slot>
        </x-title-lg>
        <div class="flex mx-32 text-white">
            <p class=" text-lg tracking-wide leading-6">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
            <img src="{{ asset('storage/images/guru/profileEx.png') }}" alt="" class="rounded-lg h-64 aspect-video object-cover mr-10 ml-20">
        </div>
    </div>

    <div class=" mt-10">
        {{-- kepala & wakil kepala start --}}
        <div class="flex justify-center gap-32">
            <div class="my-card-container relative overflow-hidden">
                <div class="image-overlay"></div>
                <div class="w-64 rounded-lg bg-white shadow-lg my-10 mx-5 md:mx-2 overflow-hidden my-card">
                    <img src="{{ asset('storage/images/guru/profileEx.png') }}" alt="" class="rounded-max-h-60 w-full object-cover">
                    <ul class="text-center my-5">
                        <li class="text-2xl leading-10 font-semibold cursor-pointer">Nama Guru</li>
                        <li class="text-xl text-gray-500 cursor-pointer">Kepala Sekolah</li>
                    </ul>
                </div>
                <div class="absolute top-0 left-0 w-full h-full overflow-hidden z-10 pointer-events-none">
                    <div class="glass-effect"></div>
                </div>
            </div>
            <div class="my-card-container relative overflow-hidden">
                <div class="image-overlay"></div>
                <div class="w-64 rounded-lg bg-white shadow-lg my-10 mx-5 md:mx-2 overflow-hidden my-card">
                    <img src="{{ asset('storage/images/guru/profileEx.png') }}" alt="" class="rounded-max-h-60 w-full object-cover">
                    <ul class="text-center my-5">
                        <li class="text-2xl leading-10 font-semibold cursor-pointer">Nama Guru</li>
                        <li class="text-xl text-gray-500 cursor-pointer">Wakil Kepala Sekolah</li>
                    </ul>
                </div>
                <div class="absolute top-0 left-0 w-full h-full overflow-hidden z-10 pointer-events-none">
                    <div class="glass-effect"></div>
                </div>
            </div>
        </div>
        {{-- kepala & wakil kepala end --}}
    
        {{-- data start --}}
        <div class="grid grid-cols-5">
            <div class="flex justify-center">
                <div class="my-card-container relative overflow-hidden">
                    <div class="image-overlay"></div>
                    <div class="w-64 rounded-lg bg-white shadow-lg my-10 mx-5 md:mx-2 overflow-hidden my-card">
                        <img src="{{ asset('storage/images/guru/profileEx.png') }}" alt="" class="rounded-max-h-60 w-full object-cover">
                        <ul class="text-center my-5">
                            <li class="text-2xl leading-10 font-semibold cursor-pointer">Nama Guru</li>
                            <li class="text-xl text-gray-500 cursor-pointer">Jabatan</li>
                        </ul>
                    </div>
                    <div class="absolute top-0 left-0 w-full h-full overflow-hidden z-10 pointer-events-none">
                        <div class="glass-effect"></div>
                    </div>
                </div>
            </div>
            <div class="flex justify-center">
                <div class="my-card-container relative overflow-hidden">
                    <div class="image-overlay"></div>
                    <div class="w-64 rounded-lg bg-white shadow-lg my-10 mx-5 md:mx-2 overflow-hidden my-card">
                        <img src="{{ asset('storage/images/guru/profileEx.png') }}" alt="" class="rounded-max-h-60 w-full object-cover">
                        <ul class="text-center my-5">
                            <li class="text-2xl leading-10 font-semibold cursor-pointer">Nama Guru</li>
                            <li class="text-xl text-gray-500 cursor-pointer">Jabatan</li>
                        </ul>
                    </div>
                    <div class="absolute top-0 left-0 w-full h-full overflow-hidden z-10 pointer-events-none">
                        <div class="glass-effect"></div>
                    </div>
                </div>
            </div>
            <div class="flex justify-center">
                <div class="my-card-container relative overflow-hidden">
                    <div class="image-overlay"></div>
                    <div class="w-64 rounded-lg bg-white shadow-lg my-10 mx-5 md:mx-2 overflow-hidden my-card">
                        <img src="{{ asset('storage/images/guru/profileEx.png') }}" alt="" class="rounded-max-h-60 w-full object-cover">
                        <ul class="text-center my-5">
                            <li class="text-2xl leading-10 font-semibold cursor-pointer">Nama Guru</li>
                            <li class="text-xl text-gray-500 cursor-pointer">Jabatan</li>
                        </ul>
                    </div>
                    <div class="absolute top-0 left-0 w-full h-full overflow-hidden z-10 pointer-events-none">
                        <div class="glass-effect"></div>
                    </div>
                </div>
            </div>
            <div class="flex justify-center">
                <div class="my-card-container relative overflow-hidden">
                    <div class="image-overlay"></div>
                    <div class="w-64 rounded-lg bg-white shadow-lg my-10 mx-5 md:mx-2 overflow-hidden my-card">
                        <img src="{{ asset('storage/images/guru/profileEx.png') }}" alt="" class="rounded-max-h-60 w-full object-cover">
                        <ul class="text-center my-5">
                            <li class="text-2xl leading-10 font-semibold cursor-pointer">Nama Guru</li>
                            <li class="text-xl text-gray-500 cursor-pointer">Jabatan</li>
                        </ul>
                    </div>
                    <div class="absolute top-0 left-0 w-full h-full overflow-hidden z-10 pointer-events-none">
                        <div class="glass-effect"></div>
                    </div>
                </div>
            </div>
            <div class="flex justify-center">
                <div class="my-card-container relative overflow-hidden">
                    <div class="image-overlay"></div>
                    <div class="w-64 rounded-lg bg-white shadow-lg my-10 mx-5 md:mx-2 overflow-hidden my-card">
                        <img src="{{ asset('storage/images/guru/profileEx.png') }}" alt="" class="rounded-max-h-60 w-full object-cover">
                        <ul class="text-center my-5">
                            <li class="text-2xl leading-10 font-semibold cursor-pointer">Nama Guru</li>
                            <li class="text-xl text-gray-500 cursor-pointer">Jabatan</li>
                        </ul>
                    </div>
                    <div class="absolute top-0 left-0 w-full h-full overflow-hidden z-10 pointer-events-none">
                        <div class="glass-effect"></div>
                    </div>
                </div>
            </div>
            <div class="flex justify-center">
                <div class="my-card-container relative overflow-hidden">
                    <div class="image-overlay"></div>
                    <div class="w-64 rounded-lg bg-white shadow-lg my-10 mx-5 md:mx-2 overflow-hidden my-card">
                        <img src="{{ asset('storage/images/guru/profileEx.png') }}" alt="" class="rounded-max-h-60 w-full object-cover">
                        <ul class="text-center my-5">
                            <li class="text-2xl leading-10 font-semibold cursor-pointer">Nama Guru</li>
                            <li class="text-xl text-gray-500 cursor-pointer">Jabatan</li>
                        </ul>
                    </div>
                    <div class="absolute top-0 left-0 w-full h-full overflow-hidden z-10 pointer-events-none">
                        <div class="glass-effect"></div>
                    </div>
                </div>
            </div>
            <div class="flex justify-center">
                <div class="my-card-container relative overflow-hidden">
                    <div class="image-overlay"></div>
                    <div class="w-64 rounded-lg bg-white shadow-lg my-10 mx-5 md:mx-2 overflow-hidden my-card">
                        <img src="{{ asset('storage/images/guru/profileEx.png') }}" alt="" class="rounded-max-h-60 w-full object-cover">
                        <ul class="text-center my-5">
                            <li class="text-2xl leading-10 font-semibold cursor-pointer">Nama Guru</li>
                            <li class="text-xl text-gray-500 cursor-pointer">Jabatan</li>
                        </ul>
                    </div>
                    <div class="absolute top-0 left-0 w-full h-full overflow-hidden z-10 pointer-events-none">
                        <div class="glass-effect"></div>
                    </div>
                </div>
            </div>
        </div>
        {{-- data end --}}
    </div> 
</x-app-layout>
