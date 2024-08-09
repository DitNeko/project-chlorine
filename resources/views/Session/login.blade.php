<x-form-layout>
    <div class="container-wrap d-flex justify-content-center align-items-center">
        <div class="wrap-edit-side w-75 h-75 d-flex rounded">
            <div class="d-flex justify-content-center align-items-center">
                <div class="container-form w-auto p-3 py-5">
                    @if ($errors->any())
                        <div class="p-1">
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $item)
                                        <li>{{ $item }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    @endif

                    @if (Session::has('success'))
                        <div class="p-1">
                            <div class="alert alert-success">
                                {{ Session::get('success') }}
                            </div>
                        </div>
                    @endif
                    <h1 class="mb-5 text-center"><i class="bi bi-book-half"></i> Emporium Epiloge</h1>
                    <h4 class="pb-2"><i class="bi bi-person"></i> Hi!, Please Login</h4>
                    <form action="/sessions/login" method="POST" class="row g-3">
                        @csrf
                        <div class="col-12">
                            <label for="inputEmail4" class="form-label"><i class="bi bi-envelope"></i> Email</label>
                            <input type="email" name="email" value="{{ Session::get('email') }}" class="form-control"
                                placeholder="user@example.com" id="inputEmail4">
                        </div>
                        <div class="col-12">
                            <label for="inputAddress" class="form-label"><i class="fi fi-rs-key"></i> Password</label>
                            <input type="password" name="password" class="form-control" id="inputAddress" placeholder="Password">
                        </div>
                        <div class="col-12">
                            <button type="submit" name="submit" class="btn btn-primary px-5">Log in</button>
                            <p class="pt-4">Don't have an account? <a href="/register">Register</a></p>
                        </div>
                    </form>
                </div>
            </div>
            <div class="decoration-pattern w-75 h-auto rounded-end"></div>
        </div>
    </div>
</x-form-layout>
