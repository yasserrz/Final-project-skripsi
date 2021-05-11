 @extends('layout.admin.master')

 @section('content')
 <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Gejala Kerusakan Mobil</h1>
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
      <a type="button" class="btn btn-primary my-3" href="/gejala/create">Tambah Gejala</a>

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">List Basis Pengetahuan</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        <div class="card-body">
            <div class="row">
            <div class="col-10">
              <table class=table>

                <thead class="thead-dark">
                  <tr>
                  <th scope="col">No</th>
                  <th scope="col">Gejala</th>
                  <th scope="col">Aksi</th>

                </tr>
                </thead>

                <tbody>
               @foreach ( $gejala as $key => $gj )
                  <tr>
                    <th scope="row">{{ $gejala->firstItem() + $key  }}</th>
                    <td>{{ $gj->nama_gejala }}</td>
                    <td>
                     <a href="/gejala/{{ $gj->kode_gejala }}" class="btn btn-success">Detail</a>
                    </td>
                  </tr>
                  @endforeach
                </tbody>

              </table>
            </div>
          </div>

          </div>
        <!-- /.card-body -->
        <div class="card-footer">
          {{ $gejala->links() }}
        </div>
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->

    @endsection