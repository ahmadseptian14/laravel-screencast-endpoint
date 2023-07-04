@csrf
<div class="mb-5">
    <x-label for="thumbnail">Thumbnail</x-label>
    <x-input id="thumbnail" class="block mt-1 w-full" type="file" name="thumbnail" required />
    @error('thumbnail')
        <div class="text-red-500 mt-2">{{ $message }}</div>
    @enderror
</div>
<div class="mb-5">
    <x-label for="name" :value="__('Name')" />
    <x-input id="name" class="block mt-1 w-full" type="text" name="name" required
        value="{{old('name') ?? $playlist->name }}" />
    @error('name')
        <div class="text-red-500 mt-2">{{ $message }}</div>
    @enderror
</div>
<div class="mb-5">
    <x-label for="price" :value="__('Price')" />
    <x-input id="price" class="block mt-1 w-full" type="text" name="price" required
        value="{{old('price') ?? $playlist->price }}" />
    @error('price')
        <div class="text-red-500 mt-2">{{ $message }}</div>
    @enderror
</div>
<div class="mb-5">
    <x-label for="description" :value="__('Description')" />
    <x-textarea id="description" class="block mt-1 w-full" name="description" required>
        {{ old('description') ?? $playlist->description }}
    </x-textarea>
    @error('description')
        <div class="text-red-500 mt-2">{{ $message }}</div>
    @enderror
</div>
<div class="mb-5">
    <x-label for="tags" value="Tags" />
    <select multiple name="tags[]" id="tags" class="w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
        @foreach ($tags as $tag)
            <option {{$playlist->tags()->find($tag->id) ? 'selected' : ''}} value="{{$tag->id}}">{{$tag->name}}</option>
        @endforeach
    </select>
</div>
<x-button>{{ $submit }}</x-button>
