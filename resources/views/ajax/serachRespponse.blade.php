@foreach($posts as $post)

        <a href="{{ route('public.post',$post->id) }}">
        
            <div class="border border-gray-400 rounded p-2">
                <div class="flex items-center text-sm">
                    <img src="{{ asset('images/posts/'.$post->img) }}" alt="{{ $post->title }}" class="w-16 h-16 object-cover mr-4">
                    <div class="">
                        <h5 class="font-bold text-yellow-300">{{ $post->title }}</h5>
                        <div class="text-sm">{{ $post->autor }}</div>
                        <div class="text-sm">Kategorija: <span class="tracking-wider font-bold">{{ $post->category->name }}</span></div>
                    </div>
                </div>
            </div>
        
        </a>

@endforeach