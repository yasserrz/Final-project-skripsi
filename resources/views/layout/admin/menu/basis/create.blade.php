 @extends('layout.admin.master')

 @section('content')
 <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Menambah Basis Pengetahuan </h1>
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

  <form method="POST" action="/basis">
    @csrf
  <div class="form-group">

  <label for="kode_kerusakan" class="form-label">Pilih Kerusakan</label>
    <select class="form-control" id="kode_kerusakan" name="kode_kerusakan" >
      <option selected>Silahkan Pilih</option>
      @foreach ( $kerusakan as $ks )
      <option value="{{ $ks->kode_kerusakan }}">{{ $ks->nama_kerusakan }}</option>
      @endforeach
  </select>

    <label for="kode_gejala" class="form-label">Pilih Gejala</label>
    <select class="form-control" id="kode_gejala" name="kode_gejala">
      <option selected>Open this select menu</option>
      @foreach ( $gejala as $gj )
      <option value="{{ $gj->kode_gejala }}">{{ $gj->nama_gejala }}</option>
      @endforeach
    </select>

    <div class="form-group">
    <label for="mb" class="form-label">Masukan MB</label>
    <input type="text" class="form-control @error('mb') is-invalid @enderror" id="mb" placeholder="Masukan MB" name="mb" value="{{ old('mb') }}" >
    @error('mb')<div class="invalid-feedback">{{ $message }}</div>@enderror
  
   

     


  </div>
    <button type="submit" class="btn btn-primary my-3">Tambah Data</button>
  </div>
  
</form>
    </section>
    <!-- /.content -->
    @endsection