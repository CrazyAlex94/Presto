<x-layout>
    <div class="container">
        <div class="row mt-5">
            <div class="col-12 col-md-8 col-lg-7">
                <h1 class="text-center">Registrati!</h1>
                <form action="{{route('register')}}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input name="name" type="text" class="form-control" id="name" aria-describedby="name">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Indirizzo email</label>
                        <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        <div id="emailHelp" class="form-text">Non condividere la tua email con nessuno</div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <div class="d-flex">
                            <input name="password" type="password" class="form-control" id="exampleInputPassword1">
                            <input type="checkbox" onclick="myFunction()">
                        </div>
                        <script>
                            function myFunction() {
                              var x = document.getElementById("exampleInputPassword1");
                              if (x.type === "password") {
                                x.type = "text";
                              } else {
                                x.type = "password";
                              }
                            }
                        </script>
                    </div>
                    <div class="mb-3">
                        <label for="password_confirmation" class="form-label">Conferma Password</label>
                        <input name="password" type="password" class="form-control" id="password_confirmation">
                    </div>
                    <button type="submit" class="btn btn-primary mb-3">Registrati</button>
                    <div>Sei già registrato?<a href="{{route('login')}}">Clicca qui!</a></div>
                </form>
            </div>
        </div>
    </div>
</x-layout>