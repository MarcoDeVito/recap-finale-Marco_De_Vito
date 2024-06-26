<x-main>
    <div class="container mt-5">
        <form action="{{route('send')}}" method="POST">
            @csrf
            <div class="mb-3">
              <label for="email" class="form-label">Email</label>
              <input type="email" name="email" value="{{old('email')}}" class="form-control" id="email" >
              @error('email')
                 {{ $message}}
              @enderror
            </div>
            <div class="mb-3">
              <label for="message" class="form-label">Messaggio</label>
             <textarea class="form-control"  name="message" id="message" rows="10">{{old('message')}}</textarea>
             @error('message')
                 {{ $message}}
              @enderror
            </div>
           
            <button type="submit" class="btn btn-primary">Invia Messaggio</button>
          </form>
    </div>
</x-main>