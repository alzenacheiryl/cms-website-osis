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
                        <a href="#">+ Karya</a>
                    </div>
                    <div class="asset-inner">
                        <table>
                            <tr>
                                <th>No</th>
                                <th>Tanggal Pengiriman</th>
                                <th>Judul Karya</th>
                                <th>Karya</th>
                                <th>Tipe</th>
                                <th>Nama Pengirim</th>
                                <th>Setting</th>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>11/02/22</td>
                                <td>Web Development Book</td>
                                <td><img src="img/product/book-1.jpg" alt="" /></td>
                                <td>Artikel</td>
                                <td>Steven jobs</td>
                                <td>
                                    <button data-toggle="tooltip" title="Edit" class="pd-setting-ed"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
                                    <button data-toggle="tooltip" title="Trash" class="pd-setting-ed"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                                </td>
                            </tr>
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