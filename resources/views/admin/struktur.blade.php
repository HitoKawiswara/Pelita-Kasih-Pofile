<x-admin-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h2 class="text-2xl font-semibold mb-4">Tambah Data Guru</h2>

                    <form action="{{ route('store_structure') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-4">
                            <label for="img" class="block font-semibold mb-1">Foto Profil</label>
                            <input type="file" name="img" id="img" accept="image/*" required
                                class="w-full py-2 px-3 border border-gray-300 rounded-md focus:outline-none focus:border-secondary-500">
                        </div>
                        <div class="mb-4">
                            <label for="name" class="block font-semibold mb-1">Nama</label>
                            <input type="text" name="name" id="name" required
                                class="w-full py-2 px-3 border border-gray-300 rounded-md focus:outline-none focus:border-secondary-500">
                        </div>
                        <div class="mb-4">
                            <label for="work_as" class="block font-semibold mb-1">Menjabat Sebagai</label>
                            <select name="work_as" id="work_as" required
                                class="w-full py-2 px-3 border border-gray-300 rounded-md focus:outline-none focus:border-secondary-500">
                                <option value="guru">Guru</option>
                                <option value="staff">Staff</option>
                                <option value="kepala sekolah">Kepala Sekolah</option>
                                <option value="wakil kepala sekolah">Wakil Kepala Sekolah</option>
                            </select>
                        </div>
                        <div class="mb-4">
                            <label for="job_desc" class="block font-semibold mb-1">Deskripsi Pekerjaan (Untuk guru &
                                staff)</label>
                            <input type="text" name="job_desc" id="job_desc"
                                class="w-full py-2 px-3 border border-gray-300 rounded-md focus:outline-none focus:border-secondary-500">
                        </div>
                        <div class="mb-4">
                            <label for="category" class="block font-semibold mb-1">Kategori</label>
                            <select name="category" id="category" required
                                class="w-full py-2 px-3 border border-gray-300 rounded-md focus:outline-none focus:border-secondary-500">
                                <option value="tk">Taman Kanak-Kanak</option>
                                <option value="sd">Sekolah Dasar</option>
                                <option value="smp">Sekolah Menengah Pertama</option>
                                <option value="sma">Sekolah Menengah Akhir</option>
                                <option value="sma">Staff</option>
                            </select>
                        </div>
                        <button type="submit"
                            class="w-full py-2 px-4 bg-secondary-500 text-white font-semibold rounded-md hover:bg-secondary-600 focus:outline-none focus:bg-secondary-600">Add
                            Structure</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="pb-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 grid grid-cols-4 gap-5">
                    @foreach ($structures as $structure)
                        <div class="mb-6 text-center bg-white shadow-lg rounded-md overflow-hidden pb-3">
                            <img src="{{ asset('storage/images/struktur/' . $structure->img) }}"
                                alt="{{ $structure->name }}">
                            <h3 class="text-lg font-semibold mt-2">{{ $structure->name }}</h3>
                            <p>{{ ucwords($structure->work_as) }}</p>
                            @if ($structure->job_desc)
                                <p>{{ ucwords($structure->job_desc) }}</p>
                            @endif
                            <p>{{ strtoupper($structure->category) }}</p>
                            <div class=" flex gap-5 justify-center">
                                <form action="{{ route('delete_structure', $structure->id) }}" method="POST"
                                    class="mt-3">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                        class="bg-red-500 hover:bg-red-600 text-white font-semibold py-2 px-4 rounded-md focus:outline-none focus:bg-red-600">
                                        Delete
                                    </button>
                                </form>
                                <button type="button"
                                    class="bg-blue-500 hover:bg-blue-600 text-white font-semibold px-4 rounded-md focus:outline-none focus:bg-blue-600 mt-3 edit-btn"
                                    data-toggle="modal" data-target="#editModal{{ $structure->id }}">
                                    Edit
                                </button>

                                {{-- modal start --}}
                                <div id="editModal"
                                    class="hidden fixed inset-0 bg-gray-500 bg-opacity-75 flex items-center justify-center z-50">
                                    <div class="bg-white rounded-md p-6 w-96 md:w-3/5 lg:w-2/3">
                                        <h2 class="text-2xl font-semibold mb-4">Edit Berita</h2>
                                        <form id="editForm">
                                            @csrf
                                            @method('PUT')
                                            <input type="hidden" id="itemId" />
                                            <div class="mb-4">
                                                <label for="img" class="block font-semibold mb-1">Foto Profil</label>
                                                <input type="file" name="img" id="img" accept="image/*" required
                                                    class="w-full py-2 px-3 border border-gray-300 rounded-md focus:outline-none focus:border-secondary-500">
                                            </div>
                                            <div class="mb-4">
                                                <label for="name" class="block font-semibold mb-1">Nama</label>
                                                <input type="text" name="name" id="name" required
                                                    class="w-full py-2 px-3 border border-gray-300 rounded-md focus:outline-none focus:border-secondary-500">
                                            </div>
                                            <div class="mb-4">
                                                <label for="work_as" class="block font-semibold mb-1">Menjabat Sebagai</label>
                                                <select name="work_as" id="work_as" required
                                                    class="w-full py-2 px-3 border border-gray-300 rounded-md focus:outline-none focus:border-secondary-500">
                                                    <option value="guru">Guru</option>
                                                    <option value="staff">Staff</option>
                                                    <option value="kepala sekolah">Kepala Sekolah</option>
                                                    <option value="wakil kepala sekolah">Wakil Kepala Sekolah</option>
                                                </select>
                                            </div>
                                            <div class="mb-4">
                                                <label for="job_desc" class="block font-semibold mb-1">Deskripsi Pekerjaan (Untuk guru &
                                                    staff)</label>
                                                <input type="text" name="job_desc" id="job_desc"
                                                    class="w-full py-2 px-3 border border-gray-300 rounded-md focus:outline-none focus:border-secondary-500">
                                            </div>
                                            <div class="mb-4">
                                                <label for="category" class="block font-semibold mb-1">Kategori</label>
                                                <select name="category" id="category" required
                                                    class="w-full py-2 px-3 border border-gray-300 rounded-md focus:outline-none focus:border-secondary-500">
                                                    <option value="tk">Taman Kanak-Kanak</option>
                                                    <option value="sd">Sekolah Dasar</option>
                                                    <option value="smp">Sekolah Menengah Pertama</option>
                                                    <option value="sma">Sekolah Menengah Akhir</option>
                                                    <option value="sma">Staff</option>
                                                </select>
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
                                {{-- modal end --}}
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <script>
        function editNews(id, name, work_as, job_desc, category) {
            document.getElementById('itemId').value = id;
            document.getElementById('name').value = name;
            document.getElementById('work_as').value = work_as;
            document.getElementById('job_desc').value = job_desc;
            document.getElementById('category').value = category;

            document.getElementById('editModal').classList.remove('hidden');
        }

        // Function to save changes
        function saveEdit() {
            const itemId = document.getElementById('itemId').value;
            const name = document.getElementById('name').value;
            const work_as = document.getElementById('work_as').value;
            const job_desc = document.getElementById('job_desc').value;
            const category = document.getElementById('category').value;

            fetch(`/admin/struktur/update/${itemId}`, {
                    method: 'PUT',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    },
                    body: JSON.stringify({
                        name: name,
                        work_as: work_as,
                        job_desc: job_desc,
                        category: category,
                    })
                })
                .then(() => {
                    closeModal();
                    location.reload();
                })
        }

        function closeModal() {
            document.getElementById('editModal').classList.add('hidden');
        }
    </script>
</x-admin-layout>
