<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-4 py-2 bg-[#2D3A34] dark:bg-[#C5D0CC] border border-transparent rounded-md font-semibold text-xs text-[#FFFFFF] dark:text-[#6F6F6E] uppercase tracking-widest hover:bg-[#3D4A42] dark:hover:bg-[#F4F8F5] focus:bg-[#3D4A42] dark:focus:bg-[#F4F8F5] active:bg-[#2D3A34] dark:active:bg-[#D5E0D4] focus:outline-none focus:ring-2 focus:ring-[#5C67D5] focus:ring-offset-2 dark:focus:ring-offset-[#2D3A34] transition ease-in-out duration-150 opacity-90 hover:opacity-100']) }}>
    {{ $slot }}
</button>
