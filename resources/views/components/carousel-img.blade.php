@props(['src'])

<img {{ $attributes->merge(['src' => $src]) }} alt="image" class="w-screen object-cover antialiased">
