@extends('partisi.mainlayout')

@section('judul','Edit Kritik dan Saran')
@section('utama')
<div class="single-pro-review-area mt-t-30 mg-b-15">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="product-payment-inner-st">
                    <ul id="myTabedu1" class="tab-review-design">
                        <li class="active"><a href="#description">Edit Kritik dan Saran</a></li>
                        
                    </ul>
                    <div id="myTabContent" class="tab-content custom-product-edit">
                        <div class="product-tab-list tab-pane fade active in" id="descriptions">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="review-content-section">
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                                                <form id="acount-infor" action="{{ route('editkankritik', $editkritik->id) }}" class="acount-infor" method="post">
                                                    @csrf
                                                    <div class="devit-card-custom">
                                                        <div class="form-group">
                                                            <label>Tanggal</label>
                                                            <input name="tanggal" type="text" id="finish" class="form-control" placeholder="Tanggal pengiriman (Contoh : 2022-04-21)" value="{{ $editkritik->tanggal }}">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Kritik & Saran</label>
                                                            <input name="judul" type="text" class="form-control" placeholder="Judul Karya" value="{{ $editkritik->kritiksaran }}">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Nama Pengirim</label>
                                                            <select name="akunsiswa_id" id="akunsiswa_id" class="form-control">
                                                                <option disabled value>Pilih Nama</option>
                                                                <option value="{{ $editkritik->akunsiswa_id }}">{{ $editkritik->AkunSiswa->nm_siswa }}</option> 
                                                                @foreach ($siswa as $item)
                                                                <option value="{{ $item->id }}">{{ $item->nm_siswa }}</option> 
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                        <button type="submit" class="btn btn-primary waves-effect waves-light">Submit</button>
                                                    </div>
                                                </form>
                                                <br>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
@endsection 