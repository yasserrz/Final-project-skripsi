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

  <form method="POST" action="/kerusakan/{{ $kerusakan->kode_kerusakan }}">
    @method('patch')
    @csrf
  <div class="form-group">
    <label for="nama_kerusakan" class="form-label">Masukan Nama Kerusakan</label>
    <input type="text" class="form-control @error('nama_kerusakan') is-invalid @enderror" id="nama_kerusakan" placeholder="Masukan Nama Kerusakan" name="nama_kerusakan" value="{{ $kerusakan->nama_kerusakan }}" >
    @error('nama_kerusakan')<div class="invalid-feedback">{{ $message }}</div>@enderror
  </div>
   <div class="form-group">
    <label for="det_kerusakan" class="form-label">Masukan Detail Kerusakan</label>
    <textarea class="form-control @error('det_kerusakan') is-invalid @enderror" id="det_kerusakan" name="det_kerusakan">{{ $kerusakan->det_kerusakan }}</textarea>
    @error('det_kerusakan')<div class="invalid-feedback">{{ $message }}</div>@enderror


  </div>
   <div class="form-group">
    <label for="srn_kerusakan" class="form-label">Masukan Saran Kerusakan</label>
   <textarea class="form-control @error('srn_kerusakan') is-invalid @enderror" id="srn_kerusakan" name="srn_kerusakan">{{ $kerusakan->srn_kerusakan }}</textarea>
    @error('srn_kerusakan')<div class="invalid-feedback">{{ $message }}</div>@enderror

    <button type="submit" class="btn btn-primary my-3">Tambah Data</button>
  </div>
  
</form>
    </section>
    <!-- /.content -->
    @endsection