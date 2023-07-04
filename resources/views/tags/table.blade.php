<x-app-layout>
    <x-slot name="title">{{ $title }}</x-slot>
    <x-slot name="header">{{ $title }}</x-slot>

    <x-table>
        <tr>
            <x-th>#</x-th>
            <x-th>Name</x-th>
            <x-th>Playlist</x-th>
            @can('delete tags')
                <x-th>Action</x-th>
            @endcan
        </tr>
        @foreach ($tags as $i => $tag)
            <tr>
                <x-td>{{ $i + $tags->firstItem() }}</x-td>
                <x-td>{{ $tag->name }}</x-td>
                <x-td>
                    {{ $tag->playlists_count }}
                </x-td>
                @can('delete tags')
                    <x-td>
                        <div class="flex">
                            <a class="mr-4 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full"
                                href="{{ route('tags.edit', $tag->slug) }}">
                                Edit
                            </a>
                            <div x-data="{ modalIsOpen: false }">
                                <x-modal state="modalIsOpen" x-show="modalIsOpen" title="Anda yakin?">
                                    <div class="flex">
                                        <form class="mr-2" action="{{ route('tags.delete', $tag->slug) }}" method="post">
                                            @csrf
                                            @method('delete')
                                            <x-button>
                                                Yes
                                            </x-button>
                                        </form>
                                        <x-button @click="modalIsOpen = false">
                                            No
                                        </x-button>
                                    </div>
                                </x-modal>
                                <button @click="modalIsOpen = true"
                                    class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded-full">
                                    Hapus
                                </button>
                            </div>
                        </div>
                    </x-td>
                @endcan
            </tr>
        @endforeach
    </x-table>
</x-app-layout>
