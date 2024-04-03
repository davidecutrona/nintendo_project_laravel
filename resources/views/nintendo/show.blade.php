<x-layout title="Dettaglio Videogioco" />
<!--Titolo Dettaglio Gioco-->
<h1 class="titolo text-center my-5">Dettaglio Videogioco: {{ $nintendo->title }}</h1>
<!--Fine Titolo Dettaglio Gioco-->

<!--Dettaglio Videogioco-->
<section class="container-fluid my-5">
    <div class="row justify-content-center">
        <div class="col-12 col-md-7">
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
<!--Fine Dettaglio Videogioco-->
