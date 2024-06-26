<x-main>
    <div class="mt-5 container">
        <img class="img-fluid my-5" 
            src={{Storage::url($article->image)}}
            alt="..." />
        <h1 class="text-center">{{$article->title}}</h1>
        <p>{{$article->body}}</p>
        <p>Creato da {{$article->user->name}}</p>
    </div>
</x-main>