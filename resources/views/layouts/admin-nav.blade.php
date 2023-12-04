<nav x-data="{ open: false }" class="bg-primary-500">
    <!-- Primary Navigation Menu -->
    <div class="px-4 py-2 sm:px-6 lg:px-8">
        <div class="flex justify-between h-28">
            <div class="flex">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <x-app-logo-sm/>
                    <h1 class="text-white mx-3 font-semibold text-3xl">Pelita Kasih</h1>
                </div>
            </div>

            <!-- Settings Dropdown -->
            <div class="hidden sm:flex sm:items-center sm:ms-6">
                <div class="sm:flex gap-10 hidden mr-5">
                    <x-nav-link :href="route('adminBerita')" :active="request()->routeIs('adminBerita')" class="text-white text-xl font-normal">
                        {{ __('Berita Terkini') }}
                    </x-nav-link>
                    <x-nav-link :href="route('adminAkademik')" :active="request()->routeIs('adminAkademik')" class="text-white text-xl font-normal">
                        {{ __('Akademik') }}
                    </x-nav-link>
                    <x-nav-link :href="route('adminStruktur')" :active="request()->routeIs('adminStruktur')" class="text-white text-xl font-normal">
                        {{ __('Struktur Sekolah') }}
                    </x-nav-link>
                    <x-nav-link :href="route('adminEkstrakurikuler')" :active="request()->routeIs('adminEkstrakurikuler')" class="text-white text-xl font-normal">
                        {{ __('Ekstrakurikuler Sekolah') }}
                    </x-nav-link>
                </div>
                <x-dropdown align="right" width="48" contentClasses="bg-primary-500 overflow-hidden" class="border-none">
                    <x-slot name="trigger">
                        <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-white hover:text-gray-500 focus:outline-none transition ease-in-out duration-150">
                            <div><svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
                                <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1"/>
                              </svg></div>

                            <div class="ms-1">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <x-dropdown-link :href="route('profile.edit')" class="hover:bg-primary-600">
                            {{ __('Profile') }}
                        </x-dropdown-link>

                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();" class="hover:bg-primary-600">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>
                    </x-slot>
                </x-dropdown>
            </div>

            <!-- Hamburger -->
            <div class="-me-2 flex items-center sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-white focus:outline-none transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-200">
            <div class="px-4">
                <div class="font-base text-base text-white">{{ ucwords(Auth::user()->name) }}</div>
                <div class="font-base text-sm text-gray-400">{{ Auth::user()->email }}</div>
            </div>

            <div class="mt-3 space-y-1">
                <x-responsive-nav-link :href="route('profile.edit')" class="text-white">
                    {{ __('Profile') }}
                </x-responsive-nav-link>

                <x-responsive-nav-link :href="route('adminBerita')" :active="request()->routeIs('adminBerita')" class="text-white">
                    {{ __('Berita Terkini') }}
                </x-responsive-nav-link>
                <x-responsive-nav-link :href="route('adminAkademik')" :active="request()->routeIs('adminAkademik')" class="text-white">
                    {{ __('Akademik') }}
                </x-responsive-nav-link>
                <x-responsive-nav-link :href="route('adminStruktur')" :active="request()->routeIs('adminStruktur')" class="text-white">
                    {{ __('Struktur Sekolah') }}
                </x-responsive-nav-link>

                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-responsive-nav-link :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();" class="text-white">
                        {{ __('Log Out') }}
                    </x-responsive-nav-link>
                </form>
            </div>
        </div>
    </div>
</nav>
