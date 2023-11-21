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
        <x-text-image :src="asset('storage/assets/bg-banner1.png')">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta, placeat. Dolore non optio numquam sed veritatis qui! Earum nostrum error tempora. Quas delectus est sunt alias illo ipsum, fugiat corrupti, deserunt explicabo, modi deleniti ad natus error aspernatur optio earum eum a dolor impedit at doloremque maiores? Autem accusamus nesciunt nihil dolores minima vel eligendi vitae ipsa? Dolorem sit nisi debitis quaerat rem, voluptate eaque exercitationem voluptas impedit nulla, quo pariatur, ullam itaque eos. Quisquam autem nam et quae harum labore, dolores quidem nisi commodi magni eum dolorum voluptatum iste ipsa deserunt culpa, pariatur illum quia. Vitae, quasi voluptates! Labore blanditiis impedit quos tenetur modi. Natus, rem? Fugit laborum veritatis corrupti ipsa animi impedit nam tenetur nostrum repellendus enim nemo accusantium, et voluptatibus labore atque libero reprehenderit cupiditate cumque. Rerum nobis inventore nam quos libero ut quis magnam similique voluptas? Perspiciatis libero dolores soluta doloribus quis eveniet eaque fuga iusto, repudiandae unde deserunt exercitationem neque autem, mollitia sed commodi explicabo rem quisquam illo consectetur. Excepturi labore sint sit animi officiis nisi laboriosam! Quam cupiditate minus aliquam aliquid officiis est sunt ab dolorem nemo, assumenda deserunt, ex quibusdam, non modi provident suscipit? Ipsa magnam illo, a, optio perspiciatis vel tempore excepturi, nulla eligendi quidem maxime mollitia? Veniam illo porro delectus odit alias et voluptatem sequi culpa ex saepe facilis voluptas tempore ipsam, architecto officiis autem eos perferendis tenetur sint eius ea provident ipsa aliquid! Doloremque, eius atque nobis amet facere sunt facilis eos provident a pariatur ad similique minima, nulla autem!
        </x-text-image>
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
