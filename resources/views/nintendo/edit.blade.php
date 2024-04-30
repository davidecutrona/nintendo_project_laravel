<x-layout title="Modifica Videogioco" />

<div class="background-modifier">
    
    
    <!--Alert-->
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6">
                @if (session('status'))
                    <div class="alert alert-success text-center mt-3 bg-success text-white custom-alert">
                        {{ session('status') }}
                    </div>
                @endif
            </div>
        </div>
    </div>
    <!--Fine Alert-->


    <!--Form Carica Videogioco-->
    <section class="container-fluid py-5">
        <div class="row">
            <h1 class="titolo text-center">Modifica Videogioco: {{ $nintendo->title }}</h1>
            <div class="col-12 col-md-6 col-lg-6 d-flex justify-content-center">
                
            </div>
            <div class="col-12 col-md-6 col-lg-6">
                <form action="{{ route('nintendo_update', compact('nintendo')) }}" method="POST" enctype="multipart/form-data"
                    class="loading rounded-5 my-5 mx-5 text-center">
                    @csrf
                    @method('put')
                    <div class="mb-3 p-3">
                        <label for="nintendoTitle" class="form-label text-warning loading-write">Titolo</label>
                        <input type="text" class="form-control bg-warning text-center" id="nintendoTitle" name="title"
                            value="{{$nintendo->title}}">
                        @error('title')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-3 p-3">
                        <label for="nintendoGender" class="form-label text-warning loading-write">Genere</label>
                        <input type="text" class="form-control bg-warning text-center" id="nintendoGender" name="gender"
                            value="{{$nintendo->gender}}">
                        @error('gender')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-3 p-3">
                        <label for="nintendoDescription" class="form-label text-warning loading-write">Descrizione</label>
                        <textarea name="description" id="nintendoDescription" cols="30" rows="10" class="form-control bg-warning text-center">{{$nintendo->description}}</textarea>
                        @error('description')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-3 p-3">
                        <label for="nintendoImg" class="form-label text-warning loading-write">Carica Immagine</label>
                        <input type="file" class="form-control bg-warning loading-write text-center" id="nintendoImg" name="img"
                            value="{{Storage::url($nintendo->img)}}">
                        @error('img')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-3 p-3">
                        <label for="nintendoPrice" class="form-label text-warning loading-write">Prezzo</label>
                        <input type="number" class="form-control bg-warning text-center" id="nintendoPrice" name="price"
                            value="{{$nintendo->price}}">
                        @error('price')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-3 p-3">
                        <button type="submit" class="btn btn-outline-warning loading-write">Modifica</button>
                    </div>
                    <div class="mb-3 p-3">
                        <a href="{{route('nintendos')}}" class="btn btn-outline-primary loading-write">Torna Indietro</a>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!--Fine Form Carica Videogioco-->
</div>


