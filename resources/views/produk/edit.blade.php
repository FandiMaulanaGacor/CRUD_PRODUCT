<x-app-layout>
    <x-slot name="header">
        <h2 class="text-2xl font-bold">
            Edit Product
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-3xl mx-auto">
            <div class="bg-white p-6 rounded-xl shadow">

                <form action="{{ route('produk.update', $produk->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="mb-4">
                        <label class="block font-semibold mb-2">
                            Nama produk
                        </label>

                        <input
                            type="text"
                            name="name"
                            value="{{ old('name', $produk->name) }}"
                            class="w-full border rounded-lg p-2">
                    </div>

                    <div class="mb-4">
                        <label class="block font-semibold mb-2">
                            category_id
                        </label>

                        <textarea
                            name="category_id"
                            rows="4"
                            class="w-full border rounded-lg p-2">{{ old('category_id', $produk->category_id) }}</textarea>
                    </div>

                    <div class="mb-4">
                        <label class="block font-semibold mb-2">
                            harga
                        </label>

                        <textarea
                            name="harga"
                            rows="4"
                            class="w-full border rounded-lg p-2">{{ old('harga', $produk->harga) }}</textarea>
                    </div>

                    <div class="mb-4">
                        <label class="block font-semibold mb-2">
                            stok
                        </label>

                        <textarea
                            name="stok"
                            rows="4"
                            class="w-full border rounded-lg p-2">{{ old('stok', $produk->stok) }}</textarea>
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