<x-layout title="Contattaci" />
<!--Form Invio Mail-->
<div class="container-fluid background-contact">
    <div class="row justify-content-center">
        <h1 class="titolo text-center my-5">Compila il nostro form</h1>
        <div class="col-12 col-md-8 col-lg-6 my-5 d-flex justify-content-center">
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif
        </div>
        <div class="col-md-8 col-lg-6">
        </div>
        <div class="col-12 col-md-8 col-lg-6 my-5 text-center text-warning w-input blur-form rounded-3">
            <form method="POST" action="{{ route('contact.submit') }}">
                @csrf
                <div class="mb-3">
                    <label for="username" class="form-label bg-dark custom-title">NOME</label>
                    <input type="text" name="nomeutente" class="form-control text-center" id="username"
                        aria-describedby="emailHelp" value="{{old('nomeutente')}}" required minlength="5">
                    @error('nomeutente')
                        <p class="text-danger">{{$message}}</p>
                    @enderror
                        
                </div>
                <div class="mb-3">
                    <label for="usermail" class="form-label bg-dark custom-title">EMAIL</label>
                    <input type="email" name="mail" class="form-control text-center" id="useremail"
                        aria-describedby="emailHelp" value="{{old('mail')}}" required minlength="5">
                    @error('mail')
                        <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="usermessage" class="form-label bg-dark custom-title">SCRIVI</label>
                    <textarea name="body" id="usermessage" cols="30" rows="10" class="form-control text-center" required minlength="10">{{old('body')}}</textarea>
                    @error('body')
                        <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>
                <button type="submit" class="btn btn-outline-warning bg-dark custom-title mb-3">INVIA</button>
            </form>
        </div>
    </div>
</div>
<!--Fine Form Invio Mail-->