<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>

<body>
    <header class="flex flex-col md:flex-row items-center justify-between p-4 bg-gray-300 relative">
        <div class="flex flex-col md:flex-row items-center ">
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
    
    

    <div class="flex flex-col items-center justify-center mt-10">
        <div class="flex flex-col items-center bg-white w-48 md:w-64 lg:w-96 p-5 mt-2 mb-10">
            <h1 class="mt-1 text-sm sm:text-sm md:text-sm lg:text-sm xl:text-sm"><b>Foto-Foto</b></h1>
        </div>
    </div>
    
    <form action=" " class="flex flex-col items-center justify-center mt-5">
        <div
            class="flex flex-col items-center bg-white w-48 md:w-64 lg:w-96 p-5 shadow-md border border-gray-800 mt-2 mb-10">
            <h1 class="mt-1 text-sm sm:text-sm md:text-sm lg:text-sm xl:text-sm">Masukkan Foto Baru
            </h1>
            <select
                class="w-32 md:w-54 lg:w-80 h-1.8 md:h-5.3 lg:h-8.3 mt-4 shadow-md border border-gray-800 p-2 text-sm sm:text-base"
                id="jabatan" name="jabatan" required>
                <option value="" disabled selected>Pilih Kategori</option>
                <option value="taman_kg">Taman KG</option>
                <option value="sd">SD</option>
                <option value="smp">SMP</option>
                <option value="sma">SMA</option>
                <option value="esktrakulikuler">Ekstrakulikuler</option>
                <option value="fasilitas">Fasilitas</option>
            </select>
            <img src="{{ URL('images/admin/profile.png') }}" class="w-16 md:w-32 lg:w-24  border border-gray-200 mt-5"
                alt="Profile Image">
            <button type="file"
                class="bg-gray-300 w-32 md:w-54 lg:w-80 h-1.8 md:h-5.3 lg:h-8.3 mt-4 shadow-md  p-2 text-sm sm:text-base">Upload
                Foto</button>
            <button type="submit"
                class="w-32 md:w-54 lg:w-80 h-1.8 md:h-5.3 lg:h-8.3 mt-4 shadow-md border border-gray-800 p-2 bg-indigo-700 text-white text-sm sm:text-base"
                value="submit">Submit</button>
        </div>
    </form>

    <div class="flex flex-col items-center justify-center mt-10">
        <div class="flex flex-col items-center bg-white w-48 md:w-64 lg:w-96 p-5 mt-2 mb-10">
            <h1 class="mt-1 text-sm sm:text-sm md:text-sm lg:text-sm xl:text-sm"><b>Foto-Foto Akademik</b></h1>
        </div>
    </div>

    <div class="base:flex-col xs:flex-col md:flex-col lg:flex-row sm:flex-col flex flex-col items-center justify-center mt-2 space-x-10 mr-5 ml-5 mt-5">    
        <div class="flex flex-col items-center justify-center mt-5">
            <div
                class="flex flex-row items-center w-48 md:w-64 lg:w-98 p-5 shadow-md border border-yellow-200 mb-10 space-x-4 relative block max-w-sm p-6 border border-yellow-200 rounded-lg shadow hover:bg-yellow-100 dark:bg-yellow-200 dark:border-yellow-200 dark:hover:bg-yellow-300">
                <div class="flex flex-col items-center justify-center ">
                    <div class="flex flex-col items-center justify-center">
                        <h1 class="flex justify-center mb-3"><b>Taman KG 1</b></h1>
                        <img id="carouselImage1" class="w-24 md:w-32 lg:w-48 h-36 md:h-22 lg:h-36 m-auto mr-5 ml-5"
                            alt="Logo" src="{{ URL('images/admin/photo1.jpeg') }}" data-current-image="1"
                            data-total-images="3">
                    </div>
                    <div class="flex flex-row space-x-2 mt-4">
                    <button type="update"
                            class="text-gray-900 bg-gradient-to-r from-lime-200 via-lime-400 to-lime-500 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-lime-300 dark:focus:ring-lime-800 shadow-lg shadow-lime-500/50 dark:shadow-lg dark:shadow-lime-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2"
                            value="update">Update</button>
                        <button type="delete"
                            class="text-white bg-gradient-to-r from-red-400 via-red-500 to-red-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 shadow-lg shadow-red-500/50 dark:shadow-lg dark:shadow-red-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2"
                            value="delete">Delete</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="flex flex-col items-center justify-center mt-5">
            <div
                class="flex flex-row items-center w-48 md:w-64 lg:w-98 p-5 shadow-md border border-yellow-200 mb-10 space-x-4 relative block max-w-sm p-6 border border-yellow-200 rounded-lg shadow hover:bg-yellow-100 dark:bg-yellow-200 dark:border-yellow-200 dark:hover:bg-yellow-300">
                <div class="flex flex-col items-center justify-center ">
                    <div class="flex flex-col items-center justify-center">
                        <h1 class="flex justify-center mb-3"><b>Taman KG 2</b></h1>
                        <img id="carouselImage1" class="w-24 md:w-32 lg:w-48 h-36 md:h-22 lg:h-36 m-auto mr-5 ml-5"
                            alt="Logo" src="{{ URL('images/admin/photo1.jpeg') }}" data-current-image="1"
                            data-total-images="3">
                    </div>
                    <div class="flex flex-row space-x-2 mt-4">
                    <button type="update"
                            class="text-gray-900 bg-gradient-to-r from-lime-200 via-lime-400 to-lime-500 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-lime-300 dark:focus:ring-lime-800 shadow-lg shadow-lime-500/50 dark:shadow-lg dark:shadow-lime-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2"
                            value="update">Update</button>
                        <button type="delete"
                            class="text-white bg-gradient-to-r from-red-400 via-red-500 to-red-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 shadow-lg shadow-red-500/50 dark:shadow-lg dark:shadow-red-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2"
                            value="delete">Delete</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex flex-col items-center justify-center mt-5">
            <div
                class="flex flex-row items-center w-48 md:w-64 lg:w-98 p-5 shadow-md border border-yellow-200 mb-10 space-x-4 relative block max-w-sm p-6 border border-yellow-200 rounded-lg shadow hover:bg-yellow-100 dark:bg-yellow-200 dark:border-yellow-200 dark:hover:bg-yellow-300">
                <div class="flex flex-col items-center justify-center ">
                    <div class="flex flex-col items-center justify-center">
                        <h1 class="flex justify-center mb-3"><b>Taman KG 3</b></h1>
                        <img id="carouselImage1" class="w-24 md:w-32 lg:w-48 h-36 md:h-22 lg:h-36 m-auto mr-5 ml-5"
                            alt="Logo" src="{{ URL('images/admin/photo1.jpeg') }}" data-current-image="1"
                            data-total-images="3">
                    </div>
                    <div class="flex flex-row space-x-2 mt-4">
                    <button type="update"
                            class="text-gray-900 bg-gradient-to-r from-lime-200 via-lime-400 to-lime-500 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-lime-300 dark:focus:ring-lime-800 shadow-lg shadow-lime-500/50 dark:shadow-lg dark:shadow-lime-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2"
                            value="update">Update</button>
                        <button type="delete"
                            class="text-white bg-gradient-to-r from-red-400 via-red-500 to-red-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 shadow-lg shadow-red-500/50 dark:shadow-lg dark:shadow-red-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2"
                            value="delete">Delete</button>
                    </div>
                </div>
            </div>
        </div>
    </div>


        
    <div class="base:flex-col xs:flex-col md:flex-col lg:flex-row sm:flex-col flex flex-col items-center justify-center mt-2 space-x-10 mr-5 ml-5 mt-5">    
        <div class="flex flex-col items-center justify-center mt-5">
            <div
                class="flex flex-row items-center w-48 md:w-64 lg:w-98 p-5 shadow-md border border-yellow-200 mb-10 space-x-4 relative block max-w-sm p-6 border border-yellow-200 rounded-lg shadow hover:bg-yellow-100 dark:bg-yellow-200 dark:border-yellow-200 dark:hover:bg-yellow-300">
                <div class="flex flex-col items-center justify-center ">
                    <div class="flex flex-col items-center justify-center">
                        <h1 class="flex justify-center mb-3"><b>SD 1</b></h1>
                        <img id="carouselImage1" class="w-24 md:w-32 lg:w-48 h-36 md:h-22 lg:h-36 m-auto mr-5 ml-5"
                            alt="Logo" src="{{ URL('images/admin/photo1.jpeg') }}" data-current-image="1"
                            data-total-images="3">
                    </div>
                    <div class="flex flex-row space-x-2 mt-4">
                    <button type="update"
                            class="text-gray-900 bg-gradient-to-r from-lime-200 via-lime-400 to-lime-500 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-lime-300 dark:focus:ring-lime-800 shadow-lg shadow-lime-500/50 dark:shadow-lg dark:shadow-lime-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2"
                            value="update">Update</button>
                        <button type="delete"
                            class="text-white bg-gradient-to-r from-red-400 via-red-500 to-red-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 shadow-lg shadow-red-500/50 dark:shadow-lg dark:shadow-red-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2"
                            value="delete">Delete</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="flex flex-col items-center justify-center mt-5">
            <div
                class="flex flex-row items-center w-48 md:w-64 lg:w-98 p-5 shadow-md border border-yellow-200 mb-10 space-x-4 relative block max-w-sm p-6 border border-yellow-200 rounded-lg shadow hover:bg-yellow-100 dark:bg-yellow-200 dark:border-yellow-200 dark:hover:bg-yellow-300">
                <div class="flex flex-col items-center justify-center ">
                    <div class="flex flex-col items-center justify-center">
                        <h1 class="flex justify-center mb-3"><b>SD 2</b></h1>
                        <img id="carouselImage1" class="w-24 md:w-32 lg:w-48 h-36 md:h-22 lg:h-36 m-auto mr-5 ml-5"
                            alt="Logo" src="{{ URL('images/admin/photo1.jpeg') }}" data-current-image="1"
                            data-total-images="3">
                    </div>
                    <div class="flex flex-row space-x-2 mt-4">
                    <button type="update"
                            class="text-gray-900 bg-gradient-to-r from-lime-200 via-lime-400 to-lime-500 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-lime-300 dark:focus:ring-lime-800 shadow-lg shadow-lime-500/50 dark:shadow-lg dark:shadow-lime-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2"
                            value="update">Update</button>
                        <button type="delete"
                            class="text-white bg-gradient-to-r from-red-400 via-red-500 to-red-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 shadow-lg shadow-red-500/50 dark:shadow-lg dark:shadow-red-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2"
                            value="delete">Delete</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex flex-col items-center justify-center mt-5">
            <div
                class="flex flex-row items-center w-48 md:w-64 lg:w-98 p-5 shadow-md border border-yellow-200 mb-10 space-x-4 relative block max-w-sm p-6 border border-yellow-200 rounded-lg shadow hover:bg-yellow-100 dark:bg-yellow-200 dark:border-yellow-200 dark:hover:bg-yellow-300">
                <div class="flex flex-col items-center justify-center ">
                    <div class="flex flex-col items-center justify-center">
                        <h1 class="flex justify-center mb-3"><b>SD 3</b></h1>
                        <img id="carouselImage1" class="w-24 md:w-32 lg:w-48 h-36 md:h-22 lg:h-36 m-auto mr-5 ml-5"
                            alt="Logo" src="{{ URL('images/admin/photo1.jpeg') }}" data-current-image="1"
                            data-total-images="3">
                    </div>
                    <div class="flex flex-row space-x-2 mt-4">
                        <button type="update"
                            class="text-gray-900 bg-gradient-to-r from-lime-200 via-lime-400 to-lime-500 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-lime-300 dark:focus:ring-lime-800 shadow-lg shadow-lime-500/50 dark:shadow-lg dark:shadow-lime-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2"
                            value="update">Update</button>
                        <button type="delete"
                            class="text-white bg-gradient-to-r from-red-400 via-red-500 to-red-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 shadow-lg shadow-red-500/50 dark:shadow-lg dark:shadow-red-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2"
                            value="delete">Delete</button>
                    </div>
                </div>
            </div>
        </div>
    </div>





    <div class="base:flex-col xs:flex-col md:flex-col lg:flex-row sm:flex-col flex flex-col items-center justify-center mt-2 space-x-10 mr-5 ml-5 mt-5">    
        <div class="flex flex-col items-center justify-center mt-5">
            <div
                class="flex flex-row items-center w-48 md:w-64 lg:w-98 p-5 shadow-md border border-yellow-200 mb-10 space-x-4 relative block max-w-sm p-6 border border-yellow-200 rounded-lg shadow hover:bg-yellow-100 dark:bg-yellow-200 dark:border-yellow-200 dark:hover:bg-yellow-300">
                <div class="flex flex-col items-center justify-center ">
                    <div class="flex flex-col items-center justify-center">
                        <h1 class="flex justify-center mb-3"><b>SMP 1</b></h1>
                        <img id="carouselImage1" class="w-24 md:w-32 lg:w-48 h-36 md:h-22 lg:h-36 m-auto mr-5 ml-5"
                            alt="Logo" src="{{ URL('images/admin/photo1.jpeg') }}" data-current-image="1"
                            data-total-images="3">
                    </div>
                    <div class="flex flex-row space-x-2 mt-4">
                    <button type="update"
                            class="text-gray-900 bg-gradient-to-r from-lime-200 via-lime-400 to-lime-500 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-lime-300 dark:focus:ring-lime-800 shadow-lg shadow-lime-500/50 dark:shadow-lg dark:shadow-lime-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2"
                            value="update">Update</button>
                        <button type="delete"
                            class="text-white bg-gradient-to-r from-red-400 via-red-500 to-red-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 shadow-lg shadow-red-500/50 dark:shadow-lg dark:shadow-red-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2"
                            value="delete">Delete</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="flex flex-col items-center justify-center mt-5">
            <div
                class="flex flex-row items-center w-48 md:w-64 lg:w-98 p-5 shadow-md border border-yellow-200 mb-10 space-x-4 relative block max-w-sm p-6 border border-yellow-200 rounded-lg shadow hover:bg-yellow-100 dark:bg-yellow-200 dark:border-yellow-200 dark:hover:bg-yellow-300">
                <div class="flex flex-col items-center justify-center ">
                    <div class="flex flex-col items-center justify-center">
                        <h1 class="flex justify-center mb-3"><b>SMP 2</b></h1>
                        <img id="carouselImage1" class="w-24 md:w-32 lg:w-48 h-36 md:h-22 lg:h-36 m-auto mr-5 ml-5"
                            alt="Logo" src="{{ URL('images/admin/photo1.jpeg') }}" data-current-image="1"
                            data-total-images="3">
                    </div>
                    <div class="flex flex-row space-x-2 mt-4">
                    <button type="update"
                            class="text-gray-900 bg-gradient-to-r from-lime-200 via-lime-400 to-lime-500 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-lime-300 dark:focus:ring-lime-800 shadow-lg shadow-lime-500/50 dark:shadow-lg dark:shadow-lime-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2"
                            value="update">Update</button>
                        <button type="delete"
                            class="text-white bg-gradient-to-r from-red-400 via-red-500 to-red-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 shadow-lg shadow-red-500/50 dark:shadow-lg dark:shadow-red-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2"
                            value="delete">Delete</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex flex-col items-center justify-center mt-5">
            <div
                class="flex flex-row items-center w-48 md:w-64 lg:w-98 p-5 shadow-md border border-yellow-200 mb-10 space-x-4 relative block max-w-sm p-6 border border-yellow-200 rounded-lg shadow hover:bg-yellow-100 dark:bg-yellow-200 dark:border-yellow-200 dark:hover:bg-yellow-300">
                <div class="flex flex-col items-center justify-center ">
                    <div class="flex flex-col items-center justify-center">
                        <h1 class="flex justify-center mb-3"><b>SMP 3</b></h1>
                        <img id="carouselImage1" class="w-24 md:w-32 lg:w-48 h-36 md:h-22 lg:h-36 m-auto mr-5 ml-5"
                            alt="Logo" src="{{ URL('images/admin/photo1.jpeg') }}" data-current-image="1"
                            data-total-images="3">
                    </div>
                    <div class="flex flex-row space-x-2 mt-4">
                        <button type="update"
                            class="text-gray-900 bg-gradient-to-r from-lime-200 via-lime-400 to-lime-500 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-lime-300 dark:focus:ring-lime-800 shadow-lg shadow-lime-500/50 dark:shadow-lg dark:shadow-lime-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2"
                            value="update">Update</button>
                        <button type="delete"
                            class="text-white bg-gradient-to-r from-red-400 via-red-500 to-red-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 shadow-lg shadow-red-500/50 dark:shadow-lg dark:shadow-red-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2"
                            value="delete">Delete</button>
                    </div>
                </div>
            </div>
        </div>
    </div>





    <div class="base:flex-col xs:flex-col md:flex-col lg:flex-row sm:flex-col flex flex-col items-center justify-center mt-2 space-x-10 mr-5 ml-5 mt-5">    
        <div class="flex flex-col items-center justify-center mt-5">
            <div
                class="flex flex-row items-center w-48 md:w-64 lg:w-98 p-5 shadow-md border border-yellow-200 mb-10 space-x-4 relative block max-w-sm p-6 border border-yellow-200 rounded-lg shadow hover:bg-yellow-100 dark:bg-yellow-200 dark:border-yellow-200 dark:hover:bg-yellow-300">
                <div class="flex flex-col items-center justify-center ">
                    <div class="flex flex-col items-center justify-center">
                        <h1 class="flex justify-center mb-3"><b>SMA 1</b></h1>
                        <img id="carouselImage1" class="w-24 md:w-32 lg:w-48 h-36 md:h-22 lg:h-36 m-auto mr-5 ml-5"
                            alt="Logo" src="{{ URL('images/admin/photo1.jpeg') }}" data-current-image="1"
                            data-total-images="3">
                    </div>
                    <div class="flex flex-row space-x-2 mt-4">
                    <button type="update"
                            class="text-gray-900 bg-gradient-to-r from-lime-200 via-lime-400 to-lime-500 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-lime-300 dark:focus:ring-lime-800 shadow-lg shadow-lime-500/50 dark:shadow-lg dark:shadow-lime-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2"
                            value="update">Update</button>
                        <button type="delete"
                            class="text-white bg-gradient-to-r from-red-400 via-red-500 to-red-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 shadow-lg shadow-red-500/50 dark:shadow-lg dark:shadow-red-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2"
                            value="delete">Delete</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="flex flex-col items-center justify-center mt-5">
            <div
                class="flex flex-row items-center w-48 md:w-64 lg:w-98 p-5 shadow-md border border-yellow-200 mb-10 space-x-4 relative block max-w-sm p-6 border border-yellow-200 rounded-lg shadow hover:bg-yellow-100 dark:bg-yellow-200 dark:border-yellow-200 dark:hover:bg-yellow-300">
                <div class="flex flex-col items-center justify-center ">
                    <div class="flex flex-col items-center justify-center">
                        <h1 class="flex justify-center mb-3"><b>SMA 2</b></h1>
                        <img id="carouselImage1" class="w-24 md:w-32 lg:w-48 h-36 md:h-22 lg:h-36 m-auto mr-5 ml-5"
                            alt="Logo" src="{{ URL('images/admin/photo1.jpeg') }}" data-current-image="1"
                            data-total-images="3">
                    </div>
                    <div class="flex flex-row space-x-2 mt-4">
                    <button type="update"
                            class="text-gray-900 bg-gradient-to-r from-lime-200 via-lime-400 to-lime-500 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-lime-300 dark:focus:ring-lime-800 shadow-lg shadow-lime-500/50 dark:shadow-lg dark:shadow-lime-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2"
                            value="update">Update</button>
                        <button type="delete"
                            class="text-white bg-gradient-to-r from-red-400 via-red-500 to-red-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 shadow-lg shadow-red-500/50 dark:shadow-lg dark:shadow-red-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2"
                            value="delete">Delete</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex flex-col items-center justify-center mt-5">
            <div
                class="flex flex-row items-center w-48 md:w-64 lg:w-98 p-5 shadow-md border border-yellow-200 mb-10 space-x-4 relative block max-w-sm p-6 border border-yellow-200 rounded-lg shadow hover:bg-yellow-100 dark:bg-yellow-200 dark:border-yellow-200 dark:hover:bg-yellow-300">
                <div class="flex flex-col items-center justify-center ">
                    <div class="flex flex-col items-center justify-center">
                        <h1 class="flex justify-center mb-3"><b>SMA 3</b></h1>
                        <img id="carouselImage1" class="w-24 md:w-32 lg:w-48 h-36 md:h-22 lg:h-36 m-auto mr-5 ml-5"
                            alt="Logo" src="{{ URL('images/admin/photo1.jpeg') }}" data-current-image="1"
                            data-total-images="3">
                    </div>
                    <div class="flex flex-row space-x-2 mt-4">
                        <button type="update"
                            class="text-gray-900 bg-gradient-to-r from-lime-200 via-lime-400 to-lime-500 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-lime-300 dark:focus:ring-lime-800 shadow-lg shadow-lime-500/50 dark:shadow-lg dark:shadow-lime-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2"
                            value="update">Update</button>
                        <button type="delete"
                            class="text-white bg-gradient-to-r from-red-400 via-red-500 to-red-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 shadow-lg shadow-red-500/50 dark:shadow-lg dark:shadow-red-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2"
                            value="delete">Delete</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Ekstrakulikuler -->

    <div class="flex flex-col items-center justify-center mt-10">
        <div class="flex flex-col items-center bg-white w-48 md:w-64 lg:w-96 p-5 mt-2 mb-10">
            <h1 class="mt-1 text-sm sm:text-sm md:text-sm lg:text-sm xl:text-sm"><b>Foto-Foto Ekstrakulikuler</b></h1>
        </div>
    </div>

    <div class="base:flex-col xs:flex-col md:flex-col lg:flex-row sm:flex-col flex flex-col items-center justify-center mt-2 space-x-10 mr-5 ml-5 mt-5">    
        <div class="flex flex-col items-center justify-center mt-5">
            <div
                class="flex flex-row items-center w-48 md:w-64 lg:w-98 p-5 shadow-md border border-blue-200 mb-10 space-x-4 relative block max-w-sm p-6 border border-blue-200 rounded-lg shadow hover:bg-blue-100 dark:bg-blue-200 dark:border-blue-200 dark:hover:bg-blue-300">
                <div class="flex flex-col items-center justify-center ">
                    <div class="flex flex-col items-center justify-center">
                        <h1 class="flex justify-center mb-3"><b>Badminton</b></h1>
                        <img id="carouselImage1" class="w-24 md:w-32 lg:w-48 h-36 md:h-22 lg:h-36 m-auto mr-5 ml-5"
                            alt="Logo" src="{{ URL('images/admin/photo1.jpeg') }}" data-current-image="1"
                            data-total-images="3">
                    </div>
                    <div class="flex flex-row space-x-2 mt-4">
                    <button type="update"
                            class="text-gray-900 bg-gradient-to-r from-lime-200 via-lime-400 to-lime-500 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-lime-300 dark:focus:ring-lime-800 shadow-lg shadow-lime-500/50 dark:shadow-lg dark:shadow-lime-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2"
                            value="update">Update</button>
                        <button type="delete"
                            class="text-white bg-gradient-to-r from-red-400 via-red-500 to-red-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 shadow-lg shadow-red-500/50 dark:shadow-lg dark:shadow-red-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2"
                            value="delete">Delete</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="flex flex-col items-center justify-center mt-5">
            <div
                class="flex flex-row items-center w-48 md:w-64 lg:w-98 p-5 shadow-md border border-blue-200 mb-10 space-x-4 relative block max-w-sm p-6 border border-blue-200 rounded-lg shadow hover:bg-blue-100 dark:bg-blue-200 dark:border-blue-200 dark:hover:bg-blue-300">
                <div class="flex flex-col items-center justify-center ">
                    <div class="flex flex-col items-center justify-center">
                        <h1 class="flex justify-center mb-3"><b>Basket</b></h1>
                        <img id="carouselImage1" class="w-24 md:w-32 lg:w-48 h-36 md:h-22 lg:h-36 m-auto mr-5 ml-5"
                            alt="Logo" src="{{ URL('images/admin/photo1.jpeg') }}" data-current-image="1"
                            data-total-images="3">
                    </div>
                    <div class="flex flex-row space-x-2 mt-4">
                    <button type="update"
                            class="text-gray-900 bg-gradient-to-r from-lime-200 via-lime-400 to-lime-500 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-lime-300 dark:focus:ring-lime-800 shadow-lg shadow-lime-500/50 dark:shadow-lg dark:shadow-lime-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2"
                            value="update">Update</button>
                        <button type="delete"
                            class="text-white bg-gradient-to-r from-red-400 via-red-500 to-red-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 shadow-lg shadow-red-500/50 dark:shadow-lg dark:shadow-red-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2"
                            value="delete">Delete</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex flex-col items-center justify-center mt-5">
            <div
                class="flex flex-row items-center w-48 md:w-64 lg:w-98 p-5 shadow-md border border-blue-200 mb-10 space-x-4 relative block max-w-sm p-6 border border-blue-200 rounded-lg shadow hover:bg-blue-100 dark:bg-blue-200 dark:border-blue-200 dark:hover:bg-blue-300">
                <div class="flex flex-col items-center justify-center ">
                    <div class="flex flex-col items-center justify-center">
                        <h1 class="flex justify-center mb-3"><b>Sepak Bola</b></h1>
                        <img id="carouselImage1" class="w-24 md:w-32 lg:w-48 h-36 md:h-22 lg:h-36 m-auto mr-5 ml-5"
                            alt="Logo" src="{{ URL('images/admin/photo1.jpeg') }}" data-current-image="1"
                            data-total-images="3">
                    </div>
                    <div class="flex flex-row space-x-2 mt-4">
                        <button type="update"
                            class="text-gray-900 bg-gradient-to-r from-lime-200 via-lime-400 to-lime-500 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-lime-300 dark:focus:ring-lime-800 shadow-lg shadow-lime-500/50 dark:shadow-lg dark:shadow-lime-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2"
                            value="update">Update</button>
                        <button type="delete"
                            class="text-white bg-gradient-to-r from-red-400 via-red-500 to-red-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 shadow-lg shadow-red-500/50 dark:shadow-lg dark:shadow-red-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2"
                            value="delete">Delete</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="base:flex-col xs:flex-col md:flex-col lg:flex-row sm:flex-col flex flex-col items-center justify-center mt-2 space-x-10 mr-5 ml-5 mt-5">    
        <div class="flex flex-col items-center justify-center mt-5">
            <div
                class="flex flex-row items-center w-48 md:w-64 lg:w-98 p-5 shadow-md border border-blue-200 mb-10 space-x-4 relative block max-w-sm p-6 border border-blue-200 rounded-lg shadow hover:bg-blue-100 dark:bg-blue-200 dark:border-blue-200 dark:hover:bg-blue-300">
                <div class="flex flex-col items-center justify-center ">
                    <div class="flex flex-col items-center justify-center">
                        <h1 class="flex justify-center mb-3"><b>Bulutangkis</b></h1>
                        <img id="carouselImage1" class="w-24 md:w-32 lg:w-48 h-36 md:h-22 lg:h-36 m-auto mr-5 ml-5"
                            alt="Logo" src="{{ URL('images/admin/photo1.jpeg') }}" data-current-image="1"
                            data-total-images="3">
                    </div>
                    <div class="flex flex-row space-x-2 mt-4">
                    <button type="update"
                            class="text-gray-900 bg-gradient-to-r from-lime-200 via-lime-400 to-lime-500 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-lime-300 dark:focus:ring-lime-800 shadow-lg shadow-lime-500/50 dark:shadow-lg dark:shadow-lime-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2"
                            value="update">Update</button>
                        <button type="delete"
                            class="text-white bg-gradient-to-r from-red-400 via-red-500 to-red-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 shadow-lg shadow-red-500/50 dark:shadow-lg dark:shadow-red-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2"
                            value="delete">Delete</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="flex flex-col items-center justify-center mt-5">
            <div
                class="flex flex-row items-center w-48 md:w-64 lg:w-98 p-5 shadow-md border border-blue-200 mb-10 space-x-4 relative block max-w-sm p-6 border border-blue-200 rounded-lg shadow hover:bg-blue-100 dark:bg-blue-200 dark:border-blue-200 dark:hover:bg-blue-300">
                <div class="flex flex-col items-center justify-center ">
                    <div class="flex flex-col items-center justify-center">
                        <h1 class="flex justify-center mb-3"><b>Modern Dance</b></h1>
                        <img id="carouselImage1" class="w-24 md:w-32 lg:w-48 h-36 md:h-22 lg:h-36 m-auto mr-5 ml-5"
                            alt="Logo" src="{{ URL('images/admin/photo1.jpeg') }}" data-current-image="1"
                            data-total-images="3">
                    </div>
                    <div class="flex flex-row space-x-2 mt-4">
                    <button type="update"
                            class="text-gray-900 bg-gradient-to-r from-lime-200 via-lime-400 to-lime-500 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-lime-300 dark:focus:ring-lime-800 shadow-lg shadow-lime-500/50 dark:shadow-lg dark:shadow-lime-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2"
                            value="update">Update</button>
                        <button type="delete"
                            class="text-white bg-gradient-to-r from-red-400 via-red-500 to-red-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 shadow-lg shadow-red-500/50 dark:shadow-lg dark:shadow-red-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2"
                            value="delete">Delete</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
            
    <!-- Fasilitas -->

    <div class="flex flex-col items-center justify-center mt-10">
        <div class="flex flex-col items-center bg-white w-48 md:w-64 lg:w-96 p-5 mt-2 mb-10">
            <h1 class="mt-1 text-sm sm:text-sm md:text-sm lg:text-sm xl:text-sm"><b>Foto-Foto Fasilitas</b></h1>
        </div>
    </div>

    <div class="base:flex-col xs:flex-col md:flex-col lg:flex-row sm:flex-col flex flex-col items-center justify-center mt-2 space-x-10 mr-5 ml-5 mt-5">    
        <div class="flex flex-col items-center justify-center mt-5">
            <div
                class="flex flex-row items-center w-48 md:w-64 lg:w-98 p-5 shadow-md border border-gray-300 mb-10 space-x-4 relative block max-w-sm p-6 border border-gray-300 rounded-lg shadow hover:bg-gray-200 dark:bg-gray-300 dark:border-gray-300 dark:hover:bg-gray-400">
                <div class="flex flex-col items-center justify-center ">
                    <div class="flex flex-col items-center justify-center">
                        <h1 class="flex justify-center mb-3"><b>Lapangan Olahraga</b></h1>
                        <img id="carouselImage1" class="w-24 md:w-32 lg:w-48 h-36 md:h-22 lg:h-36 m-auto mr-5 ml-5"
                            alt="Logo" src="{{ URL('images/admin/photo1.jpeg') }}" data-current-image="1"
                            data-total-images="3">
                    </div>
                    <div class="flex flex-row space-x-2 mt-4">
                    <button type="update"
                            class="text-gray-900 bg-gradient-to-r from-lime-200 via-lime-400 to-lime-500 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-lime-300 dark:focus:ring-lime-800 shadow-lg shadow-lime-500/50 dark:shadow-lg dark:shadow-lime-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2"
                            value="update">Update</button>
                        <button type="delete"
                            class="text-white bg-gradient-to-r from-red-400 via-red-500 to-red-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 shadow-lg shadow-red-500/50 dark:shadow-lg dark:shadow-red-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2"
                            value="delete">Delete</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="flex flex-col items-center justify-center mt-5">
            <div
                class="flex flex-row items-center w-48 md:w-64 lg:w-98 p-5 shadow-md border border-gray-300 mb-10 space-x-4 relative block max-w-sm p-6 border border-gray-300 rounded-lg shadow hover:bg-gray-200 dark:bg-gray-300 dark:border-gray-300 dark:hover:bg-gray-400">
                <div class="flex flex-col items-center justify-center ">
                    <div class="flex flex-col items-center justify-center">
                        <h1 class="flex justify-center mb-3"><b>Perpustakaan</b></h1>
                        <img id="carouselImage1" class="w-24 md:w-32 lg:w-48 h-36 md:h-22 lg:h-36 m-auto mr-5 ml-5"
                            alt="Logo" src="{{ URL('images/admin/photo1.jpeg') }}" data-current-image="1"
                            data-total-images="3">
                    </div>
                    <div class="flex flex-row space-x-2 mt-4">
                    <button type="update"
                            class="text-gray-900 bg-gradient-to-r from-lime-200 via-lime-400 to-lime-500 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-lime-300 dark:focus:ring-lime-800 shadow-lg shadow-lime-500/50 dark:shadow-lg dark:shadow-lime-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2"
                            value="update">Update</button>
                        <button type="delete"
                            class="text-white bg-gradient-to-r from-red-400 via-red-500 to-red-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 shadow-lg shadow-red-500/50 dark:shadow-lg dark:shadow-red-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2"
                            value="delete">Delete</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex flex-col items-center justify-center mt-5">
            <div
                class="flex flex-row items-center w-48 md:w-64 lg:w-98 p-5 shadow-md border border-gray-300 mb-10 space-x-4 relative block max-w-sm p-6 border border-gray-300 rounded-lg shadow hover:bg-gray-200 dark:bg-gray-300 dark:border-gray-300 dark:hover:bg-gray-400">
                <div class="flex flex-col items-center justify-center ">
                    <div class="flex flex-col items-center justify-center">
                        <h1 class="flex justify-center mb-3"><b>Laboratorium</b></h1>
                        <img id="carouselImage1" class="w-24 md:w-32 lg:w-48 h-36 md:h-22 lg:h-36 m-auto mr-5 ml-5"
                            alt="Logo" src="{{ URL('images/admin/photo1.jpeg') }}" data-current-image="1"
                            data-total-images="3">
                    </div>
                    <div class="flex flex-row space-x-2 mt-4">
                        <button type="update"
                            class="text-gray-900 bg-gradient-to-r from-lime-200 via-lime-400 to-lime-500 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-lime-300 dark:focus:ring-lime-800 shadow-lg shadow-lime-500/50 dark:shadow-lg dark:shadow-lime-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2"
                            value="update">Update</button>
                        <button type="delete"
                            class="text-white bg-gradient-to-r from-red-400 via-red-500 to-red-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 shadow-lg shadow-red-500/50 dark:shadow-lg dark:shadow-red-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2"
                            value="delete">Delete</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>