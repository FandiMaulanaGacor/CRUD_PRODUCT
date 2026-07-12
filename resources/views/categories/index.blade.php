<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <h2 class="font-bold text-2xl text-gray-800 dark:text-gray-200">
                Kategori
            </h2>

            <a href="{{ route('categories.create') }}"
               class="bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded-lg shadow">
                Tambah Kategori
            </a>
        </div>
    </x-slot>

  <div class="bg-white rounded-xl shadow-lg overflow-hidden w-4/5 mx-auto">
    <table class="w-full border-collapse">
        <thead>
            <tr class="bg-gray-100">
                <th class="border px-6 py-3 text-left">ID</th>
                <th class="border px-6 py-3 text-left">Nama</th>
                <th class="border px-6 py-3 text-center">Deskripsi</th>
                <th class="border px-6 py-3 text-center">Aksi</th>
            </tr>
        </thead>

        <tbody>
            @forelse ($categories as $category)
                <tr>
                    <td class="border px-6 py-4 text-center">{{ $category->id }}</td>
                    <td class="border px-6 py-4 text-center">{{ $category->name }}</td>
                    <td class="border px-6 py-4 text-center">{{ $category->deskripsi }}</td>

                    <td class="border px-6 py-4 text-center">
                        <a href="{{ route('categories.edit', $category->id) }}"
                           class="bg-blue-500 text-black px-3 py-1 rounded">
                            Edit
                        </a>

                        <form action="{{ route('categories.destroy', $category->id) }}"
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