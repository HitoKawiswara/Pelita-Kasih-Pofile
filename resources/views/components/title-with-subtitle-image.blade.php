@props(['src'])

<div class="flex flex-col items-center justify-center relative" style="background-image: url('{{ $src }}'); background-size: cover; background-position: center; width: 100%; height: 600px;">
    <h1 class="text-white font-bold text-6xl relative z-10">
        {{ $header }}
    </h1>
    <p class="mt-10 w-2/3 text-white text-lg text-center z-10">
        {{ $desc }}
    </p>
    <div class="absolute inset-0 bg-black opacity-40 z-0"></div>
</div>
