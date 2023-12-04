<x-admin-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h2 class="text-2xl font-semibold mb-4">Tambah Gambar Akademik</h2>

                    <form action="{{ route('store_akademik') }}" method="POST" enctype="multipart/form-data"
                        class="w-full" onsubmit="handleFormSubmit(event)" >
                        @csrf
                        <div class="mb-4">
                            <label for="img" class="block font-semibold mb-1">Upload Gambar</label>
                            <input type="file" name="img" id="img" accept="image/*" required
                                class="w-full py-2 px-3 border border-gray-300 rounded-md focus:outline-none focus:border-secondary-500">
                        </div>
                        <div class="mb-4">
                            <label for="type" class="block font-semibold mb-1">Kategori</label>
                            <select name="type" id="type" required
                                class="w-full py-2 px-3 border border-gray-300 rounded-md focus:outline-none focus:border-secondary-500">
                                <option value="tk">Taman Kanak-Kanak</option>
                                <option value="sd">Sekolah Dasar</option>
                                <option value="smp">Sekolah Menengah Pertama</option>
                                <option value="sma">Sekolah Menengah Akhir</option>
                            </select>
                        </div>
                        <button type="submit"
                            class="w-full py-2 px-4 bg-secondary-500 text-white font-semibold rounded-md hover:bg-secondary-600 focus:outline-none focus:bg-secondary-600">Upload</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="pb-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h2 class="text-2xl font-semibold mb-4 text-center ">Taman Kanak - Kanak</h2>
                    <div class="swiper swiper4 mb-10">
                        <div class="swiper-wrapper">
                            @foreach($images as $image)
                                @if ($image->type == 'tk')
                                    <div class="swiper-slide relative">
                                        <img src="{{ asset('storage/images/akademik/' . $image->type . '/' . $image->img) }}" alt="Image" class=" h-64 aspect-video object-cover">
                                        <!-- Delete button -->
                                        <form action="{{ route('delete_akademik', $image->id) }}" method="POST" onsubmit="handleFormSubmit(event)">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="absolute top-2 right-2 px-2 py-1 bg-red-500 text-white rounded-md hover:bg-red-700">Delete</button>
                                        </form>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                        <div class="swiper-button-prev swiper-button-prev4"></div>
                        <div class="swiper-button-next swiper-button-next4"></div>
                    </div>
                    <h2 class="text-2xl font-semibold mb-4 text-center ">Sekolah Dasar</h2>
                    <div class="swiper swiper4 mb-10">
                        <div class="swiper-wrapper">
                            @foreach($images as $image)
                                @if ($image->type == 'sd')
                                    <div class="swiper-slide relative">
                                        <img src="{{ asset('storage/images/akademik/' . $image->type . '/' . $image->img) }}" alt="Image" class=" h-64 aspect-video object-cover">
                                        <!-- Delete button -->
                                        <form action="{{ route('delete_akademik', $image->id) }}" method="POST" onsubmit="handleFormSubmit(event)">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="absolute top-2 right-2 px-2 py-1 bg-red-500 text-white rounded-md hover:bg-red-700">Delete</button>
                                        </form>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                        <div class="swiper-button-prev swiper-button-prev4"></div>
                        <div class="swiper-button-next swiper-button-next4"></div>
                    </div>
                    <h2 class="text-2xl font-semibold mb-4 text-center ">Sekolah Menengah Pertama</h2>
                    <div class="swiper swiper4 mb-10">
                        <div class="swiper-wrapper">
                            @foreach($images as $image)
                                @if ($image->type == 'smp')
                                    <div class="swiper-slide relative">
                                        <img src="{{ asset('storage/images/akademik/' . $image->type . '/' . $image->img) }}" alt="Image" class=" h-64 aspect-video object-cover">
                                        <!-- Delete button -->
                                        <form action="{{ route('delete_akademik', $image->id) }}" method="POST" onsubmit="handleFormSubmit(event)">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="absolute top-2 right-2 px-2 py-1 bg-red-500 text-white rounded-md hover:bg-red-700">Delete</button>
                                        </form>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                        <div class="swiper-button-prev swiper-button-prev4"></div>
                        <div class="swiper-button-next swiper-button-next4"></div>
                    </div>
                    <h2 class="text-2xl font-semibold mb-4 text-center ">Sekolah Menengah Atas</h2>
                    <div class="swiper swiper4">
                        <div class="swiper-wrapper">
                            @foreach($images as $image)
                                @if ($image->type == 'sma')
                                    <div class="swiper-slide relative">
                                        <img src="{{ asset('storage/images/akademik/' . $image->type . '/' . $image->img) }}" alt="Image" class=" h-64 aspect-video object-cover">
                                        <!-- Delete button -->
                                        <form action="{{ route('delete_akademik', $image->id) }}" method="POST" onsubmit="handleFormSubmit(event)">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="absolute top-2 right-2 px-2 py-1 bg-red-500 text-white rounded-md hover:bg-red-700">Delete</button>
                                        </form>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                        <div class="swiper-button-prev swiper-button-prev4"></div>
                        <div class="swiper-button-next swiper-button-next4"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        function handleFormSubmit(event) {
            event.preventDefault();

            const form = event.target;
            const formData = new FormData(form);
            const url = form.getAttribute('action');
            const method = form.getAttribute('method');

            fetch(url, {
                    method: method,
                    body: formData,
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    }
                })
                .then(() => {
                    location.reload()
                })
        }
    </script>
</x-admin-layout>
