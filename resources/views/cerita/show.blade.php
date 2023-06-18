@extends('layouts.app')
@section('content')

<!-- ======= Breadcrumbs ======= -->
<section class="breadcrumbs">
  <div class="container">

    <div class="d-flex justify-content-between align-items-center">
      <h2>Cerita Mental</h2>
      <ol>
        <li><a href="{{ route('welcome') }}">Home</a></li>
        <li><a href="{{ route('cerita') }}">Cerita Mental</a></li>
        <li>{{ $cerita->judul }}</li>
      </ol>
    </div>

  </div>
</section><!-- End Breadcrumbs -->

<section class="inner-page">
  <div class="container">

    <div class="row g-3">
      <div class="col-sm-12">
        <div class="card shadow-sm">
          <div class="card-body">
            <h1 style="text-align: justify" class="card-title">{{ $cerita->judul }}</h1>
            <h6 class="card-subtitle mb-2 text-body-secondary">
              <span class="badge bg-primary">{{ __('#CeritaSehatMental') }}</span>
              <span class="badge bg-secondary">{{ $cerita->created_at->diffForHumans() }}</span>
            </h6>
            <p class="card-text mb-0">Cerita ini dibuat oleh : {{ $cerita->user->name }}</p>
            <p class="card-text mt-0">Dibuat tanggal : {{ $cerita->getCreatedAt() }}</p>
            <article style="text-align: justify">
              {!! $cerita->narasi !!}
            </article>
            <section>
              <h5 class="fw-bold">Pesan yang dibuat oleh penulis :</h4>
              <article style="text-align: justify">
                {{ $cerita->pesan }}
              </article>
            </section>
          </div>
          <div class="card-footer border-0 bg-white text-end">
            <a href="{{ route('cerita') }}" class="card-link">
              <span>
                {{ __('Kembali') }} <i class="bi bi-arrow-right-circle"></i> 
              </span>
            </a>
          </div>
        </div>
      </div>
    </div>

  </div>
</section>
    
@endsection