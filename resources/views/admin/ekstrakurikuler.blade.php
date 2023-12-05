<x-admin-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h2 class="text-2xl font-semibold mb-4">Pengaturan Ekstrakurikuler</h2>
                    {{-- form start --}}
                    @if (session('success'))
                    <div class="bg-green-200 text-green-700 border border-green-600 px-4 py-2 rounded-md mb-4">
                        {{ session('success') }}
                    </div>
                    @endif
                    <p></p>
                    <form action="{{ route('store_ekstrakurikuler') }}" method="POST" enctype="multipart/form-data"
                        class="w-full p-4" onsubmit="handleFormSubmit(event)">
                        @csrf
                        <div class="mb-4">
                            <label for="img" class="block font-semibold mb-1">Gambar</label>
                            <input type="file" name="img" id="img" accept="image/*" required
                                class="w-full py-2 px-3 border border-gray-300 rounded-md focus:outline-none focus:border-secondary-500">
                        </div>
                        <div class="mb-4">
                            <label for="img1" class="block font-semibold mb-1">Gambar 1</label>
                            <input type="file" name="img1" id="img1" accept="image/*" required
                                class="w-full py-2 px-3 border border-gray-300 rounded-md focus:outline-none focus:border-secondary-500">
                        </div>
                        <label for="img2" class="block font-semibold mb-1">Gambar 2</label>
                        <div class="mb-4">
                            <input type="file" name="img2" id="img2" accept="image/*" required
                                class="w-full py-2 px-3 border border-gray-300 rounded-md focus:outline-none focus:border-secondary-500">
                        </div>
                        <div class="mb-4">
                            <label for="nama" class="block font-semibold mb-1">Nama Ekskul</label>
                            <input type="text" name="name" id="name" required
                                class="w-full py-2 px-3 border border-gray-300 rounded-md focus:outline-none focus:border-secondary-500">
                        </div>
                        <div class="mb-4">
                            <label for="description" class="block font-semibold mb-1">Deskripsi</label>
                            <textarea name="description" id="description" rows="10" required
                                class="w-full py-2 px-3 border border-gray-300 rounded-md focus:outline-none focus:border-secondary-500"></textarea>
                        </div>
                        <button type="submit"
                            class="w-full py-2 px-4 bg-secondary-500 text-white font-semibold rounded-md hover:bg-secondary-600 focus:outline-none focus:bg-secondary-600 ">Tambah
                            Ekstrakurikuler</button>
                    </form>

                    {{-- form end --}}

                </div>
            </div>
        </div>
    </div>
    <div class="pb-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    @foreach ($ekskul as $item)
                    <div class="bg-white overflow-hidden shadow-lg sm:rounded-md mb-10 overflow-x-auto relative">
                        <div class="flex gap-3">
                            <img src="{{ asset('storage/images/ekstra/' . $item->img) }}" alt="img"
                                class="w-64 aspect-square object-cover">
                            <img src="{{ asset('storage/images/ekstra/' . $item->img1) }}" alt="img1"
                                class="w-64 aspect-square object-cover">
                            <img src="{{ asset('storage/images/ekstra/' . $item->img2) }}" alt="img2"
                                class="w-64 aspect-square object-cover">
                            <div class="min-w-[364px]">
                                <div class="max-h-56 overflow-y-auto mb-10">
                                    <h3 class="text-3xl font-semibold py-2">{{ ucwords($item->nama) }}</h3>
                                    <p>{{ $item->description }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="flex">
                            <form action="{{ route('delete_ekstrakurikuler', $item->id) }}" method="POST"
                                class="my-3 mx-3" onsubmit="handleFormSubmit(event)">
                                @csrf
                                @method('DELETE')
                                <button type="submit"
                                    class="py-2 px-4 bg-red-500 text-white font-semibold rounded-md hover:bg-red-600 focus:outline-none focus:bg-red-600">Delete</button>
                            </form>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-admin-layout>