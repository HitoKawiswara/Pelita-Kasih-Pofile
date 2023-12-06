@props(['active', 'href'])

@php
$classes = ($active ?? false)
            ? 'border-b-2 border-white font-normal leading-5 focus:outline-none focus:border-white transition duration-150 ease-in-out'
            
            : 'border-b-2 border-transparent font-normal leading-5 hover:border-gray-300 focus:outline-none  focus:border-gray-300 transition duration-150 ease-in-out';
@endphp
<div {{ $attributes->merge(['class' => $classes]) }}>
    <a {{ $attributes->merge(['href' => $href]) }}>
        {{ $slot }}
    </a>
</div>
