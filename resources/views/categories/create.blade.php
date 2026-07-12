<x-app-layout>
    <x-slot name="header">
        <h2 class="text-2xl font-bold">
            Tambah Kategori
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-3xl mx-auto">

            <div class="bg-white p-6 rounded-xl shadow">

                <form action="{{ route('categories.store') }}" method="POST">
                    @csrf

                    <div class="mb-4">
                        <label class="block font-semibold mb-2">
                            Nama Kategori
                        </label>

                        <input type="text"
                               name="name"
                               class="w-full border rounded-lg p-2">
                    </div>

                    <div class="mb-4">
                        <label class="block font-semibold mb-2">
                            Deskripsi
                        </label>

                        <textarea name="deskripsi"
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