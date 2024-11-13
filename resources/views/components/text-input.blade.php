@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge([
    'class' => 'border-[#BDC2B3] dark:border-[#4D5D54] dark:bg-[#2D3A34] dark:text-[#6F7578] 
                focus:border-[#5C67D5] dark:focus:border-[#5C67D5] focus:ring-[#5C67D5] 
                dark:focus:ring-[#5C67D5] rounded-md shadow-sm'
]) !!}>
