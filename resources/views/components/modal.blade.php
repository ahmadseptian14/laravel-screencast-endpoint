<div {{ $attributes->merge(["class" => "absolute inset-0 w-full h-full bg-black bg-opacity-70 flex justify-center items-center"])}}>
    <div class="bg-white md:max-w-xl w-1/2 rounded-lg shadow-lg">
        <div class="px-6 py-4 border-b flex justify-between items-center">
            <div>{{$title}}</div>

<<<<<<< HEAD
            <button @click="{{$state}} = false">
=======
            <button @click="open = false">
>>>>>>> 7aedd114d72900b0a2f3fbb058ae4cf5e3b2f477
                <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                  </svg>
            </button>

        </div>
       <div class="p-6">
        {{$slot}}
       </div>
    </div>
</div>
