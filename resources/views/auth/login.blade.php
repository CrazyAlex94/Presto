<x-layout>
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-12 col-md-8 col-lg-7">
                <h1 class="text-center">Login!</h1>
                <form method="POST" action="{{route('login')}}">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">Indirizzo email</label>
                        <input type="email" class="form-control" name="email">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Password</label>
                        <input type="password" class="form-control" name="password">
                    </div>
                    <div class="mb-3">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Ricordati di me</label>
                    </div>
                    <button type="submit" class="btn btn-primary mb-3">Login</button>
                </form>
                <div>Non sei registrato?<a href="{{route('register')}}"> Clicca qui!</a></div>
            </div>
        </div>
    </div>
</x-layout>