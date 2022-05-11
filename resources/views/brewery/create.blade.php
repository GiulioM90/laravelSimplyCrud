<x-layout>
    <div class="container">
        <h1>
            Register your brewery
        </h1>
        <form method="POST" action="{{route('breweryStore')}}" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label  class="form-label">Proprietario </label>
            <input type="text" class="form-control" name="owner">
        </div>
        <div class="mb-3">
            <label  class="form-label">Nome del tuo locale </label>
            <input type="text" class="form-control" name="name">
        </div>
        <div class="mb-3">
            <label  class="form-label">Indirizzo </label>
            <input type="text" class="form-control" name="address">
        </div>
        <div class="mb-3">
            <label  class="form-label">Descrizione </label>
            <input type="text" class="form-control" name="description">
        </div>
        <div class="mb-3">
            <select name="beers[]" multiple>
                @foreach ($beers as $beer)
                    <option value="{{$beer->id}}">
                        {{$beer->name}}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label  class="form-label">Sito Web </label>
            <input type="text" class="form-control" name="site">
        </div>
        <div class="mb-3">
            <label  class="form-label">Immagine </label>
            <input type="file" class="form-control" name="img">
        </div>


        <button type="submit" class="btn btn-primary">Register</button>
    </form>
    </div>

</x-layout>