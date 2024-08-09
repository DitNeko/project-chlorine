<x-blank-layout>
    <link rel="stylesheet" href="css/login.css">
    <section class="h-100 gradient-form" style="background-color: #eee;"></section>
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-xl-10">
                <div class="card rounded-3 text-black">
                    <div class="row g-0">
                        <div class="col-lg-6">
                            <div class="card-body p-md-5 mx-md-4">
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

                                <form action="/sessions/create" method="POST">
                                    @csrf
                                    <b>Create your account</b>

                                    <div data-mdb-input-init class="form-outline mb-4">
                                        <input type="text" id="form2Example11" name="name" class="form-control"
                                            placeholder="name" value="{{ Session::get('name') }}" />
                                    </div>

                                    <div data-mdb-input-init class="form-outline mb-4">
                                        <input type="email" id="form2Example11" name="email" class="form-control"
                                            placeholder="Username" value="{{ Session::get('email') }}" />
                                    </div>

                                    <div data-mdb-input-init class="form-outline mb-4">
                                        <input type="password" id="form2Example22" name="password" class="form-control"
                                            placeholder="Password" />

                                    </div>

                                    <div class="text-center pt-1 mb-5 pb-1">
                                        <button name="submit" type="submit"
                                            class="btn btn-primary px-4 text-center">Create</button>

                                    </div>

                                </form>

                            </div>
                        </div>
                        <div class="col-lg-6 d-flex align-items-center gradient-custom-2" style="background-color: #091540">
                            <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                                <h3 class="mb-3"><i class="bi bi-book-half"></i> Epilogue Emporium</h3>
                                <p class="small mb-0">Kami menawarkan koleksi buku yang luas, mulai dari novel
                                    terbaru hingga edisi
                                    langka. Temukan rekomendasi buku yang dipersonalisasi, nikmati pengalaman
                                    berbelanja yang mudah, dan manfaatkan layanan pelanggan yang ramah. Dengan
                                    pengiriman cepat dan berbagai penawaran menarik, kami memastikan Anda menemukan
                                    buku yang Anda cintai dengan cara yang menyenangkan.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </section>
</x-blank-layout>




