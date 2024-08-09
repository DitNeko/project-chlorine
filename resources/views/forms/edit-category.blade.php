<x-form-layout>
   
    <div class="container-wrap d-flex justify-content-center align-items-center" style="height: 100vh">
        <div class="wrap-edit-side w-75 h-75 d-flex justify-content-center align-items-center rounded"
            style="background-color: #091540" <div class="d-flex w-75 justify-content-center align-items-center">
            <div class="container-form w-75 p-3 py-5">
                <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
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

                {{-- @if (Session::has('success'))
                    <div class="p-1">
                        <div class="alert alert-success">
                            {{ Session::get('success') }}
                        </div>
                    </div>
                @endif --}}
                
                @if (Session::has('success'));
                    <div class="pt-3">
                        <script>
                            Swal.fire({
                                position: "top-end",
                                title: "{{ Session::get('success') }}",
                                showConfirmButton: false,
                                timer: 800
                            });
                        </script>
                    </div>
                @endif

                <h1 class="pb-3 text-light">Edit Data</h1>
                <form action="{{ url('/category/' . $data->id) }}" method="POST" class="row g-3 mt-3">
                    @csrf
                    @method('PUT')
                    <div class="col-12">
                        <label for="inputName" class="form-label text-light fs-5"><i class="bi bi-pencil"></i>
                            Name</label>
                        <input type="text" name="name" value="{{ $data->name }}" class="form-control"
                            id="inputName">
                    </div>
                    <div class="col-12">
                        <label for="inputStatus" class="form-label text-light fs-5"><i class="bi bi-check2-square"></i>
                            Status</label>
                        <select class="form-select" name="status" aria-label="Default select example">
                            <option value="">Choose....</option>
                            <option value="1">Published</option>
                            <option value="0">Not Published</option>
                        </select>
                    </div>
                    <div class="btn-wrap">
                        <button class="btn btn-warning mt-4" type="submit" name="submit">Insert</button>
                        <a class="btn btn-secondary mt-4 px-3" href="/category" role="button">Back</a>
                    </div>
            </div>
            </form>
        </div>
    </div>
    </div>
</x-form-layout>
