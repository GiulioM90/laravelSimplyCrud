<x-layout>
    
<div class="container">
    <div class="row">
        <div class="col-12 col-md-6 offset-md-3">
            <h1>
                Le nostre birrerie registrate 
            </h1>
            <div class="row">
                @foreach ($breweries as $brewery)
                 <div class="col-12">
                 <div class="card" style="width: 18rem;">
                    <img src="{{Storage::url($brewery->img)}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{$brewery->name}}</h5>
                        <h5 class="card-title">Proprietario: {{$brewery->owner}}</h5>
                        <p class="card-title">Sito: {{$brewery->site}}</p>
                        <p class="card-title">Indirizzo: {{$brewery->address}}</p>
                        <p class="card-text">{{$brewery->description}}</p>
                        <a href="#" class="btn btn-primary">Dettaglio</a>
                    </div>
                    </div>
                 </div>
                @endforeach
            </div>
        </div>
    </div>

    {{$breweries->links()}}
</div>
</x-layout>