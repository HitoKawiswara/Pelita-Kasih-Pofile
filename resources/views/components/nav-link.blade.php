@props(['active', 'href'])

@php
$classes = ($active ?? false)
            ? 'py-1 border-b-2 border-white font-medium leading-5 focus:outline-none focus:border-white transition duration-150 ease-in-out'
            
            : 'py-1 border-b-2 border-transparent font-medium leading-5 hover:border-gray-300 focus:outline-none  focus:border-gray-300 transition duration-150 ease-in-out';
@endphp
<div {{ $attributes->merge(['class' => $classes]) }}>
    <a {{ $attributes->merge(['href' => $href]) }}>
        {{ $slot }}
    </a>
</div>
