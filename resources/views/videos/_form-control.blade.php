@csrf
<div class="mb-5">
    <x-label for="title" :value="__('Title')" />
    <x-input id="title" class="block mt-1 w-full" type="text" name="title" autofocus required
        value="{{old('title') ?? $video->title }}" />
    @error('title')
        <div class="text-red-500 mt-2">{{ $message }}</div>
    @enderror
</div>
<div class="mb-5">
    <x-label for="unique_video_id" :value="__('Unique Code')" />
    <x-input id="unique_video_id" class="block mt-1 w-full" type="text" name="unique_video_id" required
        value="{{old('unique_video_id') ?? $video->unique_video_id }}" />
    @error('unique_video_id')
        <div class="text-red-500 mt-2">{{ $message }}</div>
    @enderror
</div>
<div class="flex lg:-mx-2">
    <div class="w-full lg:w-1/2 mb-6 mr-2">
        <x-label for="episode" :value="__('Episode')" />
        <x-input id="episode" class="block mt-1 w-full" type="text" name="episode" required
            value="{{old('episode') ?? $video->episode }}" />
        @error('episode')
            <div class="text-red-500 mt-2">{{ $message }}</div>
        @enderror
    </div>
    <div class="w-full lg:w-1/2 mb-6">
        <x-label for="runtime" :value="__('Runtime')" />
        <x-input id="runtime" class="block mt-1 w-full" type="text" name="runtime" required
            value="{{old('runtime') ?? $video->runtime }}" />
        @error('runtime')
            <div class="text-red-500 mt-2">{{ $message }}</div>
        @enderror
    </div>
</div>
<div class="mb-6">
    <lable for="intro" class="flex items-center">
        <input type="checkbox" {{$video->intro ? 'checked' : ''}} name="intro" id="intro" class="mr-2 focus:outline-none focus:ring-transparent text-blue-500 rounded border-gray-300">
        <span class="select-none uppercase font-medium text-sm">Intro</span>
    </lable>
</div>
<x-button>{{ $submit }}</x-button>
