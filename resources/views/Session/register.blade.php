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
                    <h3 class="pb-4"><i class="bi bi-person"></i> Register now</h3>
                    <form action="/sessions/create" method="POST" class="row g-3">
                        @csrf
                        <div class="col-md-6">
                            <label for="inputEmail4" class="form-label"><i class="bi bi-envelope"></i> Email</label>
                            <input type="email" name="email" value="{{ Session::get('email') }}" class="form-control" placeholder="user@example.com"
                                id="inputEmail4">
                        </div>
                        <div class="col-md-6">
                            <label for="inputName" class="form-label"><i class="fi fi-rr-user-pen"></i> Name</label>
                            <input type="text" name="name" value="{{ Session::get('name') }}" class="form-control" id="inputName">
                        </div>
                        <div class="col-12">
                            <label for="inputAddress" class="form-label"><i class="fi fi-rs-key"></i> Password</label>
                            <input type="password" name="password" class="form-control" id="inputAddress" placeholder="Password">
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary px-4">Register</button>
                            <p class="pt-4">You have account? <a href="">Log in Now</a></p>
                        </div>
                    </form>
                </div>
            </div>
            <div class="decoration-pattern w-75 h-auto rounded-end"></div>
        </div>
    </div>
</x-form-layout>
