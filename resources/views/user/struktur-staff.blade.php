<x-app-layout>
    <x-title-image :src="asset('storage/assets/Carousel1.png')">
        {{ __('DATA STAFF') }}
    </x-title-image>
    <div class=" mt-10">
        {{-- data start --}}
        <div class="grid grid-cols-5">
            @foreach ($struktur as $row)
                @if ($row['work_as'] == 'staff')
                    <div class="flex justify-center">
                        <div class="my-card-container relative overflow-hidden">
                            <div class="image-overlay"></div>
                            <div class="w-64 rounded-lg bg-white shadow-lg my-10 mx-5 md:mx-2 overflow-hidden my-card">
                                <img src="{{ asset('storage/images/guru/' . $row['img']) }}" alt=""
                                    class="max-h-60 w-full object-cover">
                                <ul class="text-center my-5">
                                    <li class="text-2xl leading-10 font-semibold cursor-pointer px-3">{{ ucwords(strtolower($row['name'])) }}</li>
                                    <li class="text-xl text-gray-500 cursor-pointer">
                                    @php
                                    if (isset($row['job_desc']) && !empty($row['job_desc'])) {
                                        echo ucfirst($row['job_desc']);
                                    } else {
                                        echo ucfirst($row['work_as']);
                                    }
                                    @endphp
                                    </li>
                                </ul>
                            </div>
                            <div class="absolute top-0 left-0 w-full h-full overflow-hidden z-10 pointer-events-none">
                                <div class="glass-effect"></div>
                            </div>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>
        {{-- data end --}}
    </div>
</x-app-layout>
