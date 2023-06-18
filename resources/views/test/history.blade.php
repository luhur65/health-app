@extends('layouts.app')
@section('content')

<!-- ======= Breadcrumbs ======= -->
<section class="breadcrumbs">
  <div class="container">

    <div class="d-flex justify-content-between align-items-center">
      <h2>History Test Mental</h2>
      <ol>
        <li><a href="{{ route('welcome') }}">Home</a></li>
        <li><a href="{{ route('test') }}">Test Sehat Mental</a></li>
        <li>History</li>
      </ol>
    </div>

  </div>
</section><!-- End Breadcrumbs -->
    
<section class="inner-page">
  <div class="container">
    <table class="table table-striped table-inverse table-responsive">
      <thead class="thead-inverse">
        <tr>
          <th>No.</th>
          <th>Skor Tes</th>
          <th>Hasil</th>
          <th>Tanggal Tes</th>
          <th>Detail</th>
        </tr>
        </thead>
        <tbody>
        @forelse ($history as $h)
            <tr>
              <td scope="row">{{ $loop->iteration }}</td>
              <td>{{ $h->skor }}</td>
              <td>{{ $h->hasil }}</td>
              <td>{{ $h->created_at->diffForHumans() }}</td>
              <td>
                <a href="{{ route('test.show.history', $h->kodehistory) }}">
                  <i class="fas fa-eye fa-fw"></i> Detail
                </a>
              </td>
            </tr>
        @empty
            <tr>
              <td colspan="5" align="center">
                <p class="text-danger">History masih kosong!!</p>
              </td>
            </tr>
        @endforelse
        </tbody>
    </table>
  </div>
</section>

@endsection