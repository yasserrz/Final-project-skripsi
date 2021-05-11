 @extends('layout.admin.master')

 @section('content')
 <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Detail Kerusakan Mobil </h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Blank Page</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
 <div class="card" >
  <div class="card-body">
    <h2 class="card-text">{{ $kerusakan->nama_kerusakan }}</h2>
    <h4 class="card-text">Detail Kerusakan</h4>
    <p class="card-text">{{ $kerusakan->det_kerusakan }}</p>
    <h4 class="card-text">Saran Kerusakan</h4>
    <p class="card-text">{{ $kerusakan->srn_kerusakan }}</p>

    <a href="{{ $kerusakan->kode_kerusakan}}/edit" class="btn btn-primary">Edit</a>

    <form action="/kerusakan/{{ $kerusakan->kode_kerusakan }}" method="post" class="d-inline">
      @method('delete')
      @csrf
    <button href="" class="btn btn-danger" >Delete</button>
    </form>
    <a href="/kerusakan" class="card-link">Kembali</a>
  </div>
</div>

    </section>
    <!-- /.content -->
    @endsection