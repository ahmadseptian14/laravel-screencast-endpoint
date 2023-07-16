<x-app-layout>
    <x-slot name="title">
        Create new Video
    </x-slot>
    <x-slot name="header">
        Create new Video
    </x-slot>
    <form action="{{ route('videos.edit', [$playlist->slug, $video->unique_video_id]) }}" method="post" enctype="multipart/form-data" novalidate>
        @method('put')
        @include('videos._form-control', [
            'submit' => 'Edit',
        ])
    </form>
</x-app-layout>
