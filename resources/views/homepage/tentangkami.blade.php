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
            <a href="#visi" class="btn btn-primary">Visi Misi</a>
        </div>
    </div>

    <div class="visi" id="visi">
        <div class="isi col-md-6">
            <h1>Visi</h1>
            <p>Menjadi Perusahaan Terpercaya yang Professional dan Bermanfaat untuk Memenuhi Kebutuhan Masyarakat serta Mempunyai Aksesdan Jaringan Penjualan yang Luas.</p>
            <br>
            <h1>Misi</h1>
            <p>1. Melakukan Penjualan yang Terstruktur<br>2. Memberikan Pelayanan Terbaik untuk Membangun Kemitraan dengan Stakeholder Perusahaan<br>3. Melakukan Transaksi Perdagangan Terstruktur demi Kepuasan Konsumen<br>4. Membangun Bisnis dan Aset Produktif Integratif Untuk Manfaat & Pelayanan Luas di Masyarakat, Bangsa, dan Negara</p>
        </div>   
        <div class="col-md-6">
            <img class="frame" src="{{ asset('assets/logo.png') }}" alt="">
        </div>
    </div>
</div>
@endsection