@extends('homepage.layout')
@section('content')
<div class="home">

    <div class="hero">
        <div class="row">
            <div class="isi">
                <h1>Create Amazing<br> Stories With Us</h1>
                <p>Bergerak di bidang industri
                    percetakan umum, perdagangan<br>besar berbagai barang, dan juga
                    event organizer.</p>
                <a href="#isi" class="btn btn-primary">Lebih Lanjut</a>
            </div>
            <img src="{{ asset('assets/hero.png') }}" alt="" class="heroimg">
        </div>
    </div>

    <div class="mid">
        <div class="isi">
            <h1 id="isi">Buana Sukses Gemilang</h1>
            <p>melibatkan semua unsur pada
                perusahaan seperti SDM pada
                perusahaan dan juga
                melakukan riset<br>yang mendalam dan
                mengedepankan
                pengevaluasian sistem manajemen, proses
                perencanaan dan<br>pengorganisasian.</p>
        </div>
        <div class="row mx-auto">
            <div class="card-group mx-auto">
                <div class="card" style="width: 387px; height: 327px;">
                    <img src="{{ asset('assets/mid1.png') }}" class="card-img-top mx-auto" alt="..." style="width: 100px;">
                    <div class="card-body">
                        <h4 class="card-text">Pelayanan Maksimal</h4>
                        <p class="card-text">Kepada konsumen untuk meningkatkan kenyamanan dan kepercayaan konsumen</p>
                    </div>
                </div>
                <div class="card" style="width: 387px; height: 327px;">
                    <img src="{{ asset('assets/mid2.png') }}" class="card-img-top mx-auto" alt="..." style="width: 100px;">
                    <div class="card-body">
                        <h4 class="card-text">Komunikasi Dua Arah</h4>
                        <p class="card-text">Dengan konsumen untuk terciptanya komunikasi yang efektif</p>
                    </div>
                </div>
                <div class="card" style="width: 387px; height: 327px;">
                    <img src="{{ asset('assets/mid3.png') }}" class="card-img-top mx-auto" alt="..." style="width: 100px;">
                    <div class="card-body">
                        <h4 class="card-text">Kolaboratif dan Membangun</h4>
                        <p class="card-text">Kerja sama dengan perusahaan atau institusi lain dan selalu meningkatkan nilai perusahaan</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

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
                <a href="" class="btn btn-primary">Tentang Kami</a>
            </div>
    </div>

    <div class="hero">
        <div class="row">
            <div class="isi">
                <h1>Produk Dan Layanan</h1>
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
                <a href="" class="btn btn-primary">Lihat Produk</a>
            </div>
            <img src="{{ asset('assets/produk.png') }}" alt="" class="produkimg">
        </div>
    </div>
    
</div>
@endsection