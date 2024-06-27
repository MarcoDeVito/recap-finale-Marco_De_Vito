<x-main>
    <div class="container mt-5">
        <h2>{{ $data['title'] }}</h2>

        <img src="{{ $data['images']['jpg']['image_url'] }}" />

        <p class="mt-4">{{ $data['title_english'] }}/{{ $data['title_japanese'] }}</p>
        <p class="mt-4">Anno: <strong>{{ $data['year'] }}</strong></p>
        <p>Generi:</p>
        <ul>
            @foreach ($data['genres'] as $genre)
            <li><a href="{{route('anime.genre.list',['id'=>$genre['mal_id']])}}">{{$genre['name']}}</a></li>
            @endforeach
        </ul>
        <p>{{$data['synopsis']}}</p>
    </div>
</x-main>