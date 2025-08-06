<x-layout>
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg w-full">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500">
            <thead class="text-xs text-gray-700 uppercase bg-gray-300">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Person Name
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Text
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Rating
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Action
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($testimonies as $item)
                    <tr class="odd:bg-white even:bg-gray-50 border-b border-gray-200">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                            {{ $item->name }}
                        </th>
                        <td class="px-6 py-4">
                            {{ $item->testimony }}
                        </td>
                        <td class="px-6 py-4">
                            <x-rating rating="{{ $item->rating }}" />
                        </td>
                        <td class="px-6 py-4">
                            <div class="flex gap-4">
                                <a href="{{ route('testimony.edit', $item) }}"
                                    class="font-medium text-blue-600 hover:underline">Edit</a>

                                {{-- FIX HERE --}}
                                <form action="" method="" onsubmit="return confirm('Are you sure?');">
                                    <button type="submit" class="font-medium text-red-600 hover:underline">
                                        Delete
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-layout>
