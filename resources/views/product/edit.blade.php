<x-layout>
    <div class="mt-10 bg-gray-50 p-6 rounded shadow">
        <h2 class="text-2xl font-bold mb-6">Edit Product</h2>

        <form action="{{ route('product.update', $product) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <label class="block text-sm font-medium">Product Name</label>
                <input type="text" name="name" value="{{ old('name', $product->name) }}"
                    class="w-full mt-1 p-2 border rounded">
                @error('name')
                    <p class="text-red-500 text-sm"> {{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label class="block text-sm font-medium">Category</label>
                <select name="category_id" class="w-full mt-1 p-2 border rounded" required>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}"
                            {{ $product->category_id == $category->id ? 'selected' : '' }}>
                            {{ $category->name }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="mb-4">
                <label class="block text-sm font-medium">Color</label>
                <select name="color_id" class="w-full mt-1 p-2 border rounded" required>
                    @foreach ($colors as $color)
                        <option value="{{ $color->id }}" {{ $product->color_id == $color->id ? 'selected' : '' }}>
                            {{ $color->name }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="mb-4">
                <label class="block text-sm font-medium">Price ($)</label>
                <input type="number" name="price" value="{{ old('price', $product->price) }}"
                    class="w-full mt-1 p-2 border rounded" required>
                @error('price')
                    <p class="text-red-500 text-sm"> {{ $message }}</p>
                @enderror
            </div>

            <div class="flex justify-end">
                <a href="{{ route('product.index') }}"
                    class="bg-gray-300 hover:bg-gray-400 text-black px-4 py-2 rounded mr-2">Cancel</a>
                <button type="submit"
                    class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded">Update</button>
            </div>
        </form>
    </div>
</x-layout>
