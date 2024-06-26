<x-main>
    <div class="px-4 px-md-5 mb-5">
        <div class="row gx-5 justify-content-center ">
            <div class="col-lg-8 col-xl-6 border p-5 rounded">

                <form action="{{ route('articles.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
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
                        <input class="form-control" id="title" value="{{old('title')}}" name="title" type="text">
                        <label for="title">Titolo</label>
                    </div>
                    {{-- <div class="form-control mb-3">
                        <div class="form-check">
                            <input class="form-check-input"
                                type="checkbox" id="category_id"
                                name="categories[]" value>
                            <label class="form-check-label"
                                for="category_id">Cronaca</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input"
                                type="checkbox" id="category_id"
                                name="categories[]" value>
                            <label class="form-check-label"
                                for="category_id">Sport</label>
                        </div>
                    </div> --}}
                    <div class="form-floating mb-3">
                        <textarea name="body" class="form-control" id="body" rows="10">{{old('title')}}</textarea>
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
