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

    <div class="flex flex-col items-center justify-center mt-10">
        <div class="flex flex-col items-center bg-white w-48 md:w-64 lg:w-96 p-5 mt-2 mb-10">
            <h1 class="mt-1 text-sm sm:text-sm md:text-sm lg:text-sm xl:text-sm"><b>Foto-Foto Akademik</b></h1>
        </div>
    </div>

    <div
        class="base:flex-col xs:flex-col md:flex-col lg:flex-row sm:flex-col flex flex-col items-center justify-center mt-2 space-x-10 mr-5 ml-5">
        <!-- Taman KG -->
        <div class="flex flex-col items-center justify-center">
            <div
                class="flex flex-row items-center bg-white w-48 md:w-64 lg:w-98 p-5 shadow-md border border-gray-800 mb-10 space-x-4 relative">
                <div class="flex flex-col items-center justify-center">
                    <div class="flex flex-col items-center justify-center">
                        <h1 class="flex justify-center mb-3"><b>Taman KG</b></h1>
                        <img id="carouselImage1" class="w-24 md:w-32 lg:w-48 h-36 md:h-22 lg:h-36 m-auto mr-5 ml-5"
                            alt="Logo" src="{{ URL('images/admin/photo1.jpeg') }}" data-current-image="1"
                            data-total-images="3">
                    </div>
                    <div class="flex flex-row space-x-2 mt-4">
                        <button type="update"
                            class="bg-red-600 w-8 md:w-13.5 lg:w-20 h-8 md:h-10 lg:h-12 shadow-md border border-gray-800 p-2  text-white text-sm sm:text-base"
                            value="update">Update</button>
                        <button type="delete"
                            class="bg-yellow-500 w-8 md:w-13.5 lg:w-20 h-8 md:h-10 lg:h-12 shadow-md border border-gray-800 p-2  text-white text-sm sm:text-base"
                            value="delete">Delete</button>
                    </div>
                </div>
                <button onclick="changeImage(-1, 'carouselImage1')"
                    class="absolute left-0 focus:outline-none bg-gray-500 text-white rounded-full p-2 transform hover:scale-110 transition-transform duration-300">
                    &lt;
                </button>
                <button onclick="changeImage(1, 'carouselImage1')"
                    class="absolute right-0 focus:outline-none bg-gray-500 text-white rounded-full p-2 transform hover:scale-110 transition-transform duration-300">
                    &gt;
                </button>
            </div>
        </div>
        <!-- SD -->
        <div class="flex flex-col items-center justify-center">
            <div
                class="flex flex-row items-center bg-white w-48 md:w-64 lg:w-98 p-5 shadow-md border border-gray-800 mb-10 space-x-4 relative">
                <div class="flex flex-col items-center justify-center">
                    <div class="flex flex-col items-center justify-center">
                        <h1 class="flex justify-center mb-3"><b>SD</b></h1>
                        <img id="carouselImage2" class="w-24 md:w-32 lg:w-48 h-36 md:h-22 lg:h-36 m-auto mr-5 ml-5"
                            alt="Logo" src="{{ URL('images/admin/photo1.jpeg') }}" data-current-image="1"
                            data-total-images="3">
                    </div>
                    <div class="flex flex-row space-x-2 mt-4">
                        <button type="update"
                            class="bg-red-600 w-8 md:w-13.5 lg:w-20 h-8 md:h-10 lg:h-12 shadow-md border border-gray-800 p-2  text-white text-sm sm:text-base"
                            value="update">Update</button>
                        <button type="delete"
                            class="bg-yellow-500 w-8 md:w-13.5 lg:w-20 h-8 md:h-10 lg:h-12 shadow-md border border-gray-800 p-2  text-white text-sm sm:text-base"
                            value="delete">Delete</button>
                    </div>
                </div>
                <button onclick="changeImage(-1, 'carouselImage2')"
                    class="absolute left-0 focus:outline-none bg-gray-500 text-white rounded-full p-2 transform hover:scale-110 transition-transform duration-300">
                    &lt;
                </button>
                <button onclick="changeImage(1, 'carouselImage2')"
                    class="absolute right-0 focus:outline-none bg-gray-500 text-white rounded-full p-2 transform hover:scale-110 transition-transform duration-300">
                    &gt;
                </button>
            </div>
        </div>
        <!-- SMP -->
        <div class="flex flex-col items-center justify-center">
            <div
                class="flex flex-row items-center bg-white w-48 md:w-64 lg:w-98 p-5 shadow-md border border-gray-800 mb-10 space-x-4 relative">
                <div class="flex flex-col items-center justify-center">
                    <div class="flex flex-col items-center justify-center">
                        <h1 class="flex justify-center mb-3"><b>SMP</b></h1>
                        <img id="carouselImage3" class="w-24 md:w-32 lg:w-48 h-36 md:h-22 lg:h-36 m-auto mr-5 ml-5"
                            alt="Logo" src="{{ URL('images/admin/photo1.jpeg') }}" data-current-image="1"
                            data-total-images="3">
                    </div>
                    <div class="flex flex-row space-x-2 mt-4">
                        <button type="update"
                            class="bg-red-600 w-8 md:w-13.5 lg:w-20 h-8 md:h-10 lg:h-12 shadow-md border border-gray-800 p-2  text-white text-sm sm:text-base"
                            value="update">Update</button>
                        <button type="delete"
                            class="bg-yellow-500 w-8 md:w-13.5 lg:w-20 h-8 md:h-10 lg:h-12 shadow-md border border-gray-800 p-2  text-white text-sm sm:text-base"
                            value="delete">Delete</button>
                    </div>
                </div>
                <button onclick="changeImage(-1, 'carouselImage3')"
                    class="absolute left-0 focus:outline-none bg-gray-500 text-white rounded-full p-2 transform hover:scale-110 transition-transform duration-300">
                    &lt;
                </button>
                <button onclick="changeImage(1, 'carouselImage3')"
                    class="absolute right-0 focus:outline-none bg-gray-500 text-white rounded-full p-2 transform hover:scale-110 transition-transform duration-300">
                    &gt;
                </button>
            </div>
        </div>
    </div>

    <!-- New Row-->
    <div
        class="base:flex-col xs:flex-col md:flex-col lg:flex-row sm:flex-col flex flex-col items-center justify-center mt-2 space-x-10 mr-5 ml-5">
        <!-- SMA -->
        <div class="flex flex-col items-center justify-center">
            <div
                class="flex flex-row items-center bg-white w-48 md:w-64 lg:w-98 p-5 shadow-md border border-gray-800 mb-10 space-x-4 relative">
                <div class="flex flex-col items-center justify-center">
                    <div class="flex flex-col items-center justify-center">
                        <h1 class="flex justify-center mb-3"><b>SMA</b></h1>
                        <img id="carouselImage" class="w-24 md:w-32 lg:w-48 h-36 md:h-22 lg:h-36 m-auto mr-5 ml-5"
                            alt="Logo" src="{{ URL('images/admin/photo1.jpeg') }}" data-current-image="1"
                            data-total-images="4">
                    </div>
                    <div class="flex flex-row space-x-2 mt-4">
                        <button type="update"
                            class="bg-red-600 w-8 md:w-13.5 lg:w-20 h-8 md:h-10 lg:h-12 shadow-md border border-gray-800 p-2  text-white text-sm sm:text-base"
                            value="update">Update</button>
                        <button type="delete"
                            class="bg-yellow-500 w-8 md:w-13.5 lg:w-20 h-8 md:h-10 lg:h-12 shadow-md border border-gray-800 p-2  text-white text-sm sm:text-base"
                            value="delete">Delete</button>
                    </div>
                </div>
                <button onclick="changeImage(-1, 'carouselImage4')"
                    class="absolute left-0 focus:outline-none bg-gray-500 text-white rounded-full p-2 transform hover:scale-110 transition-transform duration-300">
                    &lt;
                </button>
                <button onclick="changeImage(1, 'carouselImage4')"
                    class="absolute right-0 focus:outline-none bg-gray-500 text-white rounded-full p-2 transform hover:scale-110 transition-transform duration-300">
                    &gt;
                </button>
            </div>
        </div>
        <!-- Fasilitas -->
        <div class="flex flex-col items-center justify-center">
            <div
                class="flex flex-row items-center bg-white w-48 md:w-64 lg:w-98 p-5 shadow-md border border-gray-800 mb-10 space-x-4 relative">
                <div class="flex flex-col items-center justify-center">
                    <div class="flex flex-col items-center justify-center">
                        <h1 class="flex justify-center mb-3"><b>Fasilitas</b></h1>
                        <img id="carouselImage5" class="w-24 md:w-32 lg:w-48 h-36 md:h-22 lg:h-36 m-auto mr-5 ml-5"
                            alt="Logo" src="{{ URL('images/admin/photo1.jpeg') }}" data-current-image="1"
                            data-total-images="3">
                    </div>
                    <div class="flex flex-row space-x-2 mt-4">
                        <button type="update"
                            class="bg-red-600 w-8 md:w-13.5 lg:w-20 h-8 md:h-10 lg:h-12 shadow-md border border-gray-800 p-2  text-white text-sm sm:text-base"
                            value="update">Update</button>
                        <button type="delete"
                            class="bg-yellow-500 w-8 md:w-13.5 lg:w-20 h-8 md:h-10 lg:h-12 shadow-md border border-gray-800 p-2  text-white text-sm sm:text-base"
                            value="delete">Delete</button>
                    </div>
                </div>
                <button onclick="changeImage(-1, 'carouselImage5')"
                    class="absolute left-0 focus:outline-none bg-gray-500 text-white rounded-full p-2 transform hover:scale-110 transition-transform duration-300">
                    &lt;
                </button>
                <button onclick="changeImage(1, 'carouselImage5')"
                    class="absolute right-0 focus:outline-none bg-gray-500 text-white rounded-full p-2 transform hover:scale-110 transition-transform duration-300">
                    &gt;
                </button>
            </div>
        </div>
    </div>


    <script>
        function changeImage(direction, imageId) {
            let currentImage = parseInt(document.getElementById(`${imageId}`).dataset.currentImage, 10);
            const totalImages = parseInt(document.getElementById(`${imageId}`).dataset.totalImages, 10);

            currentImage = (currentImage + direction - 1 + totalImages) % totalImages + 1;

            const imageUrl = `{{ URL('images/admin/photo${currentImage}.jpeg') }}`;
            document.getElementById(`${imageId}`).src = imageUrl;
            document.getElementById(`${imageId}`).dataset.currentImage = currentImage;
        }
    </script>







</body>

</html>