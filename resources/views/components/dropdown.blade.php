@props(['active', 'align' => 'right', 'width' => '40', 'contentClasses' => 'bg-primary-500'])

@php
$classes = ($active ?? false)
        ? 'relative border-b-2 border-white font-normal leading-5 focus:outline-none focus:border-white transition duration-150 ease-in-out'

        : 'relative border-b-2 border-transparent font-normal leading-5 hover:border-gray-300 focus:outline-none focus:border-gray-300 transition duration-150 ease-in-out';

switch ($align) {
    case 'left':
        $alignmentClasses = 'origin-top-left left-0';
        break;
    case 'top':
        $alignmentClasses = 'origin-top';
        break;
    case 'right':
    default:
        $alignmentClasses = 'origin-top-right right-0';
        break;
}

switch ($width) {
    case '48':
        $width = 'w-48';
        break;
    case '40':
        $width = 'w-40';
        break;
}
@endphp

<div {{ $attributes->merge(['class' => $classes]) }}
 x-data="{ open: false }" @click.outside="open = false" @close.stop="open = false">
    <div @click="open = ! open">
        {{ $trigger }}
    </div>

    <div x-show="open"
            x-transition:enter="transition ease-out duration-200"
            x-transition:enter-start="opacity-0 scale-95"
            x-transition:enter-end="opacity-100 scale-100"
            x-transition:leave="transition ease-in duration-75"
            x-transition:leave-start="opacity-100 scale-100"
            x-transition:leave-end="opacity-0 scale-95"
            class="absolute z-50 mt-2 {{ $width }} rounded-md shadow-lg {{ $alignmentClasses }}"
            style="display: none;"
            @click="open = false">
        <div class="rounded-md ring-1 ring-white ring-opacity-10 {{ $contentClasses }}">
            {{ $content }}
        </div>
    </div>
</div>
