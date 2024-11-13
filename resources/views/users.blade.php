<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-[#3D4B4D] dark:text-[#B7C0C0] leading-tight">
            {{ __('Users Management') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-[#F2FCF9] dark:bg-[#364841] shadow-sm sm:rounded-lg p-6">
                <table class="w-full border-collapse border border-gray-300 dark:border-gray-600">
                    <thead>
                        <tr class="bg-[#3A6E6A] text-white">
                            <th class="border border-gray-300 p-3">ID</th>
                            <th class="border border-gray-300 p-3">Name</th>
                            <th class="border border-gray-300 p-3">Email</th>
                            <th class="border border-gray-300 p-3">Role</th>
                            <th class="border border-gray-300 p-3">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                            <tr class="bg-white dark:bg-[#4C7572]">
                                <td class="border border-gray-300 p-3">{{ $user->id }}</td>
                                <td class="border border-gray-300 p-3">{{ $user->name }}</td>
                                <td class="border border-gray-300 p-3">{{ $user->email }}</td>
                                <td class="border border-gray-300 p-3">{{ $user->role }}</td>
                                <td class="border border-gray-300 p-3">
                                    <a href="{{ route('profile.edit', $user->id) }}" class="text-blue-600 hover:underline">Edit</a> |
                                    <form action="{{ route('profile.destroy', $user->id) }}" method="POST" class="inline-block" onsubmit="return confirm('Are you sure?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-red-600 hover:underline">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
