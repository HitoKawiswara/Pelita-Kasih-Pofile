<nav class="absolute end-0 z-50 my-3 ">
    <div class="flex justify-between h-28 w-full drop-shadow-md ">
        {{-- navigation start --}}
        <div class="rounded-lg flex gap-10  text-white items-center my-5 px-10 mx-8 text-xl cursor-pointer ">
            <div class="">
                <x-nav-link :href="route('main')" :active="request()->routeIs('main')">
                    {{ __('Beranda') }}
                </x-nav-link>
            </div>

            {{-- profil --}}
            <div>
                <x-dropdown :active="request()->routeIs('profil')">
                    <x-slot name="trigger">
                        {{ __('Profil') }}
                        <button>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-down" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
                              </svg>
                        </button>
                    </x-slot>
                    <x-slot name="content" class="">
                        <x-dropdown-link :href="route('profil', ['scroll_to' => 'tentang-kami'])">
                            {{ __('Tentang Kami') }}
                        </x-dropdown-link>
                        <x-dropdown-link :href="route('profil', ['scroll_to' => 'visi-misi'])">
                            {{ __('Visi & Misi') }}
                        </x-dropdown-link>
                    </x-slot>
                </x-dropdown>
            </div>

            {{-- akademik --}}
            <div>
                <x-dropdown :active="request()->routeIs('akademik')">
                    <x-slot name="trigger">
                        {{ __('Akademik') }}
                        <button>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-down" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
                              </svg>
                        </button>
                    </x-slot>
                    <x-slot name="content">
                        <x-dropdown-link :href="route('akademik', ['scroll_to' => 'tk-akademik'])">
                            {{ __('Taman Kanak-Kanak') }}
                        </x-dropdown-link>
                        <x-dropdown-link :href="route('akademik', ['scroll_to' => 'sd-akademik'])">
                            {{ __('Sekolah Dasar') }}
                        </x-dropdown-link>
                        <x-dropdown-link :href="route('akademik', ['scroll_to' => 'smp-akademik'])">
                            {{ __('Sekolah Menengah Pertama') }}
                        </x-dropdown-link>
                        <x-dropdown-link :href="route('akademik', ['scroll_to' => 'sma-akademik'])">
                            {{ __('Sekolah Menengah Atas') }}
                        </x-dropdown-link>
                    </x-slot>
                </x-dropdown>
            </div>

            {{-- fasilitas --}}
            <div>
                <x-dropdown :active="request()->routeIs('fasilitas')">
                    <x-slot name="trigger">
                        {{ __('Fasilitas') }}
                        <button>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-down" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
                              </svg>
                        </button>
                    </x-slot>
                    <x-slot name="content">
                        <x-dropdown-link :href="route('fasilitas', ['scroll_to' => 'lapangan'])">
                            {{ __('Lapangan Olahraga') }}
                        </x-dropdown-link>
                        <x-dropdown-link :href="route('fasilitas', ['scroll_to' => 'perpus'])">
                            {{ __('Perpustakaan') }}
                        </x-dropdown-link>
                        <x-dropdown-link :href="route('fasilitas', ['scroll_to' => 'lab'])">
                            {{ __('Laboratorium') }}
                        </x-dropdown-link>
                        <x-dropdown-link :href="route('fasilitas', ['scroll_to' => 'aula'])">
                            {{ __('Aula') }}
                        </x-dropdown-link>
                    </x-slot>
                </x-dropdown>
            </div>

            {{-- struktur --}}
            <div>
                <x-dropdown :active="request()->routeIs('guru') || request()->routeIs('staff')">
                    <x-slot name="trigger">
                        {{ __('Struktur Sekolah') }}
                        <button>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-down" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
                              </svg>
                        </button>
                    </x-slot>
                    <x-slot name="content">
                        <x-dropdown-link :href="route('guru', ['scroll_to' => 'tk-struktur'])">
                            {{ __('Taman Kanak-Kanak') }}
                        </x-dropdown-link>
                        <x-dropdown-link :href="route('guru', ['scroll_to' => 'sd-struktur'])">
                            {{ __('Sekolah Dasar') }}
                        </x-dropdown-link>
                        <x-dropdown-link :href="route('guru', ['scroll_to' => 'smp-struktur'])">
                            {{ __('Sekolah Menengah Pertama') }}
                        </x-dropdown-link>
                        <x-dropdown-link :href="route('guru', ['scroll_to' => 'sma-struktur'])">
                            {{ __('Sekolah Menegah Atas') }}
                        </x-dropdown-link>
                        <x-dropdown-link :href="route('staff')">
                            {{ __('Staff') }}
                        </x-dropdown-link>
                    </x-slot>
                </x-dropdown>
            </div>

            {{-- ekstra --}}
            <div>
                <x-dropdown :active="request()->routeIs('ekstra')">
                    <x-slot name="trigger">
                        {{ __('Ekstrakurikuler') }}
                        <button>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-down" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
                              </svg>
                        </button>
                    </x-slot>
                    <x-slot name="content">
                        <x-dropdown-link :href="route('ekstra', ['scroll_to' => 'basket'])">
                            {{ __('Basket') }}
                        </x-dropdown-link>
                        <x-dropdown-link :href="route('ekstra', ['scroll_to' => 'sepakbola'])">
                            {{ __('Sepak Bola') }}
                        </x-dropdown-link>
                        <x-dropdown-link :href="route('ekstra', ['scroll_to' => 'bulutangkis'])">
                            {{ __('Bulu Tangkis') }}
                        </x-dropdown-link>
                        <x-dropdown-link :href="route('ekstra', ['scroll_to' => 'voli'])">
                            {{ __('Voli') }}
                        </x-dropdown-link>
                    </x-slot>
                </x-dropdown>
            </div>

        </div>
        {{-- navigation end --}}
    </div>
</nav>
