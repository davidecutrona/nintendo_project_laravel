<x-layout title="Loggati" />

<div class="container-fluid bg-danger custom-login pb-5">
    <div class="row justify-content-center">
        <h1 class="titolo text-center my-5">Accedi al nostro portale</h1>
        <div class="col-12 col-md-8 col-lg-6">
            <form action="{{ route('login') }}" method="POST" class="loading rounded-5 my-5 mx-5 text-center">
                @csrf
                <div class="mb-3 p-3">
                    <label for="userMail" class="form-label text-warning loading-write">Email</label>
                    <input type="email" class="form-control bg-warning text-center" id="userMail" aria-describedby="emailHelp"
                        name="email">
                </div>
                <div class="mb-3 p-3">
                    <label for="userPassword" class="form-label text-warning loading-write">Password</label>
                    <input type="password" class="form-control bg-warning text-center" id="userPassword" name="password">
                </div>
                <button type="submit" class="btn btn-outline-warning mb-3 loading-write">Accedi</button>
            </form>
        </div>
    </div>
</div>
