<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>

<body>
    <header class="flex flex-col md:flex-row items-center justify-between p-4 bg-gray-300 relative">
        <div class="flex flex-col md:flex-row items-center">
            <img src="{{ URL('images/admin/logo.png') }}" class="w-32 md:w-64 lg:w-48" alt="Logo">
            <div class="md:ml-4 mt-4 md:mt-0"></div>
        </div>
        <nav class="flex flex-col md:flex-row items-center space-y-2 md:space-y-0 md:space-x-4 relative">
            <a class="text-sm md:text-base lg:text-base xl:text-base text-gray-600 hover:text-gray-800 transition duration-300"
                href="{{ route('berita.index') }}">Berita</a>
            <a class="text-sm md:text-base lg:text-base xl:text-base text-gray-600 hover:text-gray-800 transition duration-300"
                href="{{ route('akademik.index') }}">Akademik</a>
            <a class="text-sm md:text-base lg:text-base xl:text-base text-gray-600 hover:text-gray-800 transition duration-300"
                href="{{ route('struktursekolah.index') }}">Struktur
                Sekolah</a>
            <div class="relative">
                <img src="{{ URL('images/admin/profile.png') }}"
                    class="w-16 md:w-32 lg:w-24 rounded-full cursor-pointer" alt="Profile Image" id="profileImage">

                <!-- Dropdown Content -->
                <div class="hidden absolute right-0 mt-2 bg-white border border-gray-300 rounded-md shadow-md py-2">
                    <a href="{{ route('updatepw.index') }}"
                        class="block px-4 py-2 text-gray-800 hover:bg-gray-200">Update Password</a>
                </div>
            </div>
        </nav>

        <script>
            document.getElementById('profileImage').addEventListener('click', function () {
                var dropdown = document.querySelector('.relative .hidden');
                dropdown.classList.toggle('hidden');
            });
        </script>
    </header>

    <form action="{{ route('berita.index') }}" class="flex flex-col items-center justify-center mt-10">
        <div
            class="flex flex-col items-center bg-white w-48 md:w-64 lg:w-96 p-5 shadow-md border border-gray-800 mt-2 mb-10">
            <h1 class="mt-1 text-sm sm:text-sm md:text-sm lg:text-sm xl:text-sm">Update Password</h1>
            <input type="textarea"
                class="w-32 md:w-54 lg:w-80 h-1.8 md:h-5.3 lg:h-8.3 mt-4 shadow-md border border-gray-800 p-2 text-sm sm:text-base"
                placeholder="Admin" id="admin" name="admin" autocomplete="off" required>
            <input type="textarea"
                class="w-32 md:w-54 lg:w-80 h-1.8 md:h-5.3 lg:h-8.3 mt-4 shadow-md border border-gray-800 p-2 text-sm sm:text-base"
                placeholder="Old Password" id="oldpassword" name="oldpassword" autocomplete="off" required>
            <input type="textarea"
            class="w-32 md:w-54 lg:w-80 h-1.8 md:h-5.3 lg:h-8.3 mt-4 shadow-md border border-gray-800 p-2 text-sm sm:text-base"
                placeholder="New Password" id="newpassword" name="newpassword" autocomplete="off" required>
            <input type="textarea"
            class="w-32 md:w-54 lg:w-80 h-1.8 md:h-5.3 lg:h-8.3 mt-4 shadow-md border border-gray-800 p-2 text-sm sm:text-base"
                placeholder="Confirm New Password" id="newpassword" name="newpassword" autocomplete="off" required>
                <button type="submit" class="w-32 md:w-54 lg:w-80 h-1.8 md:h-5.3 lg:h-8.3 mt-4 shadow-md border border-gray-800 p-2 bg-indigo-700 text-white text-sm sm:text-base" value="submit">Update Password</button>
        </div>
    </form>

</body>

</html>