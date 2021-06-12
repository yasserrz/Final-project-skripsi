 @extends('layout.admin.master')

 @section('content')
 <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Basis Pengetahuan</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
       <!-- Main content -->
    <a type="button" class="btn btn-primary my-3" href="/admin/basis/create">Tambah Basis Pengetahuan</a>
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
                  <th scope="col">Nama Kerusakan</th>
                  <th scope="col">Nama Gejala</th>
                  <th scope="col">MB</th>
                  
                  <th scope="col">Aksi</th>
                </tr>
                </thead>

                <tbody>
                  @foreach ( $basis as $key => $bs )
                  <tr>
                    <th scope="row">{{ $basis->firstItem() + $key }}</th>
                    <td>{{ $bs->kerusakan['nama_kerusakan'] }}</td>
                    <td>{{ $bs->gejala['nama_gejala'] }}</td>
                    <td>{{ $bs->mb }}</td>
                    
                    <td>
                      <a href="/admin/basis/{{ $bs->kode_pengetahuan}}/edit" class="btn btn-primary">Edit</a>

                      <form action="/admin/basis/{{ $bs->kode_pengetahuan }}" method="post" class="d-inline">
                          @method('delete')
                          @csrf
                          <button href="" class="btn btn-danger" >Delete</button>
                      </form>
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
        {{ $basis->links() }}
        </div>
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
    @endsection