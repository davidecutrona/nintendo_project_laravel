<x-layout title="Mostra Videogiochi" />
<!--Header Mostra Videogiochi-->
<header class="container-fluid background-index d-flex justify-content-center">
    <div class="row">
        <div class="col-12 col-md-12 d-flex align-items-center">
            <h1 class="titolo">Mostra Videogiochi</h1>
        </div>
    </div>
</header>
<!--Fine Header Mostra Videogiochi-->
<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-12 col-md-6">
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif
        </div>
    </div>
</div>
<!--Card Mostra Videogiochi-->
<div class="container-fluid">
    <div class="row justify-content-around">
        @foreach ($videogames as $videogame)
            <div class="col-12 col-md-4 col-lg-2 my-5">
                <div class="card h-100 w-100 card-custom">
                    <img src="{{ Storage::url($videogame->img) }}" class="card-img-top img-fluid custom-img rounded-2"
                        alt="...">
                    <div class="card-body">
                        <h5 class="card-title custom-title text-warning text-center">{{ $videogame->title }}</h5>
                        <a href="{{ route('videogame_show', compact('videogame')) }}"
                            class="btn btn-outline-success d-flex justify-content-center my-2">Vedi Dettaglio</a>
                        <a href="{{ route('videogame_edit', compact('videogame')) }}"
                            class="btn btn-outline-warning d-flex justify-content-center">Modifica Videogioco</a>
                        <form action="{{ route('videogame_delete', compact('videogame')) }}" method="POST"
                            class="d-flex justify-content-center">
                            @csrf
                            @method('delete')
                            <button class="btn btn-outline-danger my-2 custom-button">Elimina Videogioco</button>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
<!--Fine Card Mostra Videogiochi-->
