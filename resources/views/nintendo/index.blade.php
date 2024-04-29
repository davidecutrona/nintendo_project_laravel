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
<div class="container">
    <div class="row justify-content-center">
        <div class="col-12 col-md-6">
            @if (session('status'))
                <div class="alert alert-success mt-3 text-center bg-danger text-white">
                    {{ session('status') }}
                </div>
            @endif
        </div>
    </div>
</div>
<!--Card Mostra Videogiochi-->
<div class="container-fluid py-5 my-5">
    <div class="row justify-content-around">
        @foreach ($nintendos as $nintendo)
            <div class="col-10 col-md-4 col-lg-3 py-5">
                <div class="card h-100 w-100 card-custom">
                    <img src="{{ Storage::url($nintendo->img) }}" class="card-img-top img-fluid custom-img rounded-2"
                        alt="...">
                    <div class="card-body">
                        <h5 class="card-title custom-title text-warning text-center">{{ $nintendo->title }}</h5>
                        <a href="{{ route('nintendo_show', compact('nintendo')) }}"
                            class="btn btn-outline-success d-flex justify-content-center my-2">Vedi Dettaglio</a>
                        <a href="{{ route('nintendo_edit', compact('nintendo')) }}"
                            class="btn btn-outline-warning d-flex justify-content-center">Modifica Videogioco</a>
                        <form action="{{ route('nintendo_delete', compact('nintendo')) }}" method="POST"
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

<!--Footer-->
<x-footer />
<!--Fine Footer-->