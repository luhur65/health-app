@extends('layouts.app')
@section('content')

<!-- ======= Breadcrumbs ======= -->
<section class="breadcrumbs">
  <div class="container">

    <div class="d-flex justify-content-between align-items-center">
      <h2>Ceritakan Cerita Mental Anda</h2>
      <ol>
        <li><a href="{{ route('welcome') }}">Home</a></li>
        <li><a href="{{ route('cerita') }}">Cerita Mental Anda</a></li>
        <li>Ceritakan Cerita</li>
      </ol>
    </div>

  </div>
</section><!-- End Breadcrumbs -->

<section class="inner-page">
  <div class="container">

    <div class="row justify-content-center">
      <div class="col-lg-8">
        <div class="card shadow">
          <div class="card-body">
            <form action="{{ route('cerita.store') }}" method="POST">
              @csrf
              <div class="mb-3">
                <label for="judul" class="form-label">{{ __('Judul Cerita') }}</label>
                <input type="text" class="form-control @error('judul') is-invalid @enderror" id="judul" name="judul" value="{{ old('judul') }}">
                @error('judul')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
              </div>
              <div class="mb-3">
                <label for="narasi" class="form-label">{{ __('Narasi Cerita') }}</label>
                <textarea class="form-control @error('narasi') is-invalid @enderror" id="narasi" name="narasi" rows="3">{{ old('narasi') }}</textarea>
                @error('narasi')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
              </div>
              <div class="mb-3">
                <label for="pesan" class="form-label">{{ __('Pesan Cerita') }}</label>
                <textarea class="form-control @error('pesan') is-invalid @enderror" id="pesan" name="pesan" rows="3">{{ old('pesan') }}</textarea>
                @error('pesan')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
              </div>
              <button type="submit" class="btn btn-primary">{{ __('Kirim cerita') }}</button>
            </form>
          </div>
        </div>
      </div>
    </div>

  </div>
</section><!-- End Inner Page -->


    
@endsection