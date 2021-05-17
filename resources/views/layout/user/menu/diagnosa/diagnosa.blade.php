 @extends('layout.user.master')

 @section('content')
 <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Diagnosa</h1>
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
       <!-- Main content -->
    <a type="button" class="btn btn-primary my-3" href="/basis/create">Tambah Basis Pengetahuan</a>
      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Diagnosa Kerusakan Mobil</h3>
      <form  action="/user" method="POST">
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
                  <th scope="col">Kode Gejala</th>
                  <th scope="col">Nama Gejala</th>
                  <th scope="col">Pilih Kondisi</th>
          
                </tr>
                </thead>

                <tbody>
                  @foreach ( $gejala as $key => $gjd )
                  <tr data-id="{{ $gjd->kode_gejala }}">
                    <th scope="row">{{ $key +1   }}</th>
                    <td>{{ $gjd->kode_gejala }}</td>
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

              <button type="submit"> Diagnosa</button>
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