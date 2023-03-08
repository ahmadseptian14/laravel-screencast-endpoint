@csrf
<div class="mb-5">
    <x-label for="thumbnail">Thumbnail</x-label>
    <x-input id="thumbnail" class="block mt-1 w-full" type="file" name="thumbnail" required  />
    @error('thumbnail')
        <div class="text-red-500 mt-2">{{ $message }}</div>
    @enderror
</div>
<div class="mb-5">
    <x-label for="name" :value="__('Name')" />
    <x-input id="name" class="block mt-1 w-full" type="text" name="name" required  value="{{$playlist->name}}" />
    @error('name')
        <div class="text-red-500 mt-2">{{ $message }}</div>
    @enderror
</div>
<div class="mb-5">
    <x-label for="price" :value="__('Price')" />
    <x-input id="price" class="block mt-1 w-full" type="text" name="price" required value="{{$playlist->price}}" />
    @error('price')
        <div class="text-red-500 mt-2">{{ $message }}</div>
    @enderror
</div>
<div class="mb-5">
    <x-label for="description" :value="__('Description')" />
    <x-textarea id="description" class="block mt-1 w-full" name="description" required />{{$playlist->description}}</x-textarea>
    @error('description')
        <div class="text-red-500 mt-2">{{ $message }}</div>
    @enderror
</div>
<x-button>{{ $submit }}</x-button>
