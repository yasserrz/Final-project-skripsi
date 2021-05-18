 @extends('layout.user.master')

 @section('content')
 <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Detail Riwayat Hasil Diagnosa Kerusakan Mobil</h1>
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

              <!-- Table Hasil Diagnosa -->
              <table class="table table-bordered" >
                <thead class="thead-dark">

                  <tr>
                  <th scope="col">No</th>
                  <th scope="col">Kode Gejala</th>
                  <th scope="col">Nama Gejala</th>
                  <th scope="col">Pilihan Diagnosa</th>
          
                </tr>
                </thead>

                <tbody>
                  @foreach ( $data_gejala as $key => $hs )
                  <tr>
                    <th scope="row">{{ $key+1 }}</th>
                    <th>G{{ str_pad($hs['kode_gejala'], 3, '0', STR_PAD_LEFT) }}</th>
                    <td>{{$hs['nama_gejala']}}</td>
                    <td>{{$hs['kondisi']}}</td>
                  </tr>
                   @endforeach
                </tbody>
              </table>

              <!-- Card Hasil Diagnosa -->
              <div class="card bg-danger">
                <div class="card-header">
                 Hasil Diagnosa
                </div>
                <div class="card-body">
                  <p class="card-text font-weight-bold">{{ $detail_kerusakan['nama_kerusakan'] }}</p>
                  <p class="card-text"> {{ round($detail_kerusakan['value'] * 100, 2) }}% ({{ $detail_kerusakan['value'] }}) </p>
                  
                </div>
              </div>

              <!-- Card Detail Kerusakan -->
              <div class="card">
                <div class="card-header bg-primary">
                 Detail Kerusakan
                </div>
                <div class="card-body">
                  <h5 class="card-title"> {{ $detail_kerusakan['detail_kerusakan'] }} </h5>
                  
                </div>
              </div>


              <!-- Card Saran Kerusakan -->
              <div class="card ">
                <div class="card-header bg-success">
                 Saran Kerusakan
                </div>
                <div class="card-body">
                  <h5 class="card-title"> {{ $detail_kerusakan['saran_kerusakan'] }} </h5>
                  
                </div>
              </div>


              <!-- Card Kemungkinan Lain -->
              <div class="card">
                <div class="card-header bg-danger">
                 Kemungkinan Lain
                </div>
                <div class="card-body">
                  @foreach($data_kerusakan as $i => $kerusakan)
                    <h5 class="card-title"> {{ $kerusakan['nama_kerusakan'] }} | {{ round($kerusakan['value'] * 100, 2) }}% ({{ $kerusakan['value'] }}) </h5>
                  @endforeach
                </div>
              </div> 
              
            </div>
          </div>
        
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
        </div>
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
    @endsection