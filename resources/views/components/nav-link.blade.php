@props(['active'])

@php
$classes = ($active ?? false)
            ? 'inline-flex items-center px-1 pt-1 border-b-2 border-[#4C7572] dark:border-indigo-600 text-sm font-medium leading-5 text-[#1A202C] dark:text-[#F7FAFC] focus:outline-none focus:border-indigo-700 transition duration-150 ease-in-out'
            : 'inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-sm font-medium leading-5 text-[#4C7572] dark:text-[#A0AEC0] hover:text-[#2D3748] dark:hover:text-[#CBD5E0] hover:border-gray-300 dark:hover:border-gray-700 focus:outline-none focus:text-[#2D3748] dark:focus:text-[#CBD5E0] focus:border-gray-300 dark:focus:border-gray-700 transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
