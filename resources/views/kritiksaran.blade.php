@extends('partisi.mainlayout')

@section('judul','Kritik dan Saran')
@section('utama')
<div class="product-status mg-b-15">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="product-status-wrap drp-lst">
                    <h4>Kritik dan Saran</h4>
                    <div class="add-product">
                        <a href="tambahkritik">+ Kritik dan Saran</a>
                    </div>
                    <div class="asset-inner">

                        <table>
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Tanggal Pengiriman</th>
                                <th>Kritik & Saran</th>
                                <th>Nama Pengirim</th>
                                <th>Status</th>
                                <th>Setting</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($kritik as $saran)

                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $saran->tanggal }}</td>
                                <td>{{ $saran->kritiksaran }}</td>
                                <td>{{ $saran->AkunSiswa-> nm_siswa }}</td>
                                <td>
                                    <button class="pd-setting">Complete</button>
                                    {{-- <button class="ds-setting">Active</button> --}}
                                </td>
                                <td style="display:flex; gap:16px;">
                                    <a href="{{ route('editkritik', $saran-> id) }}" data-toggle="tooltip" title="Edit" class="pd-setting-ed"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                    <a href="{{ route('deletekritiksaran', $saran -> id) }}" onclick="return confirm('Apakah anda yakin menghapus saran {{ $saran->AkunSiswa-> nm_siswa }} ?')" data-toggle="tooltip" title="Delete" class="pd-setting-ed">
                                        <i class="ri-delete-bin-6-fill"></i></a>

                                </td>
                            </tr>
                             
                            @endforeach
                        </tbody>
                    
                        </table>
                    </div>
                    <div class="custom-pagination">
                        <nav aria-label="Page navigation example">
                            <ul class="pagination">
                                <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">Next</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 