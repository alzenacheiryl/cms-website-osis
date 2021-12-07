@extends('partisi.mainlayout')

@section('judul','Dashboard')
@section('utama')
<div class="analytics-sparkle-area">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                <div class="analytics-sparkle-line reso-mg-b-30">
                    <div class="analytics-content">
                        <h5>Program Kerja OSIS</h5>
                        <h2>$<span class="counter">37</span> <span class="tuition-fees">2020/2021</span></h2>
                        <span class="text-success">20%</span>
                        <div class="progress m-b-0">
                            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:20%;"> <span class="sr-only">20% Complete</span> </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                <div class="analytics-sparkle-line reso-mg-b-30">
                    <div class="analytics-content">
                        <h5>Karya Siswa</h5>
                        <h2>$<span class="counter">86</span> <span class="tuition-fees">2020/2021</span></h2>
                        <span class="text-danger">30%</span>
                        <div class="progress m-b-0">
                            <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:30%;"> <span class="sr-only">230% Complete</span> </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                <div class="analytics-sparkle-line reso-mg-b-30 table-mg-t-pro dk-res-t-pro-30">
                    <div class="analytics-content">
                        <h5>Info Event</h5>
                        <h2>$<span class="counter">37</span> <span class="tuition-fees">2020/2021</span></h2>
                        <span class="text-info">60%</span>
                        <div class="progress m-b-0">
                            <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:60%;"> <span class="sr-only">20% Complete</span> </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                <div class="analytics-sparkle-line table-mg-t-pro dk-res-t-pro-30">
                    <div class="analytics-content">
                        <h5>Kritik dan Saran</h5>
                        <h2>$<span class="counter">30</span> <span class="tuition-fees">2020/2021</span></h2>
                        <span class="text-inverse">80%</span>
                        <div class="progress m-b-0">
                            <div class="progress-bar progress-bar-inverse" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:80%;"> <span class="sr-only">230% Complete</span> </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="product-sales-area mg-tb-30">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="product-sales-chart">
                    <div class="portlet-title">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="caption pro-sl-hd">
                                    <span class="caption-subject"><b> Jumlah Siswa-Siswi SMK Telkom Sidoarjo</b></span>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="actions graph-rp graph-rp-dl">
                                    <p>Tahun Ajaran 2019-2020-2021</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <ul class="list-inline cus-product-sl-rp">
                        <li>
                            <h5><i class="fa fa-circle" style="color: #006DF0;"></i>Kelas 12</h5>
                        </li>
                        <li>
                            <h5><i class="fa fa-circle" style="color: #933EC5;"></i>Kelas 11</h5>
                        </li>
                        <li>
                            <h5><i class="fa fa-circle" style="color: #65b12d;"></i>Kelas 10</h5>
                        </li>
                    </ul>
                    <div id="extra-area-chart" style="height: 356px;"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="traffice-source-area mg-b-30">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                <div class="white-box analytics-info-cs">
                    <h3 class="box-title">Total Pengunjung</h3>
                    <ul class="list-inline two-part-sp">
                        <li>
                            <div id="sparklinedash"></div>
                        </li>
                        <li class="text-right sp-cn-r"><i class="fa fa-level-up" aria-hidden="true"></i> <span class="counter text-success"><span class="counter">1500</span></span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                <div class="white-box analytics-info-cs res-mg-t-30 table-mg-t-pro-n">
                    <h3 class="box-title">Total Siswa SKOMDA</h3>
                    <ul class="list-inline two-part-sp">
                        <li>
                            <div id="sparklinedash2"></div>
                        </li>
                        <li class="text-right graph-two-ctn"><i class="fa fa-level-up" aria-hidden="true"></i> <span class="counter text-purple"><span class="counter">570</span></span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                <div class="white-box analytics-info-cs res-mg-t-30 res-tablet-mg-t-30 dk-res-t-pro-30">
                    <h3 class="box-title">Total Guru SKOMDA</h3>
                    <ul class="list-inline two-part-sp">
                        <li>
                            <div id="sparklinedash3"></div>
                        </li>
                        <li class="text-right graph-three-ctn"><i class="fa fa-level-up" aria-hidden="true"></i> <span class="counter text-info"><span class="counter">86</span></span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                <div class="white-box analytics-info-cs res-mg-t-30 res-tablet-mg-t-30 dk-res-t-pro-30">
                    <h3 class="box-title">Total Anggota OSIS</h3>
                    <ul class="list-inline two-part-sp">
                        <li>
                            <div id="sparklinedash4"></div>
                        </li>
                        <li class="text-right graph-four-ctn"><i class="fa fa-level-down" aria-hidden="true"></i> <span class="text-danger"><span class="counter">37</span>%</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="traffic-analysis-area">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                <div class="social-media-edu">
                    <i class="fa fa-facebook"></i>
                    <div class="social-edu-ctn">
                        <h3>50k Likes</h3>
                        <p>You main list growing</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                <div class="social-media-edu twitter-cl res-mg-t-30 table-mg-t-pro-n">
                    <i class="fa fa-twitter"></i>
                    <div class="social-edu-ctn">
                        <h3>30k followers</h3>
                        <p>You main list growing</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                <div class="social-media-edu linkedin-cl res-mg-t-30 res-tablet-mg-t-30 dk-res-t-pro-30">
                    <i class="fa fa-linkedin"></i>
                    <div class="social-edu-ctn">
                        <h3>7k Connections</h3>
                        <p>You main list growing</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                <div class="social-media-edu youtube-cl res-mg-t-30 res-tablet-mg-t-30 dk-res-t-pro-30">
                    <i class="fa fa-youtube"></i>
                    <div class="social-edu-ctn">
                        <h3>50k Subscribers</h3>
                        <p>You main list growing</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="library-book-area mg-t-30">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                <div class="single-cards-item">
                    <div class="single-product-image">
                        <a href="#"><img src="img/product/profile-bg.jpg" alt=""></a>
                    </div>
                    <div class="single-product-text">
                        <img src="img/product/pro4.jpg" alt="">
                        <h4><a class="cards-hd-dn" href="#">Angela Dominic</a></h4>
                        <h5>Web Designer & Developer</h5>
                        <p class="ctn-cards">Lorem ipsum dolor sit amet, this is a consectetur adipisicing elit</p>
                        <a class="follow-cards" href="#">Follow</a>
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                <div class="cards-dtn">
                                    <h3><span class="counter">199</span></h3>
                                    <p>Articles</p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                <div class="cards-dtn">
                                    <h3><span class="counter">599</span></h3>
                                    <p>Like</p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                <div class="cards-dtn">
                                    <h3><span class="counter">399</span></h3>
                                    <p>Comment</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                <div class="white-box res-mg-t-30 table-mg-t-pro-n">
                    <h3 class="box-title">Visits from countries</h3>
                    <ul class="country-state">
                        <li>
                            <h2><span class="counter">1250</span></h2> <small>From Australia</small>
                            <div class="pull-right">75% <i class="fa fa-level-up text-danger ctn-ic-1"></i></div>
                            <div class="progress">
                                <div class="progress-bar progress-bar-danger ctn-vs-1" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:75%;"> <span class="sr-only">75% Complete</span></div>
                            </div>
                        </li>
                        <li>
                            <h2><span class="counter">1050</span></h2> <small>From USA</small>
                            <div class="pull-right">48% <i class="fa fa-level-up text-success ctn-ic-2"></i></div>
                            <div class="progress">
                                <div class="progress-bar progress-bar-info ctn-vs-2" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:48%;"> <span class="sr-only">48% Complete</span></div>
                            </div>
                        </li>
                        <li>
                            <h2><span class="counter">6350</span></h2> <small>From Canada</small>
                            <div class="pull-right">55% <i class="fa fa-level-up text-success ctn-ic-3"></i></div>
                            <div class="progress">
                                <div class="progress-bar progress-bar-success ctn-vs-3" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:55%;"> <span class="sr-only">55% Complete</span></div>
                            </div>
                        </li>
                        <li>
                            <h2><span class="counter">950</span></h2> <small>From India</small>
                            <div class="pull-right">33% <i class="fa fa-level-down text-success ctn-ic-4"></i></div>
                            <div class="progress">
                                <div class="progress-bar progress-bar-success ctn-vs-4" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:33%;"> <span class="sr-only">33% Complete</span></div>
                            </div>
                        </li>
                        <li>
                            <h2><span class="counter">3250</span></h2> <small>From Bangladesh</small>
                            <div class="pull-right">60% <i class="fa fa-level-up text-success ctn-ic-5"></i></div>
                            <div class="progress">
                                <div class="progress-bar progress-bar-inverse ctn-vs-5" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:60%;"> <span class="sr-only">60% Complete</span></div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <div class="courses-inner res-mg-t-30 table-mg-t-pro-n tb-sm-res-d-n dk-res-t-d-n">
                    <div class="courses-title">
                        <a href="#"><img src="img/courses/1.jpg" alt="" /></a>
                        <h2>Apps Development</h2>
                    </div>
                    <div class="courses-alaltic">
                        <span class="cr-ic-r"><span class="course-icon"><i class="fa fa-clock"></i></span> 1 Year</span>
                        <span class="cr-ic-r"><span class="course-icon"><i class="fa fa-heart"></i></span> 50</span>
                        <span class="cr-ic-r"><span class="course-icon"><i class="fa fa-dollar"></i></span> 500</span>
                    </div>
                    <div class="course-des">
                        <p><span><i class="fa fa-clock"></i></span> <b>Duration:</b> 6 Months</p>
                        <p><span><i class="fa fa-clock"></i></span> <b>Professor:</b> Jane Doe</p>
                        <p><span><i class="fa fa-clock"></i></span> <b>Students:</b> 100+</p>
                    </div>
                    <div class="product-buttons">
                        <button type="button" class="button-default cart-btn">Read More</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="product-sales-area mg-tb-30">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="product-sales-chart">
                    <div class="portlet-title">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="caption pro-sl-hd">
                                    <span class="caption-subject"><b>Adminsion Statistic</b></span>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="actions graph-rp actions-graph-rp">
                                    <a href="#" class="btn btn-dark btn-circle active tip-top" data-toggle="tooltip" title="Refresh">
                                            <i class="fa fa-reply" aria-hidden="true"></i>
                                        </a>
                                    <a href="#" class="btn btn-blue-grey btn-circle active tip-top" data-toggle="tooltip" title="Delete">
                                            <i class="fa fa-trash-o" aria-hidden="true"></i>
                                        </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <ul class="list-inline cus-product-sl-rp">
                        <li>
                            <h5><i class="fa fa-circle" style="color: #006DF0;"></i>Python</h5>
                        </li>
                        <li>
                            <h5><i class="fa fa-circle" style="color: #933EC5;"></i>PHP</h5>
                        </li>
                        <li>
                            <h5><i class="fa fa-circle" style="color: #65b12d;"></i>Java</h5>
                        </li>
                    </ul>
                    <div id="morris-area-chart"></div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 
        