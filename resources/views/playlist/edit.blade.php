<x-app-layout>
    <x-slot name="title">
       Edit Playlist {{$playlist->name}}
    </x-slot>
    <x-slot name="header">
       Edit Playlist {{$playlist->name}}
    </x-slot>
<<<<<<< HEAD
    <div class="w-full lg:w-1/2">
        <img class="rounde-lg w-full mb-6" src="{{$playlist->picture}}" alt="{{ $playlist->name }}">
    </div>
=======

    <div class="w-full lg:w-12">
        <img class="rounded-lg w-full mb-6" src="{{Storage::url($playlist->thumbnail)}}" >
    </div>

>>>>>>> 7aedd114d72900b0a2f3fbb058ae4cf5e3b2f477
    <form action="{{ route('playlists.edit', $playlist->slug) }}" method="post" enctype="multipart/form-data" novalidate>
        @method('put')
        @include('playlist._form-control', [
            'submit' => 'Update'
        ])
    </form>
</x-app-layout>
