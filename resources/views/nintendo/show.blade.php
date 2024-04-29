<x-layout title="Dettaglio Nintendo" />
<!--Titolo Dettaglio Nintendo-->
<h1 class="titolo text-center my-5">Dettaglio Videogioco: {{ $nintendo->title }}</h1>
<!--Fine Titolo Dettaglio Nintendo-->

<!--Dettaglio Nintendo-->
<section class="container-fluid my-5 py-5">
    <div class="row justify-content-center mb-5">
        <div class="col-11 col-md-6 col-lg-5">
            <div class="card mb-3 border-card rounded-3">
                <img src="{{Storage::url($nintendo->img)}}" class="card-img-top" alt="...">
                <div class="card-body text-center bg-dark text-light">
                    <h5 class="card-title game-title display-1">{{$nintendo->title}}</h5>
                    <p class="card-text display-2">Genere: {{$nintendo->gender}}</p>
                    <p class="display-3">Prezzo: {{$nintendo->price}}$</p>
                    <p class="lead">{{$nintendo->description}}</p>
                    <a href="{{route('nintendos')}}" class="btn btn-outline-primary loading-write">Torna Indietro</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Fine Dettaglio Nintendo-->

<!--Footer-->
<x-footer />
<!--Fine Footer-->