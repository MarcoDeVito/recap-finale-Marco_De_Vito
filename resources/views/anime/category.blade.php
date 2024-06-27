<x-main>
    <div class="mt-5">
        
            @foreach ($data as $animeCategory)
                <p><a href="{{route('anime.genre.list',['id'=>$animeCategory['mal_id']])}}">{{$animeCategory['name']}}</a></p>
            @endforeach
        
    </div>
</x-main>