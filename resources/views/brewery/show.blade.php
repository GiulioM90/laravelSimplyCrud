<x-layout>
<div class="container">
    <div class="row">
        <div class="col-12 col-md-6 offset-md-3">
            <h1>
                La Birreria 
            </h1>
            <div class="row">
                 <div class="col-12">
                 <div class="card" style="width: 18rem;">
                    <img src="{{Storage::url($brewery->img)}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{$brewery->name}}</h5>
                        <h5 class="card-title">Proprietario: {{$brewery->owner}}</h5>
                        <p class="card-title">Sito: {{$brewery->site}}</p>
                        <p class="card-title">Indirizzo: {{$brewery->address}}</p>
                        <p class="card-text">{{$brewery->description}}</p>
                        <ul>
                            @foreach ($brewery->beers as $beer)
                                <li>
                                    {{$beer->name}}
                                </li>
                            @endforeach
                        </ul>
                        @auth
                             @if (Auth::id() === $brewery->user->id)
                                <form method="POST" action="{{route('breweryDestroy', compact('brewery'))}}">
                                    @csrf
                                    @method('DELETE')
                                <button type="submit" class="btn btn-danger">
                                    Delete
                                </button>
                                </form>
                                @endif
                                @endauth
                    </div>
                    </div>
                 </div>
            </div>
        </div>
    </div>
</div>
</x-layout>