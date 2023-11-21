@props(['src'])

<div class="flex items-center justify-center relative" style="background-image: url('{{ $src }}'); background-size: cover; background-position: center; width: 100%; height: 600px;">
    <h1 class="text-white font-bold text-6xl relative z-10">
        {{ $slot }}
    </h1>
    <div class="absolute inset-0 bg-black opacity-30 z-0"></div>
</div>
