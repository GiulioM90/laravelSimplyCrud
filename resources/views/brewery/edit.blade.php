<x-layout>
<div class="container">
    <div class="row">
        <div class="col-12 col-md-6 offset-md-3">
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
            <h1>
                Edit your Brewery 
            </h1>
            <div class="row">
                 <div class="col-12">
                 <div class="card" style="width: 18rem;">
                    <form method="POST" action="{{route('breweryUpdate',compact('brewery'))}}" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="mb-3">
                                <img src="{{Storage::url($brewery->img)}}" class="card-img-top" alt="...">
                                <div class="card-body">
                            </div>
                            <div class="mb-3">
                                <label  class="form-label">Nome del tuo locale </label>
                                <input type="text" class="form-control" name="name" value="{{$brewery->name}}">
                            </div>
                            <div class="mb-3">
                                <label  class="form-label">Indirizzo </label>
                                <input type="text" class="form-control" name="address" value="{{$brewery->address}}"> 
                            </div>
                            <div class="mb-3">
                                <label  class="form-label">Descrizione </label>
                                <input type="text" class="form-control" name="description" value="{{$brewery->description}}">
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
                                <input type="text" class="form-control" name="site" value="{{$brewery->site}}">
                            </div>
                            <div class="mb-3">
                                <label  class="form-label">Immagine </label>
                                <input type="file" class="form-control" name="img">
                            </div>
                            <button type="submit" class="btn btn-primary">Edit</button>
                        </form>
                    </div>
                    </div>
                 </div>
            </div>
        </div>
    </div>
</div>
</x-layout>