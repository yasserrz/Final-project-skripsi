 @extends('layout.user.master')

 @section('content')
 <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Diagnosa Kerusakan Mobil</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content 123 123">
       <!-- Main content -->

    @if (session('failed')=='true')
    <div class="alert alert-danger">
           <h5>Tolong pilih salah satu kondisi</h5>
    </div>
    @endif

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
      <form  action="/diagnosa" method="POST">
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
                  <th scope="col">Kode Gejala</th>
                  <th scope="col">Nama Gejala</th>
                  <th scope="col">Pilih Kondisi</th>
          
                </tr>
                </thead>

                <tbody>
                  @foreach ( $gejala as $key => $gjd )
                  <tr data-id="{{ $gjd->kode_gejala }}">
                    <th scope="row">{{ $key + 1   }}</th>
                    <td>G{{ $gjd->kode_gejala }}</td>
                    <td>{{ $gjd->nama_gejala }}</td>
                    <td>
                      <select class="form-control" id="kode_gejala" name="kondisi[]">
                          @foreach ( $kondisi as $i => $ks )
                            @if($i == 0 )
                              <option value="{{ $i }}">{{ $ks['nama'] }}</option>
                            @else
                              <option value="{{ $gjd->kode_gejala }}_{{ $i }}">{{ $ks['nama'] }}</option>
                            @endif
                            
                          @endforeach
                        </select>
                    </td>
                  </tr>
                  @endforeach
                </tbody>

              </table>
               
              <button type="submit" class="btn btn-primary">Klik untuk diagnosa</button>
         
              </form>
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