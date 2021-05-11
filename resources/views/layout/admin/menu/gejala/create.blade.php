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

  <form method="POST" action="/gejala">
    @csrf
  <div class="form-group">
    <label for="nama_gejala" class="form-label">Masukan Nama Kerusakan</label>
    <input type="text" class="form-control @error('nama_gejala') is-invalid @enderror" id="nama_gejala" placeholder="Masukan Nama Gejala" name="nama_gejala" value="{{ old('nama_gejala') }}" >
    @error('nama_gejala')<div class="invalid-feedback">{{ $message }}</div>@enderror
  </div>
    <button type="submit" class="btn btn-primary my-3">Tambah Data</button>
  </div>
  
</form>
    </section>
    <!-- /.content -->
    @endsection