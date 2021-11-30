@extends('homepage.layout')
@section('content')
<div class="tentangkami">
    <div class="sistem">
        <img src="{{ asset('assets/sistem.png') }}" alt="" class="sistemimg">
        <div class="isi">
            <h1>Sistem Manajemen</h1>
            <p>Buana Sukses Gemilang
                melibatkan semua unsur pada<br>perusahaan seperti SDM pada
                perusahaan dan juga
                melakukan<br>riset yang
                mendalam dan
                mengedepankan
                pengevaluasian<br>sistem
                manajemen, proses
                perencanaan dan
                pengorganisasian.</p>
            <a href="" class="btn btn-primary">Visi Misi</a>
        </div>
    </div>

    <div class="visi">
        <div class="isi col-md-6">
            <h1>Visi</h1>
            <p>Menjadikan perusahaan konstruksi terbaik di Indonesia dan menjadi mitra terpercaya yang profesional, kompeten dan berintegritas dalam membangun kualitas kerja perusahaan serta berkesinambungan dengan prinsip Good Corporate Governance.</p>
            <h1>Misi</h1>
            <p>1. Membangun budaya kerja yang sehat, transparan, akuntabilitas, dan bertanggung jawab<br>2. Menghasilkan produk yang berkualitas dan ergonomis<br>3. Membangun hubungan kerja yang positif, kondusif dan harmonisuntuk mencapai tujuan bersama<br>4. Terus berkomitmen untuk berkembang serta mengikuti danmenerapkan teknologi terkini..</p>
        </div>   
        <div class="col-md-6">
            <img class="frame" src="{{ asset('assets/logo.png') }}" alt="">
        </div>
    </div>
</div>
@endsection