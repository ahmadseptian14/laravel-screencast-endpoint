<x-app-layout>
    <x-slot name="title">
       Edit Playlist {{$playlist->name}}
    </x-slot>
    <x-slot name="header">
       Edit Playlist {{$playlist->name}}
    </x-slot>
    <div class="w-full lg:w-1/2">
        <img class="rounde-lg w-full mb-6" src="{{$playlist->picture}}" alt="{{ $playlist->name }}">
    </div>
    <form action="{{ route('playlists.edit', $playlist->slug) }}" method="post" enctype="multipart/form-data" novalidate>
        @method('put')
        @include('playlist._form-control', [
            'submit' => 'Update'
        ])
    </form>
</x-app-layout>
