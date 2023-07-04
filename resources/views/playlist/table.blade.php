<x-app-layout>
    <x-slot name="title">
        Your Playlists
    </x-slot>
    <x-slot name="header">
        Your Playlists
    </x-slot>
    <div class="flex flex-col">
        <div class="overflow-x-auto sm:mx-0.5 lg:mx-0.5">
            <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
                <div class="overflow-hidden">
                    <x-table>
                        <thead class="bg-gray-200 border-b">
                            <tr>
                                <th>
                                    #
                                </th>
                                <x-th class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                    Name
                                </x-th>
                                <x-th>
                                    Published
                                </x-th>
                                <x-th>
                                    Action
                                </x-th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($playlists as $i => $playlist)
                                <tr>
                                    <x-td>{{ $i + $playlists->firstItem() }}</x-td>
                                    <x-td>
                                        <div>
                                            <div class="mb-2">
                                                {{ $playlist->name }}
                                            </div>
                                            @foreach ($playlist->tags as $tag)
                                            <span class="bg-green-900 text-green-900 text-xs font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-green-500 dark:text-green-900">
                                                {{$tag->name}}
                                            </span>
                                            @endforeach
                                        </div>
                                    </x-td>
                                    <x-td>
                                        {{ $playlist->created_at->format('d F, Y') }}
                                    </x-td>
                                    <x-td>
                                        <div class="flex">
<<<<<<< HEAD
                                            <a href="{{ route('videos.create', $playlist->slug) }}"
                                                class="mr-4 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">Tambah</a>
                                            <a href="{{ route('playlists.edit', $playlist->slug) }}"
                                                class="mr-4 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">Edit</a>
                                            <div x-data="{ modalIsOpen: false }">
                                                <x-modal  state="modalIsOpen" x-show="modalIsOpen" title="Anda yakin?">
=======
                                            <a href="{{ route('playlists.edit', $playlist->slug) }}"
                                                class="mr-4 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">Edit</a>
                                            <div x-data="{ open: false }">
                                                <x-modal x-show="open" title="Anda yakin?">
>>>>>>> 7aedd114d72900b0a2f3fbb058ae4cf5e3b2f477
                                                    <div class="flex">
                                                        <form class="mr-2" action="{{ route('playlists.delete', $playlist->slug) }}"
                                                            method="post">
                                                            @csrf
                                                            @method('delete')
<<<<<<< HEAD
                                                            <x-button>
                                                                Yes
                                                            </x-button>
                                                        </form>
                                                        <x-button
                                                            @click="modalIsOpen = false">
                                                            No
                                                        </x-button>
                                                    </div>
                                                </x-modal>
                                                <button @click="modalIsOpen = true"
=======
                                                            <button
                                                                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">
                                                                Yes
                                                            </button>
                                                        </form>
                                                        <button
                                                            type="button"
                                                            @click="open = false"
                                                            class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded-full">
                                                            No
                                                        </button>
                                                    </div>
                                                </x-modal>
                                                <button @click="open = true"
>>>>>>> 7aedd114d72900b0a2f3fbb058ae4cf5e3b2f477
                                                    class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded-full">
                                                    Hapus
                                                </button>
                                            </div>
                                        </div>
                                    </x-td>
                                </tr>
                            @empty
                                <x-td>Tidak ada playlists</x-td>
                            @endforelse
                        </tbody>
                    </x-table>
                    {{ $playlists->links() }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
