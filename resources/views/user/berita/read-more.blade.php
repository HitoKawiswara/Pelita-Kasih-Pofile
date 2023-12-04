<x-app-layout>
    <link rel="stylesheet" href="{{ asset('css/readMore.css') }}">
    <div class="bg-zinc-100 min-h-screen p-8 grid grid-cols-1 md:grid-cols-2 gap-8">
        <a href="{{ route('main') }}" class="flex items-center gap-2 hover:-translate-x-3 transition-all duration-200">
            <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16" >
                <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8"/>
            </svg>
            <p class=" font-semibold text-lg hover:translate-x-3 transition-all duration-200">Back</p>
        </a>
        <!-- Hero Image -->
        <div class="md:col-span-2">
            <img src="{{ asset('storage/images/berita/' . $news->thumbnail)}}" alt="Hero Image" class="w-full h-auto shadow-lg custom-img-hero mb-5">
        </div>

        <!-- Small Images -->
        <div class="md:col-span-1">
            <div class="relative overflow-hidden mb-8">
                <img src="{{ asset('storage/images/berita/' . $news->img1)}}" alt="First Small Image" class="w-full h-auto shadow-lg custom-img-small">
            </div>
            <div class="relative overflow-hidden mb-8">
                <img src="{{ asset('storage/images/berita/' . $news->img2)}}" alt="Second Small Image" class="w-full h-auto shadow-lg custom-img-small">
            </div>
        </div>

        <!-- Article Content with Scrolling -->
        <div class="md:col-span-1">
            <h1 class="font-bold text-4xl md:text-6xl leading-tight mb-4 font-sans text-primary tracking-wide">{{ $news->title }}</h1>
            <div class="scrollable-content">
                @foreach($paragraphs as $paragraph)
                    <p class="font-serif text-base md:text-lg leading-relaxed text-gray-700 mb-7 text-justify">{{ $paragraph }}</p>
                @endforeach
            </div>
        </div>
    </div>
</x-app-layout>
