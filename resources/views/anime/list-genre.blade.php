<x-main>
    <div class="mt-5">
        
        @foreach ($data as $anime)
            <p><a href="{{route('anime.detail',['id'=>$anime['mal_id']])}}">{{$anime['title']}}</a></p>
        @endforeach
    
</div>
</x-main>