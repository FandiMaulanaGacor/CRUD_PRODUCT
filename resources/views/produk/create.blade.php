<x-app-layout>
    <x-slot name="header">
        <h2 class="text-2xl font-bold">
            Tambah Produk
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-3xl mx-auto">

            <div class="bg-white p-6 rounded-xl shadow">

                <form action="{{ route('produk.store') }}" method="POST">
                    @csrf

                    <div class="mb-4">
                        <label class="block font-semibold mb-2">
                            Nama produk
                        </label>

                        <input type="text"
                               name="name"
                               class="w-full border rounded-lg p-2">
                    </div>

                    <div class="mb-4">
                        <label class="block font-semibold mb-2">
                            kategori_id
                        </label>

                        <textarea name="category_id"
                                  rows="4"
                                  class="w-full border rounded-lg p-2"></textarea>
                    </div>

                    <div class="mb-4">
                        <label class="block font-semibold mb-2">
                            harga
                        </label>

                        <textarea name="harga"
                                  rows="4"
                                  class="w-full border rounded-lg p-2"></textarea>

                    <div class="mb-4">
                        <label class="block font-semibold mb-2">
                            Stok
                        </label>

                        <textarea name="stok"
                                  rows="4"
                                  class="w-full border rounded-lg p-2"></textarea>
                    </div>

                    <button type="submit"
                            class="bg-blue-600 text-white px-4 py-2 rounded-lg">
                        Simpan
                    </button>

                </form>

            </div>

        </div>
    </div>
</x-app-layout>