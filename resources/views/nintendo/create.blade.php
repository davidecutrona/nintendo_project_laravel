<x-layout title="Carica Videogioco" />
<!--Header Carica Videogioco-->
<header class="container-fluid load-game d-flex justify-content-start">
    <div class="row">
        <div class="col-12 col-md-12 d-flex align-items-center">
            <h1 class="titolo">Carica Videogioco</h1>
        </div>
    </div>
</header>
<!--Fine Header Carica Videogioco-->
@if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif
<!--Form Carica Videogioco-->
<section class="container-fluid">
    <div class="row">
        <div class="col-12 col-md-6 col-lg-6">
            <form action="{{ route('nintendo_store') }}" method="POST" enctype="multipart/form-data"
                class="loading rounded-5 my-5 mx-5 text-center">
                @csrf
                <div class="mb-3 p-3">
                    <label for="nintendoTitle" class="form-label text-warning loading-write">Titolo</label>
                    <input type="text" class="form-control bg-warning text-center" id="nintendoTitle" name="title"
                        value="{{ old('title') }}">
                    @error('title')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-3 p-3">
                    <label for="nintendoGender" class="form-label text-warning loading-write">Genere</label>
                    <input type="text" class="form-control bg-warning text-center" id="nintendoGender" name="gender"
                        value="{{ old('gender') }}">
                    @error('gender')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-3 p-3">
                    <label for="nintendoDescription" class="form-label text-warning loading-write">Descrizione</label>
                    <textarea name="description" id="nintendoDescription" cols="30" rows="10" class="form-control bg-warning text-center">{{ old('description') }}</textarea>
                    @error('description')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-3 p-3">
                    <label for="nintendoImg" class="form-label text-warning loading-write">Carica Immagine</label>
                    <input type="file" class="form-control bg-warning loading-write text-center" id="nintendoImg" name="img"
                        value="{{ old('img') }}">
                    @error('img')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-3 p-3">
                    <label for="nintendoPrice" class="form-label text-warning loading-write">Prezzo</label>
                    <input type="number" class="form-control bg-warning text-center" id="nintendoPrice" name="price"
                        value="{{ old('price') }}">
                    @error('price')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-3 p-3">
                    <button type="submit" class="btn btn-outline-success loading-write">Carica</button>
                </div>
            </form>
        </div>
        <div class="col-12 col-md-6 col-lg-6 my-5 d-flex justify-content-center">
            <img src="/media/luigi.webp" alt="" class="img-fluid">
        </div>
    </div>
</section>
<!--Fine Form Carica Videogioco-->
