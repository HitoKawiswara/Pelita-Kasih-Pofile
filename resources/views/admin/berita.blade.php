<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>

<body>


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
                        <a href="{{ route('updatepw.index') }}" class="block px-4 py-2 text-gray-800 hover:bg-gray-200">Update Password</a>
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
                <h1 class="mt-1 text-sm sm:text-sm md:text-sm lg:text-sm xl:text-sm">Berita Baru</h1>
                <input type="textarea"
                    class="w-32 md:w-54 lg:w-80 h-1.8 md:h-5.3 lg:h-8.3 mt-4 shadow-md border border-gray-800 p-2 text-sm sm:text-base"
                    placeholder="Masukkan Judul Berita" id="judul" name="judul" autocomplete="off" required>
                <input type="textarea"
                    class="w-32 md:w-54 lg:w-80 h-1.8 md:h-5.3 lg:h-8.3 mt-4 shadow-md border border-gray-800 p-2 text-sm sm:text-base"
                    placeholder="Masukkan Tanggal Berita" id="tanggal" name="tanggal" autocomplete="off" required>
                <input type="textarea"
                    class="w-32 md:w-54 lg:w-80 h-4 md:h-12 lg:h-20 mt-4 shadow-md border border-gray-800 p-2 text-sm sm:text-base"
                    placeholder="Masukkan Caption Berita" id="caption" name="caption" autocomplete="off" required>
                <input type="textarea"
                    class="w-32 md:w-54 lg:w-80 h-8 md:h-24 lg:h-40 mt-4 shadow-md border border-gray-800 p-2 text-sm sm:text-base"
                    placeholder="Masukkan Isi Berita" id="isi" name="isi" autocomplete="off" required>
                <button type="file"
                    class="bg-gray-300 w-32 md:w-54 lg:w-80 h-1.8 md:h-5.3 lg:h-8.3 mt-4 shadow-md  p-2 text-sm sm:text-base">Upload
                    Foto</button>
                <button type="submit"
                    class="w-32 md:w-54 lg:w-80 h-1.8 md:h-5.3 lg:h-8.3 mt-4 shadow-md border border-gray-800 p-2 bg-indigo-700 text-white text-sm sm:text-base"
                    value="submit">Submit</button>
            </div>
        </form>

        <div
            class="base:flex-col xs:flex-col md:flex-col lg:flex-row sm:flex-col flex flex-col items-center justify-center mt-10 space-x-4 mr-5 ml-5">

            <!-- Berita 1-->
            <div
                class="flex flex-row items-center bg-white w-48 md:w-64 lg:w-96  p-5 shadow-md border border-gray-800 mt-2 mb-10 space-x-4">
                <div class="flex flex-col mt-10">
                    <div class=" items-center justify-center">
                        <img src="{{ URL('images/admin/berita1.png') }}"
                            class="w-48 md:w-64 lg:w-96 h-48 md:h-64 lg:h-96" alt="Logo">
                        <h1 class="mt-5"><b>Tim Voli SMAK Pelita Kasih Meraih Medali Emas Pada Asian Games 2024</b></h1>
                    </div>

                    <div class=" items-left justify-left mt-10">
                        <p class="text-orange-500"><b>20-10-2023</b></p>
                        <p class="mt-10 mb-10">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum
                            eleifend sit amet enim at fringilla. Etiam consectetur libero ut ante porta suscipit gravida
                            luctus massa. Maecenas ornare tristique libero ut convallis. Vivamus suscipit, sem eget
                            porta varius, purus orci ultrices ex, ac mattis risus mauris vitae massa. Integer vehicula
                            pretium diam, sed finibus lorem lacinia non. Praesent id malesuada nisi. Etiam vehicula nunc
                            vitae accumsan dignissim. Maecenas enim nisl, dictum id ornare et, aliquet eget elit. Mauris
                            ac diam blandit, imperdiet est vel, aliquet risus. Integer commodo sodales sapien a pretium.
                            Suspendisse a lectus augue. Morbi lorem ligula, pellentesque ut dapibus vitae, semper ac
                            tellus.</p>
                    </div>

                    <div class="flex flex-row space-x-4">
                        <button type="update"
                            class="bg-red-600 w-16 md:w-27 lg:w-40 h-1.8 md:h-5.3 lg:h-8.3 mt-4 shadow-md border border-gray-800 p-2  text-white text-sm sm:text-base"
                            value="update">Update</button>
                        <button type="delete"
                            class="bg-yellow-500 w-16 md:w-27 lg:w-40 h-1.8 md:h-5.3 lg:h-8.3 mt-4 shadow-md border border-gray-800 p-2  text-white text-sm sm:text-base"
                            value="delete">Delete</button>
                    </div>
                </div>
            </div>

            <!-- Berita 2-->
            <div
                class="flex-grow flex flex-row items-center bg-white w-48 md:w-64 lg:w-96 p-5 shadow-md border border-gray-800 mt-2 mb-10">
                <div class="flex flex-col mt-10">
                    <div class=" items-center justify-center">
                        <img src="{{ URL('images/admin/berita2.png') }}"
                            class="w-48 md:w-64 lg:w-96 h-48 md:h-64 lg:h-96" alt="Logo">
                        <h1 class="mt-5"><b>Tim Voli SMAK Pelita Kasih Meraih Medali Emas Pada Asian Games 2024</b></h1>
                    </div>

                    <div class=" items-left justify-left mt-10">
                        <p class="text-orange-500"><b>20-10-2023</b></p>
                        <p class="mt-10 mb-10">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum
                            eleifend sit amet enim at fringilla. Etiam consectetur libero ut ante porta suscipit gravida
                            luctus massa. Maecenas ornare tristique libero ut convallis. Vivamus suscipit, sem eget
                            porta varius, purus orci ultrices ex, ac mattis risus mauris vitae massa. Integer vehicula
                            pretium diam, sed finibus lorem lacinia non. Praesent id malesuada nisi. Etiam vehicula nunc
                            vitae accumsan dignissim. Maecenas enim nisl, dictum id ornare et, aliquet eget elit. Mauris
                            ac diam blandit, imperdiet est vel, aliquet risus. Integer commodo sodales sapien a pretium.
                            Suspendisse a lectus augue. Morbi lorem ligula, pellentesque ut dapibus vitae, semper ac
                            tellus.</p>
                    </div>

                    <div class="flex flex-row space-x-4">
                        <button type="update"
                            class="bg-red-600 w-16 md:w-27 lg:w-40 h-1.8 md:h-5.3 lg:h-8.3 mt-4 shadow-md border border-gray-800 p-2  text-white text-sm sm:text-base"
                            value="update">Update</button>
                        <button type="delete"
                            class="bg-yellow-500 w-16 md:w-27 lg:w-40 h-1.8 md:h-5.3 lg:h-8.3 mt-4 shadow-md border border-gray-800 p-2  text-white text-sm sm:text-base"
                            value="delete">Delete</button>
                    </div>
                </div>
            </div>

            <!-- Berita 3-->
            <div
                class="flex-grow flex flex-row items-center bg-white w-48 md:w-64 lg:w-96 p-5 shadow-md border border-gray-800 mt-2 mb-10">
                <div class="flex flex-col mt-10">
                    <div class=" items-center justify-center">
                        <img src="{{ URL('images/admin/berita3.png') }}"
                            class="w-48 md:w-64 lg:w-96 h-48 md:h-64 lg:h-96" alt="Logo">
                        <h1 class="mt-5"><b>Tim Voli SMAK Pelita Kasih Meraih Medali Emas Pada Asian Games 2024</b></h1>
                    </div>

                    <div class=" items-left justify-left mt-10">
                        <p class="text-orange-500"><b>20-10-2023</b></p>
                        <p class="mt-10 mb-10">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum
                            eleifend sit amet enim at fringilla. Etiam consectetur libero ut ante porta suscipit gravida
                            luctus massa. Maecenas ornare tristique libero ut convallis. Vivamus suscipit, sem eget
                            porta varius, purus orci ultrices ex, ac mattis risus mauris vitae massa. Integer vehicula
                            pretium diam, sed finibus lorem lacinia non. Praesent id malesuada nisi. Etiam vehicula nunc
                            vitae accumsan dignissim. Maecenas enim nisl, dictum id ornare et, aliquet eget elit. Mauris
                            ac diam blandit, imperdiet est vel, aliquet risus. Integer commodo sodales sapien a pretium.
                            Suspendisse a lectus augue. Morbi lorem ligula, pellentesque ut dapibus vitae, semper ac
                            tellus.</p>
                    </div>

                    <div class="flex flex-row space-x-4">
                        <button type="update"
                            class="bg-red-600 w-16 md:w-27 lg:w-40 h-1.8 md:h-5.3 lg:h-8.3 mt-4 shadow-md border border-gray-800 p-2  text-white text-sm sm:text-base"
                            value="update">Update</button>
                        <button type="delete"
                            class="bg-yellow-500 w-16 md:w-27 lg:w-40 h-1.8 md:h-5.3 lg:h-8.3 mt-4 shadow-md border border-gray-800 p-2  text-white text-sm sm:text-base"
                            value="delete">Delete</button>
                    </div>
                </div>
            </div>
        </div>

    </body>

</html>