<x-layout>
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg w-full">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500">
            <thead class="text-xs text-gray-700 uppercase bg-gray-300">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Product name
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Color
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Category
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Price
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Action
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $item)
                    <tr class="odd:bg-white even:bg-gray-50 border-b border-gray-200">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                            {{ $item->name }}
                        </th>
                        <td class="px-6 py-4">
                            {{-- FIX HERE --}}
                            {{ $item->color_id }}
                        </td>
                        <td class="px-6 py-4">
                            {{-- FIX HERE --}}
                            {{ $item->category_id }}
                        </td>
                        <td class="px-6 py-4">
                            ${{ number_format($item->price) }}
                        </td>
                        <td class="px-6 py-4">
                            <div class="flex gap-4">
                                <a href="{{ route('product.edit', $item) }}"
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
