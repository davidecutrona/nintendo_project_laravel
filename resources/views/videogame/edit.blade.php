<x-layout title="Modifica Videogioco" />

@if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif
<!--Form Carica Videogioco-->
<section class="container-fluid background-modifier">
    <div class="row">
        <h1 class="titolo text-center my-5">Modifica Videogioco: {{ $videogame->title }}</h1>
        <div class="col-12 col-md-6 col-lg-6 my-5 d-flex justify-content-center">
            
        </div>
        <div class="col-12 col-md-6 col-lg-6">
            <form action="{{ route('videogame_update', compact('videogame')) }}" method="POST" enctype="multipart/form-data"
                class="loading rounded-5 my-5 mx-5 text-center">
                @csrf
                @method('put')
                <div class="mb-3 p-3">
                    <label for="videogameTitle" class="form-label text-warning loading-write">Titolo</label>
                    <input type="text" class="form-control bg-warning text-center" id="videogameTitle" name="title"
                        value="{{$videogame->title}}">
                    @error('title')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-3 p-3">
                    <label for="videogameGender" class="form-label text-warning loading-write">Genere</label>
                    <input type="text" class="form-control bg-warning text-center" id="videogameGender" name="gender"
                        value="{{$videogame->gender}}">
                    @error('gender')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-3 p-3">
                    <label for="videogameDescription" class="form-label text-warning loading-write">Descrizione</label>
                    <textarea name="description" id="videogameDescription" cols="30" rows="10" class="form-control bg-warning text-center">{{$videogame->description}}</textarea>
                    @error('description')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-3 p-3">
                    <label for="videogameImg" class="form-label text-warning loading-write">Carica Immagine</label>
                    <input type="file" class="form-control bg-warning loading-write text-center" id="videogameImg" name="img"
                        value="{{Storage::url($videogame->img)}}">
                    @error('img')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-3 p-3">
                    <label for="videogamePrice" class="form-label text-warning loading-write">Prezzo</label>
                    <input type="number" class="form-control bg-warning text-center" id="videogamePrice" name="price"
                        value="{{$videogame->price}}">
                    @error('price')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-3 p-3">
                    <button type="submit" class="btn btn-outline-warning loading-write">Modifica</button>
                </div>
                <div class="mb-3 p-3">
                    <a href="{{route('videogames')}}" class="btn btn-outline-primary loading-write">Torna Indietro</a>
                </div>
            </form>
        </div>
    </div>
</section>
<!--Fine Form Carica Videogioco-->


