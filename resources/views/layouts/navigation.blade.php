<nav x-data="{ open: false }" class="relative bg-zinc-100 z-50 shadow-lg">
    <div class="flex justify-between">
        <x-app-logo />
        <div class="px-4 sm:px-6 lg:px-8 lg:bg-primary-500 bg-primary-500 text-white lg:rounded-bl-full lg:shadow-[-3.25rem_0_0] lg:shadow-secondary-500">
            <div class="flex justify-between h-28">
                <!-- Settings Dropdown -->
                <div class="hidden lg:flex sm:items-center sm:ms-6">
                    <div
                        class="sm:flex gap-7 hidden mr-5 rounded-lg text-white items-center my-5 mx-5 text-base cursor-pointer">
                        <div>
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
                                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                            fill="currentColor" class="bi bi-chevron-down" viewBox="0 0 14 14">
                                            <path fill-rule="evenodd"
                                                d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z" />
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
                                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                            fill="currentColor" class="bi bi-chevron-down" viewBox="0 0 14 14">
                                            <path fill-rule="evenodd"
                                                d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z" />
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
                                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                            fill="currentColor" class="bi bi-chevron-down" viewBox="0 0 14 14">
                                            <path fill-rule="evenodd"
                                                d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z" />
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
                                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                            fill="currentColor" class="bi bi-chevron-down" viewBox="0 0 14 14">
                                            <path fill-rule="evenodd"
                                                d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z" />
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
                            <div>
                                <x-nav-link :href="route('ekstra')" :active="request()->routeIs('ekstra')">
                                    {{ __('Ekstrakurikuler') }}
                                </x-nav-link>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Hamburger -->
                <div class="-me-2 flex items-center lg:hidden">
                    <button @click="open = ! open"
                        class="inline-flex items-center justify-center p-2 rounded-md text-white focus:outline-none transition duration-150 ease-in-out">
                        <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 28 28">
                            <path :class="{ 'hidden': open, 'inline-flex': !open }" class="inline-flex"
                                stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h16" />
                            <path :class="{ 'hidden': !open, 'inline-flex': open }" class="hidden"
                                stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <!-- Responsive Navigation Menu -->
    <div :class="{ 'block': open, 'hidden': !open }" class="hidden lg:hidden bg-primary-500">
        <!-- Responsive Settings Options -->
        <div class="pb-1">
            <div class="space-y-1">
                <x-responsive-nav-link :href="route('main')" :active="request()->routeIs('main')" class="text-white">
                    {{ __('Beranda') }}
                </x-responsive-nav-link>

                <x-responsive-nav-link :href="route('profil')" :active="request()->routeIs('profil')" class="text-white">
                    {{ __('Profil') }}
                </x-responsive-nav-link>

                <x-responsive-nav-link :href="route('akademik')" :active="request()->routeIs('akademik')" class="text-white">
                    {{ __('Akademik') }}
                </x-responsive-nav-link>

                <x-responsive-nav-link :href="route('fasilitas')" :active="request()->routeIs('fasilitas')" class="text-white">
                    {{ __('Fasilitas') }}
                </x-responsive-nav-link>

                <div class="px-4">
                    <div class="font-base text-base text-white">Struktur Sekolah</div>
                </div>
                <x-responsive-nav-link :href="route('guru')" :active="request()->routeIs('guru')" class="text-white">
                    {{ __('Guru') }}
                </x-responsive-nav-link>
                <x-responsive-nav-link :href="route('staff')" :active="request()->routeIs('staff')" class="text-white">
                    {{ __('Staff') }}
                </x-responsive-nav-link>

                <x-responsive-nav-link :href="route('adminEkstrakurikuler')" :active="request()->routeIs('adminEkstrakurikuler')" class="text-white">
                    {{ __('Struktur Sekolah') }}
                </x-responsive-nav-link>
            </div>
        </div>
    </div>
</nav>
