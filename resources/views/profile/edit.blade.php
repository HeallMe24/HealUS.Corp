<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-[#1A202C] dark:text-[#F7FAFC] leading-tight">
            {{ __('Profile') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-[#F9FAFB] bg-opacity-15 dark:bg-[#2D3748] dark:bg-opacity-15 shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.update-profile-information-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-[#F9FAFB] bg-opacity-15 dark:bg-[#2D3748] dark:bg-opacity-15 shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.update-password-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-[#F9FAFB] bg-opacity-15 dark:bg-[#2D3748] dark:bg-opacity-15 shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.delete-user-form')
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
