@extends('homepage.layout')
@section('content')
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
            <a href="#layanan" class="btn btn-primary">Lihat Produk</a>
        </div>
        <img src="{{ asset('assets/produk.png') }}" alt="" class="produkimg">
    </div>
</div>

    <div class="layanan" id="layanan">
        <div class="card-group mx-auto">
            <div class="row row-cols-1 row-cols-md-3 mx-auto">
        @foreach ($layanan as $item)
            <div class="col">
                <div class="card" style="width: 360px; height: 330px;">
                    <img src="{{ Storage::url($item->image) }}" class="card-img-top" alt="..." style="">
                    <div class="card-body">
                        <h4 class="card-text">{{ $item->title }}</h4>
                    </div>
                </div>
            </div>

        @endforeach
            {{-- <div class="col">
                <div class="card" style="width: 360px; height: 330px;">
                    <img src="{{ asset('assets/percetakan.jfif') }}" class="card-img-top" alt="..." style="">
                    <div class="card-body">
                        <h4 class="card-text">Perdagangan Percetakan dan Penerbitan</h4>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card" style="width: 360px; height: 330px;">
                    <img src="{{ asset('assets/rumahtangga.jfif') }}" class="card-img-top" alt="..." style="">
                    <div class="card-body">
                        <h4 class="card-text">Perdagangan Peralatan dan Perlengkapan</h4>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card" style="width: 360px; height: 330px;">
                    <img src="{{ asset('assets/parmasi.jfif') }}" class="card-img-top" alt="..." style="">
                    <div class="card-body">
                        <h4 class="card-text">Perdagangan Besar Farmasi</h4>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card" style="width: 360px; height: 330px;">
                    <img src="{{ asset('assets/recording.jfif') }}" class="card-img-top" alt="..." style="">
                    <div class="card-body">
                        <h4 class="card-text">Industri Percetakan dan Produksi Media rekaman</h4>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card" style="width: 360px; height: 330px;">
                    <img src="{{ asset('assets/event.jfif') }}" class="card-img-top" alt="..." style="">
                    <div class="card-body">
                        <h4 class="card-text">Penyelenggaraan Event dan Pengorganisasian Event</h4>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card" style="width: 360px; height: 330px;">
                    <img src="{{ asset('assets/alattulis.jfif') }}" class="card-img-top" alt="..." style="">
                    <div class="card-body">
                        <h4 class="card-text">Perdagangan Besar Alat Tulis</h4>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card" style="width: 360px; height: 330px;">
                    <img src="{{ asset('assets/alatmusik.jfif') }}" class="card-img-top" alt="..." style="">
                    <div class="card-body">
                        <h4 class="card-text">Perdagangan Alat Musik</h4>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card" style="width: 360px; height: 330px;">
                    <img src="{{ asset('assets/jam.jfif') }}" class="card-img-top" alt="..." style="">
                    <div class="card-body">
                        <h4 class="card-text">Perdagangan Besar Perhiasan dan Jam</h4>
                    </div>
                </div>
            </div> --}}

        </div>
    </div>


@endsection
