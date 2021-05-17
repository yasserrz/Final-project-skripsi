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

    <h4 class="card-text">Nama Kerusakan</h4>
    <p class="card-text">{{ $basis->kerusakan['nama_kerusakan'] }}</p>

    <h4 class="card-text">Gejala Kerusakan</h4>
    <p class="card-text">{{ $basis->gejala['nama_gejala'] }}</p>

    <h4 class="card-text">MB</h4>
    <p class="card-text">{{ $basis->mb }}</p>

    <h4 class="card-text">MD</h4>
    <p class="card-text">{{ $basis->md }}</p>

   

    <a href="{{ $basis->kode_pengetahuan}}/edit" class="btn btn-primary">Edit</a>

    <form action="/basis/{{ $basis->kode_pengetahuan }}" method="post" class="d-inline">
      @method('delete')
      @csrf
    <button href="" class="btn btn-danger" >Delete</button>
    </form>
    <a href="/basis" class="card-link">Kembali</a>
  </div>
</div>

    </section>
    <!-- /.content -->
    @endsection