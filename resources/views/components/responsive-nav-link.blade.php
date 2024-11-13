@props(['active'])

@php
$classes = ($active ?? false)
            ? 'block w-full ps-3 pe-4 py-2 border-l-4 border-[#4C7572] dark:border-[#6DAEAE] text-start text-base font-medium text-[#3D4B4D] dark:text-[#B7C0C0] bg-[#F2FCF9] dark:bg-[#364841] focus:outline-none focus:text-[#3D8B84] dark:focus:text-[#B7C0C0] focus:bg-[#3A6E6A] dark:focus:bg-[#4C7572] focus:border-[#3D8B84] dark:focus:border-[#6DAEAE] transition duration-150 ease-in-out'
            : 'block w-full ps-3 pe-4 py-2 border-l-4 border-transparent text-start text-base font-medium text-gray-600 dark:text-gray-400 hover:text-[#3D8B84] dark:hover:text-[#B7C0C0] hover:bg-[#F2FCF9] dark:hover:bg-[#364841] hover:border-gray-300 dark:hover:border-gray-600 focus:outline-none focus:text-[#3D8B84] dark:focus:text-[#B7C0C0] focus:bg-[#F2FCF9] dark:focus:bg-[#364841] focus:border-gray-300 dark:focus:border-gray-600 transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
