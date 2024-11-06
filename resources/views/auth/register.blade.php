<x-layout>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="display-1 text-primary">register</h1>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form action="{{ route('register') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                            name="email">
                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label">unsername</label>
                        <input type="text" class="form-control" id="name" aria-describedby="emailHelp"
                            name="name">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" name="password">
                    </div>
                    <div class="mb-3">
                        <label for="pc" class="form-label">Password</label>
                        <input type="password" class="form-control" id="pc" name="password_confirmation">
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                        <div class="col-6">
                            <button type="reset" class="btn btn-primary">svuota</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-layout>
