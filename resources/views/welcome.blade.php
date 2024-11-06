<x-layout>
    <div class="container bg-color-robbie">
        <div class="row">
            <div class="col-12">
                <h1 class="display-1 text-center text-warning">Welcome page</h1>
            </div>
        </div>
        @auth
            <div class="row align-items-center bg-warning">
                <div class="col-2 bg-primary">
                    <h2>{{Auth::user()->email}}</h2>
                    <form action="{{ route('logout') }}" method="post">
                        @csrf
                        <button type="submit" class="btn btn-danger">logout</button>
                    </form>
                </div>
            </div>
        @endauth
    </div>
</x-layout>
