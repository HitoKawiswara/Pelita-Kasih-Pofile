<x-app-layout>
    <x-title-image :src="asset('storage/assets/Carousel1.png')">
        {{ __('DATA GURU') }}
    </x-title-image>

    <div class=" mt-10">
        {{-- tk start --}}
        <div id="tk-struktur">
            <div class=" container border-b-4 border-zinc-500 mx-auto">
                <x-title-lg>
                    Taman
                    <x-slot name="slot2">
                        Kanak-Kanak
                    </x-slot>
                </x-title-lg>
            </div>
            {{-- kepala & wakil kepala start --}}
            <div class="flex justify-center gap-32">
                @foreach ($struktur as $row)
                    @if ($row['work_as'] == 'kepala sekolah' && $row['category'] == 'tk')
                        <div class="my-card-container relative overflow-hidden">
                            <div class="image-overlay"></div>
                            <div class="w-64 min-h-[388px] rounded-lg bg-white shadow-lg my-10 mx-5 md:mx-2 overflow-hidden my-card">
                                <img src="{{ asset('storage/images/struktur/' . $row['img']) }}" alt=""
                                    class="max-h-60 w-full object-cover">
                                <ul class="text-center my-5">
                                    <li class="text-2xl leading-10 font-semibold cursor-pointer">
                                        {{ ucwords(strtolower($row['name'])) }}</li>
                                    <li class="text-xl text-gray-500 cursor-pointer">Kepala Sekolah</li>
                                </ul>
                            </div>
                            <div class="absolute top-0 left-0 w-full h-full overflow-hidden z-10 pointer-events-none">
                                <div class="glass-effect"></div>
                            </div>
                        </div>
                    @elseif ($row['work_as'] == 'wakil kepala sekolah' && $row['category'] == 'tk')
                        <div class="my-card-container relative overflow-hidden">
                            <div class="image-overlay"></div>
                            <div class="w-64 min-h-[388px] rounded-lg bg-white shadow-lg my-10 mx-5 md:mx-2 overflow-hidden my-card">
                                <img src="{{ asset('storage/images/struktur/' . $row['img']) }}" alt=""
                                    class="max-h-60 w-full object-cover">
                                <ul class="text-center my-5">
                                    <li class="text-2xl leading-10 font-semibold cursor-pointer">
                                        {{ ucwords(strtolower($row['name'])) }}</li>
                                    <li class="text-xl text-gray-500 cursor-pointer">Wakil Kepala Sekolah</li>
                                </ul>
                            </div>
                            <div class="absolute top-0 left-0 w-full h-full overflow-hidden z-10 pointer-events-none">
                                <div class="glass-effect"></div>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
            {{-- kepala & wakil kepala end --}}

            {{-- data start --}}
            <div class="grid grid-cols-5">
                @foreach ($struktur as $row)
                    @if (
                        $row['work_as'] != 'kepala sekolah' &&
                            $row['work_as'] != 'wakil kepala sekolah' &&
                            $row['work_as'] != 'staff' &&
                            $row['category'] == 'tk')
                        <div class="flex justify-center">
                            <div class="my-card-container relative overflow-hidden">
                                <div class="image-overlay"></div>
                                <div
                                    class="w-64 min-h-[388px] rounded-lg bg-white shadow-lg my-10 mx-5 md:mx-2 overflow-hidden my-card">
                                    <img src="{{ asset('storage/images/struktur/' . $row['img']) }}" alt="image"
                                        class="max-h-60 w-full object-cover">
                                    <ul class="text-center my-5">
                                        <li class="text-2xl leading-10 font-semibold cursor-pointer px-3">
                                            {{ ucwords(strtolower($row['name'])) }}</li>
                                        <li class="text-xl text-gray-500 cursor-pointer">@php
                                            if (isset($row['job_desc']) && !empty($row['job_desc'])) {
                                                echo ucwords(strtolower($row['job_desc']));
                                            } else {
                                                echo ucfirst($row['work_as']);
                                            }
                                        @endphp</li>
                                    </ul>
                                </div>
                                <div
                                    class="absolute top-0 left-0 w-full h-full overflow-hidden z-10 pointer-events-none">
                                    <div class="glass-effect"></div>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
            {{-- data end --}}
        </div>
        {{-- tk end --}}

        {{-- sd start --}}
        <div id="sd-struktur" class="mt-10">
            <div class=" container border-b-4 border-zinc-500 mx-auto">
                <x-title-lg>
                    Sekolah
                    <x-slot name="slot2">
                        Dasar
                    </x-slot>
                </x-title-lg>
            </div>
            {{-- kepala & wakil kepala start --}}
            <div class="flex justify-center gap-32">
                @foreach ($struktur as $row)
                    @if ($row['work_as'] == 'kepala sekolah' && $row['category'] == 'sd')
                        <div class="my-card-container relative overflow-hidden">
                            <div class="image-overlay"></div>
                            <div class="w-64 min-h-[388px] rounded-lg bg-white shadow-lg my-10 mx-5 md:mx-2 overflow-hidden my-card">
                                <img src="{{ asset('storage/images/struktur/' . $row['img']) }}" alt=""
                                    class="max-h-60 w-full object-cover">
                                <ul class="text-center my-5">
                                    <li class="text-2xl leading-10 font-semibold cursor-pointer">
                                        {{ ucwords(strtolower($row['name'])) }}</li>
                                    <li class="text-xl text-gray-500 cursor-pointer">Kepala Sekolah</li>
                                </ul>
                            </div>
                            <div class="absolute top-0 left-0 w-full h-full overflow-hidden z-10 pointer-events-none">
                                <div class="glass-effect"></div>
                            </div>
                        </div>
                    @elseif ($row['work_as'] == 'wakil kepala sekolah' && $row['category'] == 'sd')
                        <div class="my-card-container relative overflow-hidden">
                            <div class="image-overlay"></div>
                            <div class="w-64 min-h-[388px] rounded-lg bg-white shadow-lg my-10 mx-5 md:mx-2 overflow-hidden my-card">
                                <img src="{{ asset('storage/images/struktur/' . $row['img']) }}" alt=""
                                    class="max-h-60 w-full object-cover">
                                <ul class="text-center my-5">
                                    <li class="text-2xl leading-10 font-semibold cursor-pointer">
                                        {{ ucwords(strtolower($row['name'])) }}</li>
                                    <li class="text-xl text-gray-500 cursor-pointer">Wakil Kepala Sekolah</li>
                                </ul>
                            </div>
                            <div class="absolute top-0 left-0 w-full h-full overflow-hidden z-10 pointer-events-none">
                                <div class="glass-effect"></div>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
            {{-- kepala & wakil kepala end --}}

            {{-- data start --}}
            <div class="grid grid-cols-5">
                @foreach ($struktur as $row)
                    @if (
                        $row['work_as'] != 'kepala sekolah' &&
                            $row['work_as'] != 'wakil kepala sekolah' &&
                            $row['work_as'] != 'staff' &&
                            $row['category'] == 'sd')
                        <div class="flex justify-center">
                            <div class="my-card-container relative overflow-hidden">
                                <div class="image-overlay"></div>
                                <div
                                    class="w-64 min-h-[388px] rounded-lg bg-white shadow-lg my-10 mx-5 md:mx-2 overflow-hidden my-card">
                                    <img src="{{ asset('storage/images/struktur/' . $row['img']) }}" alt="image"
                                        class="max-h-60 w-full object-cover">
                                    <ul class="text-center my-5">
                                        <li class="text-2xl leading-10 font-semibold cursor-pointer px-3">
                                            {{ ucwords(strtolower($row['name'])) }}</li>
                                        <li class="text-xl text-gray-500 cursor-pointer">@php
                                            if (isset($row['job_desc']) && !empty($row['job_desc'])) {
                                                echo ucwords(strtolower($row['job_desc']));
                                            } else {
                                                echo ucfirst($row['work_as']);
                                            }
                                        @endphp</li>
                                    </ul>
                                </div>
                                <div
                                    class="absolute top-0 left-0 w-full h-full overflow-hidden z-10 pointer-events-none">
                                    <div class="glass-effect"></div>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
            {{-- data end --}}
        </div>
        {{-- sd end --}}

        {{-- smp start --}}
        <div id="smp-struktur" class="mt-10">
            <div class=" container border-b-4 border-zinc-500 mx-auto">
                <x-title-lg>
                    Sekolah
                    <x-slot name="slot2">
                        Menengah Pertama
                    </x-slot>
                </x-title-lg>
            </div>
            {{-- kepala & wakil kepala start --}}
            <div class="flex justify-center gap-32">
                @foreach ($struktur as $row)
                    @if ($row['work_as'] == 'kepala sekolah' && $row['category'] == 'smp')
                        <div class="my-card-container relative overflow-hidden">
                            <div class="image-overlay"></div>
                            <div class="w-64 min-h-[388px] rounded-lg bg-white shadow-lg my-10 mx-5 md:mx-2 overflow-hidden my-card">
                                <img src="{{ asset('storage/images/struktur/' . $row['img']) }}" alt=""
                                    class="max-h-60 w-full object-cover">
                                <ul class="text-center my-5">
                                    <li class="text-2xl leading-10 font-semibold cursor-pointer">
                                        {{ ucwords(strtolower($row['name'])) }}</li>
                                    <li class="text-xl text-gray-500 cursor-pointer">Kepala Sekolah</li>
                                </ul>
                            </div>
                            <div class="absolute top-0 left-0 w-full h-full overflow-hidden z-10 pointer-events-none">
                                <div class="glass-effect"></div>
                            </div>
                        </div>
                    @elseif ($row['work_as'] == 'wakil kepala sekolah' && $row['category'] == 'smp')
                        <div class="my-card-container relative overflow-hidden">
                            <div class="image-overlay"></div>
                            <div class="w-64 min-h-[388px] rounded-lg bg-white shadow-lg my-10 mx-5 md:mx-2 overflow-hidden my-card">
                                <img src="{{ asset('storage/images/struktur/' . $row['img']) }}" alt=""
                                    class="max-h-60 w-full object-cover">
                                <ul class="text-center my-5">
                                    <li class="text-2xl leading-10 font-semibold cursor-pointer">
                                        {{ ucwords(strtolower($row['name'])) }}</li>
                                    <li class="text-xl text-gray-500 cursor-pointer">Wakil Kepala Sekolah</li>
                                </ul>
                            </div>
                            <div class="absolute top-0 left-0 w-full h-full overflow-hidden z-10 pointer-events-none">
                                <div class="glass-effect"></div>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
            {{-- kepala & wakil kepala end --}}

            {{-- data start --}}
            <div class="grid grid-cols-5">
                @foreach ($struktur as $row)
                    @if (
                        $row['work_as'] != 'kepala sekolah' &&
                            $row['work_as'] != 'wakil kepala sekolah' &&
                            $row['work_as'] != 'staff' &&
                            $row['category'] == 'smp')
                        <div class="flex justify-center">
                            <div class="my-card-container relative overflow-hidden">
                                <div class="image-overlay"></div>
                                <div
                                    class="w-64 min-h-[388px] rounded-lg bg-white shadow-lg my-10 mx-5 md:mx-2 overflow-hidden my-card">
                                    <img src="{{ asset('storage/images/struktur/' . $row['img']) }}" alt="image"
                                        class="max-h-60 w-full object-cover">
                                    <ul class="text-center my-5">
                                        <li class="text-2xl leading-10 font-semibold cursor-pointer px-3">
                                            {{ ucwords(strtolower($row['name'])) }}</li>
                                        <li class="text-xl text-gray-500 cursor-pointer">@php
                                            if (isset($row['job_desc']) && !empty($row['job_desc'])) {
                                                echo ucwords(strtolower($row['job_desc']));
                                            } else {
                                                echo ucfirst($row['work_as']);
                                            }
                                        @endphp</li>
                                    </ul>
                                </div>
                                <div
                                    class="absolute top-0 left-0 w-full h-full overflow-hidden z-10 pointer-events-none">
                                    <div class="glass-effect"></div>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
            {{-- data end --}}
        </div>
        {{-- smp end --}}

        {{-- sma start --}}
        <div id="sma-struktur" class="mt-10">
            <div class=" container border-b-4 border-zinc-500 mx-auto">
                <x-title-lg>
                    Sekolah
                    <x-slot name="slot2">
                        Menengah Atas
                    </x-slot>
                </x-title-lg>
            </div>
            {{-- kepala & wakil kepala start --}}
            <div class="flex justify-center gap-32">
                @foreach ($struktur as $row)
                    @if ($row['work_as'] == 'kepala sekolah' && $row['category'] == 'sma')
                        <div class="my-card-container relative overflow-hidden">
                            <div class="image-overlay"></div>
                            <div class="w-64 min-h-[388px] rounded-lg bg-white shadow-lg my-10 mx-5 md:mx-2 overflow-hidden my-card">
                                <img src="{{ asset('storage/images/struktur/' . $row['img']) }}" alt=""
                                    class="max-h-60 w-full object-cover">
                                <ul class="text-center my-5">
                                    <li class="text-2xl leading-10 font-semibold cursor-pointer">
                                        {{ ucwords(strtolower($row['name'])) }}</li>
                                    <li class="text-xl text-gray-500 cursor-pointer">Kepala Sekolah</li>
                                </ul>
                            </div>
                            <div class="absolute top-0 left-0 w-full h-full overflow-hidden z-10 pointer-events-none">
                                <div class="glass-effect"></div>
                            </div>
                        </div>
                    @elseif ($row['work_as'] == 'wakil kepala sekolah' && $row['category'] == 'sma')
                        <div class="my-card-container relative overflow-hidden">
                            <div class="image-overlay"></div>
                            <div class="w-64 min-h-[388px] rounded-lg bg-white shadow-lg my-10 mx-5 md:mx-2 overflow-hidden my-card">
                                <img src="{{ asset('storage/images/struktur/' . $row['img']) }}" alt=""
                                    class="max-h-60 w-full object-cover">
                                <ul class="text-center my-5">
                                    <li class="text-2xl leading-10 font-semibold cursor-pointer">
                                        {{ ucwords(strtolower($row['name'])) }}</li>
                                    <li class="text-xl text-gray-500 cursor-pointer">Wakil Kepala Sekolah</li>
                                </ul>
                            </div>
                            <div class="absolute top-0 left-0 w-full h-full overflow-hidden z-10 pointer-events-none">
                                <div class="glass-effect"></div>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
            {{-- kepala & wakil kepala end --}}

            {{-- data start --}}
            <div class="grid grid-cols-5">
                @foreach ($struktur as $row)
                    @if (
                        $row['work_as'] != 'kepala sekolah' &&
                            $row['work_as'] != 'wakil kepala sekolah' &&
                            $row['work_as'] != 'staff' &&
                            $row['category'] == 'sma')
                        <div class="flex justify-center">
                            <div class="my-card-container relative overflow-hidden">
                                <div class="image-overlay"></div>
                                <div
                                    class="w-64 min-h-[388px] rounded-lg bg-white shadow-lg my-10 mx-5 md:mx-2 overflow-hidden my-card">
                                    <img src="{{ asset('storage/images/struktur/' . $row['img']) }}" alt="image"
                                        class="max-h-60 w-full object-cover">
                                    <ul class="text-center my-5">
                                        <li class="text-2xl leading-10 font-semibold cursor-pointer px-3">
                                            {{ ucwords(strtolower($row['name'])) }}</li>
                                        <li class="text-xl text-gray-500 cursor-pointer">@php
                                            if (isset($row['job_desc']) && !empty($row['job_desc'])) {
                                                echo ucwords(strtolower($row['job_desc']));
                                            } else {
                                                echo ucfirst($row['work_as']);
                                            }
                                        @endphp</li>
                                    </ul>
                                </div>
                                <div
                                    class="absolute top-0 left-0 w-full h-full overflow-hidden z-10 pointer-events-none">
                                    <div class="glass-effect"></div>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
            {{-- data end --}}
        </div>
        {{-- sma end --}}
    </div>
</x-app-layout>
