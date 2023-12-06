<x-app-layout>
    {{-- title image --}}
    <x-title-image :src="asset('storage/assets/Carousel1.png')">
        {{ __('PROFIL') }}
    </x-title-image>

    {{-- about start --}}
    <div class="mt-10" id="tentang-kami">
        <x-title-lg>
            Tentang
            <x-slot name="slot2">
                Kami
            </x-slot>
        </x-title-lg>
        <div class="flex flex-col md:flex-row items-center md:justify-between relative bg-secondary-500 lg:py-10">
            <div class="md:w-1/2 font-base text-lg text-center md:text-justify md:mr-6">
                <p class="lg:ml-20 m-5 mx-10 text-justify">
                    Sekolah Pelita Kasih merupakan sekolah yang pembelajarannya menggunakan kurikulum nasional dan menerapkan nilai-nilai Kristiani. Kami percaya bahwa setiap individu adalah unik dan istimewa dengan kemampuan untuk mengembangkan potensi yang dimikilinya dan menjadi yang terbaik.
                </p>
                <p class="lg:ml-20 m-5 mx-10 mb-5 text-justify">
                    Sistem pendidikan, staff pengajar yang profesional dan berdedikasi serta lingkungan sekolah yang mengayomi dapat mendukung dan menumbuhkan potensi terbaik setiap individu untuk menjadi seseorang unggul, berpengetahuan, percaya kepada Tuhan, sehat jasmani, memiliki karakter positif, citra diri positif, memiliki tujuan hidup yang jelas, memiliki strategi dan komitmen serta keahlian untuk menjalani kehidupan dan menggapai cita-citanya.
                </p>
            </div>
            <img src="{{ asset('storage/assets/Carousel1.png') }}" alt="image" class="w-full md:w-1/2 max-h-[400px] aspect-video object-cover lg:rounded-l-full md:rounded-l-lg rounded-r-none shadow-lg md:mt-0 md:mb-0">
        </div>
    </div>
    {{-- about end --}}

    {{-- visi misi start --}}
    <div class="bg-primary-500 py-20 mt-20" id="visi-misi">
        <div class="container mx-auto">
            <h1 class="mb-10 text-center text-secondary-500 font-semibold text-4xl border-b-2 border-secondary-500 pb-5">
                VISI
            </h1>
            <p class="text-white text-center tracking-normal text-xl px-5">
                Terwujudnya siswa yang UNGGUL, SEHAT jasmani dan rohani, memiliki KARAKTER POSITIF, CITRA DIRI POSITIF, memiliki tujuan hidup yang jelas, memiliki STRATEGI DAN KOMITMEN dalam menggapai cita-citanya.
            </p>
        </div>
        <div class="mt-20 container mx-auto">
            <h1 class="mb-10 text-center text-secondary-500 font-semibold text-4xl border-b-2 border-secondary-500 pb-5">
                MISI
            </h1>
            <ul class="text-white tracking-normal text-xl list-disc space-y-3 text-center mx-auto list-none px-5">
                <li class="py-2">Menanamkan pendidikan berkarakter.</li>
                <li class="py-2">Membimbing peserta didik yang selalu optimis, percaya diri, berpikiran positif, mengetahui kelebihan pada dirinya yang bermanfaat untuk orang lain dan mempunyai gambaran yang jelas tentang masa depannya.</li>
                <li class="py-2">Membina peserta didik yang bertumbuh menjadi siswa yang sehat, berbudi pekerti luhur dan bertanggung jawab sesuai nilai kebenaran.</li>
                <li class="py-2">Memperlengkapi peserta didik dengan keterampilan yang berkualitas sesuai kebutuhan dan untuk pengembangan dirinya.</li>                
            </ul>
        </div>
    </div>
    {{-- visi misi end --}}
</x-app-layout>
