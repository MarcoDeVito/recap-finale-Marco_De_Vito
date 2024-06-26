<x-main>
    <div class="px-4 px-md-5 mb-5">
        <div class="row gx-5 justify-content-center ">
            <div class="col-lg-8 col-xl-6 border p-5 rounded">

                <form action="{{ route('articles.update',['article'=>$article]) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <div class="form-floating mb-3">
                        <input class="form-control" id="title" value="{{$article->title}}" name="title" type="text">
                        <label for="title">Titolo</label>
                    </div>
                    <div class="form-control mb-3">
                        @foreach ($categories as $category)
                            
                        @endforeach
                        <div class="form-check">
                            <input class="form-check-input"
                                type="checkbox" id="category_id"
                                name="categories[]" value>
                            <label class="form-check-label"
                                for="category_id">Cronaca</label>
                        </div>
                       
                    </div>
                    <div class="form-floating mb-3">
                        <textarea name="body" class="form-control" id="body" rows="10">{{$article->body}}</textarea>
                        <label for="body">Testo</label>
                    </div>
                    <div class="form-floating mb-3">

                        <input class="form-control" id="image" name="image" value type="file">

                    </div>
                    <div class="d-grid">
                        <button class="btn btn-primary btn-lg" type="submit">Salva</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</x-main>
