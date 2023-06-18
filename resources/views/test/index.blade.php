@extends('layouts.app')
@section('content')

<!-- ======= Breadcrumbs ======= -->
<section class="breadcrumbs">
  <div class="container">

    <div class="d-flex justify-content-between align-items-center">
      <h2>Tes Sehat Mental</h2>
      <ol>
        <li><a href="{{ route('welcome') }}">Home</a></li>
        <li>Tes Sehat Mental</li>
      </ol>
    </div>

  </div>
</section><!-- End Breadcrumbs -->

<section class="inner-page">
  <div class="container">
    <div class="row">
      <div class="col-lg-8">
        <h2>Tes Sehat Mental</h2>
        <p style="text-align: justify" >Kuis ini dibuat untuk mengetahui tingkat kesehatan mental anda. Kuis ini mengambil beberapa faktor yang dapat mempengaruhi kesehatan mental anda. Silahkan jawab pertanyaan dengan jujur.</p>
        <div class="alert alert-info mb-2" style="text-align: justify" role="alert">
          <strong>Perhatian!</strong> Kuis ini tidak dapat menggantikan diagnosa dokter. Jika anda merasa memiliki masalah kesehatan mental, segera hubungi dokter terdekat.
        </div>
        <h4 class="fw-bold">Baca panduan pengisian, yuk!</h4>
        <ol>
          <li>Gak ada jawaban yang benar atau salah. Isilah dengan jujur sesuai kepribadianmu.</li>
          <li>Santai aja, tes ini gak diberi waktu, kok.</li>
          <li>Cari tempat yang nyaman dan kondusif supaya kamu lebih fokus.</li>
          <li>Jika kamu keluar di tengah tes, maka seluruh proses tes dan jawaban akan hilang.</li>
          <li>Hasil tes bisa kamu dapatkan setelah mengisi semua pertanyaan dengan lengkap.</li>
        </ol>
        <p class="mt-1">
          <strong>Selamat mengisi ya :)</strong>
        </p>
        <a href="{{ route('test.start') }}" class="btn btn-primary btn-lg my-3">Mulai tes mental</a>
      </div>
      <div class="col-lg-4">
        <div class="bg-tes img-fluid">
          <style>
            .bg-tes {
              background-image: url("assets/bg.svg");
              background-size: contain;
              background-position: center;
              background-repeat: no-repeat;
              height: 300px;
              width: 100%;
            }
          </style>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection