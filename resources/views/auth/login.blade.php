<x-layout>
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-8 col-lg-7">
                <h1 class="text-center">Login!</h1>
                <form action="{{route('login')}}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Indirizzo email</label>
                        <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        <div id="emailHelp" class="form-text">Non condividere la tua email con nessuno</div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input name="password" type="password" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="mb-3">
                        <input name="remember" type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label for="exampleCheck" class="form-check-label">Ricordati di me</label>
                    </div>
                    <button type="submit" class="btn btn-primary mb-3">Login</button>
                    <div>Non sei registrato?<a href="{{route('register')}}"> Clicca qui!</a></div>
                </form>
            </div>
        </div>
    </div>
</x-layout>