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

  <form method="POST" action="/basis/{{ $basis->kode_pengetahuan }}">
    @method('patch')
    @csrf


  <label for="kode_kerusakan" class="form-label">Pilih Kerusakan</label>
    <select class="form-control" id="kode_kerusakan" name="kode_kerusakan" >
      <option selected value="{{ $basis->kode_kerusakan }}">{{ $basis->kerusakan['nama_kerusakan'] }}</option>

        @foreach ( $kerusakan as $ks )
        <option value="{{ $ks->kode_kerusakan }}">{{ $ks->nama_kerusakan }}</option>
      @endforeach
  </select>

    <label for="kode_gejala" class="form-label">Pilih Gejala</label>
    <select class="form-control" id="kode_gejala" name="kode_gejala">
      <option selected value="{{ $basis->kode_gejala }}">{{ $basis->gejala['nama_gejala'] }}</option>

      @foreach ( $gejala as $gj )
      <option value="{{ $gj->kode_gejala }}">{{ $gj->nama_gejala }}</option>
      @endforeach
    </select>

    <div class="form-group">
    <label for="mb" class="form-label">Masukan MB</label>
    <input type="text" class="form-control @error('mb') is-invalid @enderror" id="mb" placeholder="Masukan MB" name="mb" value="{{ $basis->mb }}" >
    @error('mb')<div class="invalid-feedback">{{ $message }}</div>@enderror
  
   <div class="form-group">
    <label for="md" class="form-label">Masukan MD</label>
    <input type="text" class="form-control @error('md') is-invalid @enderror" id="md" placeholder="Masukan MD" name="md" value="{{ $basis->md }}" >
    @error('md')<div class="invalid-feedback">{{ $message }}</div>@enderror

    <button type="submit" class="btn btn-primary my-3">Tambah Data</button>
  </div>
  
</form>
    </section>
    <!-- /.content -->
    @endsection