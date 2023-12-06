    <x-admin-guest-layout>
        <div class="flex items-center justify-center flex-col h-screen">
            
            <form action="{{ route('login') }}" method="POST">
                @csrf
                <div class="flex flex-col bg-white w-48 md:w-64 lg:w-96 p-5 shadow-lg rounded-lg mt-2">
                    <div class="flex items-center justify-center">
                        <x-app-logo-sm></x-app-logo-sm>
                    </div>

                    <!-- Email Address -->
                    <h1 class="text-3xl font-semibold text-primary-500 drop-shadow-md text-center my-3">Admin Panel</h1>
                    <label class="font-medium block mb-1 mt-6 text-gray-700" for="login">
                        Email/Username
                    </label>
                    <input
                        class="appearance-none border rounded-md w-full py-3 px-3 leading-tight border-gray-400 focus:outline-none focus:border-primary-500 shadow-md"
                        id="login" name="login" type="text" autocomplete="off" value="{{ old('login') }}"
                        autofocus required />
                    <x-input-error :messages="$errors->get('login')" class="mt-2" />

                    <!-- Password -->
                    <label class="font-medium block mb-1 mt-6 text-gray-700" for="password">
                        Password
                    </label>
                    <div class="relative w-full">
                        <div class="absolute inset-y-0 right-0 flex items-center px-2">
                            <input class="hidden js-password-toggle" id="toggle" type="checkbox" />
                            <label class=" rounded-md px-2 py-1 text-sm text-gray-600 cursor-pointer js-password-label"
                                for="toggle">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                    fill="currentColor" class="bi bi-eye-slash fill-gray-400" viewBox="0 0 16 16">
                                    <path
                                        d="M13.359 11.238C15.06 9.72 16 8 16 8s-3-5.5-8-5.5a7.028 7.028 0 0 0-2.79.588l.77.771A5.944 5.944 0 0 1 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.134 13.134 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755-.165.165-.337.328-.517.486z" />
                                    <path
                                        d="M11.297 9.176a3.5 3.5 0 0 0-4.474-4.474l.823.823a2.5 2.5 0 0 1 2.829 2.829zm-2.943 1.299.822.822a3.5 3.5 0 0 1-4.474-4.474l.823.823a2.5 2.5 0 0 0 2.829 2.829" />
                                    <path
                                        d="M3.35 5.47c-.18.16-.353.322-.518.487A13.134 13.134 0 0 0 1.172 8l.195.288c.335.48.83 1.12 1.465 1.755C4.121 11.332 5.881 12.5 8 12.5c.716 0 1.39-.133 2.02-.36l.77.772A7.029 7.029 0 0 1 8 13.5C3 13.5 0 8 0 8s.939-1.721 2.641-3.238l.708.709zm10.296 8.884-12-12 .708-.708 12 12-.708.708" />
                                </svg>
                            </label>
                        </div>
                        <input
                            class="appearance-none border rounded-md w-full py-3 px-3 leading-tight border-gray-400 focus:outline-none focus:border-primary-500 text-gray-700 pr-16 js-password shadow-md"
                            id="password" name="password" type="password" autocomplete="off" required />
                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>

                    @if (Route::has('password.request'))
                        <a class="mb-10 mt-5 text-sm sm:text-sm md:text-sm lg:text-sm xl:text-sm font-semibold text-center hover:text-secondary-500 transition-all text-gray-700"
                            href="{{ route('password.request') }}">
                            {{ __('Forgot your password?') }}
                        </a>
                    @endif
                    <button
                        class="bg-secondary-500 hover:bg-secondary-600 text-white font-bold py-2 px-4 rounded transition duration-300 ease-in-out">
                        Login
                    </button>
                </div>
            </form>
        </div>
    </x-admin-guest-layout>