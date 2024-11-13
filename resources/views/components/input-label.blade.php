@props(['value'])

<label {{ $attributes->merge(['class' => 'block font-medium text-sm text-[#1F2A2E] dark:text-[#6F7476]']) }}>
    {{ $value ?? $slot }}
</label>
