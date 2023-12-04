@props(['src', 'href'])

<div class="swiper-slide">
    <figure class="snip1369 rounded-lg shadow-lg m-5 aspect-auto">
        <img src ="{{ asset( 'storage/images/berita/' . $src ) }}" alt="news-cover" class="w-[330.75px] h-[496.83px] object-cover"/>
        <div class="image">
            <img src="{{ asset( 'storage/images/berita/' . $src ) }}" class="w-[330.75px] h-[496.83px] object-cover" alt="news-cover"/>
            </div>
        <figcaption>
            <h3>{{ $header }}</h3>
            <p class="text-justify leading-5">{{ strlen($content) > 200 ? substr($content, 0, 200) . '...' : $content }}</p>
        </figcaption><span class="read-more">

            <a href="{{ $href }}" class="hover:border-b-2 transition-none">
                Read More <i class="ion-android-arrow-forward"></i></span>
        </a>
    </figure>
</div>
