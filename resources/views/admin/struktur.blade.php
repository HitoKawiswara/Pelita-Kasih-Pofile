<x-admin-layout>
    <div class="pb-6 pt-12">
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
    {{-- search bar start --}}
    <div class="pb-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="p-6 text-gray-900">
                        <form action="{{ route('search_structure') }}" method="GET">
                            <input type="text" name="search" placeholder="Search..."
                                class="w-full py-2 px-3 border border-gray-300 rounded-md focus:outline-none focus:border-secondary-500"
                                value="{{ isset($_GET['search']) ? $_GET['search'] : '' }}">
                            <button type="submit"
                                class="py-2 px-4 bg-secondary-500 text-white font-semibold rounded-md hover:bg-secondary-600 focus:outline-none focus:bg-secondary-600 mt-3">Search</button>
                            <button type="button" onclick="redirectToAdminStruktur()"
                                class="py-2 px-4 bg-secondary-500 text-white font-semibold rounded-md hover:bg-secondary-600 focus:outline-none focus:bg-secondary-600 mt-3">Cancel</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- search bar end --}}
    <div class="pb-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 grid grid-cols-4 gap-5">
                    @if (isset($searchRes))
                        @foreach ($searchRes as $structure)
                            <div class="mb-6 text-center bg-white shadow-lg rounded-md overflow-hidden pb-3">
                                <img src="{{ asset('storage/images/struktur/' . $structure->img) }}"
                                    alt="{{ $structure->name }}">
                                <h3 class="text-lg font-semibold mt-2">{{ $structure->name }}</h3>
                                @if ($structure->work_as != 'kepala sekolah' && $structure->work_as != 'wakil kepala sekolah')
                                    @if ($structure->job_desc != '')
                                        <p>{{ ucwords($structure->job_desc) }}</p>
                                    @else
                                        <p>{{ ucwords($structure->work_as) }}</p>
                                    @endif
                                @else
                                    <p>{{ ucwords($structure->work_as) }}</p>
                                @endif
                                <p>{{ strtoupper($structure->category) }}</p>
                                <div class=" flex gap-5 justify-center">
                                    <form action="{{ route('delete_structure', $structure->id) }}" method="POST"
                                        class="mt-3" onsubmit="handleFormSubmit(event)">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                            class="bg-red-500 hover:bg-red-600 text-white font-semibold py-2 px-4 rounded-md focus:outline-none focus:bg-red-600">
                                            Delete
                                        </button>
                                    </form>
                                    <button type="button"
                                        class="bg-blue-500 hover:bg-blue-600 text-white font-semibold px-4 rounded-md focus:outline-none focus:bg-blue-600 mt-3 edit-btn"
                                        onclick="editData('{{ $structure->id }}', '{{ $structure->name }}', '{{ $structure->work_as }}', '{{ $structure->job_desc }}', '{{ $structure->category }}')">
                                        Edit
                                    </button>

                                    {{-- modal start --}}
                                    <div id="editModal{{ $structure->id }}"
                                        class="hidden fixed inset-0 bg-gray-500 bg-opacity-75 flex items-center justify-center z-50">
                                        <div class="bg-white rounded-md p-6 w-96 md:w-3/5 lg:w-2/3">
                                            <h2 class="text-2xl font-semibold mb-4">Edit Profil Guru</h2>
                                            <form id="editForm{{ $structure->id }}" enctype="multipart/form-data">
                                                @csrf
                                                @method('PUT')
                                                <input type="hidden" id="itemId{{ $structure->id }}"
                                                    value="{{ $structure->id }}" />
                                                <div class="mb-4">
                                                    <label for="name"
                                                        class="flex justify-start font-semibold mb-1">Nama</label>
                                                    <input type="text" name="name"
                                                        id="editName{{ $structure->id }}" required
                                                        class="w-full py-2 px-3 border border-gray-300 rounded-md focus:outline-none focus:border-secondary-500">
                                                </div>
                                                <div class="mb-4">
                                                    <label for="work_as"
                                                        class="flex justify-start font-semibold mb-1">Menjabat
                                                        Sebagai</label>
                                                    <select name="work_as" id="editWork_as{{ $structure->id }}"
                                                        required
                                                        class="w-full py-2 px-3 border border-gray-300 rounded-md focus:outline-none focus:border-secondary-500">
                                                        <option value="guru">Guru</option>
                                                        <option value="staff">Staff</option>
                                                        <option value="kepala sekolah">Kepala Sekolah</option>
                                                        <option value="wakil kepala sekolah">Wakil Kepala Sekolah
                                                        </option>
                                                    </select>
                                                </div>
                                                <div class="mb-4">
                                                    <label for="job_desc"
                                                        class="flex justify-start font-semibold mb-1">Deskripsi
                                                        Pekerjaan (Untuk guru &
                                                        staff)</label>
                                                    <input type="text" name="job_desc"
                                                        id="editJob_desc{{ $structure->id }}"
                                                        class="w-full py-2 px-3 border border-gray-300 rounded-md focus:outline-none focus:border-secondary-500">
                                                </div>
                                                <div class="mb-4">
                                                    <label for="category"
                                                        class="flex justify-start font-semibold mb-1">Kategori</label>
                                                    <select name="category" id="editCategory{{ $structure->id }}"
                                                        required
                                                        class="w-full py-2 px-3 border border-gray-300 rounded-md focus:outline-none focus:border-secondary-500">
                                                        <option value="tk">Taman Kanak-Kanak</option>
                                                        <option value="sd">Sekolah Dasar</option>
                                                        <option value="smp">Sekolah Menengah Pertama</option>
                                                        <option value="sma">Sekolah Menengah Akhir</option>
                                                        <option value="sma">Staff</option>
                                                    </select>
                                                </div>
                                                <div class="flex justify-end">
                                                    <button type="button" onclick="saveEdit('{{ $structure->id }}')"
                                                        class="py-2 px-4 bg-blue-500 text-white font-semibold rounded-md hover:bg-blue-600 focus:outline-none focus:bg-blue-600 mr-2">Save</button>
                                                    <button type="button"
                                                        onclick="closeModal('{{ $structure->id }}')"
                                                        class="py-2 px-4 bg-gray-500 text-white font-semibold rounded-md hover:bg-gray-600 focus:outline-none focus:bg-gray-600">Cancel</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    {{-- modal end --}}
                                </div>
                            </div>
                        @endforeach
                    @else
                        @foreach ($structures as $structure)
                            <div class="mb-6 text-center bg-white shadow-lg rounded-md overflow-hidden pb-3">
                                <img src="{{ asset('storage/images/struktur/' . $structure->img) }}"
                                    alt="{{ $structure->name }}">
                                <h3 class="text-lg font-semibold mt-2">{{ $structure->name }}</h3>
                                @if ($structure->work_as != 'kepala sekolah' && $structure->work_as != 'wakil kepala sekolah')
                                    @if ($structure->job_desc != '')
                                        <p>{{ ucwords($structure->job_desc) }}</p>
                                    @else
                                        <p>{{ ucwords($structure->work_as) }}</p>
                                    @endif
                                @else
                                    <p>{{ ucwords($structure->work_as) }}</p>
                                @endif
                                <p>{{ strtoupper($structure->category) }}</p>
                                <div class=" flex gap-5 justify-center">
                                    <form action="{{ route('delete_structure', $structure->id) }}" method="POST"
                                        class="mt-3" onsubmit="handleFormSubmit(event)">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                            class="bg-red-500 hover:bg-red-600 text-white font-semibold py-2 px-4 rounded-md focus:outline-none focus:bg-red-600">
                                            Delete
                                        </button>
                                    </form>
                                    <button type="button"
                                        class="bg-blue-500 hover:bg-blue-600 text-white font-semibold px-4 rounded-md focus:outline-none focus:bg-blue-600 mt-3 edit-btn"
                                        onclick="editData('{{ $structure->id }}', '{{ $structure->name }}', '{{ $structure->work_as }}', '{{ $structure->job_desc }}', '{{ $structure->category }}')">
                                        Edit
                                    </button>

                                    {{-- modal start --}}
                                    <div id="editModal{{ $structure->id }}"
                                        class="hidden fixed inset-0 bg-gray-500 bg-opacity-75 flex items-center justify-center z-50">
                                        <div class="bg-white rounded-md p-6 w-96 md:w-3/5 lg:w-2/3">
                                            <h2 class="text-2xl font-semibold mb-4">Edit Profil Guru</h2>
                                            <form id="editForm{{ $structure->id }}" enctype="multipart/form-data">
                                                @csrf
                                                @method('PUT')
                                                <input type="hidden" id="itemId{{ $structure->id }}"
                                                    value="{{ $structure->id }}" />
                                                <div class="mb-4">
                                                    <label for="name"
                                                        class="flex justify-start font-semibold mb-1">Nama</label>
                                                    <input type="text" name="name"
                                                        id="editName{{ $structure->id }}" required
                                                        class="w-full py-2 px-3 border border-gray-300 rounded-md focus:outline-none focus:border-secondary-500">
                                                </div>
                                                <div class="mb-4">
                                                    <label for="work_as"
                                                        class="flex justify-start font-semibold mb-1">Menjabat
                                                        Sebagai</label>
                                                    <select name="work_as" id="editWork_as{{ $structure->id }}"
                                                        required
                                                        class="w-full py-2 px-3 border border-gray-300 rounded-md focus:outline-none focus:border-secondary-500">
                                                        <option value="guru">Guru</option>
                                                        <option value="staff">Staff</option>
                                                        <option value="kepala sekolah">Kepala Sekolah</option>
                                                        <option value="wakil kepala sekolah">Wakil Kepala Sekolah
                                                        </option>
                                                    </select>
                                                </div>
                                                <div class="mb-4">
                                                    <label for="job_desc"
                                                        class="flex justify-start font-semibold mb-1">Deskripsi
                                                        Pekerjaan (Untuk guru &
                                                        staff)</label>
                                                    <input type="text" name="job_desc"
                                                        id="editJob_desc{{ $structure->id }}"
                                                        class="w-full py-2 px-3 border border-gray-300 rounded-md focus:outline-none focus:border-secondary-500">
                                                </div>
                                                <div class="mb-4">
                                                    <label for="category"
                                                        class="flex justify-start font-semibold mb-1">Kategori</label>
                                                    <select name="category" id="editCategory{{ $structure->id }}"
                                                        required
                                                        class="w-full py-2 px-3 border border-gray-300 rounded-md focus:outline-none focus:border-secondary-500">
                                                        <option value="tk">Taman Kanak-Kanak</option>
                                                        <option value="sd">Sekolah Dasar</option>
                                                        <option value="smp">Sekolah Menengah Pertama</option>
                                                        <option value="sma">Sekolah Menengah Akhir</option>
                                                        <option value="sma">Staff</option>
                                                    </select>
                                                </div>
                                                <div class="flex justify-end">
                                                    <button type="button" onclick="saveEdit('{{ $structure->id }}')"
                                                        class="py-2 px-4 bg-blue-500 text-white font-semibold rounded-md hover:bg-blue-600 focus:outline-none focus:bg-blue-600 mr-2">Save</button>
                                                    <button type="button"
                                                        onclick="closeModal('{{ $structure->id }}')"
                                                        class="py-2 px-4 bg-gray-500 text-white font-semibold rounded-md hover:bg-gray-600 focus:outline-none focus:bg-gray-600">Cancel</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    {{-- modal end --}}
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
    </div>
    <script>
        function editData(id, name, work_as, job_desc, category) {
            document.getElementById(`editName${id}`).value = name;
            document.getElementById(`editWork_as${id}`).value = work_as;
            document.getElementById(`editJob_desc${id}`).value = job_desc ? job_desc : '';
            document.getElementById(`editCategory${id}`).value = category;

            // Show the edit modal corresponding to the specific ID
            document.getElementById(`editModal${id}`).classList.remove('hidden');
        }

        function saveEdit(itemId) {
            const name = document.getElementById(`editName${itemId}`).value;
            const work_as = document.getElementById(`editWork_as${itemId}`).value;
            const job_desc = document.getElementById(`editJob_desc${itemId}`).value;
            const category = document.getElementById(`editCategory${itemId}`).value;

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
                    closeModal(itemId);
                    location.reload();
                })
                .catch(error => {
                    console.error('Error:', error);
                });
        }

        function closeModal(itemId) {
            // Hide the edit modal corresponding to the specific ID
            document.getElementById(`editModal${itemId}`).classList.add('hidden');
        }

        function redirectToAdminStruktur() {
            window.location.href = "{{ route('adminStruktur') }}";
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
                    location.reload();
                })
                .catch(error => {
                    console.error('Error:', error);
                });
        }
    </script>
</x-admin-layout>
