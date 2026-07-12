<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <h2 class="font-bold text-2xl text-gray-800 dark:text-gray-200">
                Product
            </h2>

            <a href="{{ route('produk.create') }}"
               class="bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded-lg shadow">
                Tambah Product
            </a>
        </div>
    </x-slot>

  <div class="bg-white rounded-xl shadow-lg overflow-hidden w-4/5 mx-auto">
    <table class="w-full border-collapse">
        <thead>
            <tr class="bg-gray-100">
                <th class="border px-6 py-3 text-left">ID</th>
                <th class="border px-6 py-3 text-left">Nama</th>
                <th class="border px-6 py-3 text-center">kategori_id</th>
                <th class="border px-6 py-3 text-center">harga</th>
                <th class="border px-6 py-3 text-center">stok</th>
                <th class="border px-6 py-3 text-center">Aksi</th>
            </tr>
        </thead>

        <tbody>
            @forelse ($produk as $produk)
                <tr>
                    <td class="border px-6 py-4 text-center">{{ $produk->id }}</td>
                    <td class="border px-6 py-4 text-center">{{ $produk->name }}</td>
                    <td class="border px-6 py-4 text-center">{{ $produk-> category_id}}</td>
                    <td class="border px-6 py-4 text-center">{{ $produk->harga }}</td>
                    <td class="border px-6 py-4 text-center">{{ $produk->stok}}</td>

                    <td class="border px-6 py-4 text-center">
                        <a href="{{ route('produk.edit', $produk->id) }}"
                           class="bg-blue-500 text-black px-3 py-1 rounded">
                            Edit
                        </a>

                        <form action="{{ route('produk.destroy', $produk->id) }}"
                              method="POST"
                              class="inline">
                            @csrf
                            @method('DELETE')

                            <button type="submit"
                                    class="bg-blue-500 text-black px-3 py-1 rounded ml-2">
                                Hapus
                            </button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="4" class="border px-6 py-4 text-center">
                        Belum ada data kategori.
                    </td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
</x-app-layout>