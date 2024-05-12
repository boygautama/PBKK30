 <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div>
                    <h3 class="text-center my-4">Data Pengguna</h3>
                    <hr>
                </div>
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <div class="card-body">
                            <h3>{{ $pengguna->username }}</h3>
                            <p>{{ $pengguna->email }}</p>
                            <p>{{ $pengguna->level }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
