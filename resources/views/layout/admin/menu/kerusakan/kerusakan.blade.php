 @extends('layout.admin.master')

 @section('content')
 <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Kerusakan Mobil</h1>
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
<a type="button" class="btn btn-primary my-3" href="/kerusakan/create" >Tambah Kerusakan</a>


  <div class="card">
        <div class="card-header">
          <h3 class="card-title">List Kerusakan</h3>

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
                  <th scope="col">Nama Kerusakan</th>
                  <th scope="col">Aksi</th>


                </tr>
                </thead>

                <tbody>
               @foreach ( $kerusakan as $key => $ks )
                  <tr>
                    <th scope="row">{{ $kerusakan->firstItem() + $key }}</th>
                    <td>{{ $ks->nama_kerusakan }}</td>
                    <td>
                      <a href="/kerusakan/{{ $ks->kode_kerusakan }}" class="btn btn-success">Detail</a>
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
          {{ $kerusakan->links() }}
        </div>
        <!-- /.card-footer-->
      </div>
    </section>
    <!-- /.content -->
    @endsection