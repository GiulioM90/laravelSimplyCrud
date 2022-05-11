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
                    </div>
                    </div>
                 </div>
            </div>
        </div>
    </div>
</div>
</x-layout>