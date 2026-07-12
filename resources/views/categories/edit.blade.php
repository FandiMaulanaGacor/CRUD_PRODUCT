<x-app-layout>
    <x-slot name="header">
        <h2 class="text-2xl font-bold">
            Edit Kategori
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-3xl mx-auto">
            <div class="bg-white p-6 rounded-xl shadow">

                <form action="{{ route('categories.update', $category->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="mb-4">
                        <label class="block font-semibold mb-2">
                            Nama Kategori
                        </label>

                        <input
                            type="text"
                            name="name"
                            value="{{ old('name', $category->name) }}"
                            class="w-full border rounded-lg p-2">
                    </div>

                    <div class="mb-4">
                        <label class="block font-semibold mb-2">
                            Deskripsi
                        </label>

                        <textarea
                            name="deskripsi"
                            rows="4"
                            class="w-full border rounded-lg p-2">{{ old('deskripsi', $category->deskripsi) }}</textarea>
                    </div>

                    <button
                        type="submit"
                        class="bg-blue-600 text-white px-4 py-2 rounded-lg">
                        Update
                    </button>

                </form>

            </div>
        </div>
    </div>
</x-app-layout>