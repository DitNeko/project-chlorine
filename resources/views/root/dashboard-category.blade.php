<x-layout>
    <div class="category-table d-flex justify-content-center align-items-center">
        <div class="wrap-category mb-5 d-flex justify-content-center rounded">
            <div class="w-table">
                <div class="pt-2 d-flex justify-content-between">
                    <h3>Table Category</h3>
                    <div class="pb-3">
                      <form class="d-flex" action="{{ url('category') }}" method="get">
                          <input class="form-control me-1" type="search" name="katakunci" value="{{ Request::get('katakunci') }}" placeholder="Search...." aria-label="Search">
                          <button class="btn btn-secondary" type="submit">Cari</button>
                      </form>
                    </div>
                  </div>
                <table class="table">
                    <thead class="table-light">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Status</th>
                            <th scope="col">Created at</th>
                            <th scope="col">Update at</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $category)
                        <tr>
                            <th scope="row">1</th>
                            <td>{{ $category->name }}</td>
                            <td>{{ $category->is_publish}}</td>
                            <td>{{ $category->created_at }}</td>
                            <td>{{ $category->updated_at }}</td>
                            <td>
                                <a class="btn btn-warning" href="{{ 'category/'.$category->id.'/edit' }}">Edit</a>
                                <form onsubmit="return confirm('Data akan dihapus, apakah anda yakin?')" class="d-inline" action="{{ url('category/'.$category->id) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm text-light p-2">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="wrap-btn d-inline justify-content-between">
                    {{ $data->withQueryString()->links() }}
                    <a class="btn btn-primary px-4" href="category/create" role="button">Insert</a>
                </div>
            </div>
        </div>
    </div>
</x-layout>
