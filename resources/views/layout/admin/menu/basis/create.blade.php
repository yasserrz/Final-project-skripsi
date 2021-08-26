 @extends('layout.admin.master')

 @section('content')
 <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Menambah Basis Pengetahuan </h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

  <form method="POST" action="/admin/basis">
    @csrf
  <div class="form-group">

  <label for="kode_kerusakan" class="form-label">Pilih Kerusakan</label>
    <select class="form-control @error('kode_kerusakan') is-invalid @enderror " id="kode_kerusakan" name="kode_kerusakan" >>
      <option selected></option>
      @foreach ( $kerusakan as $ks )
      <option value="{{ $ks->kode_kerusakan }}">{{ $ks->nama_kerusakan }}</option>
      @endforeach
  </select>

    <label for="kode_gejala" class="form-label">Pilih Gejala</label>
    <select class="form-control @error('kode_gejala') is-invalid @enderror" id="kode_gejala" name="kode_gejala">
      <option selected></option>
      @foreach ( $gejala as $gj )
      <option value="{{ $gj->kode_gejala }}">{{ $gj->nama_gejala }}</option>
      @endforeach
    </select>

    <div class="form-group">
    <label for="mb" class="form-label">Masukan MB</label>
    <input type="text" class="form-control @error('mb') is-invalid @enderror" id="mb" placeholder="Masukan MB" name="mb" value="{{ old('mb') }}" >
    @error('mb')<div class="invalid-feedback">{{ $message }}</div>@enderror


    <!-- <label for="mb" class="form-label">Nilai Kepercayaan Pakar</label>
    <select class="form-control @error('mb') is-invalid @enderror" id="mb" name="mb">
      <option selected></option>
      <option value="0.2">0.2</option>
      <option value="0.4">0.4</option>
      <option value="0.6">0.6</option>
      <option value="0.8">0.8</option>
      <option value="1">1</option>
    </select> -->
  
   

     


  </div>
    <button type="submit" class="btn btn-primary my-3">Tambah Data</button>
  </div>
  
</form>
    </section>
    <!-- /.content -->
    @endsection