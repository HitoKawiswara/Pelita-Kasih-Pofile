@props(['src'])

<div class="swiper-slide">
    <figure class="snip1369 rounded-lg shadow-lg m-5">
        <img src ="{{ asset( 'storage/images/berita/' . $src ) }}" alt="news-cover"/>
        <div class="image"><img src="{{ asset( 'storage/images/berita/' . $src ) }}"
                alt="image" /></div>
        <figcaption>
            <h3>{{ $header }}</h3>
            <p class="text-justify leading-5">{{ strlen($content) > 120 ? substr($content, 0, 120) . '...' : $content }}</p>
        </figcaption><span class="read-more">

            <a href="#" class="hover:border-b-2 transition-none">
                Read More <i class="ion-android-arrow-forward"></i></span>
        </a>
    </figure>
</div>
