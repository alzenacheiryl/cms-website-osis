@extends('partisi.mainlayout')

@section('judul','Karya Siswa')
@section('utama')
<div class="product-status mg-b-15">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="product-status-wrap">
                    <h4>Karya Siswa</h4>
                    <div class="add-product">
                        <a href="tambahkarya">+ Karya Siswa</a>
                    </div>
                    <div class="asset-inner">
                        <table>
                            <thead>
                            <tr>
                                <th>No</th>
                                <th>Tanggal Pengiriman</th>
                                <th>Judul Karya</th>
                                <th>Karya</th>
                                <th>Tipe</th>
                                <th>Nama Pengirim</th>
                                <th>Setting</th>
                            </tr>
                            </thead>

                            <tbody>
                                @foreach ($datakaryasiswa as $karya)
                            <tr>
                                <td>{{ $karya->id }}</td>
                                <td>{{ $karya->tanggal }}</td>
                                <td>{{ $karya->judul }}</td>
                                <td>{{ $karya->karya }}</td>
                                <td>{{ $karya->tipe }}</td>
                                <td>{{ $karya->akunsiswa_id }}</td>
                                <td>
                                    <button data-toggle="tooltip" title="Edit" class="pd-setting-ed"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>

                                    <form action="{{ route('deletekaryasiswa', $karya->id) }}" method="post" class="d-inline">
                                        @method('delete')
                                        @csrf
                                    <button title="Trash" class="pd-setting-ed border-0" onclick="return confirm('Apakah kamu yakin?')"><i class="fa fa-trash-o"></i></button>
                                    </form>

                                    
                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>

                    </div>
                    <div class="custom-pagination">
                        <ul class="pagination">
                            <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">Next</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 