<x-form-layout>
    <div class="d-flex justify-content-center align-items-center" style="height: 100vh">
        <div class="d-flex justify-content-center w-75 h-75 d-flex">
            <div class="d-flex justify-content-center align-items-center">
                <div class="container-form p-3 py-5 rounded"
                    style="box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px; background-color: #ffffff;">
                    @if ($errors->any())
                        <div class="pt-3">
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $item)
                                        <li>{{ $item }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    @endif
                    <h3 class="pb-4"><i class="bi bi-person"></i> Edit data user</h3>
                    <form action="{{ url('dashboard/' . $data->id) }}" method="POST" class="row g-3">
                        @csrf
                        @method('PUT')
                        <div class="col-12">
                            <label for="inputEmail4" class="form-label"><i class="bi bi-envelope"></i> Email</label>
                            <input type="email" name="email" value="{{ $data->email }}" class="form-control"
                                placeholder="user@example.com" id="inputEmail4">
                        </div>
                        <div class="col-12">
                            <label for="inputName" class="form-label"><i class="fi fi-rr-user-pen"></i> Name</label>
                            <input type="text" name="name" value="{{ $data->name }}" class="form-control"
                                id="inputName">
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary px-4">Edit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-form-layout>
