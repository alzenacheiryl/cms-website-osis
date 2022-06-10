@extends('partisi.mainlayout')

@section('judul','Akun Siswa')
@section('utama')
<div class="product-status mg-b-15">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="product-status-wrap drp-lst">
                    <h4>Akun Siswa</h4>
                    <div class="add-product">
                        <a href="tambahakun">+ Akun Siswa</a>
                    </div>
                    <div class="asset-inner">
                        <table>
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>NISN</th>
                                    <th>Nama Siswa</th>
                                    <th>Tahun Ajaran</th>
                                    <th>Email Pribadi</th>
                                    <th>Setting</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($datasiswa as $siswa)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $siswa->nisn }}</td>
                                    <td>{{ $siswa->nm_siswa }}</td>
                                    <td>{{ $siswa->th_ajaran }}</td>
                                    <td>{{ $siswa->email }}</td>
                                    <td style="display:flex; gap:14px;">
                                        <a href="{{ route('editsiswa', $siswa->id) }}" method="get" data-toggle="tooltip" title="Edit" class="pd-setting-ed"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                        <a href="{{ route('deleteakunsiswa', $siswa -> id) }}" onclick="return confirm('Apakah anda yakin menghapus akun {{ $siswa->nm_siswa }} ?')" data-toggle="tooltip" title="Delete" class="pd-setting-ed">
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