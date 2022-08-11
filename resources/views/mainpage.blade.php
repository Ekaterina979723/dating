@extends('layout.index')
@section('title','Dating Website')
@section('content')
<h1 class="text-center mb-5">Hello, world!</h1>
<div class="container">
    <div class="row">
        <div class="col-6">
            <img src="{{ URL::asset('img/main.jpg') }}" width="100%">
        </div>
        <div class="col-6 align-self-center">
            <main class="form-signin w-100 m-auto">
                <form>

                    <h1 class="h3 mb-3 fw-normal">Please sign in</h1>

                    <div class="form-floating">
                        <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                        <label for="floatingInput">Email address</label>
                    </div>
                    <div class="form-floating">
                        <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                        <label for="floatingPassword">Password</label>
                    </div>

                    <div class="checkbox mb-3">
                        <label>
                            <input type="checkbox" value="remember-me"> Remember me
                        </label>
                    </div>
                    <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
                </form>
            </main>
        </div>
    </div>


</div>


@endsection
