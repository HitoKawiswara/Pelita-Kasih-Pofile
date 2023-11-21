@props(['src'])

<div class="flex items-center justify-center relative py-20" style="background-image: url('{{ $src }}'); background-size: cover; background-position: center; width: 100%;">
    <p class="text-white font-base text-lg text-justify mx-64 z-10">
        {{ $slot }}
    </p>
    {{-- <div class="absolute inset-0 bg-black opacity-30 z-0"></div> --}}
</div>
