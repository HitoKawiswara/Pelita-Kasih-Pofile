<x-app-layout>
    <x-title-image :src="asset('storage/assets/Carousel1.png')">
       {{ __('AKADEMIK') }}
    </x-title-image>

    {{-- tk start --}}
    <div id="tk-akademik" class="mt-10 mx-auto">
        <x-title-lg>
            {{ __('Taman Kanak-Kanak') }}
            <x-slot name="slot2"></x-slot>
        </x-title-lg>
        <div class="swiper swiper3 w-[80%] py-10">
            <div class="swiper-wrapper">
                {{-- slide start --}}
                @foreach ( $images as $row )
                    @if ( $row->type == 'tk')
                        <div class="swiper-slide">
                            <img src="{{ asset('storage/images/akademik/tk/' . $row->img) }}" class="aspect-video rounded-lg" alt="">
                        </div>
                    @endif
                @endforeach
                {{-- slide end --}}
            </div>
            
            <!-- navigation buttons -->
            <div class="swiper-button-prev swiper-button-prev3"></div>
            <div class="swiper-button-next swiper-button-next3"></div>
        </div>
        <div class="flex flex-col gap-5 my-5">
            <p class="w-[50%] mx-auto text-justify tracking-wide leading-6 font-medium text-lg">
                Pada Kelompok Taman Kanak- Kanak kami mengembangkan kemampuan berkomunikasi seperti membaca, menulis, dan mendengarkan, baik dalam bahasa Indonesia maupun Inggris, maupun bahasa mandarin seiring dengan pemahaman akan pengembangan konsep.
                Di Taman Kanak- kanak kami juga meletakkan dasar-dasar ke arah perkembangan sikap, pengetahuan dan keterampilan yang diperlukan bagi anak dalam menyesuaikan diri dalam lingkungannya dan untuk pertumbuhan serta perkembangan selanjutnya, termasuk persiapan memasuki pendidikan dasar.
            </p>
        </div>
    </div>
    {{-- tk end --}}

    {{-- sd start --}}
    <div id="sd-akademik" class="mt-10 mx-auto bg-primary-500 py-10 text-white">
        <x-title-lg>
            {{ __('') }}
            <x-slot name="slot2">
                Sekolah Dasar
            </x-slot>
        </x-title-lg>
        <div class="swiper swiper3 w-[80%] py-10">
            <div class="swiper-wrapper">
                {{-- slide start --}}
                @foreach ( $images as $row )
                    @if ( $row->type == 'sd')
                        <div class="swiper-slide">
                            <img src="{{ asset('storage/images/akademik/sd/' . $row->img) }}" class="aspect-video rounded-lg" alt="">
                        </div>
                    @endif
                @endforeach
                {{-- slide end --}}
            </div>
            
            <!-- navigation buttons -->
            <div class="swiper-button-prev swiper-button-prev3"></div>
            <div class="swiper-button-next swiper-button-next3"></div>
        </div>
        <div class="flex flex-col gap-5 my-5">
            <p class="w-[50%] mx-auto text-justify tracking-wide leading-6 font-medium text-lg">
                Sekolah Dasar Pelita Kasih merupakan sekolah yang pembelajarannya menggunakan kurikulum nasional. Sebagian besar proses belajar mengajar menggunakan bahasa Indonesia. Bahasa Inggris dan Mandarin diajarkan sebagai keterampilan tambahan bagi siswa untuk menghadapi era globalisasi.
                Siswa dibimbing untuk mengembangkan berbagai macam keterampilan dan pemahaman seiring dengan pembelajaran mereka selama di Sekolah Dasar, yang membantu untuk mengembangkan potensi terbaik mereka.
                Siswa mulai belajar tentang berbagai sudut pandang, budaya dan ide yang berbeda, yang membantu mereka mengembangkan diri sebagai generasi muda yang berpikiran global. Sebagai wadah untuk menyalurkan minat bakat siswa dan sebagai bentuk pengembangan diri Sekolah Dasar Pelita Kasih juga mengadakan berbagai kegiatan ekstrakurikuler.
            </p>
        </div>
    </div>
    {{-- sd end --}}

    {{-- smp start --}}
    <div id="smp-akademik" class="mt-10 mx-auto">
        <x-title-lg>
            {{ __('Sekolah Menengah Pertama') }}
            <x-slot name="slot2"></x-slot>
        </x-title-lg>
        <div class="swiper swiper3 w-[80%] py-10">
            <div class="swiper-wrapper">
                {{-- slide start --}}
                @foreach ( $images as $row )
                    @if ( $row->type == 'smp')
                        <div class="swiper-slide">
                            <img src="{{ asset('storage/images/akademik/smp/' . $row->img) }}" class="aspect-video rounded-lg" alt="">
                        </div>
                    @endif
                @endforeach
                {{-- slide end --}}
            </div>
            
            <!-- navigation buttons -->
            <div class="swiper-button-prev swiper-button-prev3"></div>
            <div class="swiper-button-next swiper-button-next3"></div>
        </div>
        <div class="flex flex-col gap-5 my-5">
            <p class="w-[50%] mx-auto text-justify tracking-wide leading-6 font-medium text-lg">
                SMP Pelita Kasih berkomitmen untuk menumbuhkan potensi terbaik setiap individu untuk menjadi seseorang unggul, berpengetahuan, percaya kepada Tuhan, sehat jasmani, memiliki karakter positif, citra diri positif, memiliki tujuan hidup yang jelas, memiliki strategi dan komitmen serta keahlian untuk menjalani kehidupan dan menggapai cita- citanya. 
                SMP Pelita Kasih menerapkan Kurikulum Nasional dengan berfokus pada penguasaaan teknologi, dan kompetensi bahasa Inggris dan Mandarin.Pembentukkan karakter positif, citra diri positif, berdaya juang tinggi, serta memiliki strategi dan komitmen adalah karakter utama yang akan diintegrasikan dalam setiap kegiatan.
                SMP Pelita Kasih juga memiliki kegiatan ekstra kurikuler, pembiasaan, dan pengembangan diri sebagai penunjang pencapaian kompetensi holistik siswa untuk menghadapi era globalisasi.
            </p>
        </div>
    </div>
    {{-- smp end --}}

    {{-- sma start --}}
    <div id="sma-akademik" class="mt-10 mx-auto bg-primary-500 py-10 text-white">
        <x-title-lg>
            {{ __('') }}
            <x-slot name="slot2">
                Sekolah Menengah Akhir
            </x-slot>
        </x-title-lg>
        <div class="swiper swiper3 w-[80%] py-10">
            <div class="swiper-wrapper">
                {{-- slide start --}}
                @foreach ( $images as $row )
                    @if ( $row->type == 'sma')
                        <div class="swiper-slide">
                            <img src="{{ asset('storage/images/akademik/sma/' . $row->img) }}" class="aspect-video rounded-lg" alt="">
                        </div>
                    @endif
                @endforeach
                {{-- slide end --}}
            </div>
            
            <!-- navigation buttons -->
            <div class="swiper-button-prev swiper-button-prev3"></div>
            <div class="swiper-button-next swiper-button-next3"></div>
        </div>
        <div class="flex flex-col gap-5 my-5">
            <p class="w-[50%] mx-auto text-justify tracking-wide leading-6 font-medium text-lg">
                SMA Pelita Kasih berkomitmen untuk menumbuhkan potensi terbaik setiap individu untuk menjadi seseorang unggul, berpengetahuan, percaya kepada Tuhan, sehat jasmani, memiliki karakter positif, citra diri positif, memiliki tujuan hidup yang jelas, memiliki strategi dan komitmen serta keahlian untuk menjalani kehidupan dan menggapai cita- citanya. 
                SMA Pelita Kasih menerapkan Kurikulum Nasional dengan berfokus pada penguasaaan teknologi, dan kompetensi bahasa Inggris dan Mandarin.
                Pembentukkan karakter positif, citra diri positif, berdaya juang tinggi, serta memiliki strategi dan komitmen adalah karakter utama yang akan diintegrasikan dalam setiap kegiatan.SMA Pelita Kasih juga memiliki kegiatan ekstra kurikuler, pembiasaan, dan pengembangan diri sebagai penunjang pencapaian kompetensi holistik siswa untuk menghadapi era globalisasi. 
            </p>
        </div>
    </div>
    {{-- sma end --}}
</x-app-layout>
