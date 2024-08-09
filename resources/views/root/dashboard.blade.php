<x-layout>
  @if (Session::has('success'))
        <div class="p-1">
            <div class="alert alert-success">
                {{ Session::get('success') }}
            </div>
        </div>
    @endif
    <div class="main-dashboard d-flex justify-content-center">
        <div class="dashboard-nav d-flex justify-content-center gap-3 mt-3 flex-wrap"> 
            <div class="nav-card rounded-3 d-flex justify-content-center align-items-center"
                style="background-color: #7692FF">
                <a href="" class="nav-link text-dark fs-3 text-center">
                  <i class="bi bi-cart-check"></i> Orders 0</a>
            </div>
            <div class="nav-card rounded-3 d-flex justify-content-center align-items-center"
                style="background-color: #ABD2FA">
                <a href="" class="nav-link text-dark fs-3 text-center"><i class="bi bi-people"></i> Customers {{ $totalUser }}</a>
            </div>
            <div class="nav-card rounded-3 d-flex justify-content-center align-items-center"
                style="background-color: #3d518c">
                <a href="" class="nav-link text-light fs-3 text-center"><i class="bi bi-book"></i> Total Book 0</a>
            </div>
            <div class="nav-card rounded-3 d-flex justify-content-center align-items-center"
                style="background-color: #1b2cc1">
                <a href="" class="nav-link text-light fs-3 text-center"><i class="bx bxs-report"></i> Reports</a>
            </div>
            {{-- table --}}
            <div class="wrap-table mt-2 p-2 rounded-3">
              <div class="pt-2 d-flex justify-content-between">
                <h3>Table customers</h3>
                <div class="pb-3">
                  <form class="d-flex" action="{{ url('dashboard') }}" method="get">
                      <input class="form-control me-1" type="search" name="katakunci" value="{{ Request::get('katakunci') }}" placeholder="Search...." aria-label="Search">
                      <button class="btn btn-secondary" type="submit">Cari</button>
                  </form>
                </div>
              </div>
              <div class="container-tbl">
                <div class="table-responsive">
                  <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Created at</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody class="table-group-divider">
                      <?php $i = $data->firstItem() ?>
                      @foreach ($data as $item)
                      <tr>
                        <th scope="row">{{ $i }}</th>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->email }}</td>
                        <td>{{ $item->created_at }}</td>
                        <td>
                          <a class="btn btn-warning btn-sm p-2" href="{{ url('dashboard/'.$item->id.'/edit') }}" role="button">Edit</a>
                          <form onsubmit="return confirm('Data akan dihapus, apakah anda yakin?')" class="d-inline" action="{{ url('dashboard/'.$item->id) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm text-light p-2">Delete</button>
                        </form>
                        </td>
                      </tr>
                      <?php $i++ ?>
                      @endforeach
                    </tbody>
                  </table>
                  {{ $data->withQueryString()->links() }}
                </div>
              </div>
            </div>
        </div>
    </div>
</x-layout>
