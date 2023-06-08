@extends('layouts.main')
@section('container')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-3 text-center">
                        <img src="img/racism.jpg" width="70%" height="90%" alt="racism">
                    </div>
                    <div class="col-6 text-center text-bold">
                        <h5 class="text-bold">ANALISIS SENTIMEN KOMENTAR NETIZEN INSTAGRAM TERHADAP RACISM DISEPAK BOLA INDONESIA DENGAN METODE NAIVE BAYES</h5>
                        <p class="mt-4">MUHAMMAD IKHSAN YUSUF</p>
                        <p>F1G117034</p>
                    </div>
                    <div class="col-3 text-center">
                        <img src="img/instagram.png" width="70%" alt="instgram">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-12 col-sm-6 col-md-3">
        <div class="info-box">
            <span class="info-box-icon bg-info elevation-1"><i class="fas fa-cog"></i></span>

            <div class="info-box-content">
                <span class="info-box-text">Jumlah Data</span>
                <span class="info-box-number">
                    {{ $datakomen }}
                    <span>Data</span>
                </span>
            </div>
        </div>
    </div>
</div>
<!-- /.row -->

@endsection