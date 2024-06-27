<x-main>
    <div class="mt-5">
        <ul>
            @foreach ($category->articles as $article)
                <li>
                    <h3> {{ $article->title }}</h3>
                    <p class="mt-4">
                        {{ $article->body }} 
                    </p>
                </li>
            @endforeach
        </ul>
    </div>
</x-main>
