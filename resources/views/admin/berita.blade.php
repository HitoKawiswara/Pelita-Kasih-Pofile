<x-admin-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h2 class="text-2xl font-semibold mb-4">Tambah Berita Terkini</h2>
                    {{-- form start --}}
                    @if (session('success'))
                        <div class="bg-green-200 text-green-700 border border-green-600 px-4 py-2 rounded-md mb-4">
                            {{ session('success') }}
                        </div>
                    @endif
                    <p></p>
                    <form action="{{ route('adminBerita') }}" method="POST" enctype="multipart/form-data"
                        class="w-full p-4" onsubmit="handleFormSubmit(event)">
                        @csrf
                        <div class="mb-4">
                            <label for="thumbnail" class="block font-semibold mb-1">Thumbnail</label>
                            <input type="file" name="thumbnail" id="thumbnail" accept="image/*" required
                                class="w-full py-2 px-3 border border-gray-300 rounded-md focus:outline-none focus:border-secondary-500">
                        </div>
                        <div class="mb-4">
                            <label for="img1" class="block font-semibold mb-1">Gambar 1</label>
                            <input type="file" name="img1" id="img1" accept="image/*" required
                                class="w-full py-2 px-3 border border-gray-300 rounded-md focus:outline-none focus:border-secondary-500">
                        </div>
                        <div class="mb-4">
                            <label for="img2" class="block font-semibold mb-1">Gambar 2</label>
                            <input type="file" name="img2" id="img2" accept="image/*" required
                                class="w-full py-2 px-3 border border-gray-300 rounded-md focus:outline-none focus:border-secondary-500">
                        </div>
                        <div class="mb-4">
                            <label for="title" class="block font-semibold mb-1">Judul Berita</label>
                            <input type="text" name="title" id="title" required
                                class="w-full py-2 px-3 border border-gray-300 rounded-md focus:outline-none focus:border-secondary-500">
                        </div>
                        <div class="mb-4">
                            <label for="content" class="block font-semibold mb-1">Isi Berita</label>
                            <textarea name="content" id="content" rows="10" required
                                class="w-full py-2 px-3 border border-gray-300 rounded-md focus:outline-none focus:border-secondary-500"></textarea>
                        </div>
                        <div class="mb-4">
                            <label for="duration" class="block font-semibold mb-1">Durasi (Hari)</label>
                            <input type="number" name="duration" id="duration" required
                                class="w-full py-2 px-3 border border-gray-300 rounded-md focus:outline-none focus:border-secondary-500">
                        </div>

                        <button type="submit"
                            class="w-full py-2 px-4 bg-secondary-500 text-white font-semibold rounded-md hover:bg-secondary-600 focus:outline-none focus:bg-secondary-600 ">Tambah Berita</button>
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
                    @foreach ($news as $item)
                        <div class="bg-white overflow-hidden shadow-lg sm:rounded-md mb-10 overflow-x-auto relative">
                            <div class="flex gap-3">
                                <img src="{{ asset('storage/images/berita/' . $item->thumbnail) }}" alt="Thumbnail"
                                    class="w-64 aspect-square object-cover">
                                <img src="{{ asset('storage/images/berita/' . $item->img1) }}" alt="img1"
                                    class="w-64 aspect-square object-cover">
                                <img src="{{ asset('storage/images/berita/' . $item->img2) }}" alt="img2"
                                    class="w-64 aspect-square object-cover">
                                <div class="min-w-[364px]">
                                    @if ($item->trashed())
                                        <p class="text-red-600 text-lg font-semibold absolute bottom-3">Deleted</p>
                                    @else
                                        <p class="font-semibold absolute bottom-5">Akan terhapus pada:
                                            {{ \Carbon\Carbon::parse($item->updated_at)->addDays($item->duration)->format('Y-m-d') }}
                                        </p>
                                    @endif
                                    <div class="max-h-56 overflow-y-auto mb-10">
                                        <h3 class="text-3xl font-semibold py-2">{{ ucwords($item->title) }}</h3>
                                        <p>{{ $item->content }}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="flex">
                                @if ($item->trashed())
                                    <form action="{{ route('restore_news', $item->id) }}" method="POST"
                                        class="my-3 mx-3" onsubmit="handleFormSubmit(event)">
                                        @csrf
                                        @method('PUT')
                                        <button type="submit"
                                            class="py-2 px-4 bg-green-500 text-white font-semibold rounded-md hover:bg-green-600 focus:outline-none focus:bg-green-600">Restore</button>
                                    </form>
                                    <form action="{{ route('force_delete_news', $item->id) }}" method="POST"
                                        class="my-3 mx-3" onsubmit="handleFormSubmit(event)">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                            class="py-2 px-4 bg-red-500 text-white font-semibold rounded-md hover:bg-red-600 focus:outline-none focus:bg-red-600">Force
                                            Delete</button>
                                    </form>
                                @else
                                    <form action="{{ route('soft_delete_news', $item->id) }}" method="POST"
                                        class="my-3 mx-3" onsubmit="handleFormSubmit(event)">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                            class="py-2 px-4 bg-red-500 text-white font-semibold rounded-md hover:bg-red-600 focus:outline-none focus:bg-red-600">Delete</button>
                                    </form>
                                    <button onclick="editNews('{{ $item->id }}', '{{ $item->title }}', '{{ str_replace(["\r\n", "\r", "\n"], '\\n', addslashes($item->content)) }}', '{{ $item->duration }}')"
                                        class="my-3 mx-3 px-4 bg-blue-500 text-white font-semibold rounded-md hover:bg-blue-600 focus:outline-none focus:bg-blue-600">Edit</button>
                                @endif
                            </div>
                        </div>
                        {{-- edit modal start --}}
                        <div id="editModal"
                            class="hidden fixed inset-0 bg-gray-500 bg-opacity-75 flex items-center justify-center z-50">
                            <div class="bg-white rounded-md p-6 w-96 md:w-3/5 lg:w-2/3">
                                <h2 class="text-2xl font-semibold mb-4">Edit Berita</h2>
                                <form id="editForm">
                                    @csrf
                                    @method('PUT')
                                    <input type="hidden" id="itemId" />
                                    <div class="mb-4">
                                        <label for="editTitle" class="block text-sm font-medium text-gray-700">Judul
                                            Berita</label>
                                        <input type="text" id="editTitle"
                                            class="w-full py-2 px-3 border border-gray-300 rounded-md focus:outline-none focus:border-secondary-500" />
                                    </div>
                                    <div class="mb-4">
                                        <label for="editContent" class="block text-sm font-medium text-gray-700">Isi
                                            Berita</label>
                                        <textarea rows="10" id="editContent"
                                            class="w-full py-2 px-3 border border-gray-300 rounded-md focus:outline-none focus:border-secondary-500"></textarea>
                                    </div>
                                    <div class="mb-4">
                                        <label for="editDuration"
                                            class="block text-sm font-medium text-gray-700">Durasi (hari):</label>
                                        <input type="number" id="editDuration"
                                            class="w-full py-2 px-3 border border-gray-300 rounded-md focus:outline-none focus:border-secondary-500" />
                                    </div>
                                    <div class="flex justify-end">
                                        <button type="button" onclick="saveEdit()"
                                            class="py-2 px-4 bg-blue-500 text-white font-semibold rounded-md hover:bg-blue-600 focus:outline-none focus:bg-blue-600 mr-2">Save</button>
                                        <button type="button" onclick="closeModal()"
                                            class="py-2 px-4 bg-gray-500 text-white font-semibold rounded-md hover:bg-gray-600 focus:outline-none focus:bg-gray-600">Cancel</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        {{-- edit modal end --}}
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <script>
        function editNews(id, title, content, duration) {
            document.getElementById('itemId').value = id;
            document.getElementById('editTitle').value = title;
            document.getElementById('editContent').value = content;
            document.getElementById('editDuration').value = duration;

            document.getElementById('editModal').classList.remove('hidden');
        }

        function saveEdit() {
            const itemId = document.getElementById('itemId').value;
            const title = document.getElementById('editTitle').value;
            const content = document.getElementById('editContent').value;
            const duration = document.getElementById('editDuration').value;

            fetch(`/admin/berita/update/${itemId}`, {
                    method: 'PUT',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    },
                    body: JSON.stringify({
                        title: title,
                        content: content,
                        duration: duration
                    })
                })
                .then(() => {
                    closeModal();
                    location.reload();
                })
                .catch(error => {
                    console.error('Error:', error);
                    alert('Error occurred while updating.');
                });
        }

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

        function closeModal() {
            document.getElementById('editModal').classList.add('hidden');
        }
    </script>

</x-admin-layout>
