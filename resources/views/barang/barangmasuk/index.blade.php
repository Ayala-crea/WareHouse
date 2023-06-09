    @extends('layouts.dashboard.app')

    @section('title', 'Data Barang Masuk dan Keluar')
    @section('contents')
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">data barang Keluar</h6>
            </div>
            <div class="card-body">
                <a href="{{ route('barangmasuk.tambah') }}"class="btn btn-primary mb-3">tambah barang</a>
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>kode barang</th>
                                <th>nama barang</th>
                                <th>Tanggal Masuk</th>
                                <th>Tanggal keluar</th>
                                <th>pembelian</th>
                                <th>stok</th>
                                <th>Jumlah</th>
                                <th>aksi</th>
                            </tr>

                        </thead>
                    <tbody>
                        @php($i = 1)
                        @foreach ($Barang_keluar as $raw)
                            <tr>
                                <td>{{ $i++ }}</td>
                                <td>{{ $raw->kode_barang }}</td>
                                <td>{{ $raw->nama_barang }}</td>
                                <td>{{ $raw->tanggal_masuk }}</td>
                                <td>{{ $raw->kategori_barang }}</td>
                                <td>{{ $raw->pembelian }}</td>
                                <td>{{ $raw->jumlah }}</td>
                                <td>{{ $raw->stok }}</td>
                                <td>
                                    <a href="" class="btn btn-warning">edit</a>
                                    <a href="" class="btn btn-danger">hapus</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
