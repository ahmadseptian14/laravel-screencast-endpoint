<x-app-layout>
    <x-slot name="title">
        Create new Video
    </x-slot>
    <x-slot name="header">
        Create new Video
    </x-slot>
    <form action="{{ route('videos.create', $playlist->slug) }}" method="post" enctype="multipart/form-data" novalidate>
        @include('videos._form-control', [
            'submit' => 'Create',
        ])
    </form>
</x-app-layout>
