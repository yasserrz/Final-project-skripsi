 @extends('layout.admin.master')

 @section('content')
 <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit Basis Pengetahuan </h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

  <form method="POST" action="/admin/basis/{{ $basis->kode_pengetahuan }}">
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

    <!--  <label for="mb" class="form-label">Nilai Kepercayaan Pakar</label>
    <select class="form-control @error('mb') is-invalid @enderror" id="mb" name="mb">
      <option selected value="{{ $basis->mb }}">{{ $basis->mb }}</option>
      <option value="0.2">0.2</option>
      <option value="0.4">0.4</option>
      <option value="0.6">0.6</option>
      <option value="0.8">0.8</option>
      <option value="1">1</option>
    </select> -->

    <div class="form-group">
    <label for="mb" class="form-label">Masukan MB</label>
    <input type="text" class="form-control @error('mb') is-invalid @enderror" id="mb" placeholder="Masukan MB" name="mb" value="{{ $basis->mb }}" >
    @error('mb')<div class="invalid-feedback">{{ $message }}</div>@enderror
    
  

    <button type="submit" class="btn btn-primary my-3">Ubah Data</button>
  </div>
  
</form>
    </section>
    <!-- /.content -->
    @endsection