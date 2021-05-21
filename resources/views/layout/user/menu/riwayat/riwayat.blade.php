 @extends('layout.user.master')

 @section('content')
 <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Riwayat Hasil Diagnosa Kerusakan Mobil</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
       <!-- Main content -->
      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <div class="card-tools">
            <button type="button" class="btn btn-tool float-right" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
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
                  <th scope="col">Tanggal</th>
                  <th scope="col">Kerusakan</th>
                  <th scope="col">Nilai CF</th>
                  <th scope="col">Aksi</th>
          
                </tr>
                </thead>

                <tbody>
                  @foreach ( $hasil as $key => $hs )
                  <tr>
                    <th scope="row">{{ $key + 1 }}</th>
                    <td>{{$hs->created_at}}</td>
                    <td>{{$hs->kerusakan_ch->nama_kerusakan}}</td>
                    <td>{{$hs->hasil_nilai}} </td>
                    <td>
                     <a href="/result/{{ $hs->id_hasil}}" class="btn btn-success">Detail</a>
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
    {{ $hasil->links() }}
        </div>
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
    @endsection