<x-layout title="Registrati" />

<div class="container-fluid background-register">
    <div class="row justify-content-center">
        <h1 class="titolo text-center my-5">Registrati sul nostro portale</h1>
        <div class="col-12 col-md-8 col-lg-6">
            <form action="{{ route('register') }}" method="POST" class="loading rounded-5 my-5 mx-5 text-center">
                @csrf
                <div class="mb-3 p-3">
                    <label for="userName" class="form-label text-warning loading-write">Nome Utente</label>
                    <input type="text" class="form-control bg-warning text-center" id="userName" aria-describedby="emailHelp" name="name">
                </div>
                <div class="mb-3 p-3">
                    <label for="userMail" class="form-label text-warning loading-write">Email</label>
                    <input type="email" class="form-control bg-warning text-center" id="userMail" aria-describedby="emailHelp"
                        name="email">
                </div>
                <div class="mb-3 p-3">
                    <label for="userPassword" class="form-label text-warning loading-write">Password</label>
                    <input type="password" class="form-control bg-warning text-center" id="userPassword" name="password">
                </div>
                <div class="mb-3 p-3">
                    <label for="userPasswordConfirmation" class="form-label text-warning loading-write"> Conferma password</label>
                    <input type="password" class="form-control bg-warning text-center" id="userPasswordConfirmation"
                        name="password_confirmation">
                </div>
                <button type="submit" class="btn btn-outline-warning mb-3 loading-write">Registrati</button>
            </form>
        </div>
    </div>
</div>
