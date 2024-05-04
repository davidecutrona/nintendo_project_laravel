<x-layout title="Mostra Contenuti" />


<!--Header Mostra Contenuti-->
<header class="container-fluid background-index d-flex justify-content-center">
    <div class="row">
        <div class="col-12 col-md-12 d-flex align-items-center">
            <h1 class="titolo">Mostra Contenuti</h1>
        </div>
    </div>
</header>
<!--Fine Header Mostra Contenuti-->


<!--Alert-->
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
<!--Fine Alert-->


<!--Card Mostra Contenuti-->
<div class="container-fluid">
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
                            class="btn btn-outline-warning d-flex justify-content-center">Modifica</a>
                        <form action="{{ route('nintendo_delete', compact('nintendo')) }}" method="POST"
                            class="d-flex justify-content-center">
                            @csrf
                            @method('delete')
                            <button class="btn btn-outline-danger my-2 custom-button">Elimina</button>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
<!--Fine Card Mostra Contenuti-->


<!-- Swiper 2 -->
<section class="container py-3">
    <div class="row my-5">
        <div class="col-12 py-5">
            <x-swiper2 />
        </div>
    </div>
</section>
<!-- Fine Swiper 2 -->


<!--Footer-->
<x-footer />
<!--Fine Footer-->