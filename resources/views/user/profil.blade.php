<x-app-layout>
    {{-- title image --}}
    <x-title-image :src="asset('storage/assets/Carousel1.png' )">
        {{ __('PROFIL') }}
    </x-title-image>

    {{-- about start --}}
    <div class=" mt-10" id="tentang-kami">
        <x-title-lg>
            Tentang
            <x-slot name="slot2">
                Kami
            </x-slot>
        </x-title-lg>
        <div class="flex  items-center justify-around relative bg-secondary-500">
            <div class="text-white font-base text-lg text-justify mr-24 ml-52">
                <p class="mb-5">
                    Sekolah Pelita Kasih merupakan sekolah yang pembelajarannya menggunakan kurikulum nasional dan menerapkan nilai-nilai Kristiani. Kami percaya bahwa setiap individu adalah unik dan istimewa dengan kemampuan untuk mengembangkan potensi yang dimikilinya dan menjadi yang terbaik.
                </p>
                <p>
                    Sistem pendidikan, staff pengajar yang profesional dan berdedikasi serta lingkungan sekolah yang mengayomi dapat mendukung dan menumbuhkan potensi terbaik setiap individu untuk menjadi seseorang unggul, berpengetahuan, percaya kepada Tuhan, sehat jasmani, memiliki karakter positif, citra diri positif, memiliki tujuan hidup yang jelas, memiliki strategi dan komitmen serta keahlian untuk menjalani kehidupan dan menggapai cita- citanya.
                </p>
            </div>
            <img src="{{ asset('storage/assets/Carousel1.png') }}" alt="image" class=" max-h-80 aspect-video object-cover rounded-[20%/50%] rounded-r-none shadow-lg">
        </div>
    </div>
    {{-- about end --}}

    {{-- visi misi start --}}
    <div class="flex justify-around mt-20 mb-10 mx-20 gap-20" id="visi-misi">
        <div class="bg-primary-500 rounded-lg py-10 px-16 max-w-lg shadow-lg">
            <h1 class="mb-10 text-center text-secondary-500 font-semibold text-4xl border-b-2 border-secondary-500 pb-5">
                VISI
            </h1>
            <p class="text-white text-justify tracking-normal text-xl">
                Terwujudnya siswa yang UNGGUL, SEHAT jasmani dan rohani, memiliki KARAKTER POSITIF, CITRA DIRI POSITIF, memiliki tujuan hidup yang jelas, memiliki STRATEGI DAN KOMITMEN dalam menggapai cita- citanya.
            </p>
        </div>
        <div class="bg-primary-500 rounded-lg py-10 px-16 max-w-lg shadow-lg">
            <h1 class="mb-10 text-center text-secondary-500 font-semibold text-4xl border-b-2 border-secondary-500 pb-5">
                MISI
            </h1>
            <ul class="text-white text-justify tracking-normal text-xl list-disc space-y-3">
                <li>Menanamkan pendidikan berkarakter.</li>
                <li>Membimbing peserta didik yang selalu optimis, percaya diri, berpikiran positif, mengetahui kelebihan pada dirinya yang bermanfaat untuk orang lain dan mempunyai gambaran yang jelas tentang masa depannya.</li>
                <li>Membina peserta didik yang bertumbuh menjadi siswa yang sehat, berbudi pekerti luhur dan bertanggung jawab sesuai nilai kebenaran.</li>
                <li>Memperlengkapi peserta didik dengan keterampilan yang berkualitas sesuai kebutuhan dan untuk pengembangan dirinya.</li>                
            </ul>
        </div>
    </div>
    {{-- visi misi end --}}
</x-app-layout>
