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
                        <a href="add-department.html">+ Kritik dan Saran</a>
                    </div>
                    <div class="asset-inner">
                        <table>
                            <tr>
                                <th>No</th>
                                <th>Tanggal Pengiriman</th>
                                <th>Kritik & Saran</th>
                                <th>Nama Pengirim</th>
                                <th>Status</th>
                                <th>Setting</th>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>12/02/22</td>
                                <td>Adakan lomba baca puisi</td>
                                <td>John Alva</td>
                                <td>
                                    <button class="pd-setting">Complete</button>
                                </td>
                                <td>
                                    <button data-toggle="tooltip" title="Edit" class="pd-setting-ed"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
                                    <button data-toggle="tooltip" title="Trash" class="pd-setting-ed"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>12/02/22</td>
                                <td>Adakan lomba baca puisi</td>
                                <td>John Alva</td>
                                <td>
                                    <button class="ds-setting">Active</button>
                                </td>
                                <td>
                                    <button data-toggle="tooltip" title="Edit" class="pd-setting-ed"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
                                    <button data-toggle="tooltip" title="Trash" class="pd-setting-ed"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                                </td>
                            </tr>
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