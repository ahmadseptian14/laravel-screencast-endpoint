<x-app-layout>
    <x-slot name="title">
        {{ $title }}
    </x-slot>
    <x-slot name="header">
        {{ $title }}
    </x-slot>
    <div class="flex flex-col">
        <div class="overflow-x-auto sm:mx-0.5 lg:mx-0.5">
            <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
                <div class="overflow-hidden">
                    <x-table>
                        <thead class="bg-gray-200 border-b">
                            <tr>
                                <x-th>#</x-th>
                                <x-th>Title</x-th>
                                <x-th>Intro</x-th>
                                <x-th>Action</x-th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($videos as $i => $video)
                                <tr>
                                    <x-td>{{ $i + $videos->firstItem() }}</x-td>
                                    <x-td>{{ $video->title }}</x-td>
                                    <x-td class="text-xs uppercase font-semibold">{{ $video->intro ? 'Yes' : 'No' }}
                                    </x-td>
                                    <x-td>
                                        <div class="flex">
                                            <a class="mr-4 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full"
                                                href="{{ route('videos.edit', [$playlist, $video->unique_video_id]) }}">Edit</a>
                                            <div x-data="{ modalIsOpen: false }">
                                                <x-modal state="modalIsOpen" x-show="modalIsOpen" title="Anda yakin?">
                                                    <div class="mb-5">
                                                        <h4 class="text-lg capitalize">{{ $video->title }}</h4>
                                                        <span class="text-xs uppercase text-gray-500">Episode {{ $video->episode }}
                                                        -
                                                        Runtime {{ $video->runtime }}</span>
                                                    </div>
                                                    <div class="flex">
                                                        <form class="mr-2"
                                                            action="{{ route('videos.delete', [$playlist->slug, $video->unique_video_id]) }}"
                                                            method="post">
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
                                </tr>
                            @empty
                                <x-td>Tidak ada playlists</x-td>
                            @endforelse
                        </tbody>
                    </x-table>
                    {{ $videos->links() }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
