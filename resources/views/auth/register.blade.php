<x-layout>
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-12 col-md-8 col-lg-7">
                <h1 class="text-center">Registrati!</h1>
                <form  method="POST" action="{{route('register')}}">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">Indirizzo email</label>
                        <input type="email" class="form-control" name="email">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Name</label>
                        <input type="text" class="form-control" name="name">
                    </div>
                    <div class="mb-3">
                        <label  class="form-label">Password</label>
                        <input type="password" class="form-control" name="password">
                    </div>
                    <div class="mb-3">
                        <label  class="form-label">Conferma password</label>
                        <input type="password" class="form-control" name="password_confirmation">
                    </div>
                    <button type="submit" class="btn btn-primary mb-3">Registrati</button>
                </form>
                <div>Sei già registrato?<a href="{{route('login')}}">Clicca qui!</a></div>
            </div>
        </div>
    </div>
</x-layout>