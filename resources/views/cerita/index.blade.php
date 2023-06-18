@extends('layouts.app')
@section('content')

<!-- ======= Breadcrumbs ======= -->
<section class="breadcrumbs">
  <div class="container">

    <div class="d-flex justify-content-between align-items-center">
      <h2>Cerita Mental</h2>
      <ol>
        <li><a href="{{ route('welcome') }}">Home</a></li>
        <li>Cerita Mental</li>
      </ol>
    </div>

  </div>
</section><!-- End Breadcrumbs -->

<section class="inner-page">
  <div class="container">

    <p class="lead">
      Cerita mental adalah cerita yang dibuat oleh pengguna SehatMental untuk berbagi cerita tentang kesehatan mentalnya.
      Cerita mental dapat berupa cerita tentang pengalaman, perasaan, atau hal lain yang berkaitan dengan kesehatan mental.
    </p>
    <a href="{{ route('cerita.create') }}" class="btn btn-outline-primary my-3">
      <i class="bi bi-pencil"></i> {{ __('Ceritakan cerita mental anda') }}
    </a>

    <div class="row g-3">
      @forelse ($cerita as $c)
      <div class="col-sm-4">
        <div class="card" style="min-height: 300px">
          <div class="card-body">
            <h5 style="text-align: justify" class="card-title">{{ $c->judul }}</h5>
            <h6 class="card-subtitle mb-2 text-body-secondary">
              <span class="badge bg-primary">{{ __('#CeritaSehatMental') }}</span>
              <span class="badge bg-secondary">{{ $c->created_at->diffForHumans() }}</span>
            </h6>
            <p style="text-align: justify" class="card-text">{{ $c->deskripsi }}</p>
          </div>
          <div class="card-footer border-0 bg-white d-flex justify-content-between align-items-center">
            @if ($c->userId == Auth::id())
            <form action="{{ route('cerita.destroy', $c->kodecerita) }}" method="POST">
              @csrf
              @method('DELETE')
              <button type="submit" class="btn btn-outline-danger btn-sm">
                <i class="bi bi-trash"></i> {{ __('Hapus') }}
              </button>
            </form>
            @endif
            <a href="{{ route('cerita.show', $c->slug) }}" class="card-link">
              <span>
                {{ __('Lihat cerita') }} <i class="bi bi-arrow-right-circle"></i> 
              </span>
            </a>
          </div>
        </div>
      </div>
      @empty
      <div class="col-sm-12">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title"></h5>
            <h6 class="card-subtitle mb-2 text-body-secondary"></h6>
            <p class="card-text">Tidak ada cerita mental.</p>
          </div>
        </div>
      </div>
      @endforelse
    </div>

    <div class="my-3">
      {{ $cerita->links() }}
    </div>

  </div>
</section>


@endsection