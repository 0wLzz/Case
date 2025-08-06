<x-layout>
    <div class="mt-10 bg-gray-50 p-6 rounded shadow">
        <h2 class="text-2xl font-bold mb-6">Edit Testimony</h2>

        <form action="{{ route('testimony.update', $testimony->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <label class="block text-sm font-medium">Person Name</label>
                <input type="text" name="name" value="{{ old('name', $testimony->name) }}"
                    class="w-full mt-1 p-2 border rounded" required>
                @error('name')
                    <p class="text-red-500 text-sm"> {{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label class="block text-sm font-medium">Rating</label>
                <input type="number" name="rating" value="{{ old('rating', $testimony->rating) }}"
                    class="w-full mt-1 p-2 border rounded" required>
                @error('rating')
                    <p class="text-red-500 text-sm"> {{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label class="block text-sm font-medium">Review</label>
                <textarea name="testimony"class="w-full mt-1 p-2 border rounded" cols="30" rows="10">
                    {{ old('text', trim($testimony->testimony)) }}
                </textarea>
                @error('testimony')
                    <p class="text-red-500 text-sm"> {{ $message }}</p>
                @enderror
            </div>

            <div class="flex justify-end">
                <a href="{{ route('testimony.index') }}"
                    class="bg-gray-300 hover:bg-gray-400 text-black px-4 py-2 rounded mr-2">Cancel</a>
                <button type="submit"
                    class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded">Update</button>
            </div>
        </form>
    </div>
</x-layout>
