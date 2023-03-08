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
                                <x-td>{{$i + $playlists->firstItem()}}</x-td>
                                <x-td>
                                    {{$playlist->name}}
                                </x-td>
                                <x-td>
                                    {{$playlist->created_at->format("d F, Y")}}
                                </x-td>
                                <x-td>
                                    <a href="{{route('playlists.edit', $playlist->slug)}}">Edit</a>
                                </x-td>
                            </tr>
                            @empty
                                <x-td>Tidak ada playlists</x-td>
                            @endforelse
                        </tbody>
                    </x-table>
                    {{$playlists->links()}}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
